<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    //ROUTING
    if(isset($_POST['save']))        saveProduct();
    if(isset($_POST['update']))      updateProduct();
    if(isset($_GET['delete']))       deleteProduct();
    if(isset($_POST['logout']))      logout();
    
    function getProducts(){
        //CODE HERE
        $connect = connection();
        $sql= "SELECT products.ProductID, products.ProductName , products.Brand, category.CatName category, products.Stock, products.Price,image FROM products INNER JOIN category ON category.CatID = products.CategoryID;";
        $result=mysqli_query($connect,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id = $row['ProductID'];
                $name = $row['ProductName'];
                $brand = $row['Brand'];
                $category = $row['category'];
                $stock = $row['Stock'];
                $price = $row['Price'];
                $img= $row['image'];

                echo '<tr class="line">
                    <th scope="row"><img src="./assets/img/'.$img.'" alt="" style="width:50px;height:50px"></th>
                    <td>'.$name.'</td>
                    <td>'.$brand.'</td>
                    <td>'.$category.'</td>
                    <td>'.$stock.'</td>
                    <td>'.$price.' DH</td>
                    <td>
                        <div class="d-flex col-2">
                            <a href="update.php?id='.$id.'"><i class="bi bi-pencil-square text-primary mt-2 fs-4"></i></a>
                            <a href="scripts.php?delete='.$id.'"><i class="bi bi-trash3 text-info ms-2 mt-2 fs-4"></i></a>
                        </div>
                    </td>
                </tr>';
            }
        }
        return $row;
        echo "Fetch all products";
    }

    function counterProduct(){
        $connect = connection();
        $sql="SELECT * FROM products";
        $result=mysqli_query($connect,$sql);
        echo mysqli_num_rows($result);
    }

    function counterUser(){
        $connect = connection();
        $sql="SELECT * FROM users";
        $result=mysqli_query($connect,$sql);
        echo mysqli_num_rows($result);
    }

    function saveProduct()
    {
        //CODE HERE
        $connect = connection();
        $id = $_POST['id'];
        $name = $_POST['productName'];
        $brand = $_POST['brand'];
        $category = $_POST['category'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];
        $imgname = $_FILES['image']['name'];

        if(!empty($imgname)){
            $ext = pathinfo($imgname, PATHINFO_EXTENSION);
            $new_imgname = time().'.'.$ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './assets/img/'.$new_imgname);
        }
        else{
            $new_imgname = '';
        }
        //SQL SELECT
        $sql = "INSERT INTO products VALUES (null, '$name','$brand','$category','$stock','$price','$new_imgname')";
        $result=mysqli_query($connect,$sql);
        //SQL INSERT
        if($result){
            $_SESSION['message'] = "Product has been added successfully !";
            unset($_POST);
            $_POST = array();
            header('location: dashboard.php');
        }
    }

    function updateProduct()
    {
        $connect = connection();
        $id = $_POST['id'];
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $category = $_POST['category'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];

        $imgname = $_FILES['image']['name'];
        if(!empty($imgname)){
            $ext = pathinfo($imgname, PATHINFO_EXTENSION);
            $new_imgname = time().'.'.$ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './assets/img/'.$new_imgname);
        }
        else{
            $new_imgname = '';
        }
        $sql = "UPDATE products SET ProductName = '$name', Brand = '$brand', CategoryID = '$category', Stock = '$stock', Price = '$price', image= ' $new_imgname' WHERE ProductID = '$id'";
        $result=mysqli_query($connect,$sql);
        if($result){
            $_SESSION['message'] = "Product has been updated successfully !";
            header('location: dashboard.php');
        }
    }

    function deleteProduct()
    {
        //CODE HERE
        $connect=connection();
        $id=$_GET['delete'];
        //SQL DELETE
        $sql="DELETE FROM products WHERE ProductID=$id";
        $result=mysqli_query($connect,$sql);
        if($result){
            $_SESSION['message'] = "Product has been deleted successfully !";
		    header('location: dashboard.php');
        }
    }
    function logout(){
        $connect=connection();
        session_destroy();
        header("Location: signin.php");
    }
?>
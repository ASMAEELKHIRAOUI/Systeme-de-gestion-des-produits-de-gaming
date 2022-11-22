<?php
include 'scripts.php';
$connect = connection();
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE ProductID=$id";
$result=mysqli_query($connect,$sql);
if($result)
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/dashboard.css"/>
    <title>Edit Product</title>
</head>
<body>
    <div id="content" class="app-content" style="min-height: 100vh; background: url(assets/img/cover/cover-scrum-board.png) no-repeat fixed; background-size: 360px; background-position: right bottom;">    
    <div class="container">
            <div class="">
                <div class="">
                    <form method="POST" id="form-task">
                        <div class="modal-header">
                            <h5 class="modal-title text-light">Edit Product</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                            <!-- This Input Allows Storing Task Index  -->
                            <input type="hidden" id="task-id" name = "id"  value="<?php echo $row['ProductID']; ?>">
                            <div class="mb-3">
                                <label class="form-label text-light">Product Name</label>
                                <input type="text" class="form-control" id="product-name" name ="name" value="<?php echo $row['ProductName']; ?>" data-parsley-trigger="keyup" required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-light">Brand</label>
                                <input type="text" class="form-control" id="brand" name ="brand" value="<?php echo $row['Brand']; ?>" data-parsley-trigger="keyup" required/>
                            </div>
                            <div class="mb-3">
                                <div><label class="form-label text-light">Category</label name priority></div>
                                <div>
                                    <select class="form-select w-100 p-1 rounded" id="category" name="category" required>
                                        <option value="">Please select</option>
                                        <option value="1" <?php if($row['CategoryID']=='1'){ echo 'selected'; }?>>Game controller</option>
                                        <option value="2" <?php if($row['CategoryID']=='2'){ echo 'selected'; }?>>Memory unit</option>
                                        <option value="3" <?php if($row['CategoryID']=='3'){ echo 'selected'; }?>>Audio/Video cable</option>
                                        <option value="4" <?php if($row['CategoryID']=='4'){ echo 'selected'; }?>>Case</option>
                                        <option value="5" <?php if($row['CategoryID']=='5'){ echo 'selected'; }?>>PC</option>
                                        <option value="6" <?php if($row['CategoryID']=='6'){ echo 'selected'; }?>>Software accessorie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-light">Image</label>
                                <input type="file" class="form-control" id="image" name ='image' required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-light">Stock</label>
                                <input type="number" class="form-control" id="stock" name ="stock" value="<?php echo $row['Stock']; ?>" data-parsley-type="integer" data-parsley-trigger="keyup" required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-light">Price</label>
                                <input type="number" class="form-control" id="price" name ="price" value="<?php echo $row['Price']; ?>" data-parsley-type="integer" data-parsley-trigger="keyup" required/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="dashboard.php" class="btn btn-secondary px-5" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="update" class="add-btn btn btn-rounded rounded-pill" id="product-update-btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
	include 'scripts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/dashboard.css"/>
    <title>Origin Game - Dashboard</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div><img class="logo" src="./assets/img/logoog.png"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarColor01">
                    <form class="d-flex">
                        <input class="input form-control me-sm-2" type="text" placeholder="Enter keyword">
                        <button class="btn my-2 my-sm-0 me-3 text-secondary bg-light" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <div class="btn-group">
                        <img src="./assets/img/pp.png" class="pp">
                        <button type="button" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                            if(isset($_SESSION["username"]))
                            echo $_SESSION["username"];
                        ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Settings</button></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><form action="scripts.php" method="POST">
                                <button class="dropdown-item" type="submit" name="logout">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <container class="d-flex h-100 text-secondary">
        <side class="sidebar app app-header-fixed app-sidebar-fixed d-flex flex-column flex-shrink-0 p-3 text-white h-100 " style="width: 200px;">
            <a href="/" class="sidepp d-grid align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none w-2">
                <img src="./assets/img/pp.png" class="pp" alt="">
                <span class="fs-4">
                    <?php
                        if(isset($_SESSION["username"]))
                        echo $_SESSION["username"];
                    ?>
                </span>
            </a>
            <ul class="nav nav-pills flex-column mb-auto mt-4">
                <li><a href="#" class="nav-link text-white"><i class="bi bi-house me-3"></i>Home</a></li>
                <li><a href="#" class="nav-link text-white" aria-current="page"><i class="bi bi-speedometer2 me-3"></i>Dashboard</a></li>
                <li><a href="#" class="nav-link text-white"><i class="bi bi-person me-3"></i>Profile</a></li>
            </ul>
        </side>
        <div class="">
            <dash class="dash ms-2 bg-success">
                <h1 class="ms-4">Dashboard</h1>
                <stats class="row ms-3">
                    <user class="user ms-2 col_6 row h-50">
                        <img class="blue col-3" src="./assets/img/bluepp.png" alt="" style="width:100px;height:100px">
                        <div class="stats col-3 text-light ms-2">
                            <h4 class="mt-2">USERS</h4>
                            <h4 class="mt-3"><?php counterUser() ?></h4>
                        </div>
                    </user>
                    <product class="user ms-4 col-6 row h-50">
                        <img class="blue col-3" src="./assets/img/blueconsole.jpg" alt="" style="width:100px;height:100px">
                        <div class="stats col-3 text-light ms-2">
                            <h4 class="mt-2">PRODUCTS</h4>
                            <h4 class="mt-3"><?php counterProduct() ?></h4>
                        </div>
                    </product>
                </stats>
            </dash>
            <div class="d-flex justify-content-end mt-4">
				<a href="#modal-task" data-bs-toggle="modal" class="add-btn btn btn-rounded rounded-pill"><i class="bi bi-plus me-2 ms-n2 text-success-900"></i> Add Product</a>
			</div>
            <table class="table ms-3 mt-4 text-light">
                <thead>
                    <tr class="line">
                        <th class="col-1"></th>
                        <th class="col-3">Product Name</th>
                        <th class="col-3">Brand</th>
                        <th class="col-2">Category</th>
                        <th class="col-1">Stock</th>
                        <th class="col-1">Price</th>
                        <th class="col-1"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        getProducts()
                    ?>
                </tbody>
            </table>
        </div>
    </container>
    <div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="scripts.php" method="POST" id="form-product" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Product</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
                        <input type="hidden" id="task-id" name = 'id'>
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="task-title" name ='productName' required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Brand</label>
                            <input type="text" class="form-control" id="task-title" name ='brand' required/>
                        </div>
                        <div class="mb-3">
								<label class="form-label">Category</label name priority>
								<select class="form-select" id="task-priority" name="category" required>
									<option value="">Please select</option>
									<option value="1">Sandbox</option>
									<option value="2">RTS</option>
									<option value="3">FPS/TPS</option>
									<option value="4">MOBA</option>
                                    <option value="5">RPG/ARPG</option>
                                    <option value="6">Simulation/Sports</option>
                                    <option value="7">Puzzlers/Party games</option>
                                    <option value="8">Action/Adventure</option>
                                    <option value="9">Survival/Horror</option>
								</select>
							</div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name ='image'/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="stock" name ='stock' required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name ='price' required/>
                        </div>
                    </div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save" class="btn btn-primary task-action-btn ms-1" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>
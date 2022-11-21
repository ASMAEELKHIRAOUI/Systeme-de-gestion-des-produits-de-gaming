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
                        <button type="button" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown"
                            aria-expanded="false">User Name</button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Settings</button></li>
                            <li><button class="dropdown-item" type="button">Log out</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <container class="d-flex h-100 text-secondary">
        <side class="sidebar app app-header-fixed app-sidebar-fixed d-flex flex-column flex-shrink-0 p-3 text-white h-100" style="width: 200px;">
            <a href="/" class="sidepp d-grid align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none w-2">
                <img src="./assets/img/pp.png" class="pp" alt="">
                <span class="fs-4">User Name</span>
            </a>
            <ul class="nav nav-pills flex-column mb-auto mt-4">
                <li><a href="#" class="nav-link text-white"><i class="bi bi-house me-3"></i>Home</a></li>
                <li><a href="#" class="nav-link text-white" aria-current="page"><i class="bi bi-speedometer2 me-3"></i>Dashboard</a></li>
                <li><a href="#" class="nav-link text-white"><i class="bi bi-person me-3"></i>Profile</a></li>
            </ul>
        </side>
        <div class="">
            <dash class="dash ms-2 bg-success">
                <h1 class="">Dashboard</h1>
                <stats class="row ms-3">
                    <user class="user ms-2 col_6 row h-50">
                        <img class="blue col-3" src="./assets/img/bluepp.png" alt="" style="width:100px;height:100px">
                        <div class="stats col-3 text-light ms-2">
                            <h4 class="mt-2">USERS</h4>
                            <h4 class="mt-3">30</h4>
                        </div>
                    </user>
                    <product class="user ms-4 col-6 row h-50">
                        <img class="blue col-3" src="./assets/img/blueconsole.jpg" alt="" style="width:100px;height:100px">
                        <div class="stats col-3 text-light ms-2">
                            <h4 class="mt-2">PRODUCTS</h4>
                            <h4 class="mt-3">70</h4>
                        </div>
                    </product>
                </stats>
            </dash>
            <div class="d-flex justify-content-end mt-4">
				<a href="#modal-task" data-bs-toggle="modal" class="add-btn btn btn-rounded px-4 rounded-pill"><i class="bi bi-plus me-2 ms-n2 text-success-900"></i> Add Product</a>
			</div>
            <table class="table ms-3 mt-4 text-light">
                <thead>
                    <tr class="line">
                        <th class="col-2">Product ID</th>
                        <th class="col-3">Product Name</th>
                        <th class="col-2">Brand</th>
                        <th class="col-2">Category</th>
                        <th class="col-1">Stock</th>
                        <th class="col-1">Price</th>
                        <th class="col-1"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="line">
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>3bidat rma</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <div class="d-flex col-2">
                                <a href=""><i class="bi bi-pencil-square text-primary mt-2 fs-4"></i></a>
                                <a href=""><i class="bi bi-trash3 text-info ms-2 mt-2 fs-4"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="line">
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <div class="d-flex col-2">
                                <a href=""><i class="bi bi-pencil-square text-primary mt-2 fs-4"></i></a>
                                <a href=""><i class="bi bi-trash3 text-info ms-2 mt-2 fs-4"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="line">
                        <th scope="row">3</th>
                        <td>larry</td>
                        <td>The bird</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <div class="d-flex col-2">
                                <a href=""><i class="bi bi-pencil-square text-primary mt-2 fs-4"></i></a>
                                <a href=""><i class="bi bi-trash3 text-info ms-2 mt-2 fs-4"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </container>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>
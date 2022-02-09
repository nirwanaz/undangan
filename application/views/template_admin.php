<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/d5d5a7466b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container">
                <a class="navbar-brand" href="#">iniundanganmu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account_Name
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" id="dropdown" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 ps-0">
                    <div id="mainMenu">
                        <div class="list-group list-group-flush card" style="height: 100vh;">
                            <h4 class="card-header">Main Menu</h4>
                            <a href="dashboard" class="list-group-item list-group-item-action" data-parent="#mainMenu">Dashboard</a>
                            <a href="#" class="list-group-item list-group-item-action" data-parent="#mainMenu">Template</a>
                            <a href="#listCollapse" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-parent="#mainMenu">
                                Feature
                                <i class="fa-solid fa-caret-down"></i>
                            </a>
                            <div class="collapse" id="listCollapse">
                                <a href="#" class="list-group-item list-group-item-action">1</a>
                                <a href="#" class="list-group-item list-group-item-action">2</a>
                            </div>
                            <a href="order" class="list-group-item list-group-item-action" data-parent="#mainMenu">Order</a>
                        </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <!-- Content -->
                    <?php $this->load->view($content); ?>

                </div>
            </div>
        </div>
        <!-- Popper JS and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/css/") ?>style.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand bg-nav-sprite brand-logo" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
                    <ul class="navbar-nav w-75 gap-2">
                        <li class="nav-item">
                            <button class="btn btn-primary">India</button>
                        </li>
                        <li class="nav-item w-100">
                            <form class="input-group" role="search">
                                <select class="input-group-text" name="" id="">
                                    <option value="">All</option>
                                </select>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="input-group-text" type="submit">S</button>

                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">EN</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Return & Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bg-dark-accent p-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                All
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Today's Deal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Customer Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Registry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gift Cards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Sell</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row m-0">
                <div class="col-12">
                    <div class="card amzn-card mb-3">
                        <div class="card-body text-center p-0">
                            You're on <a href="<?= base_url() ?>"><?= SITE_NAME ?></a>. You can also shop on Amazon India for millions of products with fast local delivery. <a href="amazon.in">Click here to go to amazon.in</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="card amzn-card mb-3">
                        <div class="card-header">
                            <h5>Gaming Accessories</h5>
                        </div>
                        <div class="card-body"></div>
                        <div class="card-footer">
                            <a href="">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="card amzn-card mb-3">
                        <div class="card-header">
                            <h5>Electronics</h5>
                        </div>
                        <div class="card-body"></div>
                        <div class="card-footer">
                            <a href="">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="card amzn-card mb-3">
                        <div class="card-header">
                            <h5>Toys under &dollar;30</h5>
                        </div>
                        <div class="card-body"></div>
                        <div class="card-footer">
                            <a href="">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="card amzn-card mb-3">
                        <div class="card-header">
                            <h5>Sign in for the best experience</h5>
                        </div>
                        <div class="card-body">
                            <a href="" class="btn btn-highlight btn-block">Sign in Securely</a>
                        </div>
                    </div>
                    <div class="card amzn-card mb-3">
                        <div class="card-header">
                            <h5>Toys under &dollar;30</h5>
                        </div>
                        <div class="card-body"></div>
                        <div class="card-footer">
                            <a href="">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
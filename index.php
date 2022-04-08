<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decouverte Bootstrap 5</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <div class="container-fluid g-0">
        <div class="row g-0">
            <div class="col-1  bg-primary"></div>
            <div class="col-2 bg-primary">
                <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <div class="container-fluid g-0">
                        <a class="navbar-brand text-light" href="#">Discovering Bootstrap 5.1</a>
                    </div>
                </nav>
            </div>
            <div class="col-6 bg-primary"></div>
        
            <div class="col-3 bg-primary">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Categories
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Photos</a></li>
                                        <li><a class="dropdown-item" href="#">Articles</a></li>
                                        <li><a class="dropdown-item" href="#">Projects</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row g-0">
                <div class="col"></div>
                <div></div>
                <div class="col text-center">
                    <h1>Journey into Bootstrap classes</h1>
                </div>
                <div class="row g-0 ">

                    <div class="col p-3 ">
                        <div class="card text-center" style="width: 18rem;">
                            <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Enjoy Responsive Layout land</h6>

                                <p class="card-text d-sm-none d-md-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col p-3  ">
                        <div class="card text-center" style="width: 18rem;">

                            <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <h6 class="card-title">Visit Components lake</h6>
                                <p class="card-text d-sm-none d-md-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col p-3">
                        <div class="card text-center" style="width: 18rem;">
                            <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Facing Cascade Style Sheet</h6>
                                <p class="card-text d-sm-none d-md-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col p-3">
                        <div class="card text-center " style="width: 18rem;">
                            <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Contemplate Form Inputs river </h6>
                                <p class="card-text d-sm-none d-md-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col-12">
                            <nav class="navbar navbar-light bg-light">
                                <div class="container-fluid">
                                    <span class="mx-auto">
                                        <div>
                                            <h1>The css frameworks are very useful</h1>
                                        </div>
                                    </span>
                                </div>
                            </nav>
                        </div>
                        <div class="col-12">
                            <nav class="navbar navbar-light bg-light">
                                <div class="container-fluid">
                                    <span class="mx-auto">
                                        <div>
                                            <h2>Learning them come with practice</h2>
                                        </div>

                                    </span>
                                </div>
                            </nav>
                        </div>
                        <div class="row g-0">
                            <div class="col">
                                <nav class="navbar navbar-light bg-primary">
                                    <p class="container-fluid">
                                        <span class="mx-auto text-light">
                                            copyright 2022 wilders | images @picsum
                                        </span>
                                    </p>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</body>

</html>
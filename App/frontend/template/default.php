<?php 
$path = $_SERVER['REQUEST_URI'];
$path = str_replace('/', '', $path);
;?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../public/css/style2.css">

    <!--font-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <title>Hello, world!</title>
</head>

<body>
    <!-- ALERT MESSAGE -->
    <?php if(!empty($_SESSION['alert'])) : ?>
        <div id="alertCard" class=" fixed-bottom col-12 col-md-8 col-lg-5 mx-auto align-items-center justify-content-center">
            <div class="card w-50 bg-<?= $_SESSION["alert"]['type'] ?>">
                <div class="card-body">
                    <p class="card-text"><?= $_SESSION["alert"]['msg'] ?></p>
                </div>
            </div>
        </div>
    <?php unset($_SESSION['alert']);
    endif; ?>
    <!-- Modal Form-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center text-primary" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- rdv form -->
                    <form method="post" action="/rdv_question">
                        <div class="mb-3 row ">
                            <div class="col-6">
                                <label for="name" class="form-label">INFORMATION</label>
                                <select name="info" class="form-control">
                                    <option value="information">DEMANDE D'INFORMATION</option>
                                    <option value="dispo">DISPONIBILITE</option>
                                    <option value="domicile">COIFURE A DOMICIL</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row ">
                            <div class="col-6">
                                <label for="name" class="form-label">NOM PRENOM</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nom Complet" required>
                            </div>

                            <div class="col-6">
                                <label for="name" class="form-label">NUMERO DE TELEPHONE</label>
                                <input type="text" name="number" class="form-control" id="name" placeholder="06 07 ..." required>
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <label for="email" class="form-label">ADRESS EMAIL</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Votre Adresse Mail" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">MESSAGE</label>
                            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Votre Message" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">ENVOYE</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <header class="bg-blue">
        <!--NAV BAR-->
        <nav class="navbar navbar-default navbar-expand-lg bgnavbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Barber</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?= $path ===''? ' actif' : '' ;?> " aria-current="page" href="/">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $path ==='about'? ' actif' : '' ;?>" href="/about">A propos</a>
                        </li>
                        <?php if ($path ===''): ?>
                            <li class="nav-item">
                                <a class="nav-link " href="#get_rdv">rdv</a>
                            </li>
                        <?php endif ;?>
                        <li class="nav-item">
                            <a class="nav-link<?= $path ==='contact'? ' actif' : '' ;?>" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- CONTENT WEB -->
    <div class="container-fluid m-0 p-0">
        <?= $contents; ?>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="../../../public/js/app.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js "></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js "></script> -->

</body>

<footer style="height: 80px; justify-content:center;" class="footer-content">
    <p>© 2021
        <a style="color: white !important;" href="#"><span>dwayne-12@hotmail.fr</span></a>
    </p>
</footer>

</html>
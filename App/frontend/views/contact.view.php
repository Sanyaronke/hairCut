<div class="content flex-column justify-content-center m-0 p-0">

    <!-- ALERT -->
    <?php if(!empty($_SESSION['alert'])) : ?>
        <div id="alertCard" class=" col-12 col-md-8 col-lg-5 mx-auto align-items-center justify-content-center">
            <div class="card w-50 bg-<?= $_SESSION["alert"]['type'] ?>">
                <div class="card-body">
                    <p class="card-text"><?= $_SESSION["alert"]['msg'] ?></p>
                </div>
            </div>
        </div>
    <?php unset($_SESSION['alert']);
    endif; ?>

    <!-- CONTACT FORM -->
    <div class=" contact bg-dark col-12 col-md-8 col-lg-5 px-3 py-5 align-items-center justify-content-center">
        <h1>CONTACT FR</h1>
        <p>Sommetez nous votre requeque. <br>un conseiler va vous repondre dans les plus bref delais</p>
        <form method="post" action="/send_question">
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
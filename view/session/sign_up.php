<!-- importer bootstrap, les icones et le jquery -->
<?php require_once '../view/import/import.php'; ?>

<style>
    .bg-light-red
    {
        background-color: #420303;
    }

    .bg-red
    {
        background-color: #940202;
    }
</style>

<body class="bg-light-red">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4 m-auto">
                <div class="card bg-red">
                    <div class="card-body text-center">

                        <h2 class="text-white-50 fw-bold mb-4">INSCRIPTION</h2>
                        
                        <div id="feedback"></div>

                        <form id="sign_up_form">
                            <input type="text" name="username" class="form-control form-control-lg my-4 py-2" placeholder="Nom d'utilisateur">
                            <input type="email" name="email" class="form-control form-control-lg my-4 py-2" placeholder="E-mail">
                            <input type="password" name="password" class="form-control form-control-lg my-4 py-2" placeholder="Mot de passe">
                            <input type="password" name="passwordConf" class="form-control form-control-lg my-4 py-2" placeholder="Confirmer mot de passe">

                            <input type="button" id="sign_up" class="btn btn-lg btn-warning fw-bold px-4" value="S'inscrire">

                            <p class="fw-bold my-2 py-2">Vous avez déjà un compte ? <a href="<?= $router->generate('connexion') ?>" class="text-white-50 fw-bold">Se connecter</a></p>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="js/displayFeedback.js"></script>

<script>
    $("#sign_up").click(() =>
    {
        $.ajax(
        {
            type: "POST",
            url: "model/session/sign_up.php",
            dataType: "JSON",
            data: $("#sign_up_form").serialize(),
            success: (feedback) => 
            {
                displayFeedback("#feedback", feedback);

                if(feedback[0] === "success")
                {
                    //après 4 secondes on redirige l'utilisateur sur la page d'annonces
                    setTimeout(function() 
                    { 
                        window.location = "<?= $router->generate('annonces') ?>"; 
                    }, 4000);
                }
            }
        });
    });
</script>
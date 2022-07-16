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

                        <h2 class="text-white-50 fw-bold mb-4">CONNEXION</h2>
                        
                        <div id="feedback"></div>

                        <form id="sign_in_form">
                            <input type="text" name="nameormail" class="form-control form-control-lg my-4 py-2" placeholder="Nom d'utilisateur ou e-mail">
                            <input type="password" name="password" class="form-control form-control-lg my-4 py-2" placeholder="Mot de passe">

                            <input type="button" id="sign_in" class="btn btn-lg btn-warning fw-bold px-4" value="Se connecter">

                            <p class="fw-bold my-2 py-2">Vous n'avez pas encore de compte ? <a href="<?= $router->generate('inscription') ?>" class="text-white-50 fw-bold">S'inscrire</a></p>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="js/displayFeedback.js"></script>

<script>
    $("#sign_in").click(() =>
    {
        $.ajax(
        {
            type: "POST",
            url: "model/session/sign_in.php",
            dataType: "JSON",
            data: $("#sign_in_form").serialize(),
            success: (feedback) => 
            {
                //si feedback n'est pas null c'est qu'il y a une erreur qu'on affiche à l'utilisateur
                if(feedback === 1)
                {
                    window.location = "<?= $router->generate('annonces') ?>";
                }
                else
                {
                    displayFeedback("#feedback", feedback);
                }
            }
        });
    });
</script>


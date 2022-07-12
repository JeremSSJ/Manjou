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

                        <form action="">
                            <input type="text" name="" id="" class="form-control form-control-lg my-4 py-2" placeholder="Nom d'utilisateur ou E-mail">
                            <input type="password" name="" id="" class="form-control form-control-lg my-4 py-2" placeholder="Mot de passe">

                            <button class="btn btn-lg btn-warning fw-bold px-4">Connexion</button>

                            <p class="fw-bold my-2 py-2">Vous n'avez pas encore de compte ? <a href="" class="text-white-50 fw-bold">S'inscrire</a></p>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
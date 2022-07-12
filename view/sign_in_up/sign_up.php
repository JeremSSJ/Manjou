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
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card bg-red">
                    <div class="card-body">
                        <form action="">
                            <input type="text" name="" id="" class="form-control my-4 py-2" placeholder="Nom d'utilisateur">
                            <input type="email" name="" id="" class="form-control my-4 py-2" placeholder="E-mail">
                            <input type="password" name="" id="" class="form-control my-4 py-2" placeholder="Mot de passe">
                            <input type="password" name="" id="" class="form-control my-4 py-2" placeholder="Confirmer mot de passe">

                            <div class="text-center mt-3">
                                <button class="btn btn-warning">S'inscrire</button>

                                <p class="text-black-50 fw-bold">Vous avez déjà un compte ? <a href="" class="text-white-50 fw-bold">Se connecter</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
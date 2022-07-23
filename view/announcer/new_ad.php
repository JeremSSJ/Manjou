<?php require_once '../view/announcer/elements/sidebar.php'; ?>

    <style>
        .red
        {
            color: red;
        }
    </style>

<div class="col-sm-9 col-md-7 col-lg-5 mx-auto" name="top">
    
    <div id="feedback"></div>

    <h2 class="mb-4">Nouvelle annonce</h2>

    <form enctype="multipart/form-data" id="new_announce_form">

        <label for="name">Nom du restaurant <span class="red">*</span></label>
        <input type="text" class="form-control mb-3" id="name" name="name">

        <label for="type">Type de restaurant <span class="red">*</span></label>
        <input type="text" class="form-control mb-3" id="type" name="type">

        <label for="description">Description <span class="red">*</span></label>
        <textarea rows="3" class="form-control mb-3" id="description" name="description"></textarea>

        <label for="street">Rue <span class="red">*</span></label>
        <input type="text" class="form-control mb-3" id="street" name="street">

        <label for="city">Ville <span class="red">*</span></label>
        <input type="text" class="form-control mb-3" id="city" name="city">

        <label for="pCode">Code postal <span class="red">*</span></label>
        <input type="text" class="form-control mb-3" id="pCode" name="pCode">

        <label for="country">Pays <span class="red">*</span></label>
        <input type="text" class="form-control mb-3" id="country" name="country">

        <label for="phone">Numéro de téléphone <span class="red">*</span></label>
        <input type="text" class="form-control mb-3" id="phone" name="phone">

        <label for="website">Site officiel</label>
        <input type="text" class="form-control mb-4" id="website" name="website" placeholder="Exemple: www.restaurant.be">

        <input type="file" class="form-control mb-4" name="images[]" multiple>
        
        <input type="submit" class="btn btn-lg btn-warning fw-bold px-4" value="Enregistrer">
    </form>
</div>

<?php require_once '../view/announcer/elements/footer.php'; ?>

<script type="text/javascript" src="js/displayFeedback.js"></script>

<script>
    //ici obligé de faire avec submit parce que le bouton simple avec click ne marche pas
    $("#new_announce_form").submit(function(e)
    {
        e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "model/announcer/new_ad.php",
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: (feedback) => 
            {
                displayFeedback("#feedback", feedback);
                window.location = "#top";
            }
        });
    });
</script>
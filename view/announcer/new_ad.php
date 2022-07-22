<?php require_once '../view/announcer/elements/sidebar.php'; ?>

    <form enctype="multipart/form-data" id="new_announce_form">
        <input class="form-control" type="file" name="images[]" multiple>
        <br>
        <input type="submit" value="Enregistrer" id="new_announce">
    </form>

<?php require_once '../view/announcer/elements/footer.php'; ?>



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
            success: (r) => 
            {
                alert(r);
            }
        });
    });
</script>
<?php require_once '../view/announcer/elements/sidebar.php'; ?>

<div class="col-xl-8 mx-auto" name="top"><!-- col-sm-7 col-md-10 -->

    <h1>Vos annonces</h1>

    <table class="table" style="table-layout: fixed;">
        <thead>
            <tr>
                <th scope="col">Restaurant</th>
                <th scope="col">Adresse</th>
                <th scope="col"></th>
            </tr>
        </thead>
  
        <tbody>
            <tr>
                <td style="overflow-wrap: break-word;">Guigui delrot d'hau</td>
                <td style="overflow-wrap: break-word;">
                    <span>Avenue Louis Goblet, 283</span><br>
                    <span>7331, Baudour</span>
                </td>         
                <td style="text-align:center;">
                    <button class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once '../view/announcer/elements/footer.php'; ?>


<script>
    $(document).ready(() => 
    {
        

    });
</script>
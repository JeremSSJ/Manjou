<?php require_once '../view/elements/header.php'; ?>

<style>
    .img-resize
    {
        height: 15vmax;
        object-fit: cover;
        object-position: 50% 50%;
    }

    .circle-color
    {
        background-color: white;
    }

    .fav-pos
    {
        position: absolute;
        top: 2%;
        right: 2%;
    }
</style>

<div class="container-fluid ">
    <div class="row mx-1 mx-lg-3">

    <div class="col-md-6 col-lg-3 mt-4">
        <div class="card shadow-sm rounded-0 h-100" id="annonce1">
            <span class="rounded-circle border fav-pos px-2 py-2 circle-color empty">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EDB50C" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                </svg>
            </span>

            <img class="img-resize" src="img/5.png">
            
            <div class="px-3 py-3">
                <b class="fs-6">Les Brigittines Aux marches de la giga couille à guillaumemaxiamalle</b>
            </div>

            <hr class="mt-auto ">

            <div class="px-3">
                <p class="fs-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#940202" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Saint-Germain les prés
                 </p>
                <p class="fs-6">Restaurant chinois</p>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3 mt-4">
        <div class="card shadow-sm rounded-0 h-100" id="annonce1">
            <span class="rounded-circle border fav-pos px-2 py-2 circle-color empty">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EDB50C" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                </svg>
            </span>

            <img class="img-resize" src="img/2.jpg">
            
            <div class="px-3 py-3">
                <b class="fs-6">Les Brigittines Aux marches de la giga couille à guillaumemaxiamalle</b>
            </div>

            <hr class="mt-auto ">

            <div class="px-3">
                <p class="fs-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#940202" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Saint-Germain les prés
                 </p>
                <p class="fs-6">Restaurant chinois</p>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3 mt-4">
        <div class="card shadow-sm rounded-0 h-100" id="annonce1">
            <span class="rounded-circle border fav-pos px-2 py-2 circle-color empty">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EDB50C" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                </svg>
            </span>

            <img class="img-resize" src="img/3.jpg">
            
            <div class="px-3 py-3">
                <b class="fs-6">Les Brigittines Aux marches de</b>
            </div>

            <hr class="mt-auto ">

            <div class="px-3">
                <p class="fs-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#940202" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Saint-Germain les prés
                 </p>
                <p class="fs-6">Restaurant chinois</p>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3 mt-4">
        <div class="card shadow-sm rounded-0 h-100" id="annonce1">
            <span class="rounded-circle border fav-pos px-2 py-2 circle-color empty">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EDB50C" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                </svg>
            </span>

            <img class="img-resize" src="img/4.jpg">
            
            <div class="px-3 py-3">
                <b class="fs-6">Les Brigittines Aux marches de la giga couille à guillaumemaxiamalle</b>
            </div>

            <hr class="mt-auto ">

            <div class="px-3">
                <p class="fs-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#940202" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Saint-Germain les prés
                 </p>
                <p class="fs-6">Restaurant chinois</p>
            </div>
        </div>
    </div>

    </div>
</div>


<?php require_once '../view/elements/footer.php'; ?>


<script>
    /*
    $(document).ready(() =>
    {
        
    });*/

    //id dont le nom commence par 'annonce'
    $("[id^=annonce]").hover(
            
        function()
        {
            $(this).css('cursor', 'pointer');
            $(this).removeClass('shadow-sm');
            $(this).addClass('shadow');
        },
        function()
        {
            $(this).removeClass('shadow');
            $(this).addClass('shadow-sm');
        }
    );

    
    $("[id^=annonce] > span").click(function()
    {
        if($(this).hasClass("empty"))
        {
            $(this).removeClass("empty");
            $(this).addClass("filled");
            $(this).html('<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EDB50C" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>');
        }
        else
        {
            $(this).removeClass("filled");
            $(this).addClass("empty");
            $(this).html('<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EDB50C" class="bi bi-star" viewBox="0 0 16 16"><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>');
        }
    });
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php if(isset($_SERVER['PATH_INFO'])) :?>
    <?php if($_SERVER['PATH_INFO']=='/categorie') :?>
    <link rel="stylesheet" href="styles/categories.css">
    <?php elseif($_SERVER['PATH_INFO']=='/courses') :?>
    <link rel="stylesheet" href="styles/courses.css" />
    <?php endif;?>
    <?php endif;?>

    <title>Acceuil</title>
</head>

<body class="body">
    {{-- Start NavBar --}}
    @include('partials._navbar')

    {{-- Carrousel Start --}}
    <div class="container">
        <div class="carrousel_container">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="false"
                space-between="30" centered-slides="true" autoplay-delay="2500"
                autoplay-disable-on-interaction="false">
                <swiper-slide><img src="storage/images/mm1.png" alt="images1"></swiper-slide>
                <swiper-slide> <img src="storage/images/mm6.png" alt="images2"></swiper-slide>
                <swiper-slide> <img src="storage/images/mm3.png" alt="images3"></swiper-slide>
                <swiper-slide><img src="storage/images/mm4.png" alt="images4"></swiper-slide>
            </swiper-container>
        </div>
    </div>
    {{-- Carrousel End --}}
    {{ $slot }}
   
    @include('partials._footer')
    </body>

</html>

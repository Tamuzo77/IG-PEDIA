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
    <x-customer.navbar />

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

    {{-- Download Bloc --}}
    <x-customer.douwnload-bloc :data="[1,2,3,4,5]" />

    {{-- Download Bloc end --}}

    {{-- Explore Bloc Start --}}
    <div class="container_explore">
        <div id="div_explore">
            <div class="explore">
                <a href=""><i class="fa-solid fa-arrow-left icon_explore"></i></a>
            </div>
            <div class="read"><a href="">See more</a></div>
        </div>
    </div>
    {{-- Explore Bloc End --}}
    <x-customer.cours-bloc :data="[]" />
    {{-- Cours Dispo Start --}}
    <div class="cours_disponible">
        <h1>Cours Récents</h1>
        <div class="cours_dispo_categorie">
            <div class="cours_recent">
                <img src="storage/images/202001_Arreba_Testmanagement-header2.jpg" alt="">
                <div class="cours_title_authors">
                    <div class="cours_title">
                        LARAVEL BLADE 9
                        <div class="cours_author">By Samuel Jurès</div>
                    </div>

                    <div class="bootcamp">Bootcamp</div>
                </div>
                <div class="view_program">
                    <a href=""><span> View program</span> on school page</a>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </div>

            <div class="cours_recent">
                <img src="storage/images/pexels-pixabay-270557.jpg" alt="">
                <div class="cours_title_authors">
                    <div class="cours_title">
                        Node.js
                        <div class="cours_author">By Métus Carnel</div>
                    </div>

                    <div class="bootcamp">Bootcamp</div>
                </div>
                <div class="view_program">
                    <a href=""><span> View program</span> on school page</a>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </div>

            <div class="cours_recent">
                <img src="storage/images/pexels-manuel-geissinger-9101888.jpg" alt="">
                <div class="cours_title_authors">
                    <div class="cours_title">
                        Oracle
                        <div class="cours_author">By Zaïd</div>
                    </div>

                    <div class="bootcamp">Bootcamp</div>
                </div>
                <div class="view_program">
                    <a href=""><span> View program</span> on school page</a>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </div>

            <div class="cours_recent last">
                <img src="storage/images/pexels-markus-spiske-177598.jpg" alt="">
                <div class="cours_title_authors">
                    <div class="cours_title">
                        Photoshop
                        <div class="cours_author">By Espérance</div>
                    </div>

                    <div class="bootcamp">Bootcamp</div>
                </div>
                <div class="view_program">
                    <a href=""><span> View program</span> on school page</a>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </div>

        </div>
        <div class="bloc_more_cours">
            <a href="/categorie" class="explore_boot">Explore more Boot Camps</a>
        </div>
    </div>
    {{-- Cours Dispo End --}}

    {{-- Best Courses Start --}}
    <div>
        <h2 id="title_categorie">Meilleurs categories</h2>
        <div id="categorie">
            <div class="img_categorie_1">
                <a href="/categorie">
                    <div class="image">
                        <img src="storage/images/Designer-pana.png" alt="designer" class="img">
                        <div class="text"><a href="#" class="link_categorie">Design</a></div>
                    </div>
                </a>
                <a href="/categorie">
                    <div class="image">
                        <img src="storage/images/Website Creator-amico.png" alt="Web-developer"
                            class="img">
                        <div class="text"><a href="#" class="link_categorie">Developpement Web</a></div>
                    </div>
                </a>
                <a href="/categorie">
                    <div class="image">
                        <img src="storage/images/Code typing-bro.png" alt="Programmation"
                            class="img">
                        <div class="text"><a href="#" class="link_categorie">Programmation</a></div>
                    </div>
                </a>
            </div>
            <div class="img_categorie_2">
                <a href="/categorie">
                    <div class="image">
                        <img src="storage/images/Code typing-bro.png" alt="hacking" class="img">
                        <div class="text"><a href="#" class="link_categorie">Hacking</a></div>
                    </div>
                </a>
                <a href="/categorie">
                    <div class="image">
                        <img src="storage/images/Virtual reality-amico.png" alt="logiciels"
                            class="img">
                        <div class="text"><a href="#" class="link_categorie">Logiciels et généralités</a>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
    {{-- Best Courses End --}}

    <footer>
        <div class="liens_footer">
            <div class="contenu">
                <h1>CONTENU</h1>
                <a href="" class="contenu_chlid">Téléchargement</a>
                <a href="" class="contenu_chlid">Cours disponibles</a>
                <a href="" class="contenu_chlid">Développement</a>
                <a href="" class="contenu_chlid">Informatique et logiciel</a>
                <a href="" class="contenu_chlid">Web design</a>
            </div>
            <div class="aide">
                <h1>AIDE</h1>
                <a href="">Assistance</a>
                <a href="../html/faq.view.html">FAQ</a>
            </div>
            <div class="aide">
                <h1>IG2-B</h1>
                <a href="">Développeurs</a>
                <a href="../html/apropos.view.html">A propos</a>
            </div>
            <div class="aide">
                <h1>RESSOURCES</h1>
                <a href="">Assistance</a>
                <a href="">Créateur logo</a>
            </div>
        </div>
        <div class="trait"></div>
        <div class="icone_footer">
            <div class="langage">
                <div>
                    <i class="fa-solid fa-globe icon"></i>
                </div>
                <div>
                    <form action="" method="post">
                        <select name="lang" id="lang">
                            <option value="Français(France)" selected>Français(France)</option>
                            <option value="Anglais(UK)">Anglais(UK) </option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="copyrigth">
                <div>&copy; 2022 Copyrigth,IG-PEDIA &reg;</div>
            </div>
            <div class="icon_div">
                <a href=""><img src="storage/images/instagram1.png" alt="intagram icon"></a>
                <a href=""><img src="storage/images/facebook.png" alt="facebook icon"></a>
                <!-- <a href=""><img src="linkedin.png" alt="Linkedin icon"></a> -->
                <a href=""><img src="storage/images/twitter.png" alt="Twitter icon "></a>
            </div>
        </div>
        <div class="loader_container">
            <div class="loader"></div>
        </div>
    </footer>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

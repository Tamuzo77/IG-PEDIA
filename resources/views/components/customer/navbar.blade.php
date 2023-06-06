<nav class="nav_bar">
    <div class="Shadow_of_pages"></div>
    <div class="menu_responsive">
        <i class="fa-solid fa-bars menu_icon"></i>
    </div>
    <div class="firstpart">
        <a href="/"><img src="<?= asset('storage/images/logo_transparant.png') ?>" alt=""></a>
    </div>
    
    <form action="" method="post" class="secondpart">
        <input type="text" placeholder="Search on IG-PEDIA" class="search_input">
        <button type="submit" class="search_btn"><i class="fa-solid fa-magnifying-glass "></i></button>
    </form>

    <div class="thirdpart">
        <div class="bloc_exit">
            <div class="exit_title">
                <div>MENU</div>
            </div>
            <i class="fa-sharp fa-solid fa-xmark exit_icon"></i>
            <div class="block_menu_hambuger_exit"><i class="fa-solid fa-bars menu_hambuger_exit"></i></div>
            <div class="logo_menu">
                <img src="<?= asset('storage/images/logo_transparant.png') ?>" alt="">
            </div>
        </div>
        <div class="category_notified">
            <div class="category_notified">
                    <div class="category_menu">
                        <x-customer.navbar-item title="Titre" :toggled="false" num="one"  />
                        <x-customer.navbar-item title="Titre" :toggled="false" num="two"  />
                        <x-customer.navbar-item title="Titre" :toggled="false" num="three"  />
                        <x-customer.navbar-item title="Titre" :toggled="false" num="four"  />
                        <x-customer.navbar-item title="Titre" :toggled="false" num="five"  />
                        <x-customer.navbar-item title="Titre" :toggled="false" num="six"  />
                    </div>

            </div>
            
            <div class="notified">
                <i class="fa-solid fa-bell bells"></i>
                <a  href ="" class="notified_text">Notificatons</a>
            </div>
        </div>
            
        <div class="profil">
            <i class="fa-solid fa-user"></i>
            <a href="../html/profil.view.html" class="profil_text">Profil</a>
        </div>
        <div class="menu_desktop">
            <div class="menu_desktop_content">
                <i class="fa-solid fa-circle-question"></i>
                <a href="../html/faq.view.html">Aide</a>
            </div>
            <div class="menu_desktop_content">
                <i class="fa-solid fa-circle-exclamation"></i>
                <a href="/about">A propos</a>
            </div>
            <div class="menu_desktop_content">
                <i class="fa-solid fa-clock"></i>
                <a href="">Historique</a>
            </div>
            <div class="menu_desktop_content">
                <i class="fa-solid fa-user-gear"></i>
                <a href="">Espace Admin</a>
            </div>
            <div class="menu_desktop_content">
                <i class="fa-solid fa-door-open"></i>
                <a href="">Log out </a>
            </div>
        </div>
       <div class="menu_desktop_icon">
        <i class="fa-solid fa-bars menu_icon"></i>
       </div>

    </div>
    <div class="bloc_icon_search_responsive">
       
            <i class="fa-solid fa-magnifying-glass icon_search_responsive"></i>
    </div>
    <div class="thirdpart_2">
        <a href=""><i class="fa-solid fa-bell bells2"></i></a>
        <div class="profil_picture"><a href="../html/profil.view.html"><img src="<?= asset('images/IMG_20210404_095223_000.jpg') ?>IMG_20210404_095223_000.jpg" alt="" class="picture_responsive"></a></div>
        <!-- <a href="../html/profil.view.html"> <i class="fa-solid fa-user"></i></a> -->
        <div><div class="bars_block"><i class="fa-solid fa-bars bars"></i></div></div>
    </div>
</nav>
<div id="retour_search_bloc_responsive">
    <div id="retour_search">
        <i class="fa-solid fa-chevron-left"></i>
        <div>retour</div>
    </div>
</div>
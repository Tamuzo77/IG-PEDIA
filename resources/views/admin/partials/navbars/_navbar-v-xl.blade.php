<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
      var navbarStyle = localStorage.getItem("navbarStyle");
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="d-flex align-items-center">
      <div class="toggle-icon-wrapper">
        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      </div><a class="navbar-brand" href="/">
        <div class="d-flex align-items-center py-3"><img class="storage/images/logo_transparant.png" alt="" width="40" /><span class="font-sans-serif">IG-PEDIA</span></div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <div class="navbar-vertical-content scrollbar">
        <x-admin.navbars.navlist>
          <x-admin.navbars.navitem href="{{ route('admin.dashboard') }}" icon="dice-d20" title="Dashboard"  />
          <x-admin.navbars.navitem separator="App" title="Categorie" :toggled="true" icon="sitemap">
            <x-admin.navbars.navitem href="{{ route('admin.categories-list') }}" title="Categorie List" />
            <x-admin.navbars.navitem href="{{ route('admin.categories-grid') }}" title="Categorie Grid" />
            <x-admin.navbars.navitem href="/dede" title="Créer une Categorie" />
          </x-admin.navbars.navitem>

          <x-admin.navbars.navitem  title="Cours" :toggled="true" icon="sitemap">
            <x-admin.navbars.navitem href="{{ route('admin.courses-list') }}" title="Cours List" />
            <x-admin.navbars.navitem href="{{ route('admin.courses-grid') }}" title="Cours Grid" />
            <x-admin.navbars.navitem href="" title="Cours Details" />
            <x-admin.navbars.navitem href="/dede" title="Créer un Cours" />
          </x-admin.navbars.navitem>


          
        </x-admin.navbars.navlist>
      </div>
    </div>
</nav>
                  
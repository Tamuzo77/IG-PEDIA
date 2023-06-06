<x-layouts>
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

</x-layouts>
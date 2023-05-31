$(document).ready(function() {
    // alert("Le DOM est chargé");
    document.querySelector(".loader_container").classList.add("hidden");
    });
// gestion des menu déroulant du menu hamburger
const deroule1 = document.querySelector(".deroulant1");
const deroule2 = document.querySelector(".deroulant2");
const deroule3 = document.querySelector(".deroulant3");
const deroule4 = document.querySelector(".deroulant4");
const deroule5 = document.querySelector(".deroulant5");
const deroule6 = document.querySelector(".deroulant6");
const deroule7 = document.querySelector(".deroulant7");
const deroule8 = document.querySelector(".deroulant8");
const container_category1 = document.querySelector(".container_category.one");
const container_category2= document.querySelector(".container_category.two");
const container_category3 = document.querySelector(".container_category.three");
const container_category4 = document.querySelector(".container_category.four");
deroule2.addEventListener('click',()=>{
   
    deroule2.style.transform = "rotate(-180deg)";
    deroule1.style.transform = "rotate(-180deg)";
    container_category1.style.height = "auto";
    deroule2.style.visibility = "hidden";
    deroule1.style.visibility = "visible";
})
deroule1.addEventListener('click',()=>{
    deroule1.style.visibility = "hidden";
    deroule2.style.visibility = "visible";
    deroule2.style.transform = "rotate(0deg)";
    deroule2.style.transition = "transform 0.5s ease";
    container_category1.style.height = "50px";
}) 
deroule4.addEventListener('click',()=>{
   
    deroule4.style.transform = "rotate(-180deg)";
    deroule3.style.transform = "rotate(-180deg)";
    container_category2.style.height = "auto";
    deroule4.style.visibility = "hidden";
    deroule3.style.visibility = "visible";
})
deroule3.addEventListener('click',()=>{
    deroule3.style.visibility = "hidden";
    deroule4.style.transition = "transform 0.5s ease";
    deroule4.style.transform = "rotate(0deg)";
    container_category2.style.height = "50px";
    deroule4.style.visibility = "visible";
    
}) 
deroule6.addEventListener('click',()=>{
   
    deroule6.style.transform = "rotate(-180deg)";
    deroule5.style.transform = "rotate(-180deg)";
    container_category3.style.height = "auto";
    deroule6.style.visibility = "hidden";
    deroule5.style.visibility = "visible";
})
deroule5.addEventListener('click',()=>{
    deroule5.style.visibility = "hidden";
    deroule6.style.transition = "transform 0.5s ease";
    deroule6.style.transform = "rotate(0deg)";
    container_category3.style.height = "50px";
    deroule6.style.visibility = "visible";
    
}) 
deroule8.addEventListener('click',()=>{
   
    deroule8.style.transform = "rotate(-180deg)";
    deroule7.style.transform = "rotate(-180deg)";
    container_category4.style.height = "auto";
    deroule8.style.visibility = "hidden";
    deroule7.style.visibility = "visible";
})
deroule7.addEventListener('click',()=>{
    deroule7.style.visibility = "hidden";
    deroule8.style.transition = "transform 0.5s ease";
    deroule8.style.transform = "rotate(0deg)";
    container_category4.style.height = "50px";
    deroule8.style.visibility = "visible";
    
}) 
// fin gestion des menu deroulant du menu hamburger
 
// Gestion du menu hamburger pc et mobile a la fois 
const menuHamburger = document.querySelector(".menu_icon");
const menu_exit = document.querySelector(".exit_icon"); 
const thirdpart = document.querySelector(".thirdpart");
const icon_search = document.querySelector(".bloc_icon_search_responsive");
const logo = document.querySelector(".firstpart")
document.querySelector('.bars_block').addEventListener('click',()=>{
    thirdpart.classList.toggle('menu_hamburger_desktop');
    thirdpart.style.zIndex = "1000";
    document.querySelector('.bells2').style.visibility = "hidden";
    document.querySelector('.Shadow_of_pages').style.display = "block";
    document.querySelector('.body').style.overflow = "hidden";
    document.querySelector('html').style.overflow= "hidden";
});
document.querySelector('.Shadow_of_pages').addEventListener('click',()=>{
    thirdpart.classList.toggle('menu_hamburger_desktop');
    document.querySelector('.bells2').style.visibility = "visible";
    document.querySelector('.Shadow_of_pages').style.display = "none";
    document.querySelector('.body').style.overflow = "auto";
    document.querySelector('.body').style.overflowX = "hidden";
    document.querySelector('html').style.overflow = "auto";
});
document.querySelector('.block_menu_hambuger_exit').addEventListener('click',()=>{
    thirdpart.classList.toggle('menu_hamburger_desktop');
    document.querySelector('.bells2').style.visibility = "visible";
    document.querySelector('.Shadow_of_pages').style.display = "none";
    document.querySelector('.body').style.overflowY = "auto";
    // document.querySelector('.body').style.overflowX = "hidden";
    document.querySelector('html').style.overflowY = "auto";
});
document.querySelector('.menu_responsive').addEventListener('click',()=>{
    thirdpart.classList.toggle('menu_hamburger_desktop');
    thirdpart.style.zIndex = "1000";
    document.querySelector('.bells2').style.visibility = "hidden";
    document.querySelector('.Shadow_of_pages').style.display = "block";
    document.querySelector('.body').style.overflowY = "hidden";
    document.querySelector('html').style.overflow= "hidden";
    // document.querySelector('.nav_bar').style.zIndex = "0";
});
// Fin gestion menu Hmaburger

//  Gestion retour responsive
const retour_block = document.querySelector("#retour_search_bloc_responsive");
document.querySelector('.bloc_icon_search_responsive').addEventListener('click',()=>{
    document.querySelector('.firstpart').style.display = "none";
    document.querySelector('.secondpart').style.display = "flex";
    document.querySelector('.secondpart').style.width = "250px";
    document.querySelector('.bloc_icon_search_responsive').style.display = "none";
    retour_block.style.display = "block";
    retour_block.addEventListener('click',()=>{
        document.querySelector('.firstpart').style.display = "flex";
        document.querySelector('.secondpart').style.display = "none";
        document.querySelector('.bloc_icon_search_responsive').style.display = "flex";
        retour_block.style.display = "none";
        // retour_block.a   ddEventListener('click',()=>{
        //     search_icon.style.display = "none";
        // })
    })
    
});
// alert("nous aimons les fesses");
const nav=document.querySelector(".barra");

    window.addEventListener("scroll", function(){
        nav.classList.toggle("active", window.scrollY>0)
    })
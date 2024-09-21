let navbar = document.querySelector('#navbar');
window.addEventListener('scroll', ()=>{
    if(window.scrollY > 0){
        navbar.classList.add('scrolledNavbar')
    }else{
        navbar.classList.remove('scrolledNavbar')
    }
})
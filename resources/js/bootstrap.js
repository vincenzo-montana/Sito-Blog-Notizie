import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let navbar = document.querySelector('#navbar');
window.addEventListener('scroll', ()=>{
    if(window.scrollY > 0){
        navbar.classList.add('scrolledNavbar')
    }else{
        navbar.classList.remove('scrolledNavbar')
    }
})
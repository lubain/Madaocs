let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');
// let section = querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

menu.onclick = () => {
    // menu.classList.toggle('<i id="menu-bars"><img src="image/icons/1491313938-close_82982.ico" alt=""></i>');
    // menu.classList.toggle('.col')
    navbar.classList.toggle('active');
} 



// window.onscroll = () =>{
//     navbar.classList.remove('navbar');
//     console.log('scrol');

//     section.forEach(sec => {
//         let top = window.scrollY;
//         let height = sec.offsetHeight;
//         let offset = sec.offsetTop - 150;
//         let id = sec.getElementById('id');

//         if(top => offset && top < offset + height){
//             navLinks.forEach(links =>{
//                 links.classList.remove('active');
//                 document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
//             });
//         };
//     });
// }

document.querySelector('#search-icon').onclick = () => {
    document.querySelector('#search-form').classList.toggle('active');
}


const deco = document.querySelector('.user');
const close = document.getElementById('close');
// deco.addEventListener("click", () => {
//     document.querySelector(".containers").classList.add('posjs');
// });
close.addEventListener("click", () => {
    document.getElementById('search-form').classList.remove('active')
});
// deco.addEventListener("click", () => {
//     // deco.classList.toggle('');
//     document.querySelector(".containers").classList.add('sup');
// });
// const times = document.querySelector('.times');
// times.addEventListener("click", () => {
//     // document.querySelector(".containers").style.visibility = 'hidden';
//     document.querySelector(".containers").classList.remove('sup');
    
// })
document.querySelector('#close').onclick = () => {
    document.querySelector('#search-form').classList.remove('active');
}

let header=document.querySelector(".header1")
window.addEventListener('scroll',function(){
    let windowPosition = window.scrollY > 0;
    header.classList.toggle('active',windowPosition)
})




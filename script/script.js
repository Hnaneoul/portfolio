// 상의
const sub = document.querySelectorAll('.e_sub')
const menu = document.querySelectorAll('#nav .menu > li')
// 버거
const span = document.querySelector('.span')
const sidemenu = document.querySelector('.burger')
const b_menu = document.querySelector('.b_menu')
console.log(sidemenu, b_menu, span)
span.addEventListener('click',function(e){
    const b_menu = document.querySelector('.b_menu')
    e.currentTarget.classList.toggle('active')
    b_menu.classList.toggle('showHide')
})





// const b_menu = $('.b_menu')
// const burger = $('.burger')
// console.log(sub, menu, burger, b_menu)


// 상의
for(let i of sub ){i.style.display = 'none'}
menu[4].addEventListener('mouseover',function(){
    sub[0].style.display = 'flex';
})
menu[4].addEventListener('mouseout',function(){
    sub[0].style.display = 'none';
})
sub[0].addEventListener('mousefover',function(){
    sub[0].sytle.display = 'flex'
})


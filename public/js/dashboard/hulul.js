'use strict';



const rightBar = document.querySelector('.footer');
const rightBarInner = document.querySelector('.first-right-container');
const validate = document.querySelector('.profile-validation');
const Btn = document.querySelector('.arrow');
const menueBtntn = document.querySelector('.menue-btn');
const footer2 = document.querySelector('.footer2');
const secondFooter = document.querySelector('.second-footer');
Btn.addEventListener('click',()=>{
    rightBar.classList.add('footer-toggle')
    validate.style.marginLeft = '12rem'
    footer2.style.marginLeft = '12rem'
    menueBtntn.style.display = "block";
    Btn.style.display = "none";
    secondFooter.style.display = "block";
    
})
menueBtntn.addEventListener('click',()=>{
    rightBar.classList.remove('footer-toggle')
    validate.style.marginLeft = '6rem'
    footer2.style.marginLeft = '6rem'
    menueBtntn.style.display = "none";
    Btn.style.display = "block";
    secondFooter.style.display = "none";
})
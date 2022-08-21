let title22 = document.querySelector('nav img');
let list = document.getElementsByClassName('list');
let list1=document.getElementsByClassName('list1');
let arf = document.getElementsByClassName('hvr-pulse-shrink');
title22.onclick = function(){
    list[0].classList.toggle('show1');
    list1[0].classList.toggle('show2');
    arf[0].classList.toggle('show3');
    for(let i=1;i<4;i++){
        list1[i].classList.toggle('show2');
        arf[i].classList.toggle('show3');
        
    }
}
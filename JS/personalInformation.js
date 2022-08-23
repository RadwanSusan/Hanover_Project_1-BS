// jshint esversion: 6
let title22 = document.querySelector(".toggle-menu");
let list = document.getElementsByClassName("list");
let list1 = document.getElementsByClassName("list1");
let arf = document.getElementsByClassName("hvr-pulse-shrink");
title22.onclick = () => {
	list[0].classList.toggle("show1");
	list1[0].classList.toggle("show2");
	arf[0].classList.toggle("show3");
	for (let i = 1; i < 4; i++) {
		list1[i].classList.toggle("show2");
		arf[i].classList.toggle("show3");
	}
};

let a = document.querySelector(".add_Askill");
a.onclick = () => {
	let b = document.querySelector(".Artistic_skills_input").innerHTML;
	console.log(b);
};

console.log("test");

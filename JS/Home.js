let title22 = document.querySelector(".mobileDropMenu");
let list = document.getElementsByClassName("list");
let list1 = document.getElementsByClassName("list1");
let arf = document.getElementsByClassName("hvr-shrink");
title22.onclick = () => {
	if (
		document.querySelector(".list1").style.display == "block" &&
		window.innerWidth < 990
	) {
		document.querySelectorAll(".list1").forEach((item) => {
			item.style.display = "none";
		});
		document.querySelectorAll(".hvr-pulse-shrink").forEach((item) => {
			item.style.display = "none";
		});
	} else {
		document.querySelectorAll(".list1").forEach((item) => {
			item.style.display = "block";
		});
		document.querySelectorAll(".hvr-pulse-shrink").forEach((item) => {
			item.style.display = "block";
		});
	}
	list[0].classList.toggle("show1");
	list1[0].classList.toggle("show2");
	arf[0].classList.toggle("show3");
	for (let i = 1; i < 4; i++) {
		list1[i].classList.toggle("show2");
		arf[i].classList.toggle("show3");
	}
	document.querySelector(
		".navBar_buttons ul",
	).style.cssText = `padding: 10px; border-radius: 10px;`;
};

// jshint esversion: 6
function removeFirst(arr, idx) {
	if (idx > -1) {
		delete arr[idx];
	}
	return arr;
}
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
let l = 0;
let array = [];
let class2;
let a = document.querySelector(".add_Askill");
a.addEventListener("click", () => {
	const b = document.querySelector(".Artistic_skills_input").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l);
		++l;
		list_form.innerHTML = b;
		document.querySelector(".Artistic_skills").appendChild(list_form);
		document.querySelector(".HiddenInput1").value += b;
		document.querySelector(".HiddenInput1").value += " ";
		array = document.querySelector(".HiddenInput1").value.split(" ");
		array.pop();
		console.log(array);
		document.querySelector(".Artistic_skills_input").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_Askill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class2 = minusAskill.parentElement.classList[1];
			console.log(class2);
			array = removeFirst(array, class2);
			console.log(array);
			const arrayString = array.join(" ");
			document.querySelector(".HiddenInput1").value = arrayString;
			minusAskill.parentElement.remove();
		});
	}
});
let a2 = document.querySelector(".add_Pskill");
a2.onclick = () => {
	let b2 = document.querySelector(".Personal_skills_input").value;
	if (b2 != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.innerHTML = b2;
		document.querySelector(".Personal_skills").appendChild(list_form);
		document.querySelector(".Personal_skills_input").value = "";
	}
};

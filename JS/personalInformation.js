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


let l2 = 0;
let array2 = [];
let class3;

let a2 = document.querySelector(".add_Pskill");
a2.addEventListener("click", () => {
	const b = document.querySelector(".Personal_skills_input").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l2);
		++l2;
		list_form.innerHTML = b;
		document.querySelector(".Personal_skills").appendChild(list_form);
		document.querySelector(".HiddenInput2").value += b;
		document.querySelector(".HiddenInput2").value += " ";
		array2 = document.querySelector(".HiddenInput2").value.split(" ");
		array2.pop();
		console.log(array2);
		document.querySelector(".Personal_skills_input").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_Pskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class3 = minusAskill.parentElement.classList[1];
			console.log(class3);
			array2 = removeFirst(array2, class3);
			console.log(array2);
			const array2String = array2.join(" ");
			document.querySelector(".HiddenInput2").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});

let l3 = 0;
let array3 = [];
let class4;
let a3 = document.querySelector(".add_vskill");
a3.addEventListener("click", () => {
	const b = document.querySelector(".important").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l3);
		++l3;
		list_form.innerHTML = b;
		document.querySelector(".important_skill").appendChild(list_form);
		document.querySelector(".HiddenInput3").value += b;
		document.querySelector(".HiddenInput3").value += " ";
		array3 = document.querySelector(".HiddenInput3").value.split(" ");
		array3.pop();
		console.log(array3);
		document.querySelector(".important").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_vskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class4 = minusAskill.parentElement.classList[1];
			console.log(class4);
			array3 = removeFirst(array3, class4);
			console.log(array3);
			const array2String = array3.join(" ");
			document.querySelector(".HiddenInput3").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});
let l4 = 0;
let array4 = [];
let class5;
let a4 = document.querySelector(".add_kskill");
a4.addEventListener("click", () => {
	const b = document.querySelector(".lang").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l4);
		++l4;
		list_form.innerHTML = b;
		document.querySelector(".lang_skill").appendChild(list_form);
		document.querySelector(".HiddenInput4").value += b;
		document.querySelector(".HiddenInput4").value += " ";
		array4 = document.querySelector(".HiddenInput4").value.split(" ");
		array4.pop();
		console.log(array4);
		document.querySelector(".lang").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_kskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class5 = minusAskill.parentElement.classList[1];
			console.log(class5);
			array4 = removeFirst(array4, class5);
			console.log(array4);
			const array2String = array4.join(" ");
			document.querySelector(".HiddenInput4").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});
let l5 = 0;
let array5 = [];
let class6;
let a5 = document.querySelector(".add_fskill");
a5.addEventListener("click", () => {
	const b = document.querySelector(".resp").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l5);
		++l5;
		list_form.innerHTML = b;
		document.querySelector(".resp_skill").appendChild(list_form);
		document.querySelector(".HiddenInput5").value += b;
		document.querySelector(".HiddenInput5").value += " ";
		array5 = document.querySelector(".HiddenInput5").value.split(" ");
		array5.pop();
		console.log(array5);
		document.querySelector(".resp").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_fskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class6 = minusAskill.parentElement.classList[1];
			console.log(class6);
			array5 = removeFirst(array5, class6);
			console.log(array5);
			const array2String = array5.join(" ");
			document.querySelector(".HiddenInput5").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});



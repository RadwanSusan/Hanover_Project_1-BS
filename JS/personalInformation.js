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
			array = removeFirst(array, class2);
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
			array2 = removeFirst(array2, class3);
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
			array3 = removeFirst(array3, class4);
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
			array4 = removeFirst(array4, class5);
			const array2String = array4.join(" ");
			document.querySelector(".HiddenInput4").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});

let l5 = 0;
let array5 = [];
let class6;
let a5 = document.querySelector(".g1");
a5.addEventListener("click", () => {
	const b = document.querySelector(".resp1").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l5);
		++l5;
		list_form.innerHTML = b;
		document.querySelector(".v1").appendChild(list_form);
		document.querySelector(".HiddenInput51").value += b;
		document.querySelector(".HiddenInput51").value += " ";
		array5 = document.querySelector(".HiddenInput51").value.split(" ");
		array5.pop();
		document.querySelector(".resp1").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_fskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class6 = minusAskill.parentElement.classList[1];
			array5 = removeFirst(array5, class6);
			const array2String = array5.join(" ");
			document.querySelector(".HiddenInput51").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});

let l6 = 0;
let array6 = [];
let class7;
let a6 = document.querySelector(".g2");
a6.addEventListener("click", () => {
	const b = document.querySelector(".resp2").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l6);
		++l6;
		list_form.innerHTML = b;
		document.querySelector(".v2").appendChild(list_form);
		document.querySelector(".HiddenInput52").value += b;
		document.querySelector(".HiddenInput52").value += " ";
		array6 = document.querySelector(".HiddenInput52").value.split(" ");
		array6.pop();
		document.querySelector(".resp2").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_fskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class7 = minusAskill.parentElement.classList[1];
			array6 = removeFirst(array6, class7);
			const array2String = array6.join(" ");
			document.querySelector(".HiddenInput52").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});

let l7 = 0;
let array7 = [];
let class8;
let a7 = document.querySelector(".g3");
a7.addEventListener("click", () => {
	const b = document.querySelector(".resp3").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l7);
		++l7;
		list_form.innerHTML = b;
		document.querySelector(".v3").appendChild(list_form);
		document.querySelector(".HiddenInput53").value += b;
		document.querySelector(".HiddenInput53").value += " ";
		array7 = document.querySelector(".HiddenInput53").value.split(" ");
		array7.pop();
		document.querySelector(".resp3").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_fskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class8 = minusAskill.parentElement.classList[1];
			array7 = removeFirst(array7, class8);
			const array2String = array7.join(" ");
			document.querySelector(".HiddenInput53").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});

// jshint esversion: 6
function removeFirst(arr, idx) {
	if (idx > -1) {
		delete arr[idx];
	}
	return arr;
}
function onlyCommas(str) {
	return /^[,]+$/.test(str);
}
let l = 0;
let array = [];
let class2;
let a = document.querySelector(".add_Askill");
a.addEventListener("click", () => {
	const b = document.querySelector(".Artistic_skills_input").value;
	if (b != "" && b.replace(/\s/g, "").length) {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l);
		++l;
		list_form.innerHTML = b;
		document.querySelector(".Artistic_skills").appendChild(list_form);
		document.querySelector(".HiddenInput1").value += b;
		document.querySelector(".HiddenInput1").value += ",";
		array = document.querySelector(".HiddenInput1").value.split(",");
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
			let arrayString = array.join(",");
			if (onlyCommas(arrayString) == true) {
				arrayString = "";
			}
			document.querySelector(".HiddenInput1").value = arrayString;
			minusAskill.parentElement.remove();
		});
	} else {
		alertify.defaults.glossary.title = "My Title";
		alertify.alert("Business City", "Please Enter a value first!");
	}
});

let l2 = 0;
let array2 = [];
let class3;
let a2 = document.querySelector(".add_PskillO");
a2.addEventListener("click", () => {
	const b = document.querySelector(".Personal_skills_input").value;
	if (b != "" && b.replace(/\s/g, "").length) {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l2);
		++l2;
		list_form.innerHTML = b;
		document.querySelector(".Personal_skills").appendChild(list_form);
		document.querySelector(".HiddenInput2").value += b;
		document.querySelector(".HiddenInput2").value += ",";
		array2 = document.querySelector(".HiddenInput2").value.split(",");
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
			let array2String = array2.join(",");
			if (onlyCommas(array2String) == true) {
				array2String = "";
			}
			document.querySelector(".HiddenInput2").value = array2String;
			minusAskill.parentElement.remove();
		});
	} else {
		alertify.defaults.glossary.title = "My Title";
		alertify.alert("Business City", "Please Enter a value first!");
	}
});

let l3 = 0;
let array3 = [];
let class4;
let a3 = document.querySelector(".add_Vskill");
a3.addEventListener("click", () => {
	const b = document.querySelector(".important").value;
	if (b != "" && b.replace(/\s/g, "").length) {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l3);
		++l3;
		list_form.innerHTML = b;
		document.querySelector(".important_skill").appendChild(list_form);
		document.querySelector(".HiddenInput3").value += b;
		document.querySelector(".HiddenInput3").value += ",";
		array3 = document.querySelector(".HiddenInput3").value.split(",");
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
			let array3String = array3.join(",");
			if (onlyCommas(array3String) == true) {
				array3String = "";
			}
			document.querySelector(".HiddenInput3").value = array3String;
			minusAskill.parentElement.remove();
		});
	} else {
		alertify.defaults.glossary.title = "My Title";
		alertify.alert("Business City", "Please Enter a value first!");
	}
});
let l4 = 0;
let array4 = [];
let class5;
let a4 = document.querySelector(".add_kskill");
a4.addEventListener("click", () => {
	const b = document.querySelector(".lang").value;
	if (b != "" && b.replace(/\s/g, "").length) {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l4);
		++l4;
		list_form.innerHTML = b;
		document.querySelector(".lang_skill").appendChild(list_form);
		document.querySelector(".HiddenInput4").value += b;
		document.querySelector(".HiddenInput4").value += ",";
		array4 = document.querySelector(".HiddenInput4").value.split(",");
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
			let array4String = array4.join(",");
			if (onlyCommas(array4String) == true) {
				array4String = "";
			}
			document.querySelector(".HiddenInput4").value = array4String;
			minusAskill.parentElement.remove();
		});
	} else {
		alertify.defaults.glossary.title = "My Title";
		alertify.alert("Business City", "Please Enter a value first!");
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
			let array2String = array5.join(" ");
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
			let array2String = array6.join(" ");
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
			let array2String = array7.join(" ");
			document.querySelector(".HiddenInput53").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});

let l8 = 0;
let array8 = [];
let class9;
let a8 = document.querySelector(".g4");
a8.addEventListener("click", () => {
	const b = document.querySelector(".resp4").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l8);
		++l8;
		list_form.innerHTML = b;
		document.querySelector(".v4").appendChild(list_form);
		document.querySelector(".HiddenInput41").value += b;
		document.querySelector(".HiddenInput41").value += " ";
		array8 = document.querySelector(".HiddenInput41").value.split(" ");
		document.querySelector(".resp4").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("g4");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class9 = minusAskill.parentElement.classList[1];
			array8 = removeFirst(array8, class9);
			let array2String = array8.join(" ");
			document.querySelector(".HiddenInput41").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});
let l9 = 0;
let array9 = [];
let class10;
let a9 = document.querySelector(".g5");
a9.addEventListener("click", () => {
	const b = document.querySelector(".resp5").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l9);
		++l9;
		list_form.innerHTML = b;
		document.querySelector(".v5").appendChild(list_form);
		document.querySelector(".HiddenInput42").value += b;
		document.querySelector(".HiddenInput42").value += " ";
		array9 = document.querySelector(".HiddenInput42").value.split(" ");
		document.querySelector(".resp5").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("g5");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class10 = minusAskill.parentElement.classList[1];
			array9 = removeFirst(array9, class10);
			let array2String = array9.join(" ");
			document.querySelector(".HiddenInput42").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});
let l10 = 0;
let array10 = [];
let class11;
let a10 = document.querySelector(".g6");
a10.addEventListener("click", () => {
	const b = document.querySelector(".resp6").value;
	if (b != "") {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.classList.add(l10);
		++l10;
		list_form.innerHTML = b;
		document.querySelector(".v6").appendChild(list_form);
		document.querySelector(".HiddenInput43").value += b;
		document.querySelector(".HiddenInput43").value += " ";
		array10 = document.querySelector(".HiddenInput43").value.split(" ");
		document.querySelector(".resp6").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("g6");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		minusAskill.addEventListener("click", () => {
			class11 = minusAskill.parentElement.classList[1];
			array10 = removeFirst(array10, class11);
			let array2String = array10.join(" ");
			document.querySelector(".HiddenInput43").value = array2String;
			minusAskill.parentElement.remove();
		});
	}
});

particlesJS("particles-js", {
	particles: {
		number: { value: 3, density: { enable: true, value_area: 800 } },
		color: { value: "#cfcfcf" },
		shape: {
			type: "polygon",
			stroke: { width: 0, color: "#000" },
			polygon: { nb_sides: 6 },
			image: { src: "img/github.svg", width: 100, height: 100 },
		},
		opacity: {
			value: 0.3,
			random: true,
			anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
		},
		size: {
			value: 6,
			random: false,
			anim: { enable: true, speed: 10, size_min: 40, sync: false },
		},
		line_linked: {
			enable: false,
			distance: 200,
			color: "#ff0000",
			opacity: 1,
			width: 2,
		},
		move: {
			enable: true,
			speed: 2,
			direction: "bottom",
			random: false,
			straight: false,
			out_mode: "out",
			bounce: false,
			attract: { enable: false, rotateX: 600, rotateY: 1200 },
		},
	},
	interactivity: {
		detect_on: "canvas",
		events: {
			onhover: { enable: false, mode: "repulse" },
			onclick: { enable: false, mode: "push" },
			resize: true,
		},
		modes: {
			grab: { distance: 400, line_linked: { opacity: 1 } },
			bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
			repulse: { distance: 200, duration: 0.4 },
			push: { particles_nb: 4 },
			remove: { particles_nb: 2 },
		},
	},
	retina_detect: true,
});

let arrayAKill = document.querySelector(".HiddenInput1").value.split(",");
let numberAKill;
document.querySelectorAll(".AKill").forEach((element) => {
	element.addEventListener("click", () => {
		numberAKill = element.parentElement.classList[1];
		arrayAKill = removeFirst(arrayAKill, numberAKill);
		arrayAKill.join(",");
		if (onlyCommas(arrayAKill) == true) {
			arrayAKill = "";
		}
		document.querySelector(".HiddenInput1").value = arrayAKill;
		element.parentElement.remove();
	});
});

let arrayPKill = document.querySelector(".HiddenInput2").value.split(",");
let numberPKill;
document.querySelectorAll(".PKill").forEach((element) => {
	element.addEventListener("click", () => {
		numberPKill = element.parentElement.classList[1];
		arrayPKill = removeFirst(arrayPKill, numberPKill);
		arrayPKill.join(",");
		if (onlyCommas(arrayPKill) == true) {
			arrayPKill = "";
		}
		document.querySelector(".HiddenInput2").value = arrayPKill;
		element.parentElement.remove();
	});
});

let arrayVKill = document.querySelector(".HiddenInput3").value.split(",");
let numberVKill;
document.querySelectorAll(".VKill").forEach((element) => {
	element.addEventListener("click", () => {
		numberVKill = element.parentElement.classList[1];
		arrayVKill = removeFirst(arrayVKill, numberVKill);
		arrayVKill.join(",");
		if (onlyCommas(arrayVKill) == true) {
			arrayVKill = "";
		}
		document.querySelector(".HiddenInput3").value = arrayVKill;
		element.parentElement.remove();
	});
});

let arrayKKill = document.querySelector(".HiddenInput4").value.split(",");
let numberKKill;
document.querySelectorAll(".KKill").forEach((element) => {
	element.addEventListener("click", () => {
		numberKKill = element.parentElement.classList[1];
		arrayKKill = removeFirst(arrayKKill, numberKKill);
		arrayKKill.join(",");
		if (onlyCommas(arrayKKill) == true) {
			arrayKKill = "";
		}
		document.querySelector(".HiddenInput4").value = arrayKKill;
		element.parentElement.remove();
	});
});

document.querySelector(".button").addEventListener("click", (e) => {
	e.preventDefault();
	arrayAKill = document.querySelector(".HiddenInput1").value;
	arrayAKill = arrayAKill.split(",");
	arrayAKill = arrayAKill.filter((n) => n);
	document.querySelector(".HiddenInput1").value = arrayAKill.join(",");
	arrayPKill = document.querySelector(".HiddenInput2").value;
	arrayPKill = arrayPKill.split(",");
	arrayPKill = arrayPKill.filter((n) => n);
	document.querySelector(".HiddenInput2").value = arrayPKill.join(",");
	arrayVKill = document.querySelector(".HiddenInput3").value;
	arrayVKill = arrayVKill.split(",");
	arrayVKill = arrayVKill.filter((n) => n);
	document.querySelector(".HiddenInput3").value = arrayVKill.join(",");
	arrayKKill = document.querySelector(".HiddenInput4").value;
	arrayKKill = arrayKKill.split(",");
	arrayKKill = arrayKKill.filter((n) => n);
	document.querySelector(".HiddenInput4").value = arrayKKill.join(",");
	document.querySelector(".form1").submit();
});

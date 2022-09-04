function removeFirst(arr, idx) {
	if (idx > -1) {
		delete arr[idx];
	}
	return arr;
}
function onlyCommas(str) {
	return /^[,]+$/.test(str);
	/* The above code is checking if the string is only made up of commas. */
}
function showTarget(event, element, target) {
	document.querySelector(element).addEventListener(event, () => {
		document.querySelector(target).style.display = "block";
	});
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
		list_form.innerHTML = b;
		document.querySelector(".Artistic_skills").appendChild(list_form);
		if (document.querySelector(".HiddenInput1").value.split(",").length == 1) {
			if (
				document.querySelector(".HiddenInput1").value.includes(",") == false
			) {
				document.querySelector(".HiddenInput1").value += ",";
			}
			document.querySelector(".HiddenInput1").value += b;
		} else {
			if (document.querySelector(".HiddenInput1").value.slice(-1) != ",") {
				document.querySelector(".HiddenInput1").value += ",";
			}
			document.querySelector(".HiddenInput1").value += b;
			document.querySelector(".HiddenInput1").value += ",";
		}
		array = document.querySelector(".HiddenInput1").value.split(",");
		document.querySelector(".Artistic_skills_input").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_Askill");
		minusAskill.classList.add("AKill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		l = document.querySelector(".HiddenInput1").value.split(",").length - 1;
		if (
			document.querySelector(".HiddenInput1").value.slice(-1) == "," &&
			document.querySelector(".HiddenInput1").value.split(",").length > 1
		) {
			--l;
		}
		list_form.classList.add(l);
		minusAskill.addEventListener("click", () => {
			array = document.querySelector(".HiddenInput1").value.split(",");
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
		list_form.innerHTML = b;
		document.querySelector(".Personal_skills").appendChild(list_form);
		if (document.querySelector(".HiddenInput2").value.split(",").length == 1) {
			if (
				document.querySelector(".HiddenInput2").value.includes(",") == false
			) {
				document.querySelector(".HiddenInput2").value += ",";
			}
			document.querySelector(".HiddenInput2").value += b;
		} else {
			if (document.querySelector(".HiddenInput2").value.slice(-1) != ",") {
				document.querySelector(".HiddenInput2").value += ",";
			}
			document.querySelector(".HiddenInput2").value += b;
			document.querySelector(".HiddenInput2").value += ",";
		}
		array2 = document.querySelector(".HiddenInput2").value.split(",");
		document.querySelector(".Personal_skills_input").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_Pskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		l2 = document.querySelector(".HiddenInput2").value.split(",").length - 1;
		if (
			document.querySelector(".HiddenInput2").value.slice(-1) == "," &&
			document.querySelector(".HiddenInput2").value.split(",").length > 1
		) {
			--l2;
		}
		list_form.classList.add(l2);
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
		list_form.innerHTML = b;
		document.querySelector(".important_skill").appendChild(list_form);
		if (document.querySelector(".HiddenInput3").value.split(",").length == 1) {
			if (
				document.querySelector(".HiddenInput3").value.includes(",") == false
			) {
				document.querySelector(".HiddenInput3").value += ",";
			}
			document.querySelector(".HiddenInput3").value += b;
		} else {
			if (document.querySelector(".HiddenInput3").value.slice(-1) != ",") {
				document.querySelector(".HiddenInput3").value += ",";
			}
			document.querySelector(".HiddenInput3").value += b;
			document.querySelector(".HiddenInput3").value += ",";
		}
		array3 = document.querySelector(".HiddenInput3").value.split(",");
		document.querySelector(".important").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_vskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		l3 = document.querySelector(".HiddenInput3").value.split(",").length - 1;
		if (
			document.querySelector(".HiddenInput3").value.slice(-1) == "," &&
			document.querySelector(".HiddenInput3").value.split(",").length > 1
		) {
			--l3;
		}
		list_form.classList.add(l3);
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
		list_form.innerHTML = b;
		document.querySelector(".lang_skill").appendChild(list_form);
		if (document.querySelector(".HiddenInput4").value.split(",").length == 1) {
			if (
				document.querySelector(".HiddenInput4").value.includes(",") == false
			) {
				document.querySelector(".HiddenInput4").value += ",";
			}
			document.querySelector(".HiddenInput4").value += b;
		} else {
			if (document.querySelector(".HiddenInput4").value.slice(-1) != ",") {
				document.querySelector(".HiddenInput4").value += ",";
			}
			document.querySelector(".HiddenInput4").value += b;
			document.querySelector(".HiddenInput4").value += ",";
		}
		array4 = document.querySelector(".HiddenInput4").value.split(",");
		document.querySelector(".lang").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_kskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		l4 = document.querySelector(".HiddenInput4").value.split(",").length - 1;
		if (
			document.querySelector(".HiddenInput4").value.slice(-1) == "," &&
			document.querySelector(".HiddenInput4").value.split(",").length > 1
		) {
			--l4;
		}
		list_form.classList.add(l4);
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
	if (b != "" && b.replace(/\s/g, "").length) {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.innerHTML = b;
		document.querySelector(".v1").appendChild(list_form);
		if (document.querySelector(".HiddenInput51").value.split(",").length == 1) {
			if (
				document.querySelector(".HiddenInput51").value.includes(",") == false
			) {
				document.querySelector(".HiddenInput51").value += ",";
			}
			document.querySelector(".HiddenInput51").value += b;
		} else {
			if (document.querySelector(".HiddenInput51").value.slice(-1) != ",") {
				document.querySelector(".HiddenInput51").value += ",";
			}
			document.querySelector(".HiddenInput51").value += b;
			document.querySelector(".HiddenInput51").value += ",";
		}
		array5 = document.querySelector(".HiddenInput51").value.split(",");
		document.querySelector(".resp1").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_fskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		l5 = document.querySelector(".HiddenInput51").value.split(",").length - 1;
		if (
			document.querySelector(".HiddenInput51").value.slice(-1) == "," &&
			document.querySelector(".HiddenInput51").value.split(",").length > 1
		) {
			--l5;
		}
		list_form.classList.add(l5);
		minusAskill.addEventListener("click", () => {
			class6 = minusAskill.parentElement.classList[1];
			array5 = removeFirst(array5, class6);
			let array5String = array5.join(",");
			if (onlyCommas(array5String) == true) {
				array5String = "";
			}
			document.querySelector(".HiddenInput51").value = array5String;
			minusAskill.parentElement.remove();
		});
	} else {
		alertify.defaults.glossary.title = "My Title";
		alertify.alert("Business City", "Please Enter a value first!");
	}
});

let l6 = 0;
let array6 = [];
let class7;
let a6 = document.querySelector(".g2");
a6.addEventListener("click", () => {
	const b = document.querySelector(".resp2").value;
	if (b != "" && b.replace(/\s/g, "").length) {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.innerHTML = b;
		document.querySelector(".v2").appendChild(list_form);
		if (document.querySelector(".HiddenInput52").value.split(",").length == 1) {
			if (
				document.querySelector(".HiddenInput52").value.includes(",") == false
			) {
				document.querySelector(".HiddenInput52").value += ",";
			}
			document.querySelector(".HiddenInput52").value += b;
		} else {
			if (document.querySelector(".HiddenInput52").value.slice(-1) != ",") {
				document.querySelector(".HiddenInput52").value += ",";
			}
			document.querySelector(".HiddenInput52").value += b;
			document.querySelector(".HiddenInput52").value += ",";
		}
		array6 = document.querySelector(".HiddenInput52").value.split(",");
		document.querySelector(".resp2").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_fskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		l6 = document.querySelector(".HiddenInput52").value.split(",").length - 1;
		if (
			document.querySelector(".HiddenInput52").value.slice(-1) == "," &&
			document.querySelector(".HiddenInput52").value.split(",").length > 1
		) {
			--l6;
		}
		list_form.classList.add(l6);
		minusAskill.addEventListener("click", () => {
			class7 = minusAskill.parentElement.classList[1];
			array6 = removeFirst(array6, class7);
			let array6String = array6.join(",");
			if (onlyCommas(array6String) == true) {
				array6String = "";
			}
			document.querySelector(".HiddenInput52").value = array6String;
			minusAskill.parentElement.remove();
		});
	} else {
		alertify.defaults.glossary.title = "My Title";
		alertify.alert("Business City", "Please Enter a value first!");
	}
});

let l7 = 0;
let array7 = [];
let class8;
let a7 = document.querySelector(".g3");
a7.addEventListener("click", () => {
	const b = document.querySelector(".resp3").value;
	if (b != "" && b.replace(/\s/g, "").length) {
		const list_form = document.createElement("li");
		list_form.classList.add("list-form");
		list_form.innerHTML = b;
		document.querySelector(".v3").appendChild(list_form);
		if (document.querySelector(".HiddenInput53").value.split(",").length == 1) {
			if (
				document.querySelector(".HiddenInput53").value.includes(",") == false
			) {
				document.querySelector(".HiddenInput53").value += ",";
			}
			document.querySelector(".HiddenInput53").value += b;
		} else {
			if (document.querySelector(".HiddenInput53").value.slice(-1) != ",") {
				document.querySelector(".HiddenInput53").value += ",";
			}
			document.querySelector(".HiddenInput53").value += b;
			document.querySelector(".HiddenInput53").value += ",";
		}
		array7 = document.querySelector(".HiddenInput53").value.split(",");
		document.querySelector(".resp3").value = "";
		const minusAskill = document.createElement("div");
		const minusIcon = document.createElement("i");
		minusAskill.classList.add("add_fskill");
		minusIcon.classList.add("fa-solid");
		minusIcon.classList.add("fa-minus");
		list_form.appendChild(minusAskill);
		minusAskill.appendChild(minusIcon);
		l7 = document.querySelector(".HiddenInput53").value.split(",").length - 1;
		if (
			document.querySelector(".HiddenInput53").value.slice(-1) == "," &&
			document.querySelector(".HiddenInput53").value.split(",").length > 1
		) {
			--l7;
		}
		list_form.classList.add(l7);
		minusAskill.addEventListener("click", () => {
			class8 = minusAskill.parentElement.classList[1];
			array7 = removeFirst(array7, class8);
			let array7String = array7.join(",");
			if (onlyCommas(array7String) == true) {
				array7String = "";
			}
			document.querySelector(".HiddenInput53").value = array7String;
			minusAskill.parentElement.remove();
		});
	} else {
		alertify.defaults.glossary.title = "My Title";
		alertify.alert("Business City", "Please Enter a value first!");
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

let arrayAKill = [];
let numberAKill;
document.querySelectorAll(".AKill").forEach((element) => {
	element.addEventListener("click", () => {
		arrayAKill = document.querySelector(".HiddenInput1").value.split(",");
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

let arrayPKill = [];
let numberPKill;
document.querySelectorAll(".PKill").forEach((element) => {
	element.addEventListener("click", () => {
		arrayPKill = document.querySelector(".HiddenInput2").value.split(",");
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

let arrayVKill = [];
let numberVKill;
document.querySelectorAll(".VKill").forEach((element) => {
	element.addEventListener("click", () => {
		arrayVKill = document.querySelector(".HiddenInput3").value.split(",");
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

let arrayKKill = [];
let numberKKill;
document.querySelectorAll(".KKill").forEach((element) => {
	element.addEventListener("click", () => {
		arrayKKill = document.querySelector(".HiddenInput4").value.split(",");
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

let add_F1skill = [];
let numberF1Kill;
document.querySelectorAll(".A1Kill").forEach((element) => {
	element.addEventListener("click", () => {
		add_F1skill = document.querySelector(".HiddenInput51").value.split(",");
		numberF1Kill = element.parentElement.classList[1];
		add_F1skill = removeFirst(add_F1skill, numberF1Kill);
		add_F1skill.join(",");
		if (onlyCommas(add_F1skill) == true) {
			add_F1skill = "";
		}
		document.querySelector(".HiddenInput51").value = add_F1skill;
		element.parentElement.remove();
	});
});

let add_F2skill = [];
let numberF2Kill;
document.querySelectorAll(".A2Kill").forEach((element) => {
	element.addEventListener("click", () => {
		add_F2skill = document.querySelector(".HiddenInput52").value.split(",");
		numberF2Kill = element.parentElement.classList[1];
		add_F2skill = removeFirst(add_F2skill, numberF2Kill);
		add_F2skill.join(",");
		if (onlyCommas(add_F2skill) == true) {
			add_F2skill = "";
		}
		document.querySelector(".HiddenInput52").value = add_F2skill;
		element.parentElement.remove();
	});
});

let add_F3skill = [];
let numberF3Kill;
document.querySelectorAll(".A3Kill").forEach((element) => {
	element.addEventListener("click", () => {
		add_F3skill = document.querySelector(".HiddenInput53").value.split(",");
		numberF3Kill = element.parentElement.classList[1];
		add_F3skill = removeFirst(add_F3skill, numberF3Kill);
		add_F3skill.join(",");
		if (onlyCommas(add_F3skill) == true) {
			add_F3skill = "";
		}
		document.querySelector(".HiddenInput53").value = add_F3skill;
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
	add_F1skill = document.querySelector(".HiddenInput51").value;
	add_F1skill = add_F1skill.split(",");
	add_F1skill = add_F1skill.filter((n) => n);
	document.querySelector(".HiddenInput51").value = add_F1skill.join(",");
	add_F2skill = document.querySelector(".HiddenInput52").value;
	add_F2skill = add_F2skill.split(",");
	add_F2skill = add_F2skill.filter((n) => n);
	document.querySelector(".HiddenInput52").value = add_F2skill.join(",");
	add_F3skill = document.querySelector(".HiddenInput53").value;
	add_F3skill = add_F3skill.split(",");
	add_F3skill = add_F3skill.filter((n) => n);
	document.querySelector(".HiddenInput53").value = add_F3skill.join(",");
	document.getElementById("inputSubmit").click();
});

const loadFile = function (event) {
	const image = document.querySelector(".imageCV");
	image.src = URL.createObjectURL(event.target.files[0]);
	image.style.padding = "0px";
};
const imageCV = document.querySelector(".imageCV");
if (imageCV.src.includes("imageCV.svg")) {
	imageCV.style.padding = "16px";
}

showTarget("click", ".showedu2", ".edu2");
showTarget("click", ".showedu3", ".edu3");
showTarget("click", ".showwork2", ".work2");
showTarget("click", ".showwork3", ".work3");
showTarget("click", ".showproject2", ".project2");
showTarget("click", ".showproject3", ".project3");
if (window.history.replaceState) {
	window.history.replaceState(null, null, window.location.href);
}
if (document.querySelector(".speciality2").value != "") {
	document.querySelector(".edu2").style.display = "block";
}
if (document.querySelector(".speciality3").value != "") {
	document.querySelector(".edu3").style.display = "block";
}
if (document.querySelector(".job2").value != "") {
	document.querySelector(".work2").style.display = "block";
}
if (document.querySelector(".job3").value != "") {
	document.querySelector(".work3").style.display = "block";
}
if (document.querySelector(".project_name2").value != "") {
	document.querySelector(".project2").style.display = "block";
}
if (document.querySelector(".project_name3").value != "") {
	document.querySelector(".project3").style.display = "block";
}

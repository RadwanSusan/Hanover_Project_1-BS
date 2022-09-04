const confirm = (message, function1, function2) => {
	alertify.defaults.glossary.title = "My Title";
	alertify.confirm("Business City", message, function1, function2);
};

if (window.history.replaceState) {
	window.history.replaceState(null, null, window.location.href);
}

document.querySelectorAll(".companyDelete").forEach((element) => {
	element.addEventListener("click", () => {
		const company_id = element.parentElement.getAttribute("company_id");
		console.log(company_id);
		confirm(
			"هل أنت متأكد أنك تريد حذف هذه الشركة؟<br/>لا يمكنك التراجع عن هذا الإجراء.",
			() => {
				$.ajax({
					url: "../PHP/backBone.php",
					type: "post",
					data: {
						deleteCompany: 1,
						company_id,
					},
					success() {
						element.parentElement.remove();
					},
				});
			},
			() => {},
		);
	});
});

document.querySelectorAll(".companyDelete").forEach((element) => {
	element.addEventListener("click", () => {
		const company_id = element.parentElement.getAttribute("company_id");
		confirm(
			"هل أنت متأكد أنك تريد حذف هذه الشركة؟<br/>لا يمكنك التراجع عن هذا الإجراء.",
			() => {
				$.ajax({
					url: "../PHP/backBone.php",
					type: "post",
					data: {
						deleteCompany: 1,
						company_id,
					},
					success() {
						element.parentElement.remove();
					},
				});
			},
			() => {},
		);
	});
});

document.querySelectorAll(".courseDelete").forEach((element) => {
	element.addEventListener("click", () => {
		const course_id = element.parentElement.getAttribute("course_id");
		confirm(
			"هل أنت متأكد أنك تريد حذف هذه الدورة؟<br/>لا يمكنك التراجع عن هذا الإجراء.",
			() => {
				$.ajax({
					url: "../PHP/backBone.php",
					type: "post",
					data: {
						deleteCourse: 1,
						course_id,
					},
					success() {
						element.parentElement.remove();
					},
				});
			},
			() => {},
		);
	});
});

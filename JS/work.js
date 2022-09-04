if (window.history.replaceState) {
	window.history.replaceState(null, null, window.location.href);
}
document.querySelectorAll(".companyApplyButton").forEach((element) => {
	element.addEventListener("click", () => {
		document.querySelector(".testbox").style = "display: block";
		const company_id =
			element.parentElement.parentElement.parentElement.parentElement.parentElement.getAttribute(
				"company_id",
			);
		document.querySelector(".company_id_hidden").value = company_id;
	});
});
document.querySelectorAll(".fa-close").forEach((element) => {
	element.addEventListener("click", () => {
		document.querySelector(".testbox").style = "display: none";
	});
});
document.querySelectorAll(".courseApplyButton").forEach((element) => {
	element.addEventListener("click", () => {
		document.querySelector(".testbox").style = "display: block";
		const course_id =
			element.parentElement.parentElement.parentElement.parentElement.parentElement.getAttribute(
				"course_id",
			);
		document.querySelector(".course_id_hidden").value = course_id;
	});
});

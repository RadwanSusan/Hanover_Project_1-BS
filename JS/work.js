document.querySelector(".fa-close").addEventListener("click", () => {
	document.querySelector(".testbox").style = "display: none";
});
document.querySelector(".applyButton").addEventListener("click", () => {
	document.querySelector(".testbox").style = "display: block";
});
if (window.history.replaceState) {
	window.history.replaceState(null, null, window.location.href);
}

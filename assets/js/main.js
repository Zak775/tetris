// Открыть модальное окно top-10
var btnOpenTop10 = document.querySelector("#open_top10");
btnOpenTop10.onclick = function() {
	var top10Modal = document.querySelector("#top-10_modal");
		top10Modal.style.display = "block";
}
// Закрыть модальное окно top-10
var top10ModalCloseBtn = document.querySelector("#top-10_modal .close");
	top10ModalCloseBtn.onclick = function() {
		var top10Modal = document.querySelector("#top-10_modal");
		top10Modal.style.display = "none";
	}
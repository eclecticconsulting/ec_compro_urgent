@extends('main')
@section('body')
	<section class="page-section">
		<img src="https://dev3.eclecticoffice.com/assets/img/under_maintenance.png" width="100%" height="100%">
	</section>
	<script>
		document.addEventListener("contextmenu", function(e){
				e.preventDefault();
		}, false);

		document.onkeydown = function(e) {
			if(event.keyCode == 123) {
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)) {
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) {
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)) {
				return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
				return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
				return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'P'.charCodeAt(0)) {
				return false;
			}
		}

		document.addEventListener('keyup', (e) => {
			if (e.keyCode == 44) {
				stopPrntScr();
			}
		});

		document.addEventListener('keydown', (e) => {
			if (e.ctrlKey && e.key == 'p') {
				alert('This section is not allowed to print or export to PDF');
				e.cancelBubble = true;
				e.preventDefault();
				e.stopImmediatePropagation();
			}
		});

		function stopPrntScr() {
			var inpFld = document.createElement("input");
			inpFld.setAttribute("value", ".");
			inpFld.setAttribute("width", "0");
			inpFld.style.height = "0px";
			inpFld.style.width = "0px";
			inpFld.style.border = "0px";
			document.body.appendChild(inpFld);
			inpFld.select();
			document.execCommand("copy");
			inpFld.remove(inpFld);
		}

		function AccessClipboardData() {
			try {
				window.clipboardData.setData('text', "Access   Restricted");
			} catch (err) {}
		}

		setInterval("AccessClipboardData()", 300);
	</script>
@endsection

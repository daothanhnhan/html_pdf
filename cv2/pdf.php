<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.1.1/jspdf.umd.min.js"></script> -->
	<!-- <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script> -->

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<style>
	h3 {
		color: red;
	}
</style>
</head>
<body>
	<div id="content">
     <h3>Hello, this is a H3 tag</h3>

    <p>A paragraph</p>
</div>
<div id="editor"></div>
<button id="cmd">generate PDF</button>
<script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>
</body>
</html>
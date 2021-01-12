<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		body {
  background: beige;
}

header {
  background: red;
}

footer {
  background: blue;
}

#content {
  background: yellow;
  width: 70%;
  height: 100px;
  margin: 50px auto;
  border: 1px solid orange;
  padding: 20px;
}
	</style>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="http://html2canvas.hertzen.com/dist/html2canvas.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
  <body>
    <header>This is the header</header>
    <div id="content">
      This is the element you only want to capture
    </div>
    <button id="print">Download Pdf</button>
    <footer>This is the footer</footer>
  </body>
<script>
$('#print').click(function() {

  var w = document.getElementById("content").offsetWidth;
  var h = document.getElementById("content").offsetHeight;
  html2canvas(document.getElementById("content"), {
    dpi: 300, // Set to 300 DPI
    scale: 3, // Adjusts your resolution
    onrendered: function(canvas) {
      var img = canvas.toDataURL("image/jpeg", 1);
      var doc = new jsPDF('L', 'px', [w, h]);
      doc.addImage(img, 'JPEG', 0, 0, w, h);
      doc.save('sample-file.pdf');
    }
  });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="http://html2canvas.hertzen.com/dist/html2canvas.js" type="text/javascript" charset="utf-8" async defer></script>
</html>
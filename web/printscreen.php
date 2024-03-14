<html>
<head>
<title>Print</title>
<style type="text/css">
@page {
  size: A4;
  margin: 0;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
}
</style>
</head>
<body>
	<button type="button" id="btnprint" onclick="Print();">Print</button>
	<script type="text/javascript">
		function Print() {
			document.getElementById('btnprint').style.visibility = 'hidden';
			window.print();
			document.getElementById('btnprint').style.visibility = 'visible';
		}
	</script>
</body>
</html>
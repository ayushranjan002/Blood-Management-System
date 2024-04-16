
<html>
<head>
<style>
.Card{
	background-color:Black;
	
}
.Card p{
	color:white;
}
</style>
</head>
<body>

<div class="footer">
<div class="container">
<div class="Card">

	<p class='text-center'>Second Stage Prototype</p>
	</div>
	</div>
	</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {

	$(".DATES").datepicker({ 

dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: '1900:' + new Date().getFullYear()
 }).val();
	});
</script>
</body>
</html>



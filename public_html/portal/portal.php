<?php 
$pagetitle = "Portal";
include ($_SERVER ["DOCUMENT_ROOT"] . '/portal/portalheader.php');

?>
<html>
<head>
<style>
h2 {text-align:center;}
</style>
</head>
<body>
	<div class="slogan"></div>
		<h2>Welcome, <?php echo $_SESSION["First_Name"]; echo " " . $_SESSION["Last_Name"]?></h2>
</body>
</html>

<?php 
include ($_SERVER ["DOCUMENT_ROOT"] . '/main/footer.php');
?>
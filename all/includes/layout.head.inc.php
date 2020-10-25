<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo page_name(); ?></title>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<?php
		if(isset($datatables_required) && $datatables_required == 1) {
			$datatables_source = <<<FILEDOC
		
		<!-- DataTables -->
		<link rel="stylesheet" type="text/css" href="assets/DataTables/1.10.15/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="assets/DataTables/1.10.15/js/jquery.dataTables.js"></script>
		
FILEDOC;
			echo $datatables_source;
		};
?>
		<link rel="icon" href="http://faviconka.ru/ico/faviconka_ru_1009.png" type="image/x-icon">
		<link rel="stylesheet" href="assets/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<script src="assets/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="assets/src/qrcode.min.js"></script>
		<script type="text/javascript" src="assets/src/img.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
	</head>
	
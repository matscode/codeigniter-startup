<?php defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * Created by PhpStorm.
	 * User: mat
	 * Date: 10/29/16
	 * Time: 10:30 PM
	 */
?>
<!doctype html>
<html lang="en" ng-app="cis.main">
<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>CIS: CodeIgniter StartUp</title>

	<!--Base url for resources-->
	<base href="<?php echo base_url(); ?>">

	<!-- Bootstrap v4.x.x-alpha-4 CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/tether.min.css">
	<!-- AngularJS v1.5.8 CSS -->
	<link rel="stylesheet" href="assets/css/angular-csp.css">
	<!-- ngToast CSS: AngularJS module for toast notifications -->
	<link rel="stylesheet" href="assets/css/ngToast.min.css">
	<link rel="stylesheet" href="assets/css/ngToast-animations.min.css">
	<!-- FontAwesome v4.x.x CSS-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" charset="utf-8">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/main.css" media="screen" charset="utf-8">
	<!-- keeping animations seperate -->
	<link rel="stylesheet" href="assets/css/main.animation.css" media="screen" charset="utf-8">

	<!-- jQuery v3.1.1 first, then Bootstrap v4.x.x-alpha-4 JS. -->
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<!-- Tether required for Bootstrap -->
	<script src="assets/js/tether.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- AngularJS v1.5.8 Scripts -->
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/angular-resource.min.js"></script>
	<script src="assets/js/angular-route.min.js"></script>
	<script src="assets/js/angular-sanitize.min.js"></script>
	<script src="assets/js/ngToast.min.js"></script>
	<!-- Custom script -->
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/controller.js"></script>

</head>
<body>


<?= $nav ?>



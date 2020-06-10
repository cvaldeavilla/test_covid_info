<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,600" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

	<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.selectric/1.10.1/selectric.css'>

	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

	<link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">

	<link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
	<script src="https://unpkg.com/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
	<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table-locale-all.min.js"></script>
	<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
	<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/extensions/export/bootstrap-table-export.min.js"></script>

	<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
	 -->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/pareto.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>

	<script src="https://rawgithub.com/laff/technical-indicators/master/technical-indicators.src.js"></script>

	<script type="text/javascript" src=
	"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore.js">
	</script>

	<style>
		body{
			background-color: #364061;
		}

		table{
			color:white;
			background-color:transparent;
			border: 1px solid transparent;
		}

		table thead{
			text-align:center;
			font-weight:bold;
		}

		table th{
			background-color: #445175;
		}


		tbody > tr > :nth-child(2){
			color:#65DD9B;
		}


		tbody > tr > :nth-child(3){
			color:#F08080;
		}

		tbody > tr > :nth-child(4){
			color:#F08080;
		}

		tbody > tr > :nth-child(5){
			color:#F08080;
		}

		tbody > tr > :nth-child(6){
			color:#add8e6;
		}


		tbody > tr > :nth-child(7){
			color:#add8e6;
		}

		tbody > tr > :nth-child(8){
			color:#add8e6;
		}

		tbody > tr > :nth-child(9){
			color:#F5832C;
		}

		tbody > tr > :nth-child(10){
			color:#F5832C;
		}

		tbody > tr > :nth-child(11){
			color:#FFA800;
		}

		tbody > tr > :nth-child(12){
			color:#FFA800;
		}


		tbody > tr > :nth-child(13){
			color:#FFFF00;
		}

		tbody > tr > :nth-child(14){
			color:#FFFF00;
		}


		tbody > tr > :nth-child(15){
			color:#FFFF00;
		}


		tbody > tr > :nth-child(16){
			color:#FFFF00;
		}




		.mat-toolbar {
			display:none;
		}

		.project-tab {
			padding: 9%;
			margin-top: -8%;
		}
		.project-tab #tabs{
			background: #007b5e;
			color: #eee;
		}
		.project-tab #tabs h6.section-title{
			color: #eee;
		}
		.project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
			color: yellow;
			background-color: transparent;
			border-color: transparent transparent #f3f3f3;
			border-bottom: 3px solid !important;
			font-size: 16px;
			font-weight: bold;
		}
		.project-tab .nav-link {
			border: 1px solid transparent;
			border-top-left-radius: .25rem;
			border-top-right-radius: .25rem;
			color: white;
			font-size: 16px;
			font-weight: 600;
		}
		.project-tab .nav-link:hover {
			border: none;
			color: orange;
		}
		.project-tab thead{
			background: transparent;
			color: white;
		}
		.project-tab a{
			text-decoration: none;
			color: #333;
			font-weight: 600;
		}
	</style>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style>
		@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);

		body {
			zoom: 90%;
		}

		.cards-list {
			z-index: 0;
			width: 100%;
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
		}

		.card {
			margin: 30px auto;
			width: 250px;
			height: 290px;
			border-radius: 40px;
			box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
			cursor: pointer;
			transition: 0.4s;
		}

		.card .card_image {
			width: inherit;
			height: inherit;
			border-radius: 40px;
		}

		.card .card_image img {
			width: inherit;
			height: inherit;
			border-radius: 40px;
			object-fit: cover;
		}

		.card .card_title {
			text-align: center;
			border-radius: 0px 0px 40px 40px;
			font-family: sans-serif;
			font-weight: bold;
			font-size: 30px;
			margin-top: -80px;
			height: 40px;
		}

		.card:hover {
			transform: scale(0.9, 0.9);
			box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25),
			-5px -5px 30px 15px rgba(0, 0, 0, 0.22);
		}

		.mat-toolbar :nth-last-child(-n+2) {
			display: none;
		}

		.title-white {
			color: white;
		}

		.title-black {
			color: black;
		}

		@media all and (max-width: 500px) {
			.card-list {
				/* On small screens, we are no longer using row direction but column */
				flex-direction: column;
			}
		}


		#horizontalLine {
			position: absolute;
			margin-top: 19.8em;
			margin-left: 10%;

			height: 2px;
			width: 22%;
			background-color: #999894;

		}

		.fixed-table-border {

			display: none;
		}

		@media (max-width: 767px) {
			position: static

		;
			margin-bottom:

		1rem

		;
		}

		}
		}

		.sidepanel {
			width: 0;
			position: fixed;
			z-index: 1;
			height: 250px;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidepanel a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.grid {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-auto-rows: minmax(150px, auto);
			grid-gap: 5px;
			margin-left: 2em;
		}

		.pagination-info {
			display: none;
		}

		.page-list {
			visibility: hidden;

		}

		#verticalLine {
			position: absolute;
			margin-top: 19.5em;
			left: 4.7em;
			width: 2px;
			height: 50%;
			background-color: #999894;

		}

		.fa-facebook {
			background: #3B5998;
			color: white;
		}


		#page-footer h4 {
			margin-bottom: 1%;
			font-family: monospace;
		}

		#page-footer ul {
			padding: 0;
			list-style: none;
		}

		.footer-social-icons {
			text-align: center;
			width: 350px;
			display: block;
			margin: 0 auto;
			background-color: #1e1e1e;
		}

		.social-icon {
			color: #fff;
		}

		ul.social-icons {
			margin-top: 10px;
		}

		.social-icons li {
			vertical-align: top;
			display: inline;
			height: 100px;
		}

		.social-icons a {
			color: #fff;
			text-decoration: none;
		}

		.fa-twitter {
			padding: 10px 12px;
			-o-transition: .5s;
			-ms-transition: .5s;
			-moz-transition: .5s;
			-webkit-transition: .5s;
			transition: .5s;
			background-color: #27221F;
		}

		.fa-twitter:hover {
			background-color: #00aced;
		}

		.fa-medium {
			padding: 10px 14px;
			-o-transition: .5s;
			-ms-transition: .5s;
			-moz-transition: .5s;
			-webkit-transition: .5s;
			transition: .5s;
			background-color: #27221F;
		}

		.fa-medium:hover {
			background-color: #00ab6c;
		}

		.fa-linkedin {
			padding: 10px 14px;
			-o-transition: .5s;
			-ms-transition: .5s;
			-moz-transition: .5s;
			-webkit-transition: .5s;
			transition: .5s;
			background-color: #27221F;
		}

		.fa-linkedin:hover {
			background-color: #0073a4;
		}

		.fa-github {
			padding: 10px 14px;
			-o-transition: .5s;
			-ms-transition: .5s;
			-moz-transition: .5s;
			-webkit-transition: .5s;
			transition: .5s;
			background-color: #27221F;
		}

		.fa-github:hover {
			background-color: #5a32a3;
		}

		@media (min-width: 1440px) {

			.project-tab {

				margin-left: 5em;
			}
		}

		@media (min-width: 1366px) {

			.project-tab {

				margin-left: 5em;
			}

			.percentage_active_case {
				margin-top: -1em;
			}
		}

		@media (min-width: 1280px) {

			.project-tab {

				margin-left: 8em;
			}
		}


	</style>




	<style>
		@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);

		body {
			zoom: 90%;
		}

		.cards-list {
			z-index: 0;
			width: 100%;
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
		}

		.card {
			margin: 30px auto;
			width: 250px;
			height: 290px;
			border-radius: 40px;
			box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
			cursor: pointer;
			transition: 0.4s;
		}

		.card .card_image {
			width: inherit;
			height: inherit;
			border-radius: 40px;
		}

		.card .card_image img {
			width: inherit;
			height: inherit;
			border-radius: 40px;
			object-fit: cover;
		}

		.card .card_title {
			text-align: center;
			border-radius: 0px 0px 40px 40px;
			font-family: sans-serif;
			font-weight: bold;
			font-size: 30px;
			margin-top: -80px;
			height: 40px;
		}

		.card:hover {
			transform: scale(0.9, 0.9);
			box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25),
			-5px -5px 30px 15px rgba(0, 0, 0, 0.22);
		}

		.mat-toolbar :nth-last-child(-n+2) {
			display: none;
		}

		.title-white {
			color: white;
		}

		.title-black {
			color: black;
		}

		@media all and (max-width: 500px) {
			.card-list {
				/* On small screens, we are no longer using row direction but column */
				flex-direction: column;
			}
		}


		#horizontalLine {
			position: absolute;
			margin-top: 19.8em;
			margin-left: 10%;

			height: 2px;
			width: 22%;
			background-color: #999894;

		}

		.fixed-table-border {

			display: none;
		}

		@media (max-width: 767px) {
			position: static

		;
			margin-bottom:

		1rem

		;
		}

		.sidepanel {
			width: 0;
			position: fixed;
			z-index: 1;
			height: 250px;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidepanel a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.grid {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-auto-rows: minmax(150px, auto);
			grid-gap: 5px;
			margin-left: 2em;
		}

		.pagination-info {
			display: none;
		}

		.page-list {
			visibility: hidden;

		}

		#verticalLine {
			position: absolute;
			margin-top: 19.5em;
			left: 4.7em;
			width: 2px;
			height: 50%;
			background-color: #999894;

		}

		.fa-facebook {
			background: #3B5998;
			color: white;
		}


		#page-footer h4 {
			margin-bottom: 1%;
			font-family: monospace;
		}

		#page-footer ul {
			padding: 0;
			list-style: none;
		}

		.footer-social-icons {
			text-align: center;
			width: 350px;
			display: block;
			margin: 0 auto;
			background-color: #1e1e1e;
		}

		.social-icon {
			color: #fff;
		}

		ul.social-icons {
			margin-top: 10px;
		}

		.social-icons li {
			vertical-align: top;
			display: inline;
			height: 100px;
		}

		.social-icons a {
			color: #fff;
			text-decoration: none;
		}

		.fa-twitter {
			padding: 10px 12px;
			-o-transition: .5s;
			-ms-transition: .5s;
			-moz-transition: .5s;
			-webkit-transition: .5s;
			transition: .5s;
			background-color: #27221F;
		}

		.fa-twitter:hover {
			background-color: #00aced;
		}

		.fa-medium {
			padding: 10px 14px;
			-o-transition: .5s;
			-ms-transition: .5s;
			-moz-transition: .5s;
			-webkit-transition: .5s;
			transition: .5s;
			background-color: #27221F;
		}

		.fa-medium:hover {
			background-color: #00ab6c;
		}

		.fa-linkedin {
			padding: 10px 14px;
			-o-transition: .5s;
			-ms-transition: .5s;
			-moz-transition: .5s;
			-webkit-transition: .5s;
			transition: .5s;
			background-color: #27221F;
		}

		.fa-linkedin:hover {
			background-color: #0073a4;
		}

		.fa-github {
			padding: 10px 14px;
			-o-transition: .5s;
			-ms-transition: .5s;
			-moz-transition: .5s;
			-webkit-transition: .5s;
			transition: .5s;
			background-color: #27221F;
		}

		.fa-github:hover {
			background-color: #5a32a3;
		}

		@media (min-width: 1440px) {

			.project-tab {

				margin-left: 5em;
			}
		}

		@media (min-width: 1366px) {

			.project-tab {

				margin-left: 5em;
			}

			.percentage_active_case {
				margin-top: -1em;
			}
		}

		@media (min-width: 1280px) {

			.project-tab {

				margin-left: 8em;
			}
		}


	</style>
</head>
<body>

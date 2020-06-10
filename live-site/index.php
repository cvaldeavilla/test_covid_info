<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,600" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

	<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.selectric/1.10.1/selectric.css'>

	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

	<link rel="stylesheet" href="./style.css">

	<link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">


	<style>
		body{
			background-color: #364061;
		}

		table{
			color:white;
			background-color:transparent;
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
</head>
<body>
	<div class="col-md-2 d-none d-md-block sidebar col-lg-3" style="background-color: #364061;  ">
		<div  style="height: 50em; margin-top: 1.2em;"style="background-color: #445175; ">
			<span id="QuickFacts" class="mobile-dropdown-anchor"></span>
			<div class="container--wrap" style="background-color: #445175; border-radius:10px;">
				<p style="color: #DFDFEF; font-size: 30px; text-align: center; padding-top: 15px; font-weight: bolder; margin-bottom: 0;" >
					Quick Facts
				</p>
				<p style="color: #DFDFEF; font-size: 12px; text-align: center; font-weight: bolder; margin-bottom: 0;">
					updated: <i>a few seconds ago</i>
				</p>
				<table>
					<tr>
						<p id="total_cases" style="color: #65DD9B; font-weight: bold; text-align: center; border-bottom: 0; font-size: 50px; margin-bottom: 0px;"></p>
						<p style="color: #DFDFEF; font-size: 18px; font-weight: bold; border-bottom: 0; text-align: center;">Total Confirmed</p>
					</tr>
					<tr>
						<p id="total_deaths"  style="color: #F65164; font-weight: bold; text-align: center; border-bottom: 0; font-size: 50px; margin-bottom: 0px;"></p>
						<p style="color: #DFDFEF; font-size: 18px; font-weight: bold; border-bottom: 0; text-align: center;">Total Deceased</p>
					</tr>
					<tr>
						<p id="total_recovered" style="color: #449BE2; font-weight: bold; text-align: center; border-bottom: 0; font-size: 50px; margin-bottom: 0px;"></p>
						<p style="color: #DFDFEF; font-size: 18px; font-weight: bold; border-bottom: 0; text-align: center;">Total Recovered</p>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div role="main" class="col-md-9 ml-sm-auto col-lg-9 my-3" >
		<!-- Tabs Information -->
		<section id="tabs" class="project-tab">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="data-tab" data-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="true">1 - Data</a>

								<a class="nav-item nav-link" id="trend-tab" data-toggle="tab" href="#trends" role="tab" aria-controls="trends" aria-selected="false">2 - Trends</a>

								<a class="nav-item nav-link" id="sandbox-tab" data-toggle="tab" href="#sandbox" role="tab" aria-controls="sandbox" aria-selected="false">3 - Sandbox</a>

								<a class="nav-item nav-link" id="maps-tab" data-toggle="tab" href="#maps" role="tab" aria-controls="maps" aria-selected="false">Map</a>

								<a class="nav-item nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">

								<div class="projects mb-4" style="background-color: #445175; border-radius:10px;">
									<div class="projects-inner">
										<header class="projects-header">
											<div class="title">World COVID-19 Stats </div>
										</header>
									</div>
								</div>

								<table
										id="table"
										data-toolbar="#toolbar"
										data-search="true"
										data-show-toggle="true"
										data-show-columns="true"
										data-show-columns-toggle-all="true"
										data-show-export="true"
										data-sort-name="totalcases"
										data-sort-order="desc"
										data-show-pagination-switch="true"
										data-pagination="false"
										data-page-list="[10, 25, 50, 100, all]"
										data-show-footer="true"
								>
								</table>
							</div>

							<div class="tab-pane fade" id="trends" role="tabpanel" aria-labelledby="trend-tab">
								<iframe src="https://ourworldindata.org/grapher/covid-confirmed-deaths-since-5th-death?time=2020-01-22..2020-04-20&country=USA" style="width: 100%; height: 600px; border: 0px none;"></iframe>
							</div>

							<div class="tab-pane fade" id="maps" role="tabpanel" aria-labelledby="maps-tab"></div>

							<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab"></div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<script src="https://unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
		<script src="https://unpkg.com/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://unpkg.com/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
		<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table-locale-all.min.js"></script>
		<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
		<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/extensions/export/bootstrap-table-export.min.js"></script>
		<script>
			var counter = 0;

			axios.get('https://api.covid19api.com/summary').then(function (response) {
				var rawData = myData(response.data.Countries);
				myTable(rawData);
			}).catch(function (error) {
				console.log(error);
			})

			function myData(data) {
				var list = [];
				data.forEach(function(item) {
					list.push({
						country: '<img src="flags/'+item.CountryCode.toLowerCase()+'.svg" width="36"> ' + item.Country, //github.com/rinvex/countries
						newcases: item.NewConfirmed,
						totalcases: item.TotalConfirmed,
						newdeaths: item.NewDeaths,
						totaldeaths: item.TotalDeaths,
						newrecoveries: item.NewRecovered,
						totalrecoveries: item.TotalRecovered,
						lastupdate: new Date(item.Date).getDate()+'/'+new Date(item.Date).getMonth()+'/'+new Date(item.Date).getFullYear() //.toLocaleString()
					});
				});
				return list;
			}

			function myTable(arr) {
				var myTable = $('#table').bootstrapTable({
					height: 1000,
					locale: 'en_US',
					columns: [
						[
							{field:'country', title:'Countries and territories', rowspan:2, align:'left', valign:'middle', footerFormatter:countFormatter},
							{title:'Confirmed infections', colspan:2, align:'center', valign:'middle'},
							{title:'Confirmed deaths', colspan:2, align:'center', valign:'middle'},
							{title:'Reported recoveries', colspan:2, align:'center', valign:'middle'}
						],
						[
							{field:'newcases', title:'New Cases',sortable:true, align:'right', formatter:numberFormatter, footerFormatter:totalFormatter},
							{field:'totalcases', title:'Total Cases',sortable:true, align:'right', formatter:numberFormatter, footerFormatter:totalFormatter},
							{field:'newdeaths', title:'New Deaths', sortable:true, align:'right', formatter:numberFormatter, footerFormatter:totalFormatter},
							{field:'totaldeaths', title:'Total Deaths', sortable:true, align:'right', formatter:numberFormatter, footerFormatter:totalFormatter},
							{field:'newrecoveries', title:'New Recovered', sortable:true, align:'right', formatter:numberFormatter, footerFormatter:totalFormatter},
							{field:'totalrecoveries', title:'Total Recovered', sortable:true, align:'right', formatter:numberFormatter, footerFormatter: totalFormatter}
						]
					],
					data: arr
				});
				return myTable;
			}

			function countFormatter(data) {
				return data.length
			}

			function numberFormatter(value, row){
				return value.toLocaleString('en-US');
			}

			function totalFormatter(data) {

				var field = this.field
				var total = data.map(function (row) {
					return row[field]
				}).reduce(function (sum, i) {
					return sum + i
				}, 0);

				counter = counter + 1;

				if (counter == 2){
					$("#total_cases").text(Number(total).toLocaleString('en'));
				}

				if (counter == 4){
					$("#total_deaths").text(Number(total).toLocaleString('en'));
				}

				if (counter == 6){
					$("#total_recovered").text(Number(total).toLocaleString('en'));
				}
				return total.toLocaleString('en-US');
			}
		</script>


		<!--
		<table class="projects-table" style="overflow-y:auto; background-color:  #445175;">
			<div class="thead">
			<thead >
				<tr>
					<th  style="background-color: #445175;">Name</th>
					<th  style="background-color: #445175;">Confirmed</th>
					<th  style="background-color: #445175;">Changes Today</th>
					<th  style="background-color: #445175;">Critical</th>
					<th  style="background-color: #445175;">Deceased</th>
					<th  style="background-color: #445175;">Changes Today</th>
					<th  style="background-color: #445175;">Recovered</th>
					<th  style="background-color: #445175;">Active</th>
			</thead>
			<tr>
				</div>
				<td>
					<p style="font-size: 1.5em; color: white;">Aruba</p>

				</td>

				<td>

						<p style="color:#65DD9B;">Confirmed</p>
				</td>
				<td class="member">
				<p style="color:#65DD9B;">Changes 2 </p>

				</td>
				<td>
					<p style="color:#FF9D00;">Critical</p>

				</td>
				<td>

						<p style="color:#F65164;">Deceased</p>
				</td>
				<td >
				<p style="color:#F65164;">Changes 2</p>
				</td>

					<td>
				<p style="color:#449BE2;">Recovered</p>
				</td>
					<td>
				<p style="color:#F8F540;">Active</p>
				</td>
			</tr>







		</table>

	-->
	</div>

</body>
</html>

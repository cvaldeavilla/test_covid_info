<style>

	.fixed-table-border{

	display: none;
}


</style>
<div class="mySidepanel" class="sidepanel" class="col-xl-4 sidebar"
	 style="background-color: #1E1E1E; border-radius:5px; height: 5em; width: 100%; margin-left: 0em; float: top; position: fixed; margin-top: 0em;display: block;clear: both; z-index: 1;">


	<p style="color:  #BDBDBD; font-size: 1.5em;  border-bottom: 0;  z-index: 2; margin-top: 1em; margin-left: 32em;">
	<center style="color:#BDBDBD; ">COVID 19 INSIGHT</center>
	</p>


</div>


<div class="mySidepanel" class="sidepanel" class="col-xl-4 sidebar"
	 style="background-color: #1E1E1E;  height: 70em; width: 32em; margin-left: 1em; float: left; position: sticky; margin-top: 10em;display: block;clear: both; border-radius: 20px;">

	 <div style="margin-top: -50em;">

	<div id="verticalLine"></div>
	<div id="horizontalLine" style="margin-left: 4.7em;margin-top: 30.5em; width: 80%;"></div>
	<div id="horizontalLine" style="margin-left: 4.7em;margin-top: 40em; width: 80%;"></div>
	<div id="horizontalLine" style="margin-left: 4.7em;margin-top: 49.5em; width: 80%;"></div>

	<p id="label_info"
	   style="color: #BDBDBD; font-weight: bold; text-align: center; border-bottom: 0; font-size: 32px; padding-top: 0.5em;  padding-top: 2em; transform: scale(1, 1.5); margin-left: 1em; ">
		WORLD summary</p>
	<br>
	<br>
	<p style="color: #BDBDBD; font-size: 15px; text-align: center; font-weight: bolder; margin-bottom: 0;">
		Updated: <i>A few seconds ago</i></p>
	<table style="margin-left: 3em; margin-top: -2em;" id="sidebar">


		<br>
		<br>

		<tr>

			<td>

				<div class="col-md-13"
					 style=" border: 1px solid white;border-collapse: collapse;width: 29em; background-color: #BDBDBD; margin-left: -1.5em; border-radius: 10px; height: 75px;">

					<p id="total_cases"
					   style="color: #333333; font-weight: bold; text-align: center; border-bottom: 0; font-size: 40px; margin-bottom: 0px;transform: scale(1, 1.5);"></p>
					<p style="color: #333333; position: absolute; margin-left: 2em; margin-top: -0.5em; font-weight: bold;"
					   id="percentage_one">100%</p>
				</div>
				<br>
				<p style="color: #BDBDBD; font-size: 15px; font-weight: bold; border-bottom: 0; text-align: center; transform: scale(1, 1.5);">
					Total Cases</p>

				<br>
				<br>


			</td>
		</tr>


		<tr>
			<td>
				<p id="total_deaths"
				   style="color: #F15B5B; font-weight: bold; text-align: center; border-bottom: 0; font-size: 35px; transform: scale(1, 1.5);"></p>
				<br>
				<br>
				<p style="color: #F15B5B; font-size: 18px; font-weight: bold; border-bottom: 0; text-align: center;">
					Deaths
				</p>
				<p style="color:  #F15B5B; position: absolute; margin-left: 2em; margin-top: -5em;font-weight: bold;"
				   id="percentage_death">100%</p>

				<p id="new_deaths"
				   style="color:  #BDBDBD; position: absolute; margin-left: 18.5em; margin-top: -6.5em; font-size: 15px;font-weight: bold; font-style: italic; "></p>

				<br>
				<br>

			</td>
		</tr>
		<br>

		<tr>
			<td>
				<p id="total_recoveires"
				   style="color:  #3DFD36; font-weight: bold; text-align: center; border-bottom: 0; font-size: 35px; margin-bottom: 0px;transform: scale(1, 1.5);"></p>
				<br>
				<p style="color: #3DFD36; font-size: 15px; font-weight: bold; border-bottom: 0; text-align: center;transform: scale(1, 1.5); ">
					Recovered</p>
				<p style="color: #3DFD36; position: absolute;  margin-left: 2em; margin-top: -5em;font-weight: bold;"
				   id="percentage_recoveries">100%</p>
				<!--<p id="new_recoveries" style="color:  #BDBDBD; position: absolute; margin-left: 20em; margin-top: -5em;font-weight: bold;" id="">new recoveries</p>-->
				<br>
				<br>

			</td>
		</tr>
		<tr>
			<td>
				<p id="total_active"
				   style="color: #F5832C; font-weight: bold; text-align: center; border-bottom: 0; font-size: 35px; margin-bottom: 0px;transform: scale(1, 1.5);"></p>
				<br>
				<p style="color: #F5832C; font-size: 15px; font-weight: bold; border-bottom: 0; text-align: center;color: #F5832C;transform: scale(1, 1.5);">
					Active (remainder)
				</p>
				<p style="color: #F5832C; position: absolute;  margin-left: 2em; margin-top: -5em;font-weight: bold;"
				   id="percentage_active_case">100%</p>
				<p id="new_cases" style="color:  #BDBDBD; position: absolute; margin-left: 21.5em; margin-top: -6.5em; font-weight: bold;"
				   id=""></p>
			
			</td>
		</tr>

		<tr>
			<td><p style="color: #BDBDBD; font-size: 10px; text-align: center;  margin-top: 8em; font-style: italic;">
					Sources: John Hopkins University/WHO/CDC </p>
			</td>
		</tr>


	</table>
</div>
</div>


<div role="main" class="col-xl-9 ml-sm-auto col-lg-13 my-3" style="display: block;clear: both;">
	<!-- Tabs Information -->
	<section id="tabs" class="project-tab">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-top: -77em; z-index: 0;">
					<nav>
						<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"
							 style="background-color: #1E1E1E;  ">
							<a class="nav-item nav-link active" id="data-tab" data-toggle="tab" href="#data" role="tab"
							   aria-controls="data" aria-selected="true">DATA</a>
							<a class="nav-item nav-link" id="trend-tab" data-toggle="tab" href="#trends" role="tab"
							   aria-controls="trends" aria-selected="false" onclick="reloadiframe()">TRENDS</a>
							<a class="nav-item nav-link" id="maps-tab" data-toggle="tab" href="#maps" role="tab"
							   aria-controls="maps" aria-selected="false">MAP</a>
							<a class="nav-item nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab"
							   aria-controls="about" aria-selected="false">ABOUT</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">

						<div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">

							<div class="container" style="background:transparent;">
								<div class="row">
									<div class="col-md-12" style="background-color:#445175; ">

										<nav>
											<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"
												 style="background-color:#BDBDBD; color: #1E1E1E;  ">

												<a class="nav-item nav-link active" id="data_world" data-toggle="tab"
												   href="#world_table_info" role="tab" aria-controls="world"
												   aria-selected="true" onclick="ChangetoWorld()"
												   style="color: #1E1E1E;">WORLD</a>


												<a class="nav-item nav-link" id="data_usa" data-toggle="tab"
												   href="#usa_table_info" role="tab" aria-controls="usa"
												   aria-selected="false" onclick="ChangetoUSA()"
												   style="color: #1E1E1E;">USA</a>

												<a class="nav-item nav-link" id="data_europe" data-toggle="tab"
												   href="#europe_chart" role="tab" aria-controls="europe"
												   aria-selected="false" onclick="ChangetoEurope()"
												   style="color: #1E1E1E;">EUROPE</a>

												<a class="nav-item nav-link" id="data_asia" data-toggle="tab"
												   href="#asia_chart" role="tab" aria-controls="asia"
												   aria-selected="false" onclick="ChangetoAsia()"
												   style="color: #1E1E1E;">ASIA</a>


											</div>
										</nav>


										<div class="tab-content" id="nav-tabContent">
											<div class="tab-pane fade show active" id="world_table_info" role="tabpanel"
												 aria-labelledby="data_world" style="height: 85em;">


												<table
														id="table"
														class="projects-table"
														style="overflow-y:auto; background-color:  #445175;"
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
													<thead>
													<tr>
														<th rowspan="2" id="countries"> Countries</th>
														<th rowspan="2" id="cases"> Cases</th>
														<th colspan="3" id="deaths"> Deaths</th>
														<th colspan="3" id="recovered"> Recovered</th>
														<th colspan="2" id="active_remainder"> Active (remainder)</th>
														<th colspan="2" id="test_conducted"> Tests conducted</th>
														<th colspan="3" id="population_considered"> Population
															considered
														</th>
													</tr>
													<tr>
														<th>New</th>
														<th>Total</th>
														<th>% Deaths vs Cases</th>

														<th>New</th>
														<th>Total</th>
														<th>% Recovered vs Cases</th>

														<th>New</th>
														<th>Total</th>

														<th>Total tests</th>
														<th>% positive</th>


														<th>Population</th>
														<th>Cases per 1M pop.</th>
														<th>Tests per 1M pop.</th>
													</tr>
													</thead>
												</table>


												<div style="color: white;">

													<p>SOURCE</p>

													<a href="https://documenter.getpostman.com/view/10724784/SzYW3LFa?version=latest"
													   rel="nofollow noopener" target="_blank" style="color: white;">COVID-19
														Finnhub API</a>
													<br>
													<a href="https://documenter.getpostman.com/view/11144369/Szf6Z9B3?version=latest#a9a60f59-fde4-4e94-b1f1-a3cb92bd1046"
													   rel="nofollow noopener" target="_blank" style="color: white;">World,
														Asia, Europe table: NovelCovid API</a>
													<br>
													<a href="https://covid19api.com" rel="nofollow noopener"
													   target="_blank" style="color: white;">COVID19 API</a>


												</div>


											</div>


											<div class="tab-pane fade" id="asia_chart" role="tabpanel"
												 aria-labelledby="data_asia" style="height: 100em;">


												<table
														class="projects-table table_asia"
														style="overflow-y:auto; background-color:  #445175;"
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
													<thead>
													<tr>
														<th rowspan="2" id="countries"> Countries</th>
														<th rowspan="2" id="cases"> Cases</th>
														<th colspan="3" id="deaths"> Deaths</th>
														<th colspan="3" id="recovered"> Recovered</th>
														<th colspan="2" id="active_remainder"> Active (remainder)</th>
														<th colspan="2" id="test_conducted"> Tests conducted</th>
														<th colspan="3" id="population_considered"> Population
															considered
														</th>
													</tr>
													<tr>
														<th>New</th>
														<th>Total</th>
														<th>% Deaths vs Cases</th>

														<th>New</th>
														<th>Total</th>
														<th>% Recovered vs Cases</th>

														<th>New</th>
														<th>Total</th>

														<th>Total tests</th>
														<th>% positive</th>

														<th>Population</th>
														<th>Cases per 1M pop.</th>
														<th>Tests per 1M pop.</th>
													</tr>
													</thead>
												</table>


												<div style="margin-top: 9em; color: white;">

													<p>SOURCE</p>

													<a href="https://documenter.getpostman.com/view/10724784/SzYW3LFa?version=latest"
													   rel="nofollow noopener" target="_blank" style="color: white;">COVID-19
														Finnhub API</a>
													<br>
													<a href="https://documenter.getpostman.com/view/11144369/Szf6Z9B3?version=latest#a9a60f59-fde4-4e94-b1f1-a3cb92bd1046"
													   rel="nofollow noopener" target="_blank" style="color: white;">World,
														Asia, Europe table: NovelCovid API</a>
													<br>
													<a href="https://covid19api.com" rel="nofollow noopener"
													   target="_blank" style="color: white;">COVID19 API</a>


												</div>


											</div>

											<div class="tab-pane fade" id="usa_table_info" role="tabpanel"
												 aria-labelledby="data_usa" style="height: 100em;">


												<table
														class="projects-table table_usa"
														style="overflow-y:auto; background-color:  #445175;"
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
													<thead>
													<tr>
														<th rowspan="2" id="countries"> Countries</th>
														<th rowspan="2" id="cases"> Cases</th>
														<th colspan="3" id="deaths"> Deaths</th>
														<th colspan="3" id="recovered"> Recovered</th>
														<th colspan="2" id="active_remainder"> Active (remainder)</th>
														<th colspan="2" id="test_conducted"> Tests conducted</th>
														<th colspan="3" id="population_considered"> Population
															considered
														</th>
													</tr>
													<tr>
														<th>New</th>
														<th>Total</th>
														<th>% Deaths vs Cases</th>

														<th>New</th>
														<th>Total</th>
														<th>% Recovered vs Cases</th>

														<th>New</th>
														<th>Total</th>

														<th>Total tests</th>
														<th>% positive</th>

														<th>Population</th>
														<th>Cases per 1M pop.</th>
														<th>Tests per 1M pop.</th>
													</tr>
													</thead>
												</table>


												<div style="margin-top: 9em; color: white;">

													<p>SOURCE</p>

													<a href="https://documenter.getpostman.com/view/10724784/SzYW3LFa?version=latest"
													   rel="nofollow noopener" target="_blank" style="color: white;">COVID-19
														Finnhub API</a>
													<br>
													<a href="https://documenter.getpostman.com/view/11144369/Szf6Z9B3?version=latest#a9a60f59-fde4-4e94-b1f1-a3cb92bd1046"
													   rel="nofollow noopener" target="_blank" style="color: white;">World,
														Asia, Europe table: NovelCovid API</a>
													<br>
													<a href="https://covid19api.com" rel="nofollow noopener"
													   target="_blank" style="color: white;">COVID19 API</a>

													<p style="color: #F65164;"> NOTES:Results for recoveries in USA is
														currently unknown, total recoveries for USA is came from table
														in World Tab.</p>


												</div>

											</div>

											<div class="tab-pane fade" id="europe_chart" role="tabpanel"
												 aria-labelledby="data_europe" style="height: 100em;">


												<table
														class="projects-table table_europe"
														style="overflow-y:auto; background-color:  #445175;"
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
													<thead>
													<tr>
														<th rowspan="2" id="countries"> Countries</th>
														<th rowspan="2" id="cases"> Cases</th>
														<th colspan="3" id="deaths"> Deaths</th>
														<th colspan="3" id="recovered"> Recovered</th>
														<th colspan="2" id="active_remainder"> Active (remainder)</th>
														<th colspan="2" id="test_conducted"> Tests conducted</th>
														<th colspan="3" id="population_considered"> Population
															considered
														</th>
													</tr>
													<tr>
														<th>New</th>
														<th>Total</th>
														<th>% Deaths vs Cases</th>

														<th>New</th>
														<th>Total</th>
														<th>% Recovered vs Cases</th>

														<th>New</th>
														<th>Total</th>

														<th>Total tests</th>
														<th>% positive</th>

														<th>Population</th>
														<th>Cases per 1M pop.</th>
														<th>Tests per 1M pop.</th>
													</tr>
													</thead>
												</table>


												<div style="margin-top: 9em; color: white;">

													<p>SOURCE</p>

													<a href="https://documenter.getpostman.com/view/10724784/SzYW3LFa?version=latest"
													   rel="nofollow noopener" target="_blank" style="color: white;">COVID-19
														Finnhub API</a>
													<br>
													<a href="https://documenter.getpostman.com/view/11144369/Szf6Z9B3?version=latest#a9a60f59-fde4-4e94-b1f1-a3cb92bd1046"
													   rel="nofollow noopener" target="_blank" style="color: white;">World,
														Asia, Europe table: NovelCovid API</a>
													<br>
													<a href="https://covid19api.com" rel="nofollow noopener"
													   target="_blank" style="color: white;">COVID19 API</a>


												</div>
											</div>

										</div>


									</div>
								</div>
							</div>


						</div>

						<div class="tab-pane fade" id="trends" role="tabpanel" aria-labelledby="trend-tab">


							<div class="container" style="background:transparent;">
								<div class="row">
									<div class="col-md-12" style="background-color:#445175;">

										<nav>
											<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"
												 style="background-color:#445175 ">

												<a class="nav-item nav-link active" id="data_world_trend"
												   data-toggle="tab" href="#world_chart_trend" role="tab"
												   aria-controls="world" aria-selected="true" onclick="ChangetoWorld()">WORLD</a>


												<a class="nav-item nav-link" id="data_usa_trend" data-toggle="tab"
												   href="#usa_chart_trend" role="tab" aria-controls="usa"
												   aria-selected="false" style="color: #3DFD36;">Under Control</a>

												<a class="nav-item nav-link" id="data_europe_trend" data-toggle="tab"
												   href="#europe_chart_trend" role="tab" aria-controls=""
												   aria-selected="false" style="color:#F5832C;">Getting there</a>


												<a class="nav-item nav-link" id="data_asia_trend" data-toggle="tab"
												   href="#asia_chart_trend" role="tab" aria-controls="asia"
												   aria-selected="false" style="color: #F15B5B;">Still struggling</a>


											</div>
										</nav>


										<div class="tab-content" id="nav-tabContent">
											<div class="tab-pane fade show active" id="world_chart_trend"
												 role="tabpanel" aria-labelledby="data_world_trend">

												<div id="WORLD_trend">


													<iframe id="iframe_world"
															src="https://ourworldindata.org/grapher/covid-confirmed-deaths-since-5th-death?time=2020-01-22..2020-04-20"
															style="width: 100%; height: 600px; border: 0px none;"></iframe>


													<figure class="highcharts-figure">
														<div id="daily_new_cases"></div>
													</figure>

													<figure class="highcharts-figure">
														<div id="daily_new_deaths"></div>
													</figure>


												</div>


											</div>


											<div class="tab-pane fade" id="asia_chart_trend" role="tabpanel"
												 aria-labelledby="data_asia_trend">


												<table style="text-align: center;width: 100%; height: 100%;"
													   id="table_trend_b2" data-show-header="true"
													   data-pagination="true"
													   data-id-field="name"
													   data-page-list="[2, 5, 10, 50, 100, ALL]"
													   data-page-size="2">
													<thead style="visibility: hidden;">
													<tr>
														<th data-field="name2" data-formatter="nameFormatter"></th>
														<th data-field="name2_b1" data-formatter="nameFormatter"></th>
														<th data-field="name2_b2" data-formatter="nameFormatter"></th>
														<!--
														<th data-field="stargazers_count2"
															data-formatter="starsFormatter"></th>
														<th data-field="forks_count2"
															data-formatter="forksFormatter"></th>
														-->
													</tr>
													</thead>
													<tbody>
													</tbody>
												</table>

												<!-- 	<div id="asia_table_trend">


														<iframe id="iframe_asia" src="https://ourworldindata.org/grapher/covid-confirmed-deaths-since-5th-death?time=2020-01-22..2020-04-20&country=AFG+ARM+AZE+BHR+CHN+IND+IDN+IRN+IRQ+ISR+JPN+KWT+LBN+MYS+OMN+PAK+PHL+QAT+SGP+KOR+LKA+TWN+THA+ARE+JOR+SAU+BGD+TUR+KAZ+UZB+MMR+KGZ" style="width: 100%; height: 600px; border: 0px none;"></iframe>

														<figure class="highcharts-figure">
															<div id="daily_new_cases_asia"></div>
														</figure>


														<figure class="highcharts-figure">
															<div id="daily_new_deaths_asia"></div>
														</figure>

													</div> -->


											</div>

											<div class="tab-pane fade" id="usa_chart_trend" role="tabpanel"
												 aria-labelledby="data_usa_trend">

												<table style="text-align: center;width: 100%; height: 100%;"
													   id="table_trend_b" data-show-header="true" data-pagination="true"
													   data-id-field="name"
													   data-page-list="[2, 5, 10, 50, 100, ALL]"
													   data-page-size="2">
													<thead style="visibility: hidden;">
													<tr>
														<th data-field="name" data-formatter="nameFormatter"></th>
														<th data-field="name_b1" data-formatter="nameFormatter"></th>
														<th data-field="name_b2" data-formatter="nameFormatter"></th>
														<!--
														<th data-field="stargazers_count"
															data-formatter="starsFormatter"></th>
														<th data-field="forks_count"
															data-formatter="forksFormatter"></th>-->
													</tr>
													</thead>
													<tbody>
													</tbody>
												</table>


											</div>

											<div class="tab-pane fade" id="europe_chart_trend" role="tabpanel"
												 aria-labelledby="data_europe_trend">

												<div id="europe_table_trend">

													<table style="text-align: center;width: 100%; height: 100%;"
														   id="table_trend_b3" data-show-header="true"
														   data-pagination="true"
														   data-id-field="name"
														   data-page-list="[2, 5, 10, 50, 100, ALL]"
														   data-page-size="2">
														<thead style="visibility: hidden;">
														<tr>
															<th data-field="name3" data-formatter="nameFormatter"></th>
															<th data-field="name3_b1" data-formatter="nameFormatter"></th>
															<th data-field="name3_b2" data-formatter="nameFormatter"></th>
															<!--
															<th data-field="stargazers_count3"
																data-formatter="starsFormatter"></th>
															<th data-field="forks_count3"
																data-formatter="forksFormatter"></th>
															-->
														</tr>
														</thead>
														<tbody>
														</tbody>
													</table>

													<!--
														<iframe id="iframe_europe" src="https://ourworldindata.org/grapher/covid-confirmed-deaths-since-5th-death?time=2020-01-22..2020-04-20&country=AUT+BLR+BEL+HRV+CZE+DNK+EST+FIN+FRA+DEU+GRC+ISL+IRL+ITA+LTU+LUX+MKD+NLD+NOR+ROU+RUS+SMR+ESP+SWE+CHE+GBR+AND+LVA+PRT+UKR+POL+HUN+SVN+BIH+SRB+SVK+MDA+BGR+ALB+CYP+OWID_KOS+MNE+GGY+JEY+IMN" style="width: 100%; height: 600px; border: 0px none;"></iframe>

														<figure class="highcharts-figure">
															<div id="daily_new_cases_europe"></div>
														</figure>


														<figure class="highcharts-figure">
															<div id="daily_new_deaths_europe"></div>
														</figure>  -->


												</div>


											</div>

										</div>


									</div>
								</div>
							</div>


						</div>

						<div class="tab-pane fade" id="maps" role="tabpanel" aria-labelledby="maps-tab">

							<iframe src='https://flo.uri.sh/story/342800/embed' frameborder='0' scrolling='no'
									style='width:100%;height:600px;'></iframe>


						</div>

						<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">


							<!--
							<h1 style="color: white; margin-top: 2em;"><CENTER>SOURCES </CENTER></h1>


							 <a href="https://covid19api.com" class="card"  >
								<img src="http://armont.montecillo.tech/covidinsights/assets/SourcePic/covid19api.png" alt="placeholder">
								<div class="card-text">
								COVID19 API
								</div>
								<div class="additional-text">
								</div>
							  </a>



								   <a href="https://documenter.getpostman.com/view/10724784/SzYW3LFa?version=latest" class="card" style="margin-left: 2em; margin-top: -25em;">
								<img src="http://armont.montecillo.tech/covidinsights/assets/SourcePic/postman-covid-19-social-image.jpg" alt="placeholder" style=" border-radius: 40px;">
								<div class="card-text">
								 COVID-19 Finnhub API
								</div>
								<div class="additional-text">
								</div>
							  </a>


								   <a href="https://documenter.getpostman.com/view/10724784/SzYW3LFa?version=latest" class="card" style="margin-left: 55em; margin-top: -25em;">
								<img src="http://armont.montecillo.tech/covidinsights/assets/SourcePic/postman-covid-19-social-image.jpg" alt="placeholder" style=" border-radius: 40px;">
								<div class="card-text">
								 World, Asia, Europe table: NovelCovid API
								</div>
								<div class="additional-text">
								</div>
							  </a>





													</div>-->
						</div>


					</div>
				</div>
			</div>
		</div>
</div>


<div class="footer-dark" id="page-footer">
	<footer>
		<div class="container-fluid" style="background-color: #1E1E1E; height: 15em;">
			<div class="row text-center">

				<div class="col-lg-12 item" style="margin-top: 2em;">
					<!-- <h3>About</h3> -->

					<center><p style="color: #BDBDBD  !important;"><a href="#">Data</a></p>
						<p style="color: #BDBDBD  !important;"><a href="#">Software</a></p>
						<p style="color: #BDBDBD !important;"><a href="#">Articles</a></p></center>

				</div>
				<br>
				<!-- End: About -->
				<!-- Start: Social Icons -->
				<div class="col-lg-12 item social" style="color: white;">


					<!-- End: Social Icons -->
				</div>
			</div>
			<!-- Start: Copyright -->
			<p class="copyright text-muted">
			<center style="color: #BDBDBD; ">Copyright © 2020 · Armontsys.com</center>
			</p>
			<!-- End: Copyright -->
			<div class="footer-social-icons">

				<ul class="social-icons">
					<li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
					<li><a href="" class="social-icon"> <i class="fa fa-medium"></i></a></li>
					<li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
					<li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
				</ul>
			</div>

		</div>

	</footer>
</div>


<button id="mybutton_newcases" style="display:none">Swap</button>
<button id="mybutton_deathnewcases" style="display:none">Swap</button>

<script>
	var counter = 0, arr_newcases = [], i = 0, info_p = "";

	var sumconfirmed_world = 0, sumdeaths_world = 0, sumrecovered_world = 0, dailycases_world = 0,
			dailydeaths_world = 0, activecases_world = 0;
	var sumconfirmed_asia = 0, sumdeaths_asia = 0, sumrecovered_asia = 0, dailycases_asia = 0, dailydeaths_asia = 0,
			activecases_asia = 0;
	var sumconfirmed_usa = 0, sumdeaths_usa = 0, sumrecovered_usa, dailycases_usa = 0, dailydeaths_usa = 0,
			activecases_usa = 0;
	var sumconfirmed_europe = 0, sumdeaths_europe = 0, sumrecovered_europe = 0, dailycases_europe = 0,
			dailydeaths_europe = 0, activecases_europe = 0;

	/*********** Change Text on Quick Facts **************/




	function nameFormatter(value) {
		return '<a href="https://github.com/wenzhixin/' + value + '' + value + '</a>';
	}

	function starsFormatter(value) {
		return '<i class="glyphicon glyphicon-star"></i> ' + value;
	}

	function forksFormatter(value) {
		return '<i class="glyphicon glyphicon-cutlery"></i> ' + value;
	}

	function reloadiframe() {
		document.getElementById('iframe_world').src = document.getElementById('iframe_world').src
	}

	function ChangetoWorld() {
		document.getElementById("label_info").innerHTML = "WORLD summary";
		$("#total_cases").text(Number(sumconfirmed_world).toLocaleString('en'));
		$("#total_deaths").text(Number(sumdeaths_world).toLocaleString('en'));
		$("#total_recoveires").text(Number(sumrecovered_world).toLocaleString('en'));


		$("#percentage_death").text(parseFloat((sumdeaths_world / sumconfirmed_world) * 100).toFixed(2) + "%");
		$("#percentage_recoveries").text(parseFloat((sumrecovered_world / sumconfirmed_world) * 100).toFixed(2) + "%");


		$("#new_recoveries").text(Number(data.todayDeaths).toLocaleString('en') + " new recoveries");

		$("#new_cases").text(" " + Number(dailycases_world).toLocaleString('en') + " new active");
		$("#new_deaths").text(" " + Number(dailydeaths_world).toLocaleString('en') + " new deaths");


		var active_cases = sumconfirmed_world - (parseInt(sumrecovered_world) + parseInt(sumdeaths_world));

		$("#total_active").text(Number(activecases_world).toLocaleString('en'));

		$("#percentage_active_case").text(parseFloat((active_cases / sumconfirmed_world) * 100).toFixed(2) + "%");
		document.getElementById('iframe_world').src = document.getElementById('iframe_world').src


	}

	function ChangetoAsia() {
		document.getElementById("label_info").innerHTML = "ASIA summary";

		$("#total_cases").text(Number(sumconfirmed_asia).toLocaleString('en'));
		$("#total_deaths").text(Number(sumdeaths_asia).toLocaleString('en'));
		$("#total_recoveires").text(Number(sumrecovered_asia).toLocaleString('en'));

		$("#percentage_death").text(parseFloat((sumdeaths_asia / sumconfirmed_asia) * 100).toFixed(2) + "%");
		$("#percentage_recoveries").text(parseFloat((sumrecovered_asia / sumconfirmed_asia) * 100).toFixed(2) + "%");

		$("#new_cases").text(" " + Number(dailycases_asia).toLocaleString('en') + " new active");
		$("#new_deaths").text(" " + Number(dailydeaths_asia).toLocaleString('en') + " new deaths");


		var active_cases = sumconfirmed_asia - (parseInt(sumrecovered_asia) + parseInt(sumdeaths_asia));

		$("#total_active").text(Number(activecases_asia).toLocaleString('en'));

		$("#percentage_active_case").text(parseFloat((active_cases / sumconfirmed_asia) * 100).toFixed(2) + "%");
		//document.getElementById('iframe_asia').src = document.getElementById('iframe_asia').src


	}

	function ChangetoEurope() {
		document.getElementById("label_info").innerHTML = "EUROPE summary";
		$("#total_cases").text(Number(sumconfirmed_europe).toLocaleString('en'));
		$("#total_deaths").text(Number(sumdeaths_europe).toLocaleString('en'));
		$("#total_recoveires").text(Number(sumrecovered_europe).toLocaleString('en'));

		$("#percentage_death").text(parseFloat((sumdeaths_europe / sumconfirmed_europe) * 100).toFixed(2) + "%");
		$("#percentage_recoveries").text(parseFloat((sumrecovered_europe / sumconfirmed_europe) * 100).toFixed(2) + "%");


		$("#new_cases").text(" " + Number(dailycases_europe).toLocaleString('en') + " new active");
		$("#new_deaths").text(" " + Number(dailydeaths_europe).toLocaleString('en') + " new deaths");

		var active_cases = sumconfirmed_europe - (parseInt(sumrecovered_europe) + parseInt(sumdeaths_europe));

		$("#total_active").text(Number(activecases_europe).toLocaleString('en'));

		$("#percentage_active_case").text(parseFloat((active_cases / sumconfirmed_europe) * 100).toFixed(2) + "%");
		//document.getElementById('iframe_europe').src = document.getElementById('iframe_europe').src
	}

	function ChangetoUSA() {
		document.getElementById("label_info").innerHTML = "USA summary";
		$("#total_cases").text(Number(sumconfirmed_usa).toLocaleString('en'));
		$("#total_deaths").text(Number(sumdeaths_usa).toLocaleString('en'));
		$("#total_recoveires").text(Number(sumrecovered_usa).toLocaleString('en'));

		$("#percentage_death").text(parseFloat((sumdeaths_usa / sumconfirmed_usa) * 100).toFixed(2) + "%");
		$("#percentage_recoveries").text(parseFloat((sumrecovered_usa / sumconfirmed_usa) * 100).toFixed(2) + "%");

		$("#new_cases").text("" + Number(dailycases_usa).toLocaleString('en') + " new active");
		$("#new_deaths").text("" + Number(dailydeaths_usa).toLocaleString('en') + " new deaths");

		var active_cases = sumconfirmed_usa - (parseInt(sumrecovered_usa) + parseInt(sumdeaths_usa));

		$("#total_active").text(Number(activecases_usa).toLocaleString('en'));

		$("#percentage_active_case").text(parseFloat((active_cases / sumconfirmed_usa) * 100).toFixed(2) + "%");

		//document.getElementById('iframe_usa').src = document.getElementById('iframe_usa').src
	}

	function myData(data) {
		var list = [];

		data.forEach(function (item) {


			list.push({
				country: '<img src="<?php echo base_url('assets/'); ?>upflags/' + item.countryInfo.iso2 + '.svg" width="25"> ' + item.country, //github.com/rinvex/countries
				newcases: item.todayCases,
				totalcases: item.cases,
				newdeaths: item.todayDeaths,
				totaldeaths: item.deaths,
				deathrate: Number((item.deaths / item.cases) * 100, 2).toFixed(2),
				newrecoveries: "N/A",
				totalrecoveries: item.recovered,
				recoveryrate: Number((item.recovered / item.cases) * 100, 2).toFixed(2),
				newactivecases: item.todayCases,
				totalactivecases: item.active,
				tests: item.tests,
				positivetest: Number((item.tests / item.population) * 100, 2).toFixed(2),
				population: item.population,
				tests_population: item.testsPerOneMillion,
				cases_population: item.casesPerOneMillion,

			});


			if (item.countryInfo.iso2 == "US") {
				sumrecovered_usa = item.recovered;
			}
			/*

			if (item.iso_code != 'WRLD'){
				list.push({
					country: '<img src="<?php echo base_url('assets/'); ?>flags/' + item.iso_code.toLowerCase() + '.svg" width="25"> ' + item.location, //github.com/rinvex/countries
					newcases: item.new_cases,
					totalcases: item.total_cases,
					newdeaths: item.new_deaths,
					totaldeaths: item.total_deaths,
					newrecoveries: item.new_recovered,
					totalrecoveries: item.total_recovered,
					lastupdate: new Date(item.date).getDate() + '/' + new Date(item.date).getMonth() + '/' + new Date(item.date).getFullYear() //.toLocaleString()
				});
			}

			if (item.iso_code == "US"){
				sumrecovered_usa = item.total_recovered;
			}

			*/

		});
		return list;
	}


	function myTable(arr) {
		var myTable = $('#table').bootstrapTable({
			height: 1000,
			locale: 'en_US',
			columns: [
				[
					{
						field: 'country',
						sortable: true,
						rowspan: 2,
						align: 'left',
						valign: 'middle',
						footerFormatter: countFormatter
					},
					{
						field: 'totalcases',
						rowspan: 2,
						sortable: true,
						valign: 'middle',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},

				], [

					{
						field: 'newdeaths',
						title: 'New',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'totaldeaths',
						title: 'Total',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'deathrate',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},

					{field: 'newrecoveries', sortable: true, align: 'right', footerFormatter: "N/A"},
					{
						field: 'totalrecoveries',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'recoveryrate',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},

					{
						field: 'newactivecases',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'totalactivecases',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},

					{
						field: 'tests',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'positivetest',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},


					{
						field: 'population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'tests_population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'cases_population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},


				]

			],

			data: arr
		});
		return myTable;
	}


	/************* Asia ***************/


	function myTable_asia_new(arr) {
		var myTable = $('.table_asia').bootstrapTable({
			height: 1000,
			locale: 'en_US',
			columns: [
				[
					{
						field: 'country',
						sortable: true,
						rowspan: 2,
						align: 'left',
						valign: 'middle',
						footerFormatter: countFormatter
					},
					{
						field: 'totalcases',
						rowspan: 2,
						sortable: true,
						valign: 'middle',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},

				], [

					{
						field: 'newdeaths',
						title: 'New',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'totaldeaths',
						title: 'Total',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'deathrate',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},

					{field: 'newrecoveries', sortable: true, align: 'right', footerFormatter: "N/A"},
					{
						field: 'totalrecoveries',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'recoveryrate',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},

					{
						field: 'newactivecases',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'totalactivecases',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},

					{
						field: 'tests',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'positivetest',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},


					{
						field: 'population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'tests_population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'cases_population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},


				]

			],
			data: arr
		});
		return myTable;
	}

	function myData_asia(data2) {

		var list_asia = "";

		// data2.forEach(function(item) {
		// 	alert(item.countries)
		// 	list_europe.push({

		// 		state: item.+state,
		// 		casesnow: item.todayCases,
		// 		cases: item.cases,
		// 		deaths: item.deaths,
		// 		todaydeaths: item.todayDeaths,
		// 	});
		// });

		$.each(data2, function (i, item) {

			if (i == "updated") {
				list_asia = data2.countries;

			}

		});

		return list_asia;

	}


	function myData_asia2(data_newasia) {
		var list_asia2 = [];

		data_newasia.forEach(function (item) {
			sumconfirmed_asia += item.cases;
			sumdeaths_asia += item.deaths;
			sumrecovered_asia += item.recovered;
			list_asia2.push({

				country: '<img src="<?php echo base_url('assets/'); ?>flags/' + item.countryInfo.iso2.toLowerCase() + '.svg" width="25"> ' + item.country, //github.com/rinvex/countries
				newcases: item.todayCases,
				totalcases: item.cases,
				newdeaths: item.todayDeaths,
				totaldeaths: item.deaths,
				deathrate: Number((item.deaths / item.cases) * 100, 2).toFixed(2),
				newrecoveries: "N/A",
				totalrecoveries: item.recovered,
				recoveryrate: Number((item.recovered / item.cases) * 100, 2).toFixed(2),
				newactivecases: item.todayCases,
				totalactivecases: item.active,
				tests: item.tests,
				positivetest: Number((item.tests / item.population) * 100, 2).toFixed(2),
				population: item.population,
				tests_population: item.testsPerOneMillion,
				cases_population: item.casesPerOneMillion,
			});
		});

		return list_asia2;
	}


	/************* Asia ***************/

	

	/************* Graph Whole Information ***************/

	/************* US County ***************/
	function myData_states(data2) {
		var list_states = [];


		//sumrecovered_asia += item.recovered;

		data2.forEach(function (item) {
			sumconfirmed_usa += item.cases;
			sumdeaths_usa += item.deaths;
			list_states.push({
				state: item.state,
				totalcases: item.cases,
				newdeaths: item.todayDeaths,
				totaldeaths: item.deaths,
				deathrate: Number((item.deaths / item.cases) * 100, 2).toFixed(2),
				newrecoveries: "N/A",
				totalrecoveries: "N/A",
				recoveryrate: "N/A",
				newactivecases: item.todayCases,
				totalactivecases: item.active,
				tests: item.tests,
				positivetest: "N/A",
				population: "N/A",
				tests_population: item.testsPerOneMillion,
				cases_population: item.casesPerOneMillion
			});
		});

		return list_states;
	}

	function myData_europe(data2) {

		var list_europe = "";

		// data2.forEach(function(item) {
		// 	alert(item.countries)
		// 	list_europe.push({

		// 		state: item.+state,
		// 		casesnow: item.todayCases,
		// 		cases: item.cases,
		// 		deaths: item.deaths,
		// 		todaydeaths: item.todayDeaths,
		// 	});
		// });

		$.each(data2, function (i, item) {
			if (i == "updated") {
				list_europe = data2.countries;
			}
		});
		return list_europe;
	}

	function myData_europe2(data_neweurope) {
		var list_europe2 = [];
		data_neweurope.forEach(function (item) {
			sumconfirmed_europe += item.cases;
			sumdeaths_europe += item.deaths;
			sumrecovered_europe += item.recovered;

			list_europe2.push({
				country: '<img src="<?php echo base_url('assets/'); ?>flags/' + item.countryInfo.iso2.toLowerCase() + '.svg" width="25"> ' + item.country, //github.com/rinvex/countries
				newcases: item.todayCases,
				totalcases: item.cases,
				newdeaths: item.todayDeaths,
				totaldeaths: item.deaths,
				deathrate: Number((item.deaths / item.cases) * 100, 2).toFixed(2),
				newrecoveries: "N/A",
				totalrecoveries: item.recovered,
				recoveryrate: Number((item.recovered / item.cases) * 100, 2).toFixed(2),
				newactivecases: item.todayCases,
				totalactivecases: item.active,
				tests: item.tests,
				positivetest: Number((item.tests / item.population) * 100, 2).toFixed(2),
				population: item.population,
				tests_population: item.testsPerOneMillion,
				cases_population: item.casesPerOneMillion,
			});
		});
		return list_europe2;
	}

	function myTable_states(arr) {
		var myTable = $('.table_usa').bootstrapTable({
			height: 1000,
			locale: 'en_US',

			columns: [
				[
					{
						field: 'state',
						sortable: true,
						rowspan: 2,
						align: 'left',
						valign: 'middle',
						footerFormatter: countFormatter
					},
					{
						field: 'totalcases',
						rowspan: 2,
						sortable: true,
						valign: 'middle',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},

				], [

					{
						field: 'newdeaths',
						title: 'New',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'totaldeaths',
						title: 'Total',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'deathrate',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},

					{field: 'newrecoveries', sortable: true, align: 'right', footerFormatter: "N/A"},
					{field: 'totalrecoveries', sortable: true, align: 'right', footerFormatter: "N/A"},
					{field: 'recoveryrate', sortable: true, align: 'right', footerFormatter: "N/A"},

					{
						field: 'newactivecases',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'totalactivecases',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},

					{
						field: 'tests',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'positivetest',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: "N/A"
					},


					{field: 'population', sortable: true, align: 'right', footerFormatter: "N/A"},
					{
						field: 'tests_population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'cases_population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},


				]

			],

			data: arr
		});
		return myTable;
	}


	/************* US County ***************/

	function myTable_europe_new(arr) {
		var myTable = $('.table_europe').bootstrapTable({
			height: 1000,
			locale: 'en_US',
			columns: [
				[
					{
						field: 'country',
						sortable: true,
						rowspan: 2,
						align: 'left',
						valign: 'middle',
						footerFormatter: countFormatter
					},
					{
						field: 'totalcases',
						rowspan: 2,
						sortable: true,
						valign: 'middle',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},

				], [

					{
						field: 'newdeaths',
						title: 'New',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'totaldeaths',
						title: 'Total',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'deathrate',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},

					{field: 'newrecoveries', sortable: true, align: 'right', footerFormatter: "N/A"},
					{
						field: 'totalrecoveries',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'recoveryrate',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},

					{
						field: 'newactivecases',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'totalactivecases',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},

					{
						field: 'tests',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'positivetest',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter_percent
					},


					{
						field: 'population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'tests_population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},
					{
						field: 'cases_population',
						sortable: true,
						align: 'right',
						formatter: numberFormatter,
						footerFormatter: totalFormatter
					},


				]

			],
			data: arr
		});
		return myTable;
	}

	function countFormatter(data) {
		return data.length
	}

	function numberFormatter(value, row) {
		return value.toLocaleString('en-US', 2);
	}


	/***************************WORLD*******************************************/


	function totalFormatter(data) {
		var field = this.field
		var total = data.map(function (row) {
			return row[field]
		}).reduce(function (sum, i) {
			return sum + i
		}, 0);
		return total.toLocaleString('en-US');
	}

	function totalFormatter_percent(data) {
		var field = this.field
		var total = data.map(function (row) {
			return row[field]
		}).reduce(function (sum, i) {
			return parseFloat(sum).toFixed(2) + parseFloat(i).toFixed(2)
		}, 0);
		return total.toLocaleString('en-US');
	}


	function data_for_chart_category(data) {
		var arr_categories = [];
		for (var key in data) {
			arr_categories.push([key]);
		}
		return arr_categories;
	}

	function data_for_chart_data(data) {
		var arr_data = [];
		for (var key in data) {
			arr_data.push([data[key]]);
		}
		return arr_data;
	}

	$(function () {

		var array_list_countries = ['<iframe src="https://github-jlw84g-bdcq2e.stackblitz.io/?countries=Afghanistan&hide=&chart=New%20cases&avg=7&pop=1000000&log=0&dataset=JHU&startDate=2020-01-22" code_area="AF" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="350px" width="250px" allowfullscreen></iframe>', 
		'<iframe src="https://github-jlw84g-bdcq2e.stackblitz.io/?countries=Albania&hide=&chart=New%20cases&avg=7&pop=1000000&log=0&dataset=JHU&startDate=2020-01-22" code_area="AL" style="border:0px #ffffff none;"  name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="350px" width="250px" allowfullscreen></iframe>', 
		'<iframe src="https://github-jlw84g-bdcq2e.stackblitz.io/?countries=Algeria&hide=&chart=New%20cases&avg=7&pop=1000000&log=0&dataset=JHU&startDate=2020-01-22" code_area="DZ"style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="350px" width="250px" allowfullscreen></iframe>', '<iframe src="https://github-jlw84g-bdcq2e.stackblitz.io/?countries=Andorra&hide=&chart=New%20cases&avg=7&pop=1000000&log=0&dataset=JHU&startDate=2020-01-22" code_area="AD" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="350px" width="250px" allowfullscreen></iframe>', '<iframe src="https://github-jlw84g-bdcq2e.stackblitz.io/?countries=Angola&hide=&chart=New%20cases&avg=7&pop=1000000&log=0&dataset=JHU&startDate=2020-01-22" code_area="AO" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="350px" width="250px" allowfullscreen></iframe>', '<iframe src="https://github-jlw84g-bdcq2e.stackblitz.io/?countries=Iraq&hide=&chart=New%20cases&avg=7&pop=1000000&log=0&dataset=JHU&startDate=2020-01-21" code_area="IQ" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="350px" width="250px" allowfullscreen></iframe>'];




		var data_lessthan3 = [];
		var data_threetofive = [];
		var data_five = [];

		var url_location_info_predict = '<?php echo base_url('csv_trend/list_countries_diff.json'); ?>';



	$.getJSON(url_location_info_predict, null, function (data_predict) {

		


		$.each(data_predict, function(index, item) {
			var informationB = data_predict[index].country;
			var informationB2 = data_predict[index].new_cases_percentage;

			$.each(array_list_countries, function(index, item) {
				var infoi = array_list_countries[index];
				
				if (infoi.search('code_area="' + informationB + '"') > -1){

					if (informationB2 < 3){

						data_lessthan3.push({
							name: infoi
						});

						$('#table_trend_b').bootstrapTable({
							data: data_lessthan3
						});

					}

					else if(informationB2 >= 3  && informationB2  < 5)  {

					}else if(informationB2 >= 5){

						data_five.push({
							name2: infoi
						});

						$('#table_trend_b2').bootstrapTable({
							data: data_five
						});

					}		

					//alert(informationB  + "-" + informationB2);
				}

			});	
		});	



	

	});







		// $.getJSON(url_location_info_predict, null, function (data_predict) {
			
		// 	$.each(data_predict, function(index, item) {
			

		// 	/*
		// 		if (data_predict[i].country === array_list_countries[index] ){

		// 			alert(array_list_countries[index]);

		// 		}	
		// 	*/
			
		// 	if(jQuery.inArray("AF",array_list_countries) != -1) {

		// 		alert(array_list_countries[index]);

		// 	}	

					

		// 		//if (data_predict[i].new_cases_percentage < 3){


		// 		//}	
		// 		//alert(data_predict[index].country + "-" + data_predict[index].new_cases_percentage);
   
			
		// });		


		// });			
		
		/* Checking the graphs if its safe or not */



/*
		

		$('#table_trend_b2').bootstrapTable({
			data: data
		});

		
*/
		/* Checking the graphs if its safe or not */
		//var url = '<?php echo base_url('get-covid19-data/dashboard'); ?>';
		//var url = '<?php echo base_url('get-covid19-data/new_daily_cases'); ?>';
		//var url = '<?php echo base_url('get-covid19-data/new_daily_deaths'); ?>';

		//var url = 'https://api.covid19api.com/world/total';

		var url = "https://corona.lmao.ninja/v2/all";
		$.getJSON(url, null, function (data) {
			$("#total_cases").text(Number(data.cases).toLocaleString('en'));
			$("#total_deaths").text(Number(data.deaths).toLocaleString('en'));
			$("#total_recoveires").text(Number(data.recovered).toLocaleString('en'));
			$("#total_active").text(Number(data.active).toLocaleString('en'));

			activecases_world = data.active;
			dailycases_world = data.todayCases;
			dailydeaths_world = data.todayDeaths;

			$("#new_cases").text(" " + Number(dailycases_world).toLocaleString('en') + " new active");
			$("#new_deaths").text(" " + Number(dailydeaths_world).toLocaleString('en') + " new deaths");


			sumconfirmed_world = data.cases;
			sumdeaths_world = data.deaths;
			sumrecovered_world = data.recovered;

			$("#percentage_death").text(parseFloat((sumdeaths_world / sumconfirmed_world) * 100).toFixed(2) + "%");
			$("#percentage_recoveries").text(parseFloat((sumrecovered_world / sumconfirmed_world) * 100).toFixed(2) + "%");

			//var active_cases = sumconfirmed_world - (parseInt(sumrecovered_world) + parseInt(sumdeaths_world));

			//$("#total_active").text(Number(active_cases).toLocaleString('en'));

			$("#percentage_active_case").text(parseFloat((data.active / sumconfirmed_world) * 100).toFixed(2) + "%");

		});

		/*** INformation Asia Country ***/
		var url_asia = 'https://corona.lmao.ninja/v2/continents/Asia?strict';
		var url_asia2 = 'https://corona.lmao.ninja/v2/countries/';
		$.getJSON(url_asia, null, function (data3) {

			dailycases_asia = data3.todayCases;
			dailydeaths_asia = data3.todayDeaths;

			activecases_asia = data3.active;


			var info_asia = myData_asia(data3);
			var new_url_asia = url_asia2 + info_asia + '?sort';
			$.getJSON(new_url_asia, null, function (data4) {
				var info_asia_new = myData_asia2(data4);
				myTable_asia_new(info_asia_new);
			});
		});
		/*** Information Asia Country ***/

		/*** Information US Country 2 ***/
		var url_usadetailed = 'https://corona.lmao.ninja/v2/countries/USA';
		$.getJSON(url_usadetailed, null, function (data_usa) {

			dailycases_usa = data_usa.todayCases;
			dailydeaths_usa = data_usa.todayDeaths;

			activecases_usa = data_usa.active;
		});
		/*** Information US Country 2 ***/


		/*** Information US County ***/
		var url_usa = 'https://corona.lmao.ninja/v2/states?sort';
		$.getJSON(url_usa, null, function (data) {
			var rawData_uscounties = myData_states(data);
			myTable_states(rawData_uscounties);
		});
		/*** Information US County ***/
		/*** Information Europe Country ***/



		var url_europe = 'https://corona.lmao.ninja/v2/continents/Europe?strict';
		var url_europe2 = 'https://corona.lmao.ninja/v2/countries/';
		$.getJSON(url_europe, null, function (data3) {

			dailycases_europe = data3.todayCases;
			dailydeaths_europe = data3.todayDeaths;

			activecases_europe = data3.active;

			var info_europe = myData_europe(data3);
			var new_url_europe = url_europe2 + info_europe + '?sort';
			$.getJSON(new_url_europe, null, function (data4) {
				var info_europe_new = myData_europe2(data4);
				myTable_europe_new(info_europe_new);
			});
		});
		/*** Information Europe Country ***/
		var url = '<?php echo base_url('csv_trend/latest_world_table_covid19.json'); ?>';
		$.getJSON(url, null, function (data) {
			var rawData = myData(data);
			myTable(rawData);
		});
		var url = '<?php echo base_url('get-covid19-data/new_daily_cases'); ?>';
		$.getJSON(url, null, function (data) {
			Highcharts.chart('daily_new_cases', {
				chart: {
					renderTo: 'container',
					type: 'column'
				},
				title: {
					text: 'Daily Cases of COVID-19 (World)'
				},
				tooltip: {
					shared: true
				},
				xAxis: {
					categories: data_for_chart_category(data),
					crosshair: true
				},
				yAxis: [{
					title: {
						text: ''
					}
				}, {
					title: {
						text: ''
					},
					minPadding: 0,
					maxPadding: 0,
					max: 100,
					min: 0,
					opposite: true,
					labels: {
						format: "{value}%"
					}
				}],

				plotOptions: {
					series: {
						marker: {
							enabled: false,
						}
					}
				},
				series: [{
					type: 'line',
					showInLegend: false,
					name: 'Daily Confirmed Graph',
					id: "primary",
					data: data_for_chart_data(data),
					marker: {
						enabled: false,
						lineWidth: 3,
						lineColor: Highcharts.getOptions().colors[1],
						fillColor: 'black'
					},
					color: '#808080'


				}, {
					name: '7-day moving graph',
					linkedTo: 'primary',
					showInLegend: true,
					type: 'trendline',
					algorithm: 'SMA',
					periods: 7,
					lineWidth: 4,
					zIndex: 2,
				}, {
					name: 'Total New Daily Cases',
					type: 'column',
					zIndex: 1,
					data: data_for_chart_data(data),
					color: '#808080'
				}],
				tooltip: {

					shared: false,
					split: false
					/*
      formatter: function() {

      	var index = this.series.points.indexOf(this.point);

      	return this.x + '<br>' + '<span style="color:black"> Confirmed Daily Case:' + parseInt(this.y) + '<br><span style="color:red"> Average 7 Day cases:' + parseInt(this.y/7) + '</br>';
       //return this.x + ', ' + this.y;
      }*/
				},
			});
		});
		var url = '<?php echo base_url('get-covid19-data/new_daily_deaths'); ?>';
		$.getJSON(url, null, function (data) {
			Highcharts.chart('daily_new_deaths', {
				chart: {
					renderTo: 'container',
					type: 'column'
				},
				title: {
					text: 'Daily Deaths of COVID-19 (World)'
				},
				tooltip: {
					shared: true
				},
				xAxis: {
					categories: data_for_chart_category(data),
					crosshair: true
				},
				yAxis: [{
					title: {
						text: ''
					}
				}, {
					title: {
						text: ''
					},
					minPadding: 0,
					maxPadding: 0,
					max: 100,
					min: 0,
					opposite: true,
					labels: {
						format: "{value}%"
					}
				}],

				plotOptions: {
					series: {
						marker: {
							enabled: false,
						}
					}
				},
				series: [{
					type: 'line',
					showInLegend: false,
					name: 'Daily Confirmed Graph',
					id: "primary",
					data: data_for_chart_data(data),
					marker: {
						enabled: false,
						lineWidth: 3,
						lineColor: Highcharts.getOptions().colors[1],
						fillColor: 'black'
					},
					color: '#808080'


				}, {
					name: '7-day moving graph',
					linkedTo: 'primary',
					showInLegend: true,
					type: 'trendline',
					algorithm: 'SMA',
					periods: 7,
					lineWidth: 4,
					zIndex: 2,
				}, {
					name: 'Total New Daily Deaths',
					type: 'column',
					zIndex: 1,
					data: data_for_chart_data(data),
					color: '#808080'
				}],
				tooltip: {

					shared: false,
					split: false
				},
			});
		});


	});
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


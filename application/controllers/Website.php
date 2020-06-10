<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function index(){
		$data = array(
			'title' => 'CovidInsights',
			'main_content' => 'website/index'
		);
		$this->load->view('include/template', $data);
	}

	public function get_covid19_data($page){
		if ($page == 'dashboard') :
			$dashboard_data = $this->get_dashboard_data();
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($dashboard_data));
		elseif ($page == 'new_daily_cases') :
			$daily_new_cases = $this->get_chart_data('new_daily_cases');
			ksort($daily_new_cases);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases));
		elseif ($page == 'new_daily_deaths') :
			$daily_new_deaths = $this->get_chart_data('new_daily_deaths');
			ksort($daily_new_deaths);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_deaths));

/*** daily Total Asia ***/



		elseif ($page == 'daily_totalconfirmed_asia') :
			$daily_new_cases_asia = $this->get_trend_information_asia_totaldailycases();
			ksort($daily_new_cases_asia);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_asia));

/*** daily deaths Total Asia ***/

	
		elseif ($page == 'daily_totaldeaths_asia') :
			$daily_new_deaths_asia = $this->get_trend_information_asia_totaldailydeaths();
			ksort($daily_new_deaths_asia);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_deaths_asia));

/*** daily Total Europe ***/

		elseif ($page == 'daily_totalconfirmed_europe') :
			$daily_new_cases_europe = $this->get_trend_information_europe_totaldailycases();
			ksort($daily_new_cases_europe);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_europe));

/*** daily Total deaths Europe ***/


		elseif ($page == 'daily_totaldeaths_europe') :
			$daily_new_deaths_europe = $this->get_trend_information_europe_totaldailydeaths();
			ksort($daily_new_deaths_europe);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_deaths_europe));

/*** daily Total USA ***/

	   elseif ($page == 'daily_totalconfirmed_usa') :
			$daily_new_cases_usa = $this->get_trend_information_usa_totaldailycases();
			ksort($daily_new_cases_usa);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_usa));

/*** daily Total deaths USA ***/

	 elseif ($page == 'daily_totaldeaths_usa') :
			$daily_new_deaths_usa = $this->get_trend_information_usa_totaldailydeaths();
			ksort($daily_new_deaths_usa);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_deaths_usa));


/**** WORLD ****/

	 elseif ($page == 'daily_totalcases_afg') :
			$daily_new_cases_afg = $this->get_trend_information_Afghanistan_totaldailycases();
			ksort($daily_new_cases_afg);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_afg));

	 elseif ($page == 'daily_totalcases_alb') :
			$daily_new_cases_alb = $this->get_trend_information_Albania_totaldailycases();
			ksort($daily_new_cases_alb);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_alb));

	 elseif ($page == 'daily_totalcases_dza') :
			$daily_new_cases_dza = $this->get_trend_information_Algeria_totaldailycases();
			ksort($daily_new_cases_dza);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_dza));
					
	 elseif ($page == 'daily_totalcases_dza') :
			$daily_new_cases_dza = $this->get_trend_information_Algeria_totaldailycases();
			ksort($daily_new_cases_dza);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_dza));
					
	 elseif ($page == 'daily_totalcases_and') :
			$daily_new_cases_and = $this->get_trend_information_Andorra_totaldailycases();
			ksort($daily_new_cases_and);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_and));

	elseif ($page == 'daily_totalcases_ago') :
			$daily_new_cases_ago = $this->get_trend_information_Angola_totaldailycases();
			ksort($daily_new_cases_ago);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_ago));


	elseif ($page == 'daily_totalcases_Anguilla') :
			$daily_new_cases_Anguilla = $this->get_trend_information_Anguilla_totaldailycases();
			ksort($daily_new_cases_Anguilla);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($daily_new_cases_Anguilla));
					
					
			

	endif;
	}

	function get_trend_information_asia_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_asia_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Asia"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_asia_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_asia_totaldailycases;

	}


	function get_trend_information_asia_totaldailydeaths(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_asia_totaldailydeaths = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Asia"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_asia_totaldailydeaths[date("Y-m-d", strtotime($info_new_date))] += $data['deaths'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_asia_totaldailydeaths;

	}


/****** Europe ********/
function get_trend_information_europe_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_europe_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Europe"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_europe_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_europe_totaldailycases;

	}


	function get_trend_information_europe_totaldailydeaths(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_europe_totaldailydeaths = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Europe"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_europe_totaldailydeaths[date("Y-m-d", strtotime($info_new_date))] += $data['deaths'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_europe_totaldailydeaths;

	}

/****** USA ********/
function get_trend_information_usa_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_usa_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "America" && $data['countriesAndTerritories'] == "United_States_of_America"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_usa_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_usa_totaldailycases;

	}


	function get_trend_information_usa_totaldailydeaths(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_usa_totaldailydeaths = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "America" && $data['countriesAndTerritories'] == "United_States_of_America"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_usa_totaldailydeaths[date("Y-m-d", strtotime($info_new_date))] += $data['deaths'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_usa_totaldailydeaths;

	}

/*************** Country Information ***********/

function get_trend_information_Afghanistan_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_afg_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Asia" && $data['countriesAndTerritories'] == "Afghanistan"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_afg_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_afg_totaldailycases;

	}

function get_trend_information_Albania_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_alb_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Europe" && $data['countriesAndTerritories'] == "Albania"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_alb_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_alb_totaldailycases;

	}


	function get_trend_information_Algeria_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_dza_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Africa" && $data['countriesAndTerritories'] == "Algeria"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_dza_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_dza_totaldailycases;

	}


	function get_trend_information_Andorra_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_and_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Europe" && $data['countriesAndTerritories'] == "Andorra"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_and_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_and_totaldailycases;

	}


function get_trend_information_Angola_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_ago_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "Africa" && $data['countriesAndTerritories'] == "Angola"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_ago_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_ago_totaldailycases;

	}


	function get_trend_information_Anguilla_totaldailycases(){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv_trend/latest_worldwide_trend_covid19.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$dashboard_data_Anguilla_totaldailycases = array();
		$i = 0;
		foreach($content_data as $data) :
			
			if ($data['continentExp'] == "America" && $data['countriesAndTerritories'] == "Anguilla"){

				$info_new_date = str_replace('/', '-', $data['dateRep']);

			@$dashboard_data_Anguilla_totaldailycases[date("Y-m-d", strtotime($info_new_date))] += $data['cases'];

				
			}
		
			$i++;
		endforeach;
	return $dashboard_data_Anguilla_totaldailycases;

	}
/*************** Country Information ***********/

	function get_dashboard_data(){

		/* Backup information */

		// $separator = ';';    /** separator used to explode each line */
		// $enclosure = '"';    /** enclosure used to decorate each field */
		// $max_row_size = 4096;    /** maximum row size to be used for decoding */
		// $p_Filepath = 'csv/current_summary.csv';
		// $file = fopen($p_Filepath, 'r');
		// $fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		// $keys_values = str_getcsv($fields[0]);
		// $keys = $this->escape_string($keys_values);
		// $content_data = array();
		// while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
		// 	if( $row != null ) : // skip empty lines
		// 		$values = str_getcsv($row[0]);
		// 		if (count($keys) == count($values)) :
		// 			$arr = array();
		// 			$new_values = $this->escape_string($values);
		// 			$j=0;
		// 			foreach($keys as $key => $label) :
		// 				$arr[$label] = trim($new_values[$j]);
		// 				$j++;
		// 			endforeach;
		// 			$content_data[] = $arr;
		// 		endif;
		// 	endif;
		// endwhile;

		// $dashboard_data = array();
		// $i = 0;
		// foreach($content_data as $data) :
		// 	$dashboard_data[$i]['date'] = date('Y-m-d', strtotime($data['Date']));
		// 	$dashboard_data[$i]['iso_code'] = $data['CountryCode'];
		// 	$dashboard_data[$i]['location'] = $data['Country'];
		// 	$dashboard_data[$i]['new_cases'] = $data['NewConfirmed'];
		// 	$dashboard_data[$i]['total_cases'] = $data['TotalConfirmed'];
		// 	$dashboard_data[$i]['new_deaths'] = $data['NewDeaths'];
		// 	$dashboard_data[$i]['total_deaths'] = $data['TotalDeaths'];
		// 	$dashboard_data[$i]['new_recovered'] = $data['NewRecovered'];
		// 	$dashboard_data[$i]['total_recovered'] = $data['TotalRecovered'];
		// 	$i++;
		// endforeach;
		// return $dashboard_data;

		/* Backup Information */




	}
	function get_chart_data($request){
		$separator = ';';    /** separator used to explode each line */
		$enclosure = '"';    /** enclosure used to decorate each field */
		$max_row_size = 4096;    /** maximum row size to be used for decoding */
		$p_Filepath = 'csv/latest.csv';
		$file = fopen($p_Filepath, 'r');
		$fields = fgetcsv($file, $max_row_size, $separator, $enclosure);
		$keys_values = str_getcsv($fields[0]);
		$keys = $this->escape_string($keys_values);
		$content_data = array();
		while( ($row = fgetcsv($file, $max_row_size, $separator, $enclosure)) != false ) :
			if( $row != null ) : // skip empty lines
				$values = str_getcsv($row[0]);
				if (count($keys) == count($values)) :
					$arr = array();
					$new_values = $this->escape_string($values);
					$j=0;
					foreach($keys as $key => $label) :
						$arr[$label] = trim($new_values[$j]);
						$j++;
					endforeach;
					$content_data[] = $arr;
				endif;
			endif;
		endwhile;

		$codes = json_decode(file_get_contents('http://country.io/iso3.json'), true);

		foreach($codes as $iso2 => $iso3) :
			$iso3_to_iso2[$iso3] = $iso2;
		endforeach;
		$iso3_to_iso2['RKS'] = 'RK';
		$iso3_to_iso2[''] = 'WRLD';

		foreach($content_data as $data) :
			if (!isset($daily_new_cases[$data['date']])):
				$daily_new_cases[$data['date']] = 0;
			endif;
			$daily_new_cases[$data['date']] += $data['new_cases'];

			if (!isset($daily_new_deaths[$data['date']])):
				$daily_new_deaths[$data['date']] = 0;
			endif;
			$daily_new_deaths[$data['date']] += $data['new_deaths'];
		endforeach;
		if ($request == 'new_daily_cases') :
			return $daily_new_cases;
		else :
			return $daily_new_deaths;
		endif;
	}

	function escape_string($data){
		$result =   array();
		foreach($data as $row):
			$row1 = str_replace('"', '',$row);
			$result[] = trim($row1);
		endforeach;
		return $result;
	}

	function jsonToCSV($data, $cfilename){
		$fp = fopen($cfilename, 'w');
		$header = array(
			'Country',
			'CountryCode',
			'Slug',
			'NewConfirmed',
			'TotalConfirmed',
			'NewDeaths',
			'TotalDeaths',
			'NewRecovered',
			'TotalRecovered',
			'Date'
		);
		fputcsv($fp, $header);

		foreach ($data['Countries'] as $row) :
			fputcsv($fp, $row);
		endforeach;
		fclose($fp);
		return true;
	}



	public function cron_run(){
		$p_Filepath = 'https://covid.ourworldindata.org/data/owid-covid-data.csv';
		$download_csv = 'csv/latest.csv';
		if(file_put_contents( $download_csv,file_get_contents($p_Filepath))) :
			echo 'download success';
		endif;


	   $p_Filepath_URL = "https://corona.lmao.ninja/v2/countries?sort";

	   $info_file_world = 'csv_trend/latest_world_table_covid19.json';

	   if(file_put_contents($info_file_world,file_get_contents($p_Filepath_URL))) :
			echo 'download success';
		endif;


	   $p_Filepath_URL = "https://corona.lmao.ninja/v2/historical?lastdays=all";

	   $info_file_world = 'csv_trend/countries_timeline.json';

	   if(file_put_contents($info_file_world,file_get_contents($p_Filepath_URL))) :
			echo 'download success';
		endif;



	 //   $p_Filepath_URL_group = "https://api.covid19api.com/all";

	 //   $info_file_world_group = 'csv_trend/info_countries_group.json';

	 //   if(file_put_contents($info_file_world_group,file_get_contents($p_Filepath_URL_group))) :
		// 	echo 'download success';
		// endif;


		
/*
		$this->load->library('CovidAPI');
		$params = array('url' => 'https://api.covid19api.com/summary');
		$jfilename = $this->covidapi->get_summary($params);
		$cfilename= 'csv/current_summary.csv';
		if ($this->jsonToCSV($jfilename, $cfilename)) :
			echo 'download success';
		endif;
*/
		/*** JSON information ***/
		$p_Filepath_json = "https://opendata.ecdc.europa.eu/covid19/casedistribution/csv";

		$info_file = 'csv_trend/latest_worldwide_trend_covid19.csv';

		if(file_put_contents($info_file,file_get_contents($p_Filepath_json))) :
			echo 'download success';
		endif;
		/*** JSON information ***/


		
	 
	}
}

<?php
	
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://moz.gov.ua/article/news/operativna-informacija-pro-poshirennja-koronavirusnoi-infekcii-2019-cov19");
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($c);
	$PATH = $_SERVER['DOCUMENT_ROOT']."/UA_Map/Maps/Pandemic Map of Ukraine/data/code.txt";
	file_put_contents($PATH, $output);
	curl_close($c);    
	
	$lines = file($PATH);
	$disallowed = 'абгґдеєжзиіїйклмнопрстуфхцчшщьюя&nbspdahrtvico;<>-_+:;*\/?!|" ';
	$st = (int)find_line("даними Центру", $PATH);
	$all_vac_1 = str_replace(str_split($disallowed), '', between_strings($lines[$st], 'али 1 дозу', ' ос'));
	$all_vac_2 = str_replace(str_split($disallowed), '', between_strings($lines[$st], '2 дози)', 'ос'));
	$all_vac = parse_string($all_vac_1 + $all_vac_2);
	$tdy_vac = parse_string(str_replace(str_split($disallowed), '', str_replace('covid-19', '', between_strings($lines[$st+1], 'щеплено', ', '))));
	$report_date = str_replace(' </div>', '', translate($lines[(int)find_line("article__views-cnt-date", $PATH)]));
	$test_all = parse_string(str_replace(str_split(' </p>'), '', $lines[(int)find_line("проведено ПЛР-тестувань", $PATH) + 4]));
	$test_tdy = parse_string(str_replace(str_split($disallowed), '', $lines[(int)find_line("Здійснено тестувань за добу", $PATH) + 3]));
	
	$data_table = [[]];				
	$x = (int)find_line("<p><strong>Україна</strong></p>", $PATH) + 2;

	for ($i = 0; $i < 26; $i++) {
		for ($j = 0; $j < 6; $j++) {
			//cases[all|day], died[all|day], recovered[all|day]

			//do not work in php-svg
			// $data_table[$i][$j] = parse_string(str_replace(str_split($disallowed), '', $lines[$x]));
					
			$data_table[$i][$j] = str_replace(str_split($disallowed), '', $lines[$x]);
			$x += 3;		
		}
		$x += 5;
	}

	$procents = [];
	for ($i = 1; $i < 26; $i++)
	{
		$procents[$i] = (float)((float)$data_table[$i][0] / ((float)$data_table[0][0] / 100));
	}

	
	// F U N C T I O N S	
	function find_line($search , $file)
	{	
		$line_number = false;
		if ($handle = fopen($file, "r")) 
		{
		   $count = 0;
		   
		   while (($line = fgets($handle, 4096)) !== FALSE and !$line_number) 
		   {
			  $count++;
			  $line_number = (strpos($line, $search) !== FALSE) ? $count : $line_number;
		   }
		   fclose($handle);
		}	
		
		return $line_number;
	}

	function between_strings($str, $begin, $end)
	{
		$sub_start = strpos($str, $begin);
		$sub_start += strlen($begin);  
		$size = strpos($str, $end, $sub_start) - $sub_start;  

		return strtolower(substr($str, $sub_start, $size));  
	}

	function parse_string($str)
	{
		$num = (int)$str;
		
		if ($num > 0) 
		{		
			return number_format($num, 0, '', ' ');
		}

		return "?";
	}

	function translate($str)
	{
		switch (true) {
			case stristr($str, 'січня'):
				$tr = str_replace('січня', '.01.', $str);
				break;
			case stristr($str, 'лютого'):
				$tr = str_replace('лютого', '.02.', $str);
				break;
			case stristr($str, 'березня'):
				$tr = str_replace('березня', '.03.', $str);
				break;
			case stristr($str, 'квітня'):
				$tr = str_replace('квітня', '.04.', $str);
				break;
			case stristr($str, 'травня'):
				$tr = str_replace('травня', '.05.', $str);
				break;
			case stristr($str, 'червня'):
				$tr = str_replace('червня', '.06.', $str);
				break;
			case stristr($str, 'липня'):
				$tr = str_replace('липня', '.07.', $str);
				break;
			case stristr($str, 'серпня'):
				$tr = str_replace('серпня', '.08.', $str);
				break;
			case stristr($str, 'вересня'):
				$tr = str_replace('вересня', '.09.', $str);
				break;
			case stristr($str, 'жовтня'):
				$tr = str_replace('жовтня', '.10.', $str);
				break;
			case stristr($str, 'листопада'):
				$tr = str_replace('листопада', '.11.', $str);
				break;
			case stristr($str, 'грудня'):
				$tr = str_replace('грудня', '.12.', $str);
				break;

			default:
				$tr = $str;
		}

		return str_replace(' ', '', $tr);	
	}
		
 ?>
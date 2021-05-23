<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>COVID-19 pandemic in Ukraine | Пандемія Ковід-19 в Україні</title>
	<meta name="author" content="BGDNkl">
	<meta name="description" content="🏥 ❘ 🇪🇳 ❘ Information about the COVID-19 pandemic in Ukraine – recent reports, interactive map of infections. <br> 🦠 ❘ 🇺🇦 ❘ Інформація про пандемію COVID-19 в Україні – свіжі звіти, інтерактивна карта заражень, відсоток і щільність заражених."/>
	<meta name="keywords" content="covid in Ukraine, COVID-19 pandemic in Ukraine, covid, covid-19, virus in Ukraine, infection in Ukraine, report covid Ukraine, pandemic in Ukraine, disease map, coronavirus in Ukraine, ковід в Україні, covid Україна, ковід-19, вірус в Україні, пандемія в Україні, карта заражень, коронавірус в Україні, ковид Украина, covid Украина, ковид, вирус в Украине, пандемия в Украине,  коронавирус в Украине"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	
	<link rel="icon" type="image/svg+xml" href="img/info.svg">
	<link rel="preload" href="style/m_style.css" as="style">
	<link rel="stylesheet" href="style/m_style.css">	
    	
	<?php include ('php/source.php'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>

<body onload="changeLang('en')">														
	<table class="center">
		<tr>
			<th style="width: 30%; display: inline;">
				<section style="height: 8%;">
					<!-- T I T L E -->
					<h2 id="ttl"></h2>						
				</section>
				
				<!-- L A N G   S W I T C H -->
				<div class="tooltip" id="svg_tt_3" style="height: 11%; padding-left: 8%;">
					<img src="img/tap.png" alt="tap" title="tap" width="40" height="40">
					<span id="sp3" class="tooltiptext"></span>
					<input type="image" id="flag" src="" width="90" height="60" onclick=""/>
				</div>

				<section style="height: 65%; ">										
					<!-- H E A D E R   T A B L E -->
					<table id="h_tab"> 						
						<tr>
							<td copspan="2" style="width: 40%; "><h3 id="rp"> <h3><h4> <?php echo $report_date; ?> </h4></th>
							<th scope="col" id="head_tdy" style="width: 37%;"></th> 
							<th scope="col" id="head_all" style="width: 32%;"></th>
						</tr>	
					</table>

					<!-- T A B L E  -->
					<table id="tab_info">   
						<thead>
							<tr>
								<th scope="col" style="width: 3%;"></th>
								<th scope="col" style="width: 31%;"></th>
								<th scope="col" style="width: 26%;"></th> 
								<th scope="col" style="width: 30%;"></th>
							</tr>
						</thead>
						<tbody> 					
							<tr>
								<td>
								</td>
								<td id="lft-1"></td>
								<td id="rgt"><?php echo parse_string($data_table[0][1]); ?></td> 
								<td id="rgt"><?php echo parse_string($data_table[0][0]); ?></td> 
							</tr>							              
							<tr>
								<td>
								</td>
								<td id="lft-2"></td>
								<td id="rgt"><?php echo parse_string($data_table[0][5]); ?></td> 
								<td id="rgt"><?php echo parse_string($data_table[0][4]); ?></td> 
							</tr>
							<tr>
								<td>
								</td>
								<td id="lft-3"></td>
								<td id="rgt"><?php echo parse_string($data_table[0][3]); ?></td> 
								<td id="rgt"><?php echo parse_string($data_table[0][2]); ?></td> 
							</tr>
							<tr>
								<td>
								</td>
								<td id="lft-4"></td>
								<td id="rgt"><?php echo $test_tdy; ?></td> 									
								<td id="rgt"><?php echo $test_all; ?></td> 									
							</tr>
							<tr>
								<td>
								</td>
								<td id="lft-5"></td>
								<td id="rgt"><?php echo $vac_tdy; ?></td> 																	
								<td id="rgt"><?php echo $vac_all; ?></td> 																	
							</tr>
						</tbody>							
					</table> <!-- end of Table: -->
				</section>
			</th>

			<th style="display: inline;"><h2 id="map_title" style="margin-top: 250px;">Map:</h2></th>
			
			<th style="width: 65%; display: inline;">						           
				<section style="height: 40%;">
					<section>						
						<!-- SVG in PHP: -->
						<object id="obj"></object>
					</section>

					<section id="dots" style="height: 5%;">
						<!-- D O T S -->
						<div class="tooltip" id="svg_dot_1">
							<span id="sp4" class="tooltiptext"></span>
							<a>							
							<svg id="my_dot_1" xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16" onclick="changeMap(1)">
								<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
							</svg>								
							</a>
						</div>
						<div class="tooltip" id="svg_dot_2">
							<span id="sp5" class="tooltiptext"></span>
							<a>							
							<svg id="my_dot_2" xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16" onclick="changeMap(2)">
								<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
							</svg>								
							</a>
						</div>
					</section>
				</section>
                
				<section>
					<div id="desc">							
						<table class="desc_tab">
							<tr>
								<th scope="col" style="width: 7%;"></th>
								<th scope="col" style="width: 93%;"></th>
							</tr>
							<tr>
								<td class="desc_tab_cell">*&nbsp;– </td>
								<td class="desc_tab_cell" id="note1">Data from the temporarily occupied territories of the Autonomous Republic of Crimea, Donetsk, Luhansk oblasts and the city of Sevastopol are missing.</td>
							</tr>
							<tr id="space">
							</tr>
							<tr>
								<td class="desc_tab_cell">?&nbsp;– </td>
								<td class="desc_tab_cell" id="note2">the official source did not specify this data in today's report.</td>
							</tr>
						</table>
					</div>

					<!-- Footer -->						
					<div id="ftr">							
						<a id="n_link">© 2021&nbsp;&nbsp;</a>
						<a id="link" class="text-dark" href="https://github.com/BGDNkl/">BGDNkl</a>
					</div>	
				</section>               
			</th>
		</tr>
	</table>


	<!-- Scripts: -->	
	<script>	
	// Language switch via button
	function changeLang(str) {
		var ttl = document.getElementById("ttl");
		var rp = document.getElementById("rp");
		var head_tdy = document.getElementById("head_tdy");
		var head_all = document.getElementById("head_all");
		var lft1 = document.getElementById("lft-1");
		var lft2 = document.getElementById("lft-2");
		var lft3 = document.getElementById("lft-3");
		var lft4 = document.getElementById("lft-4");
		var lft5 = document.getElementById("lft-5");
		var map = document.getElementById("map_title");
		var note1 = document.getElementById("note1");
		var note2 = document.getElementById("note2");
		var obj = document.getElementById("obj");
		var btn = document.getElementById("flag");
		var spn = document.getElementById("sp3");
		var sp1 = document.getElementById("sp4");
		var sp2 = document.getElementById("sp5");
		var dt1 = document.getElementById("my_dot_1");
		var dt2 = document.getElementById("my_dot_2");
		
		switch (str)
		{
			case 'en':
				ttl.textContent = "COVID-19 pandemic in Ukraine";
				rp.innerHTML = "Report for:";
				head_tdy.innerHTML = "Per day:";
				head_all.innerHTML = "Overall:";
				lft1.innerHTML = "Cases:";
				lft2.innerHTML = "Recovered:";
				lft3.innerHTML = "Died:";
				lft4.innerHTML = "Tests:";
				lft5.innerHTML = "Vaccinated:";
				map.innerHTML = "Map:";
				note1.innerHTML = "Data from the temporarily occupied territories of the Autonomous Republic of Crimea, Donetsk, Luhansk oblasts and the city of Sevastopol are missing";
				note2.innerHTML = "the official source did not specify this data in today's report.";
				obj.data = "img/map_en.php";
				btn.src = "img/UA.png";
				btn.setAttribute('onclick',"changeLang('ua')");
				spn.innerHTML = "Версія українською";
				sp1.innerHTML = "Show \"Percentage of morbidity by region\"";
				sp2.innerHTML = "Show \"Infected population density by region\"";
				lang = 'en';
				dt1.style.fill='#3884FF';
				dt2.style.fill='#686868';
				break;
			case 'ua':
				ttl.textContent = "Пандемія COVID-19 в Україні";
				rp.innerHTML = "Дані за:";
				head_tdy.innerHTML = "За добу:";
				head_all.innerHTML = "Усього:";
				lft1.innerHTML = "Випадків:";
				lft2.innerHTML = "Одужали:";
				lft3.innerHTML = "Померло:";
				lft4.innerHTML = "Тестів:";
				lft5.innerHTML = "Щеплено:";
				map.innerHTML = "Мапа:";
				note1.innerHTML = "Дані з тимчасово окупованих територій Автономної Республіки Крим, Донецької, Луганської областей та міста Севастополя відсутні.";
				note2.innerHTML = "офіційне джерело не вказало ці дані в сьогоднішньому звіті.";
				obj.data = "img/map_ua.php";
				btn.src = "img/GB.png";
				btn.onclick = "changeLang('en')";
				btn.setAttribute('onclick',"changeLang('en')");
				spn.innerHTML = "English version";
				sp1.innerHTML = "Показати \"Відсоток захворюваності по регіонах\"";
				sp2.innerHTML = "Показати \"Щільність інфікованого населення по регіонах\"";
				lang = 'ua';
				dt1.style.fill='#3884FF';
				dt2.style.fill='#686868';
				break;
			default:
				ttl.innerHTML = "COVID-19 pandemic in Ukraine";
				rp.innerHTML = "Report for:";
				head_tdy.innerHTML = "Per day:";
				head_all.innerHTML = "Overall:";
				lft1.innerHTML = "Cases:";
				lft2.innerHTML = "Recovered:";
				lft3.innerHTML = "Died:";
				lft4.innerHTML = "Tests:";
				lft5.innerHTML = "Vaccinated:";
				map.innerHTML = "Map:";
				note1.innerHTML = "Data from the temporarily occupied territories of the Autonomous Republic of Crimea, Donetsk, Luhansk oblasts and the city of Sevastopol are missing";
				note2.innerHTML = "the official source did not specify this data in today's report.";  
				obj.data = "img/map_en.php"; 
				btn.src = "img/UA.png";
				btn.onclick = "changeLang('ua')";
				btn.setAttribute('onclick',"changeLang('ua')");
				spn.innerHTML = "Версія українською";
				sp1.innerHTML = "Show \"Percentage of morbidity by region\"";
				sp2.innerHTML = "Show \"Infected population density by region\"";
				lang = 'en';
				break;
		}
	}
	
	// to prevent Ctrl + U
	document.onkeydown = function(e) {
		if (e.ctrlKey && 
			(e.keyCode === 67 || 
				e.keyCode === 86 || 
				e.keyCode === 85 || 
				e.keyCode === 117)) 
			{
				return false;
			} else {
				return true;
			}
	};
	
	$(document).keypress("u", function(e) {
		if(e.ctrlKey)
		{
			return false;
		}
		else
		{
			return true;
		}
	});

	// Tooltip
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});

	function changeMap(int) {
		if (int == 1) {
			document.getElementById("my_dot_1").style.fill='#3884FF';
			document.getElementById("my_dot_2").style.fill='#686868';

			if (lang == 'en') 
				document.getElementById("obj").data = "img/map_en.php";
			else
				document.getElementById("obj").data = "img/map_ua.php";
		} else {
			document.getElementById("my_dot_2").style.fill='#3884FF';
			document.getElementById("my_dot_1").style.fill='#686868';

			if (lang == 'en')
				document.getElementById("obj").data = "img/map_density_en.php";
			else
				document.getElementById("obj").data = "img/map_density_ua.php";
		}
	}
	</script>
</body>
</html>
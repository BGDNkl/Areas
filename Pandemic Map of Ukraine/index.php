<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>COVID-19 pandemic in Ukraine</title>
	<meta name="author" content="BGDNkl">
	<meta name="description" content="COVID-19 pandemic in Ukraine">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	
	<link rel="icon" type="image/svg+xml" href="img/info.svg">
	<link rel="preload" href="style/style.css" as="style">
	<link rel="stylesheet" href="style/style.css">	
    	
	<?php include ('php/source.php'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>

<body onload="changeLang('en')">														
	<table class="center">
		<tr>
			<th style="width: 30%;">
				<section style="height: 5%;">
					<!-- T I T L E -->
					<h2 id="ttl"></h2>						
				</section>
				
				<section style="height: 65%;">					
					
					<!-- H E A D E R   T A B L E -->
					<table id="h_tab"> 						
						<tr>
							<td copspan="2" style="width: 48%;"><h3 id="rp"> <h3><h4> <?php echo $report_date; ?> </h4></th>
							<th scope="col" id="head_tdy"></th> 
							<th scope="col" id="head_all"></th>
						</tr>	
					</table>

					<!-- T A B L E  -->
					<table id="tab_info">   
						<thead>
							<tr>
								<th scope="col" style="width: 17%;"></th>
								<th scope="col" style="width: 27%;"></th>
								<th scope="col" style="width: 26%;"></th> 
								<th scope="col" style="width: 30%;"></th>
							</tr>
						</thead>
						<tbody> 					
							<tr>
								<td>
									<img id="icos" src = "img/virus.svg" alt="new cases"/>
								</td>
								<td id="lft-1"></td>
								<td id="rgt"><?php echo parse_string($data_table[0][1]); ?></td> 
								<td id="rgt"><?php echo parse_string($data_table[0][0]); ?></td> 
							</tr>							              
							<tr>
								<td>
									<svg id="icos" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
										<path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
										<path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
									</svg>
								</td>
								<td id="lft-2"></td>
								<td id="rgt"><?php echo parse_string($data_table[0][5]); ?></td> 
								<td id="rgt"><?php echo parse_string($data_table[0][4]); ?></td> 
							</tr>
							<tr>
								<td>
									<svg id="icos" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-shield-x" viewBox="0 0 16 16">
										<path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
										<path d="M6.146 5.146a.5.5 0 0 1 .708 0L8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 0 1 0-.708z"/>
									</svg>
								</td>
								<td id="lft-3"></td>
								<td id="rgt"><?php echo parse_string($data_table[0][3]); ?></td> 
								<td id="rgt"><?php echo parse_string($data_table[0][2]); ?></td> 
							</tr>
							<tr>
								<td>
									<svg id="icos" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="-74 0 512 512" fill="white" >
										<path d="m361.414062 443.589844-108.269531-263.902344c-6.003906-14.640625-9.050781-30.085938-9.050781-45.910156v-69.757813c0-7.511719 2.925781-14.574219 8.238281-19.886719 6.476563-6.476562 10.046875-15.089843 10.046875-24.25v-9.882812c0-5.523438-4.480468-10-10-10h-139.621094c-5.523437 0-10 4.476562-10 10v9.882812c0 9.160157 3.566407 17.773438 10.042969 24.25 5.3125 5.3125 8.238281 12.375 8.238281 19.890626v69.753906c0 15.824218-3.042968 31.269531-9.050781 45.910156l-29.75 72.515625c-.011719.027344-.023437.054687-.035156.082031l-78.484375 191.304688c-6.285156 15.324218-4.53125 32.6875 4.695312 46.441406 9.226563 13.757812 24.621094 21.96875 41.183594 21.96875h265.9375c16.5625 0 31.960938-8.210938 41.1875-21.96875 9.222656-13.757812 10.976563-31.117188 4.691406-46.441406zm-230.921874-256.3125c7-17.058594 10.546874-35.058594 10.546874-53.5v-69.757813c0-12.851562-5.003906-24.9375-14.09375-34.027343-2.671874-2.671876-4.15625-6.21875-4.1875-9.992188h119.621094c-.03125 3.773438-1.515625 7.316406-4.191406 9.992188-9.085938 9.089843-14.09375 21.171874-14.09375 34.027343v69.753907c0 18.441406 3.550781 36.441406 10.546875 53.5l24.144531 58.851562h-152.4375zm209.617187 291.613281c-5.585937 8.332031-14.542969 13.109375-24.574219 13.109375h-265.9375c-10.027344 0-18.984375-4.777344-24.574218-13.109375-4.214844-6.285156-5.824219-13.574219-4.730469-20.761719h16.476562c5.519531 0 10-4.480468 10-10 0-5.523437-4.480469-10-10-10h-9.1875l11.484375-28h16.867188c5.523437 0 10-4.480468 10-10 0-5.523437-4.476563-10-10-10h-8.660156l11.484374-28h17.34375c5.523438 0 10-4.480468 10-10 0-5.523437-4.476562-10-10-10h-9.136718l11.488281-28h17.8125c5.523437 0 10-4.480468 10-10 0-5.523437-4.476563-10-10-10h-9.609375l11.488281-28h168.84375l75.921875 185.054688c3.804688 9.277344 2.785156 19.378906-2.800781 27.707031zm0 0"/>
										<path d="m312.03125 444.214844c-2.09375-5.113282-7.929688-7.558594-13.042969-5.46875-5.109375 2.09375-7.558593 7.929687-5.46875 13.042968l.054688.125c1.585937 3.871094 5.316406 6.214844 9.257812 6.214844 1.261719 0 2.542969-.238281 3.785157-.746094 5.109374-2.09375 7.558593-7.933593 5.464843-13.042968zm0 0"/>
										<path d="m297.898438 409.761719-35.8125-87.289063c-2.09375-5.109375-7.933594-7.554687-13.046876-5.457031-5.109374 2.09375-7.550781 7.9375-5.457031 13.046875l35.8125 87.289062c1.585938 3.871094 5.316407 6.207032 9.257813 6.207032 1.261718 0 2.546875-.238282 3.789062-.75 5.109375-2.09375 7.554688-7.9375 5.457032-13.046875zm0 0"/>
									</svg>
								</td>
								<td id="lft-4"></td>
								<td id="rgt"><?php echo $test_tdy; ?></td> 									
								<td id="rgt"><?php echo $test_all; ?></td> 									
							</tr>
							<tr>
								<td>
									<img src = "img/syringe.svg" id="icos" alt="vaccinated"/>
								</td>
								<td id="lft-5"></td>
								<td id="rgt"><?php echo $vac_tdy; ?></td> 																	
								<td id="rgt"><?php echo $vac_all; ?></td> 																	
							</tr>
						</tbody>							
					</table> <!-- end of Table: -->
				</section>

				<section style="height: 15%;">
					<!-- B U T T O N -->
					<a href="javascript:void(0)" class="button" id="my_btn" onclick="myPopup('Info', 700, 700);"></a>
				</section>
                
				<section style="height: 1%;"></section>
			</th>
			<th style="width: 5%;"> </th>
			<th style="width: 65%;">			
				<section style="height: 3%;"></section>
				              
				<section style="height: 79%;">
					<section style="height: 95%;">
						<!-- SVG: -->
						<!-- <object type="image/svg+xml" data="img/map.svg"></object> -->
						
						<!-- SVG in PHP: -->
						<object id="obj" width="800vh" height="550vh"></object>
					</section>

					<section id="dots" style="height: 5%;">
						<!-- D O T S -->
						<div class="tooltip" id="svg_dot_1">
							<span id="sp4" class="tooltiptext"></span>
							<a>							
							<svg id="my_dot_1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16" onclick="changeMap(1)">
								<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
							</svg>								
							</a>
						</div>
						<div class="tooltip" id="svg_dot_2">
							<span id="sp5" class="tooltiptext"></span>
							<a>							
							<svg id="my_dot_2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16" onclick="changeMap(2)">
								<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
							</svg>								
							</a>
						</div>
					</section>
				</section>
                
				<section style="height: 2%;">					
					<!-- Custom Footer -->											
					<div id="ftr">	
						<div class="tooltip" id="svg_tt_1">
							<span id="sp1" class="tooltiptext">Data from the temporarily occupied territories of the Autonomous Republic of Crimea, Donetsk, Luhansk oblasts and the city of Sevastopol are missing.</span>
							<a id="n_link">							
								<svg id="my_svg_1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(241, 241, 241)"  viewBox="0 0 16 16">
									<path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
								</svg>								
							</a>
						</div>
						<div class="tooltip" id="svg_tt_2">
							<span id="sp2" class="tooltiptext">If you see this sign "?" – it means that the official source did not specify this data in today's report.</span>
							<a id="n_link">							
								<svg id="my_svg_2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="rgb(241, 241, 241)" class="bi bi-question" viewBox="0 0 16 16">
									<path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
								</svg>								
							</a>
						</div>

						<div class="tooltip" id="svg_tt_3">
							<!-- L A N G -->

							<!-- v1: select-option -->
							<!-- <select id="lang_selector" onchange="changeLang()">
								<option value="en">ENG</option>
								<option value="ua">УКР</option>
							</select> -->

							<!-- v2: button -->
							<span id="sp3" class="tooltiptext"></span>
							<input type="image" id="flag" src="" width="30" height="20" onclick=""/>
						</div>

						<a id="n_link">© 2021&nbsp;&nbsp;</a>
						<a id="link" class="text-dark" href="https://github.com/BGDNkl/">BGDNkl</a>
					</div>	
				</section>               
			</th>
		</tr>
	</table>


	<!-- Scripts: -->	
	<script>
		
	// New popup window in center 
    function myPopup(title, myWidth, myHeight) {
		// var	myURL = "https://covid19.gov.ua/en/";
		var	myURL = "https://moz.gov.ua/";
		var left = (screen.width - myWidth) / 2;
		var top = (screen.height - myHeight) / 4;
		var myWindow = window.open(myURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' 
					 + myWidth + ', height=' + myHeight + ', top=' + top + ', left=' + left);
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
	
	var lang;

	// Language switch via button
	function changeLang(str) {
		//var lng = document.getElementById("lang_selector").value;
		var ttl = document.getElementById("ttl");
		var rp = document.getElementById("rp");
		var head_tdy = document.getElementById("head_tdy");
		var head_all = document.getElementById("head_all");
		var lft1 = document.getElementById("lft-1");
		var lft2 = document.getElementById("lft-2");
		var lft3 = document.getElementById("lft-3");
		var lft4 = document.getElementById("lft-4");
		var lft5 = document.getElementById("lft-5");
		var my_btn = document.getElementById("my_btn");
		var sp1 = document.getElementById("sp1");
		var sp2 = document.getElementById("sp2");
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
				my_btn.innerHTML = "See the Government Reports";
				sp1.innerHTML = "Data from the temporarily occupied territories of the Autonomous Republic of Crimea, Donetsk, Luhansk oblasts and the city of Sevastopol are missing";
				sp2.innerHTML = "If you see this sign \"?\" – it means that the official source did not specify this data in today's report";
				obj.data = "img/map_en.php";
				btn.src = "img/UA.png";
				btn.setAttribute('onclick',"changeLang('ua')");
				spn.innerHTML = "Версія українською";
				sp1.innerHTML = "Show \"Percentage of morbidity by region\"";
				sp2.innerHTML = "Show \"Infected population density by region\"";
				lang = 'en';
				dt1.style.fill='#363636';
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
				my_btn.innerHTML = "Перейти на сайт МОЗ України";
				sp1.innerHTML = "Дані з тимчасово окупованих територій Автономної Республіки Крим, Донецької, Луганської областей та міста Севастополя відсутні.";
				sp2.innerHTML = "Якщо ви бачите цей знак \"?\"- це означає, що офіційне джерело не вказало ці дані в сьогоднішньому звіті";
				obj.data = "img/map_ua.php";
				btn.src = "img/GB.png";
				btn.onclick = "changeLang('en')";
				btn.setAttribute('onclick',"changeLang('en')");
				spn.innerHTML = "English version";
				sp1.innerHTML = "Показати \"Відсоток захворюваності по регіонах\"";
				sp2.innerHTML = "Показати \"Щільність інфікованого населення по регіонах\"";
				lang = 'ua';
				dt1.style.fill='#363636';
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
				my_btn.innerHTML = "See the Government Reports";
				sp1.innerHTML = "Data from the temporarily occupied territories of the Autonomous Republic of Crimea, Donetsk, Luhansk oblasts and the city of Sevastopol are missing";
				sp2.innerHTML = "If you see this sign \"?\" – it means that the official source did not specify this data in today's report";  
				obj.data = "img/map_en.php"; 
				btn.src = "img/UA.png";
				btn.onclick = "changeLang('ua')";
				btn.setAttribute('onclick',"changeLang('ua')");
				spn.innerHTML = "Версія українською";
				sp1.innerHTML = "Show \"Percentage of morbidity by region\"";
				sp2.innerHTML = "Show \"Infected population density by region\"";
				lang = 'en';
		}
	}
	
	function changeMap(int) {
		if (int == 1) {
			document.getElementById("my_dot_1").style.fill='#363636';
			document.getElementById("my_dot_2").style.fill='#686868';

			if (lang == 'en') 
				document.getElementById("obj").data = "img/map_en.php";
			else
				document.getElementById("obj").data = "img/map_ua.php";
		} else {
			document.getElementById("my_dot_2").style.fill='#363636';
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
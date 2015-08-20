<!DOCTYPE >
<html>
	<head>
		<title>Musik</title>
		<link href="style.css" rel='stylesheet' />
		<link href="./font-awesome/css/font-awesome.css" rel='stylesheet'/>
		<script src="script.js" type="text/javascript" ></script>
	</head>
	<body>
		<?php
			$listaradios = array();	
			$listaradios['Rock FM']['url'] = 'http://195.55.74.217/cope/rockfm.mp3';
			$listaradios['Rock FM']['img'] = 'iconos/rockfm.png';
					
			//$listaradios['MaximaFM']['url'] = "http://5243.live.streamtheworld.com:80/MAXIMAFM_SC";
			//$listaradios['MaximaFM']['img'] = "iconos/maxima.png";
			
			$listaradios['House']['url'] = "http://5.39.66.128:8005/live";
			$listaradios['House']['img'] = "iconos/house.png";
			$listaradios['Live']['url'] = "http://audio-online.net:2300/live";
			$listaradios['Live']['img'] = "iconos/live.png";
			//$listaradios['Dance']['url'] = "http://5.39.66.128:8004/live";
			//$listaradios['Dance']['img'] = "iconos/dance.png";
			//$listaradios['Techno']['url'] = "http://5.39.66.128:8009/live";
			//$listaradios['Techno']['img'] = "iconos/techno.png";
			//$listaradios['Remember']['url'] = "http://5.39.66.128:8006/live";
			//$listaradios['Remember']['img'] = "iconos/remember.png";
			//$listaradios['Proghouse']['url'] = "http://5.39.66.128:8011/live";
			//$listaradios['Proghouse']['img'] = "iconos/proghouse.png";
			//$listaradios['Sessions']['url'] = "http://5.39.66.128:8013/live";
			//$listaradios['Sessions']['img'] = "iconos/sessions.png";
			//$listaradios['Ambient']['url'] = "http://5.39.66.128:8007/live";
			//$listaradios['Ambient']['img'] = "iconos/ambient.png";
		?>
		<audio id="reproductor" controls="false" autoplay="autoplay" preload="auto">
			<p>Reproductor no soportado</p>
		</audio>
		<form id="canciones">
			<?php /*
			 <select name="url" id="url" onchange="setCancion()" multiple="multiple">
				<option value="" >--Selecciona opcion--</option>
				<?php 
					foreach ($listaradios as $nombre => $url) {
						echo "<option value='" . $url . "'>" . $nombre . " </option>";
					}
				?>
			</select> 
			 */?> 
			 <br /><br /><br />
			 <?php 
					foreach ($listaradios as $nombre => $url) {
						/*echo "<pre>";
						print_r($url);
						echo "</pre>";*/
						//echo "<label for='".$nombre."'>".$nombre."</label>";
						
						//echo "<input onclick=\"setCancion('" . $url['url'] . "'); setActive(this)\" class='url' name='url' type='button' value='" . $nombre . "'/>";
						echo "<a class='botones' href='javascript:void(0)' onclick=\"setCancion('" . $url['url'] . "'); setActive(this)\" alt='" . $url['url'] . "'>";
						echo "<img src='".$url['img']."' class='url' />";
						echo "</a>";
					}
			?>
			<br /><br /><br />
			<a id="enlaceplay" href="javascript:void(0)">
				<i class="fa fa-youtube-play"></i>
			</a>
			<!--<input type="button" onclick="pause();setActive(null)" value="Pause || "/>-->
			<a id="enlacepause" href="javascript:void(0)" style="display:none;">
				<i class="fa fa-pause"></i>
			</a>
		</form>
		<?php
				// Con esta línea obtenemos nuestra IP externa
				$extip = getenv("REMOTE_ADDR");
				// tambien podriamos usar esta para obtenera la ip externa
				// $extip = $_SERVER['REMOTE_ADDR'];
				$url = 'http://api.hostip.info/get_html.php?ip='.$extip;
				// Usamos Curl para obtener los resultados de la peticion a Hostip.info
				function getRemoteFile($url, $timeout = 10) {
				  $ch = curl_init();
				  curl_setopt ($ch, CURLOPT_URL, $url);
				  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
				  $file_contents = curl_exec($ch);
				  curl_close($ch);
				  return ($file_contents) ? $file_contents : FALSE;
				}
				$info = getRemoteFile($url);
				?>
				 
				<?php
				// Extraemos el Pais
				preg_match("/Country: (.*)\n/", $info, $out);
				echo 'Pais: '.$out[1];
				?>
				 
				<br>
				 
				<?php
				// Extraemos la Ciudad
				preg_match("/City: (.*)\n/", $info, $out);
				//echo 'Ciudad: '.$out[1];
				?>
				 
				<br>
				 
				<?php
				// Extraemos la IP externa
				preg_match("/IP: (.*)\n/", $info, $out);
				echo 'Ip: '.$out[1];
			?>
	</body>
</html>
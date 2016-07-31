<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Radio list</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link href="dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
  <link href="dist/skin/blue.monday/css/custom.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="lib/jquery.min.js"></script>
  <script type="text/javascript" src="dist/jplayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="dist/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript">
  //<![CDATA[
  $(document).ready(function(){
  		new jPlayerPlaylist({
  		jPlayer: "#jquery_jplayer",
  		cssSelectorAncestor: "#jp_container"
  	}, [
      {
  			title:"Loca FM - House",
  			mp3:"http://5.39.66.128:8005/live"
  		},
  		{
  			title:"Rock FM",
  			mp3:"http://195.55.74.212/cope/rockfm-low.mp3"
  		},
  		{
  			title:"Máxima FM",
  			mp3:"http://5243.live.streamtheworld.com:80/MAXIMAFM_SC"
  		},
  		{
  			title:"Loca FM - Live",
  			mp3:"http://audio-online.net:2300/live"
  		},
  		{
  			title:"Loca FM - Dance",
  			mp3:"http://5.39.66.128:8004/live"
  		},
  		{
  			title:"Loca FM - Dance",
  			mp3:"http://5.39.66.128:8009/live"
  		},
  		{
  			title:"Loca FM - Remember",
  			mp3:"http://5.39.66.128:8006/live"
  		},
  		{
  			title:"Loca FM - Proghouse",
  			mp3:"http://5.39.66.128:8011/live"
  		},
  		{
  			title:"Loca FM - Sessions",
  			mp3:"http://5.39.66.128:8013/live"
  		},
  		{
  			title:"Loca FM - Ambient",
  			mp3:"http://5.39.66.128:8007/live"
  		}
  	], {
  		swfPath: "dist/jplayer",
  		supplied: "mp3",
  		wmode: "window",
  		useStateClassSkin: true,
  		autoBlur: false,
  		smoothPlayBar: true,
  		keyEnabled: true
  	});
  });
  //]]>
  </script>
</head>
<body>

<div id="jquery_jplayer" class="jp-jplayer"></div>
<div id="jp_container" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface">
			<div class="jp-controls">
				<button class="jp-previous" role="button" tabindex="0">previous</button>
				<button class="jp-play" role="button" tabindex="0">play</button>
				<button class="jp-next" role="button" tabindex="0">next</button>
				<button class="jp-stop" role="button" tabindex="0">stop</button>
			</div>
			<div class="jp-progress">
				<div class="jp-seek-bar">
					<div class="jp-play-bar"></div>
				</div>
			</div>
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-time-holder">
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
			</div>
			<div class="jp-toggles">
				<button class="jp-repeat" role="button" tabindex="0">repeat</button>
				<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
			</div>
		</div>
		<div class="jp-playlist">
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
</body>

</html>

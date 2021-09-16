<html>
<head>
	
	<title>Web QR</title>
	
	<script type="text/javascript" src="https://webqr.com/llqrcode.js"></script>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<script type="text/javascript" src="https://webqr.com/webqr.js"></script>
	<style>
		#outdiv
		{
			width:640px;
			height:480px;
			border: solid;
			border-width: 3px 3px 3px 3px;
		}
		#result
		{
			border: solid;
			border-width: 1px 1px 1px 1px;
			padding:20px;
			width:70%;
		}
		#mp1
		{
			text-align:center;
			font-size:35px;
		}
	</style>
</head>

<body>
	<div id="main">
		<div id="header">
			<div style="position:relative;top:+20px;left:0px;">
				<p id="mp1">
					QR Code scanner
				</p>
				
			</div>
			<div id="mainbody">
				<table class="tsel" border="0" width="100%">
					<tr>
						<td valign="top" align="center" width="50%">
							<table class="tsel" border="0">
								<tr>
									<td><img class="selector" id="webcamimg" src="https://webqr.com/vid.png" onclick="setwebcam()" align="left" /></td>
									<td><img class="selector" id="qrimg" src="https://webqr.com/cam.png" onclick="setimg()" align="right"/></td></tr>
									<tr><td colspan="2" align="center"><div id="outdiv"></div></td>
								</tr>
							</table>
						</td>
					</tr>
							
					<tr>
						<td colspan="3" align="center"><div id="result"></div></td>
					</tr>
				</table>
									
			</div>
			<div id="footer">
			</div>
		</div>
		<canvas id="qr-canvas" style="display: none"></canvas>
	</div>
	<script>
		load();
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24451557-1']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>

</html>
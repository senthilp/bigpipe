<?php
	sleep(2);
?>
<!doctype html>
<html lang="en-US" >
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	  
		<title>eBay Motors - Dialup Experience</title>
		<style type="text/css">
			.main {
				margin: 0 auto;
				width: 930px;
			}
			.main .module {
				border: 5px groove #C0D9D9;
				margin-bottom: 15px;
			}
			.main .module .content {
				text-align: center;
				font: bold xx-large monospace,Helvetica,sans-serif;
			}
			.main .borderless {
				border: 0 none;
			}			
			.main .left {				
				width: 615px;
				margin: 0 15px 15px 0;
				float: left;				
			}
			.main .right {				
				width: 300px;
				float: left;
			}
			#head1 {
				height: 160px;
			}
			#head1 .content {
				line-height: 160px;
			}
			#head2 {
				height: 35px;
			}
			#head2 .content{
				line-height: 35px;
			}
			#left1 {
				height: 375px;
			}
			#left1 .content{
				line-height: 435px;
			}
			#left2 {
				height: 260px;
			}
			#left2 .content{
				line-height: 260px;
			}			
			#left3 {
				height: 150px;
			}
			#left3 .content{
				line-height: 150px;
			}			
			#left4 {
				height: 170px;
			}
			#left4 .content{
				line-height: 170px;
			}			
			#right1 {
				height: 265px;
			}
			#right1 .content{
				line-height: 265px;
			}			
			#right2 {
				height: 300px;
			}
			#right2 .content{
				line-height: 300px;
			}			
			#foot {
				clear: both;
				height: 150px;
				margin: 0;
			}
			#foot .content{
				line-height: 150px;
			}			
		</style>
	</head>
	<body>
		<div class="main">
			<div id="head1" class="module"></div>
			<div id="head2" class="module"></div>
			<div class="left borderless">
				<div id="left1" class="module"></div>
				<div id="left2" class="module"></div>
				<div id="left3" class="module"></div>
				<div id="left4" class="module"></div>
			</div>
			<div class="right borderless">
				<div id="right1" class="module"></div>			
				<div id="right2" class="module"></div>
			</div>			
			<div id="foot" class="module"></div>
		</div>
		<script>
			/**
			 * 
			 * A simple JS function to inject markup into a particular container 
			 * 
			 * @function inject
			 * @param id {String} The container element ID
			 * @param content {String} The content markup for the container
			 * 
			 */			
			function inject(id, content) {
				var elem = document.getElementById(id);
				if(!elem) {
					return;
				}
				elem.innerHTML = content;
			}
		</script>
	</body>
</html> 
<?php
	flush();
	sleep(4);
?>
<script>
	inject("head1", '<div class="content">Header</div>');
</script>
<?php
	flush();
	sleep(1);
?>
<script>
	inject("left1", '<div class="content">Category Chooser</div>');
</script>
<?php
	flush();
	sleep(1);
?>
<script>
	inject("left2", '<div class="content">My eBay</div>');
</script>
<?php
	flush();
	sleep(1);
?>
<script>
	inject("right2", '<div class="content">Stats</div>');
</script>
<?php
	flush();
	sleep(1);
?>
<script>
	inject("head2", '<div class="content">Rebates</div>');
</script>
<?php
	flush();
	sleep(1);
?>
<script>
	inject("left3", '<div class="content">Last Viewed Items</div>');
</script>
<?php
	flush();
	sleep(1);
?>
<script>
	inject("left4", '<div class="content">Recent Searches</div>');
</script>
<?php
	flush();
	sleep(1);
?>
<script>
	inject("foot", '<div class="content">Footer</div>');
</script>
<?php
	flush();
	sleep(1);
?>
<script>
	inject("right1", '<div class="content">Ad Rec</div>');
</script>
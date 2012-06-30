<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript">
		var current_page = '<?=$current_page?>';
	</script>
	<?php 
		  print $this->Html->charset();
		 
		  $this->Html->script("less-1.3.0.min", array("inline"=>false));
		  $this->Html->script("menu", array("inline"=>false));  
		  $this->Html->script("colors.js", array("inline"=>false));  
	 ?>
	<title>
		<?php print "Crystal | ".$title_for_layout; ?>
	</title>
	<link rel="stylesheet/less" type="text/css" href="css/main.less">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<?php
		//print $this->Html->meta('icon');
		
		print $this->fetch('meta');
		print $this->fetch('css');
		print $this->fetch('script');
	?>
	
	
</head>
<body>
	<div id="container">
		
		<?php
			require("includes/header.php");
		?>
		
	
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	
</body>
</html>

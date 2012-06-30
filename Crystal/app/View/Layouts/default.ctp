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
	<?php
	if(!empty($lesscss)){
		foreach($lesscss as $less):
		?>
			<link rel="stylesheet/less" type="text/css" href="css/<?=$less?>.less">
		<?php
		endforeach;
	}
	?>
	<link rel="stylesheet/less" type="text/css" href="css/main.less">
	<link rel="stylesheet/less" type="text/css" href="css/font-awesome.less">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<?php
		print $this->fetch('meta');
		print $this->fetch('css');
		print $this->fetch('script');
	?>
	
</head>
<body>
	<div id="container">
		<div id="header">
		<?php
			$items = array("Blog", "Apps", "Home", "About", "Contact");
			$colors = array("#00ec0e", "#01B0EC", null, "#EF7901", "#D54421");
			$icons = array("comment", "heart", null, "user", "inbox");
			foreach($items as $key=>$item):
				$active = ($item == $current_page) ? "menu_".strtolower($item)."_a" : null;
		?>
			<div id="menu_<?=strtolower($item);?>" colorto="<?=$colors[$key]?>" item="<?=$item?>" class="menu_item <?=$active?>" onclick="window.location='<?=strtolower($item)?>';">
				<div class="menu_item_icon">
					<i class="icon-<?=$icons[$key]?>"></i>
				</div>
			</div>
		
		<?php
			endforeach;
		?>
			<div id="menu_title_bars">
				<?php
				foreach($items as $item):
				?>
					<div id="menu_title_<?=strtolower($item)?>" class="menu_title_bar"><?=$item?></div>
				<?php
				endforeach;
				?>
		    </div>
		</div>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	
</body>
</html>

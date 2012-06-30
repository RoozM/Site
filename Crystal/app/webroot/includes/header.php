
<div id="header">
	<?php
	
	/**
		This is the main Navigation/Header
		It is needed here as a bridge between CakePHP/Wordpress
	*/
	
	$items = array("Blog", "Apps", "Home", "About", "Contact");
	$colors = array("#00ec0e", "#01B0EC", null, "#EF7901", "#D54421");
	foreach($items as $key=>$item){
			?>
			<div id="menu_<?=strtolower($item);?>" colorto="<?=$colors[$key]?>" item="<?=$item?>" class="menu_item" onclick="window.location='http://<?=$_SERVER['HTTP_HOST']?>/crystal/<?=strtolower($item)?>';">
			<div id="menu_<?=strtolower($item);?>_icon" class="menu_item_icon"></div>
		</div>
			
			<?	
	}
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
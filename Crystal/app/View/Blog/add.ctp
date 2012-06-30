<?php
	$this->set("lesscss",array("blog"));
	$this->Html->script("blog", array("inline"=>false));
?>


<div>
	<center>
	<div class="add-header">
		Update the Blog
	</div>
	<br><br>
	<div class="add-title add-input">
		Title: <input type="text" class="add-input-form"/>
	</div>
	<br><br><br>
	<!-- Picture Section Start -->
	
		<?php
			$data = file_get_contents(($this->Html->url("/", true))."/templates.txt");
			$templates = explode("

", $data);
			foreach($templates as $template):
				$temparr = explode("
", $template);
				?>
					<div class="blog-template" img1="<?=$temparr[0]?>" img2="<?=$temparr[1]?>" img3="<?=$temparr[2]?>"
					style="background-image: url('<?=$temparr[1]?>')"
					>
					</div>
				<?
				
			endforeach;
			
			
		?>
		
		
		
	<br/><br/>
	
	
	<!-- The Input for the Pictures Images #1 -->
	<div class="add-input" id="img1">
		Header Image Link: <input type="text" class="add-input-form"/>
	</div>
	
	<!-- The Input for the Pictures Images #2 -->
	<div class="add-input" id="img2">
		Body Image Link: <input type="text" class="add-input-form"/>
	</div>
	
	<!-- The Input for the Pictures Images #3 -->
	<div class="add-input" id="img3">
		Footer Image Link: <input type="text" class="add-input-form"/>
	</div>
	
	<!-- Picture Section End -->
	
	</center>
</div>	
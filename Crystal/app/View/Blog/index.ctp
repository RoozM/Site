<?php
	foreach($posts as $post):
?>
	<div class="blog_post">
		<div class="blog_post_title" onclick="window.location=''"><?=$post['Post']['title']?></div>
		<div class="blog_post_date"><?=date("F jS", strtotime($post['Post']['timestamp']))?></div>
		<div class="blog_post_body"><?=$post['Post']['content']?></div>	
		<div class="blog_post_footer">
			By <em><?=$post['User']['name']?></em>
		</div>
	</div>
	<?php
	endforeach;

?>
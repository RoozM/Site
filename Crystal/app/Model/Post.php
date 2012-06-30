<?php
	class Post extends AppModel{
			public $belongsTo = array("Blog", "User");
			public $hasMany = "Comment";
	}
?>
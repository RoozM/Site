<?php
	class BlogController extends AppController{
		
		public function index(){
			$this->_sc();
			$blog_data = $this->Blog->Post->find("all");
			$this->set("posts", $blog_data);
		}
	
	}
?>
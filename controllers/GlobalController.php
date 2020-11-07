<?php
Class GlobalController extends Controller {
	
    var $content = "";
    
    // footer
	public function footer()
	{
		$this->loadView("views/footer.php"); // load the html and append to $this->content
	}	

	// admin nav
	public function adminNav()
	{
		$this->loadView("views/admin-nav.php"); // load the html and append to $this->content
	}	
}
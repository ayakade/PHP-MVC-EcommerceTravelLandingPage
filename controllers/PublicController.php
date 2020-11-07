<?php
Class PublicController extends Controller{

	var $content = "";

    // index page
    public function main()
    {

		$this->loadLastView("views/main.php"); // final view
    }
    
     // success page after submiting form
     public function success()
     {
 
         $this->loadLastView("views/main.php"); // final view
     }
}
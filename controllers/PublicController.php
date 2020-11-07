<?php
Class PublicController extends Controller{

	var $content = "";

    // index page
    public function main()
    {
        $this->loadView("views/heroTop.php", 1, "heroTopHTML"); 

        $this->loadView("views/intro.php", 1, "contentHTML"); 
        $this->loadView("views/points.php", 1, "contentHTML"); 
        $this->loadView("views/form.php", 1, "contentHTML"); 

        $this->loadView("views/heroBottom.php", 1, "heroBottomHTML"); 

        $this->loadView("views/footer.php", 1, "footerHTML"); 
        
        $this->loadView("views/layout.php", 1, "content"); // save the results of this view, into $this->content

		$this->loadLastView("views/main.php"); // final view
    }
    
     // success page after submiting form
     public function success()
     {
 
         $this->loadLastView("views/main.php"); // final view
     }
}
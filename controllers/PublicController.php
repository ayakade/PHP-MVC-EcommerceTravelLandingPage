<?php
Class PublicController extends Controller{

	var $content = "";

    // index page
    public function main()
    {
        $this->loadView("views/heroTop.php", 1, "heroTopHTML"); 

        $this->loadData(Cities::getRandCities(), "oCities");
        $this->loadView("views/intro.php", 1, "contentHTML"); 
        $this->loadView("views/accommodations.php", 1, "contentHTML"); 
        $this->loadView("views/points.php", 1, "contentHTML"); 
        $this->loadView("views/form.php", 1, "contentHTML"); 

        $this->loadView("views/heroBottom.php", 1, "heroBottomHTML"); 

        $this->loadView("views/footer.php", 1, "footerHTML"); 
        
        $this->loadView("views/layout.php", 1, "content"); // save the results of this view, into $this->content

		$this->loadLastView("views/main.php"); // final view
    }

    // sign up process
    public function signup()
    {
        if($_POST["strFirstname"] && $_POST["strLastname"] && $_POST["strEmail"] && $_POST["strPhoneNumber"] && $_POST["strCountry"] && $_POST["strAge"] && $_POST["strImage"])
		{
			$con = DB::connect();
			$sql = "INSERT INTO week8Customers (strFirstname, strLastName, strEmail, strPhoneNumber, strCountry, strAge) values ('".$_POST["strFirstname"]."', '".$_POST["strLastName"]."','".$_POST["strEmail"]."','".$_POST["strPhoneNumber"]."','".$_POST["strCountry"]."','".$_POST["strAge"]."','".$_POST["strImage"]."')";
		
			mysqli_query($con, $sql);

			// if successed go to success page
			$this->go("public", "success"); 
		} else {
			// if unsucseful 
			$this->go("public", "main"); 
		}
    }
    
     // success page after submiting form
     public function success()
     {
        $this->loadView("views/success.php", 1, "content"); // save the results of this view, into $this->content
 
        $this->loadLastView("views/main.php"); // final view
     }
}
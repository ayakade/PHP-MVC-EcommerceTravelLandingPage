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
        // if all required field is filled
        if($_POST["strFirstName"] && $_POST["strLastName"] && $_POST["strEmail"] && $_POST["strPhoneNumber"] && $_POST["strCountry"] && $_POST["strAge"] && $_FILES["image"])
		{
            //reference: https://www.codeandcourse.com/how-to-upload-image-in-php-and-store-in-folder-and-database/
            // file upload path
            $targetDir = "assets/";
            $fileName = basename($_FILES['image']['name']);
            $targetFilePath = $targetDir . $fileName;
            // check the extension of the uploaded file
            $fileType = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            
            //allowed file types
            $allowTypes = array('png', 'jpg', 'jpeg');

            if (!file_exists($targetFilePath)) 
            {
                if(in_array($fileType, $allowTypes))
                {
                    // Upload file to server
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath))
                    {
                        $con = DB::connect();
                        $sql = "INSERT INTO week8Customers (strFirstName, strLastName, strEmail, strPhoneNumber, strCountry, strAge, strImage) values ('".$_POST["strFirstName"]."', '".$_POST["strLastName"]."','".$_POST["strEmail"]."','".$_POST["strPhoneNumber"]."','".$_POST["strCountry"]."','".$_POST["strAge"]."', '".$fileName."')";

                        mysqli_query($con, $sql);

                        // if successed go to success page
                        $this->go("public", "success"); 
                    }
                    // } else {
                    //     echo "error";
                    // }
                }
            }  
		} else {
            // if unsucseful 
            // echo "unsucseful";
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
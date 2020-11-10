<?php 

Class AdminController extends Controller {

	var $msg = "";

	
	// admin user login
	public function doLogIn()
	{
		$username = $_POST["strUsername"];
		$password = $_POST["strPassword"];
		$passwordHash = password_hash($password, PASSWORD_DEFAULT);
		// echo $passwordHash;

		$_SESSION["userId"] = Employees::logIn($username);
		// echo $_SESSION["userId"];

		// get user info with user ID
		$user = Employees::getUserInfo($_SESSION["userId"]);
		// print_r($user);

		// if username & password are given
		if(!($username=="" OR $password==""))
		{
			if ($user)
			{
				// check if password matches
				if (password_verify($user->strPassword, $passwordHash)) 
				{
					// go to user main page if match
					$this->go("admin", "adminMain"); 

				} else {
					// $this->msg = "Your username and password don't match";
					$this->go("public", "error"); 
					// echo "Your username and password don't match";
				}
			} 

		// if username & password are not given
		} else if ($username=="" && $password=="") {
			// $this->msg = "Please enter your username and password";
			$this->go("public", "error"); 
			// echo "enter your user name and password";
		
		// if username are not given
		} else if ($username=="") {
			// $this->msg = "Please enter your username";
			$this->go("public", "error"); 
			// echo "enter your user name";

		// if password are not given
		} else if ($password=="") {
			// $this->msg = "Please enter your password";
			$this->go("public", "error"); 
			// echo "enter your password";
		}
	}

	// // login error message
	// public function errorMessage()
	// {
	// 	$this->msg = $msg;
	// }
    
    // admin logout
    public function doLogOut()
    {
		unset($_SESSION["userId"]);
		$this->go("public", "login");
	}


	// admin main page after login 
	public function adminMain() 
	{
        $this->loadRoute("Global", "adminNav", "navHTML"); // load nav

        $this->loadData(Customers::getAll(), "oCustomers");
        $this->loadView("views/admin-customerList.php", 1, "contentHTML"); 
        $this->loadView("views/admin-layout.php", 1, "content"); // save the results of this view, into $this->content
        
        $this->loadLastView("views/main-admin.php"); // final view
    }
    
    // customer info  
	public function customer() 
	{
        $this->loadRoute("Global", "adminNav", "navHTML"); // load nav

        $this->loadData(Customers::getCustomer(), "oCustomers");
        $this->loadView("views/admin-customer.php", 1, "contentHTML"); 
        $this->loadView("views/admin-layout.php", 1, "content"); // save the results of this view, into $this->content

		$this->loadLastView("views/main-admin.php"); // final view
    }
    
    // if session is out go back admin login page
	public function pretrip(){

		if($_SESSION["userId"]=="")
		{
			$this->go("public", "login");
		} else {
			$this->oUser = Employees::getUserInfo($_SESSION["userId"]);
		}
	}
}

?>
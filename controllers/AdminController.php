<?php 

Class AdminController extends Controller {

	// login page
	public function login() 
	{
		$this->loadLastView("views/admin-login.php"); // final view
	}

	// admin user login
	public function doLogIn()
	{
		$username = $_POST["strUsername"];
		$password = $_POST["strPassword"];
		$passwordHash = password_hash($password, PASSWORD_DEFAULT);
		// echo $passwordHash;

		// if username & password are given
		if(!($username=="" OR $password==""))
		{
			$_SESSION["userId"] = Employees::logIn($username);
			// echo $_SESSION["userId"];

			// get user info with user ID
			$user = Employees::getUserInfo($_SESSION["userId"]);
			// print_r($user);

			if ($user)
			{
				// check if password matches
				if (password_verify($user->strPassword, $passwordHash)) 
				{
					// go to user main page if match
					$this->go("admin", "adminMain"); 

				} else {
					echo "password not correct";
				}
			}

		// if username & password are not given
		} else if ($username=="" && $password==""){
			echo "enter your user name and  password";
		
		// if username are not given
		} else if ($username=="") {
			echo "enter your user name";

		// if password are not given
		} else if ($password=="") {
			echo "enter your password";
		}
    }
    
    // admin logout
    public function doLogOut()
    {
		unset($_SESSION["userId"]);
		$this->go("admin", "login");
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
			$this->go("admin", "login");
		}
	}
}

?>
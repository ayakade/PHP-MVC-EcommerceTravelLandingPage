<?php 

Class Customers {

	public function __construct($userData)
	{
		$this->id = $userData["id"];
		$this->strFirstName = $userData["strFirstName"];
        $this->strLastName = $userData["strLastName"];
        $this->Name = $userData["Name"];
        $this->strEmail = $userData["strEmail"];
        $this->strPhoneNumber = $userData["strPhoneNumber"];
        $this->strCountry = $userData["strCountry"];
        $this->strAge = $userData["strAge"];
        $this->strImage = $userData["strImage"];
    }
    
    // get customers list
	public static function getAll()
	{
		$customers = DB::query("SELECT CONCAT(strFirstName ,  ' ' , strLastName) as Name, id, strFirstName, strLastName, strEmail, strPhoneNumber, strCountry, strAge, strImage FROM week8Customers"); 

        // acting as a factory
        $customerArray = array(); // set default (empty)

        foreach($customers as $customer)
        {
            // create an instance / object for this SPECIFIC city
            $customerArray[] = new Customers($customer); // put this customer object onto the array
        }
       
        // return the list of customer objects
        return $customerArray;
	}

	// customer info 
	public static function getCustomer()
	{
		$customer = DB::query("SELECT CONCAT(strFirstName ,  ' ' , strLastName) as Name, id, strFirstName, strLastName, strEmail, strPhoneNumber, strCountry, strAge, strImage FROM week8Customers WHERE id=".$_GET["aId"]."");

		// acting as a factory
        $customerArray = array(); // set default (empty)

        foreach($customer as $info)
        {
            // create an instance / object for this SPECIFIC city
            $customerArray[] = new Customers($info); // put this customer object onto the array
        }
       
        // return the list of customer objects
        return $customerArray;
	}
}

?>
<?php 

Class Cities {

    public function __construct($data)
	{
		$this->id = $data["id"];
        $this->strName = $data["strName"];
        $this->strImage = $data["strImage"];
	}	
	
	// get cities
	public static function getAllCities()
	{
		$cities = DB::query("SELECT * FROM cities"); 

        // acting as a factory
       $cityArray = array(); // set default (empty)

        foreach($cities as $city)
        {
            // create an instance / object for this SPECIFIC city
            $cityArray[] = new City($city); // put this city object onto the array
        }
       
        // return the list of city objects
        return $cityArray;
    }
    
    // get randam 4 cities 
	public static function getRandCities()
	{
		$cities = DB::query("SELECT * FROM cities ORDER BY RAND() LIMIT 4"); 

        // acting as a factory
       $cityArray = array(); // set default (empty)

        foreach($cities as $city)
        {
            // create an instance / object for this SPECIFIC city
            $cityArray[] = new Cities($city); // put this city object onto the array
        }
       
        // return the list of city objects
        return $cityArray;
	}
}
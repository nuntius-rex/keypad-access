<?PHP
//============================================================================================
// Note: This block of code is used to display the file as code:
	if(isset($_GET["code"])){
		ini_set("highlight.comment", "#808080");
		highlight_file( __FILE__ );	die();
	}
// Author: Dan Guinn - danguinn.com
//============================================================================================


	//Verify that the valid GET request is sent.
	if(isset($_GET["console"])){

		//Set the default password variable
		$password="*123";

		//Split the password string into an array
		//We are going to check each letter
		$passArray=str_split($password);

		//Count the password array to get the length
		$passCount=count($passArray);

		//Get the user input - note: Superglobal $_GET is already urldecoded.
		$entry=$_GET["console"];

		//Clean entry, removing all but accepted characters
		$entry = preg_replace( '/[^0-9\#*]/', '', $entry);

		//echo "<p>entry:".$entry."</p>";

		//Split the user input into an array also
		$entryArray=str_split($entry);

		//Set the valid characters counter to zero
		$validChars=0;

		//Loop through the password array
		for($i=0; $i<$passCount; $i++){

			//Check to see if the password character is in the array

			if(in_array($passArray[$i],$entryArray)){

				//Increment the valid characters counter by one if true
				$validChars++;

			}
		}

		//Check the user entry for a valid password
		if($entry==$password){

			//Match confirmed!
			echo "CONFIRMED!";

		}else{

				//Invalid! Match not confirmed.

				//Give the user a hint... how many did they get right?
				if($validChars>0){

					 //Check to see if they got all of the characters right
					 //They could be in the wrong order or have all of them right, but have extra characters
				   if($validChars==$passCount){

						 //If the password is not a match but they got them all right give them a big hint!
					   echo "YOU GOT ALL ".$passCount." RIGHT, TOO MANY OR WRONG ORDER!";

				   }else{

						 //If the got some of the characters right, give them a hint.
						 echo "WRONG, BUT YOU GOT ".$validChars." RIGHT!";

				   }

				}else{
					 //If they totally got it wrong, send back invalid!
				   echo "INVALID!";
				}
		}

	} //End isset test

?>

<?php

	$today = date(c);
    $uid = $facebook->getUser();
    $userID = mysqli_real_escape_string($dbc, $uid); 
	$me = $facebook->api('/me');
    $email = $me['email'];	
	$firstName = $me['first_name'];
	$lastName = $me['last_name'];
	$location = $me['location']['name'];
	$places = explode(", ", $location);
	$city = $places[0];
	$country = $places[1];
	$gender = $me['gender'];
	//print_r($me);
	//$vote = strval($vote);
	
	$sites = array();
	$sites[0] = "SiteName0";
	$sites[1] = "SiteName1";
	$sites[2] = "SiteName2";
	$sites[3] = "SiteName3";
	$sites[4] = "SiteName4";
	$sites[5] = "SiteName5";
	$sites[6] = "SiteName6";
	$sites[7] = "SiteName7";
	$sites[8] = "SiteName8";
	$sites[9] = "SiteName9";
	$sites[10] = "SiteName10";
	$sites[11] = "SiteName11";
	$sites[12] = "SiteName12";
	$sites[13] = "SiteName13";
	$sites[14] = "SiteName14";
	$sites[15] = "SiteName15";
	$sites[16] = "SiteName16";
	$sites[17] = "SiteName17";
	$sites[18] = "SiteName18";
	$sites[19] = "SiteName19";
	$sites[20] = "SiteName20";
	$sites[21] = "SiteName21";
	$sites[22] = "SiteName22";
	$sites[23] = "SiteName23";
	$sites[24] = "SiteName24";
	$sites[25] = "SiteName25";
	$sites[26] = "SiteName26";
	$sites[27] = "SiteName27";
	$sites[28] = "SiteName28";
	$sites[29] = "SiteName29";
	$sites[30] = "SiteName30";
	    
	$sitename = $sites[$vote];    
	$query = "select * from DataCapture where UserID = '$userID'";
	$result = mysqli_query($dbc,$query);
	if($result){
    	if(mysqli_affected_rows($dbc)!=0){
    		while($userRow = mysqli_fetch_array($result,MYSQLI_ASSOC)){     
    			if (strlen($vote) >= 1){
    				$registerVote = "INSERT INTO Votes (UserID, FirstName, Surname, Vote, VoteName, CreatedDate) VALUES ('$userID','$firstName','$lastName','$vote','$sitename','$today')";
    				mysqli_query($dbc, $registerVote) or die ('Error updating vote database');
    				$voted = true;
    			}
    		}
    	}else {
			$addToDB = "INSERT INTO DataCapture (UserID, FirstName, Surname, Email, City, Country, Gender) VALUES ('$userID','$firstName','$lastName','$email','$city','$country','$gender')";
			mysqli_query($dbc, $addToDB) or die ('Error updating general database');
			if (strlen($vote) >= 1){
    				$registerVote = "INSERT INTO Votes (UserID, FirstName, Surname, Vote, VoteName, CreatedDate) VALUES ('$userID','$firstName','$lastName','$vote','$sitename','$today')";
    			mysqli_query($dbc, $registerVote) or die ('Error updating vote database');
    			$voted = true;
    		}
    	}
    }
 
?>


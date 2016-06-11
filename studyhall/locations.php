<?php
include('functions.php');

$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=studyhall;port=8889', $user, $pass);

 function addItemToArray($array, $value) {
            switch($value) {
                case "wifi":
                case "outdoor";
				case "indoor":
				case "bigtables":
				case "solo":
				case "pets":
				case "coffee":
				case "breakfast":
                    array_push($array, $value);
                    break;
					
				case "dellia is amazing": //<  - delete lol 
					echo "yes";
					break; 
            }
            return $array;
        }
		  function getQueryForCheck($value) {
            $queryPrefix = " AND ";// to add checks in query we need AND so this is the prefix to the string were adding to the query
            $queryRoot = "";// this is the root and this only gets set if the variables check out
            $querySuffix = " = 1"; //this is the suffix =1 meaning its set to true in the db
            switch($value) {
                case "wifi":
                case "outdoor";
				case "indoor":
				case "bigtables":
				case "solo":
				case "pets":
				case "breakfast": 
				case "coffee":
                    $queryRoot = $value;
                    break;
                default:
                    $queryPrefix = "";
                    $querySuffix = "";//if  the variable checks out we make the prefix/suffix blank so we dont get invalid values
                    break;
            }
            return $queryPrefix . $queryRoot . $querySuffix; //do u understand what this method does
        }
   
        if(isset($_POST['search'])) {
            $search = $_POST['search'];
        }
        $checkListArray = array(); //Empty array so we can add checkbox'd items
        if(!empty($_POST['checkList'])) {
            $array = $_POST['checkList'];//Pulls the array of checkbox'd items and assigns it to a second array variable
            foreach($array as $value) {//Loops through all $array items and adds it to our empty array($checkListArray)
                $checkListArray = addItemToArray($checkListArray, $value);
            }
        }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>StudyHall.com | Locations</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron-narrow.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      
<?php
session_start();

$echoText = '<div class="header clearfix">';
      
	  if(!isset($_SESSION['LoggedIn'])) 
      $echoText .=  '<div id="loginn"><a href="login.php" class="link3">Login</a> | <a href="signup.php" class="link3">Sign Up</a></div>';
	  else {
	  	$echoText .=  '<div id="loginn">Welcome: <a href=userpanel.php class="link3">';
		
		$echoText .= $_SESSION["username"]. '</a> | <a href="UserHandler.php/?logout" class="link3">Log Out</a> </div> ';
	  }
     
        $echoText .= '<nav>
          <ul class="nav nav-pills ">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation" class="active"><a href="locations.php">Locations</a></li>
            <li role="presentation"><a href="spotlight.php">Spotlight</a></li>
            <li role="presentation"><a href="blog.php">Blog</a></li>
            <li role="presentation"><a href="contact.php">Contact</a></li>
          </ul>
           
        </nav>
       
        
        <div class="logo">
        <h3 class="text-muted"><a href=index.html><img src="images/logo.png"></a></h3>
      </div></div>';
	  echo $echoText;
?>
      
<div class="content">
      <BR>
        <h2>Locations</h2>
        


<div class="container">
<div id="locationsidebar">
        Filters<BR>
<form id="search" action ="locations.php" method="post">
<input type="text" name="searchvalue" placeholder="Search Study Places"/>
<BR>
<input type="checkbox" name="checkList[]" value="breakfast"> Breakfast</input>
<BR>
<input type="checkbox" name="checkList[]" value="coffee"> Coffee</input>
<BR>
<input type="checkbox" name="checkList[]" value="pets"> Pets Allowed</input>
<BR>
<input type="checkbox" name="checkList[]" value="outdoor"> Outdoor Area</input>
<BR>
<input type="checkbox" name="checkList[]" value="indoor"> Indoor Area</input>
<BR>
<input type="checkbox" name="checkList[]" value="bigtables"> Group Study</input> 
<BR>
<input type="checkbox" name="checkList[]" value="solo" > Solo Study</input>
<BR>
<input type='checkbox' name='checkList[]' value='wifi'> WiFi </input><br>
<BR>
<input type="submit">
</form>

</div>

<div id ="locations">
					<?php
					
					//use pdo object to prepare a select statement
					$searchvalue = mysql_real_escape_string($searchvalue);
					
					$result = "SELECT * FROM location WHERE name LIKE '%$searchvalue%'";
                	if(!empty($checkListArray)) {
                    	foreach($checkListArray as $arrayItem) {//Loops through all our checkListArray items and concatenates w/ our query
                        	$result .= getQueryForCheck($arrayItem);//ok i need to make some more tingz like wat? like clean do  alull l of the checkboxes work or only coffee sec
							
                    	}
                	} 
					
					$stmt = $dbh->prepare($result);
					
					//echo $result;
					//execute selection
					$stmt->execute();
					$result = $stmt->fetchall(PDO::FETCH_ASSOC);

					//for each row returned
					foreach($result as $row){
						
						//echo out the id, name, color
						$markup = '<div id="blah" class="locationscontainer">';
						
						$markup .= '<center><h9>'.$row['name'].'<BR></center><Hr></h9>';
						$markup .= 'Wifi: '. $row['wifi'];
						$markup .= ''.$row['address'].'<BR> ';
                        $markup .= ''.$row['city'].',';
						$markup .= ''.$row['state'].' ';
						$markup .= ''.$row['zip'].'<BR> ';
						$markup .= ''.$row['phone'].'<BR> Type: ';
						$markup .= ''.$row['type'].'<br><HR><BR><center>Rating: ';
						$markup .= ''.$row['rating'].'</center>';
						$markup .= '</div>';
						$markup .= '<div id="blah2"/>';
						
						echo $markup;
					} //end row for loop

					?>
					</tbody>
				</table>
			</div>
		</div></div>

</div>

<div id="clear"></div>


         <div class="row marketing">


</div>
<?php include 'footer.php'; ?>
      <BR />
<!-- 
project for smart methods bySanaa Jamil Dahlawi
     Umm-Al-Qura university 
	 +966558922571
	 snadhlwy@gmail.com 
	 -->
<?php
//to display errors
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

$con = mysqli_connect("localhost","root","","roboticarm") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"roboticarm") or die("Error: Can't Connect to DB");

////////////////////////////////////////////left
if(isset($_POST["left"])){

       $insertvar2 = "INSERT INTO base(leftt) VALUES ('L')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "moved lift";
         echo "<br/>";
}//////////////////////////////////////////right
if(isset($_POST["right"])){

       $insertvar2 = "INSERT INTO base(rightt) VALUES ('R')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "moved right";
         echo "<br/>";
}//////////////////////////////////////////forward
if(isset($_POST["forward"])){

       $insertvar2 = "INSERT INTO base(forward) VALUES ('F')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "moved forward";
         echo "<br/>";
}///////////////////////////////////////////backward
if(isset($_POST["backward"])){

       $insertvar2 = "INSERT INTO base(backward) VALUES ('B')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "moved backward";
         echo "<br/>";
}////////////////////////////////////////////stop
if(isset($_POST["stop"])){

       $insertvar2 = "INSERT INTO base(stop) VALUES ('0')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "stoped";
         echo "<br/>";
}

/*
if (isset($_post['right'])) {

    $sqlUpdate=mysqli_query($con,"UPDATE base set right=$right, left=$left where innerID=2" );
    echo "left ";
 
} */
?>

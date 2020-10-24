<?php
include("connection.php");
error_reporting(0);
 $_GET['fname'];
 $_GET['lname'];

  $_GET['cnic'];
 
 $_GET['phoneno'];
$_GET['city'];
$_GET['state'];
$_GET['date'];
$_GET['ucno'];
$_GET['needs'];
?>


<html>
<head>
  <title></title>
</head>
<body>
 <form id="form" action="" method="GET">

<input type="text" placeholder ="Fast Name:" name="fname"  value="<?php echo $_GET['fname']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="Last Name:" name="lname" value="<?php echo $_GET['lname']; ?>" / >
 <br>
 <br>
 <input type="text"  placeholder="cnic:" name="cnic" value="<?php echo $_GET['cnic']; ?>"/ >
  <br>
 <br>
 
 <input type="text"  placeholder="PHONENO:" name="phoneno" value="<?php echo $_GET['phoneno']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="city:" name="city" value="<?php echo $_GET['city']; ?>"/ >
  <br>
 <br>
  <input type="text"  placeholder="State:" name="state" value="<?php echo $_GET['state']; ?>"/ >
  <br>
 <br>
 <input type="date"  placeholder="date:" name="date" value="<?php echo $_GET['date']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="UCNO:" name="ucno" value="<?php echo $_GET['ucno']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="NEEDS:" name="needs" value="<?php echo $_GET['needs']; ?>"/ >
  <br>
 <br>
  <input type="submit" value="UPDATE" name="submit"> 
          </form>


  <?php
       
         {
       if($_GET['submit'])
        $fname=$_GET['fname'];
        $lname =$_GET['lname'];
        $cnic=$_GET['cnic'];
         $phoneno =$_GET['phoneno'];
       
        $city=$_GET['city'];
        $state=$_GET['state'];
         $date =$_GET['date'];
       
         $ucno=$_GET['ucno'];
          $needs=$_GET['needs'];

        $query="UPDATE commons SET FNAME='$fname' , LNAME='$lname' ,CNIC='$cnic' , DATE='$date' ,CITY='$city',PHONENO='$phoneno',STATE='$state',NEEDS='$needs' WHERE UCNO='$ucno' ";
             

           
         
        $run=mysqli_query($conn,$query);

        if($run){

                      echo "successfull. <a href='ddd.php'>click here</a>";




        }
        else{

                 echo "not successfull";

        }
    
     }
        ?>








</body>
</html>
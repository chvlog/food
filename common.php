<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="main/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(pic/gr.PNG);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Welcome Admin Panel</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="common.php">Admin Panel</a>
                </li>
               
	            </ul>
	          </li>

	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Menu</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="dd.php">Donors</a>
                </li>
                <li>
                    <a href="ddd.php">Needy People</a>
                </li>
                <li>
                    <a href="admain.php">Logout</a>
                </li>
              </ul>
	          </li>
	        
	       
	        </ul>
            <li>
                <a href="admain.php">Logout</a>
            </li>
	        <div class="footer">
	        	<p>@Mail=> Savefood2020@gmail.com </p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="ddd.php">Needy People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dd.php">Donors</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="common.php">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Welcome Admin Panel</h2>
          
 <h5 class="mb-4">.....People Who Contact Us......</h5>

<style type="text/css"> td{  padding= 30px ; }</style>

<?php


include("connection.php");
 error_reporting(0);

 $query="SELECT * FROM contect";
$data = mysqli_query($conn,$query);
$vip=mysqli_num_rows($data);

if($vip != 0)

{
     
?>

  





       <table class="table table-bordered " style="background-color: red">
       
            <tr>
                 <th scope="col"> Name </th>
                
                 <th scope="col"> Email  </th>
                  

                 <th scope="col">  Phone No  </th>
                 
                  <th scope="col">Message </th>
            
                
             </tr>

          

<?php


while($result  = mysqli_fetch_assoc($data))


{
       
       echo"<tr>
       <td >"  .$result['name']. "</td>
         
        <td>"  .$result['email']. "</td>

         <td>"  .$result['phone']. "</td>
           <td>"  .$result['message']. "</td>
        


                <td><a href='common.php?email=$result[email]' > Delete </a></td>
  



  </tr>";
}

}


?>

</table>




  <?php
       
         
          
   
   $email =$_GET['email'];
       

                
       

       
       
        $query="DELETE FROM contect WHERE email='$email'";
        $run=mysqli_query($conn,$query);

        if($run){

                         header("Location:common.php");



        }
        else{

                 echo "not successfull";

        }
    
     
        ?>




      </div>
		</div>

    <script src="main/js/jquery.min.js"></script>
    <script src="main/js/popper.js"></script>
    <script src="main/js/bootstrap.min.js"></script>
    <script src="main/js/main.js"></script>
  </body>
</html>
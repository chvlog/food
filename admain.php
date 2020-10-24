

<?php
include("connection.php");


?>

<link href="main/gr.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Animated Dynamic Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<body>
    <dvi class="container h-100">
    <div class="d-flex justify-content-center">
        <div class="card mt-5 col-md-4 animated bounceInDown myForm">
            <div class="card-header">
                <h4>Login Admin Panel</h4>
            </div>
            <div class="card-body">
               <form   action="" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                         <input type="text"  class="form-control" placeholder ="User Name:" name="username">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        
                         <input type="password" class="form-control" placeholder="Password:" name="pass">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    
                





            </div>
            <div class="card-footer">
                <a class="btn btn-secondary btn-sm" id="add_more" href="home.php"><i class="fas fa-plus-circle"></i> Back</a>
                <button class="btn btn-success btn-sm float-right submit_btn" name="submit"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
            </div>
        </div>
    </div>
   </form>
                         <?php
       
         
       if(isset($_POST['submit']))

       {
        $username =$_POST['username'];
        $pass =$_POST['pass'];
         
        
       
        $query="select * from loginform where username='".$username."'AND pass='".$pass." 'limit 1";
        $run=mysqli_query($conn,$query);



         if(mysqli_num_rows($run)==1){

                      header("Location:common.php");

                        exit();


        }
        else{

                 echo "Does Not Match Please enter Correct </p>";
                 exit();

        }

       }
     
        
       ?>




</body>
</html>
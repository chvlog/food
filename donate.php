
<?php
include("connection.php");


?>

<?php require_once('main/stayle.php')?>

 <?php require_once('main/navbar.php')?>







<div class="row" style="background-color: #ffcce0;">
  <div class="col-md-8" style="margin-left: 220px; border-radius: 20px; background-color:pink; ">
   <form id="form" action="" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text"  class ="form-control"    placeholder="Name...." name="fname"  id="validationDefault05" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
       <input type="text"  class ="form-control"    placeholder="Last Name..." name="lname" id="validationDefault05" required>
    </div>
        <div class="col-md-4 mb-3">
      <label for="validationDefault02">CNIC No</label>
       <input type="text"  class ="form-control"    placeholder="CNIC..." name="cnic" id="validationDefault05" required>
    </div
  </div>
  <div class="form-row">
        <div class="col-md-6 mb-3">
      <label for="validationDefault02">Date</label>
 <input type="Date"  class ="form-control"    placeholder="Date..." name="date" id="validationDefault05" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Phone No</label>
       <input type="text"  class ="form-control"    placeholder="Cell..." name="phoneno"  id="validationDefault05" required>
    </div>
    
   <div class="col-md-5 mb-4">
      <label for="validationDefault03">City</label>
       <input type="text"  class ="form-control"    placeholder="City..." name="city" id="validationDefault05" required >
    </div>
    <div class="col-md-5 mb-4">
      <label for="validationDefault03">State</label>
       <input type="text"  class ="form-control"    placeholder="State" name="state" id="validationDefault05" required>
    </div>
 
 
<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Select</legend>
      
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="donationtype" id="gridRadios1" value="foods" checked>
          <label class="form-check-label" for="gridRadios1">
            Foods
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="donationtype" id="gridRadios2" value="amount">
          <label class="form-check-label" for="gridRadios2">
          Amount
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="donationtype" id="gridRadios2" value="clothes">
          <label class="form-check-label" for="gridRadios2">
          Clothes
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="donationtype" id="gridRadios2" value="other">
          <label class="form-check-label" for="gridRadios2">
          Other
          </label>
        </div>
        </div>
         </div>
</fieldset>
 <div class="col-md-5 mb-4">
      <label for="validationDefault03">Please Enter Donation </label>
       <input type="text"  class ="form-control"    placeholder="Enter...." name="donations" id="validationDefault05" required>
    </div>
</div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        I Agree to terms and conditions
      </label>
    </div>
  </div>
</div>
  <br>
  <button class="btn btn-primary" type="submit" name="submit">Submit</button>


  

 

</form>
</div>
<hr>

</div>
 

</div>




<?php
 if(isset($_POST['submit']))

       {
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $cnic =$_POST['cnic'];
        $date=$_POST['date'];
        $phoneno=$_POST['phoneno'];

         $city=$_POST['city'];

        $state=$_POST['state'];
          $donationtype=$_POST['donationtype'];
          $donations=$_POST['donations'];
        
        

        $query="insert into common (fname,lname,cnic,date,phoneno,city,state,donationtype,donations)   value ('$fname','$lname','$cnic','$date','$phoneno','$city','$state','$donationtype','$donations')";
        $run=mysqli_query($conn,$query);
       }
     
        
       ?>

























<?php require_once('main/footer.php')?>









</body>
</html>
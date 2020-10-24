
<?php
include("connection.php");


?>


<?php require_once('main/stayle.php')?>


 <?php require_once('main/navbar.php')?>










<div class="row" style="background-color:  #ffb84d">
  <div class="col-md-8" style="margin-left: 220px; border-radius: 20px; background-color: #ff9900 ; ">
     <form id="form" action="" method="POST">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="fname" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="lname" required>
    </div>
   
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">CNIC No</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="CNIC No" name="cnic" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault02">Phone No</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Phone No" name="phoneno" required>
    </div>
     <div class="col-md-3 mb-3">
      <label for="validationDefault02">Date</label>
      <input type="date" class="form-control" id="validationDefault02" placeholder="Date" name="date" required>
    </div>
   
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="City" name="city" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">State</label>
      <input type="text" class="form-control" id="validationDefault04" placeholder="State" name="state" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">UC-No</label>
      <input type="text" class="form-control"  placeholder="UC-No" name="ucno" id="validationDefault05" required>
    </div>
  </div>
<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Needs</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="needs" id="gridRadios1" value="Foods" checked>
          <label class="form-check-label" for="gridRadios1">
            Foods
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="needs" id="gridRadios2" value="Amount">
          <label class="form-check-label" for="gridRadios2">
          Amount
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="needs" id="gridRadios2" value="Other">
          <label class="form-check-label" for="gridRadios2">
          Other
          </label>
        </div>
         
        </div>
         </div>
</fieldset>


























  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        I Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" name="submit" type="submit">Submit</button>
</form>
</div>
</div>






<?php
 if(isset($_POST['submit']))

       {
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $cnic =$_POST['cnic'];
        $phoneno=$_POST['phoneno'];
        $date=$_POST['date'];
        

         $city=$_POST['city'];

        $state=$_POST['state'];
          $ucno=$_POST['ucno'];
          $needs=$_POST['needs'];
        
        

        $query="insert into commons (fname,lname,cnic,date,phoneno,city,state,ucno,needs)   value ('$fname','$lname','$cnic','$date','$phoneno','$city','$state','$ucno','$needs')";
        $run=mysqli_query($conn,$query);
       }
     
        
       ?>











<?php require_once('main/footer.php')?>






</body>
</html>
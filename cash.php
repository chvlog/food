
<?php
include("connection.php");


?>


<?php require_once('main/stayle.php')?>


 <?php require_once('main/navbar.php')?>








<div class="row">
  <div class="col-md-8" style="margin-left: 220px; border-radius: 20px; background-color: pink ; ">
  <form>
  <div class="form-row">
    <div class="col-md-8 mb-3">
      <label for="validationDefault01">Amount</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Enter Amount" value="Mark" required>
    </div>

    </div>



 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Deposit Amount</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="jazzcash" checked>
          <label class="form-check-label" for="gridRadios1">
            Jazz cash
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Afternoun">
          <label class="form-check-label" for="gridRadios2">
          Easy Passay
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Evining">
          <label class="form-check-label" for="gridRadios2">
          Account
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Evining">
          <label class="form-check-label" for="gridRadios2">
          Other
          </label>
        </div>
        </div>
         </div>
</fieldset>



  <button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>
</div>













<?php require_once('main/footer.php')?>














</body>
</html>
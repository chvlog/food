

<?php require_once('main/stayle.php')?>


 <?php require_once('main/navbar.php')?>





<style type="text/css"> td{  padding= 30px ; }</style>

<?php


include("connection.php");
 error_reporting(0);

 $query="SELECT * FROM common";
$data = mysqli_query($conn,$query);
$vip=mysqli_num_rows($data);

if($vip != 0)

{
     
?>

  





       <table class="table table-bordered " style="background-color:  #d5ff80">
       
            <tr>
                 <th scope="col">  Fast-Name </th>
                
                 <th scope="col"> Last-Name  </th>
                  

                 <th scope="col">  CNIC  </th>
                 
                  <th scope="col"> Date </th>
            
                 <th scope="col">  Phone-Num   </th>

                   <th scope="col"> City </th>
                   <th scope="col"> State </th>
                    <th scope="col"> Donation-Type </th>
                     <th scope="col"> Donations </th>
                
             </tr>

          

<?php


while($result  = mysqli_fetch_assoc($data))


{
       
       echo"<tr>
       <td >"  .$result['fname']. "</td>
         
        <td>"  .$result['lname']. "</td>

         <td>"  .$result['cnic']. "</td>
           <td>"  .$result['date']. "</td>
        <td>"  .$result['phoneno']. "</td>
   <td>"  .$result['city']. "</td>
   <td>"  .$result['state']. "</td>
   <td>"  .$result['donationtype']. "</td>
   <td>"  .$result['donations']. "</td>
  


  </tr>";
}

}


?>

</table>













<?php require_once('main/footer.php')?>






</body>
</html>
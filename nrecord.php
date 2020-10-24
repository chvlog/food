

<?php require_once('main/stayle.php')?>


 <?php require_once('main/navbar.php')?>


<?php require_once('main/stayle.php')?>


 <?php require_once('main/navbar.php')?>





<style type="text/css"> td{  padding= 30px ; }</style>

<?php


include("connection.php");
 error_reporting(0);

 $query="SELECT * FROM commons";
$data = mysqli_query($conn,$query);
$vip=mysqli_num_rows($data);

if($vip != 0)

{
     
?>

  





       <table class="table table-bordered " style="background-color: #ffff4d">
       
            <tr>
               
                   <th scope="col"> City </th>
                   <th scope="col"> State </th>
                  <th scope="col"> Date </th>
            
                  <th scope="col"> ucno </th>
                  
                   
                    <th scope="col"> needs </th>
                    
                
             </tr>

          

<?php


while($result  = mysqli_fetch_assoc($data))


{
       
       echo"<tr>
     
            <td>"  .$result['city']. "</td>
            <td>"  .$result['state']. "</td>
           <td>"  .$result['date']. "</td>
       
 
   
   <td>"  .$result['ucno']. "</td>
   <td>"  .$result['needs']. "</td>
  


  </tr>";
}

}


?>

</table>















<?php require_once('main/footer.php')?>







</body>
</html>


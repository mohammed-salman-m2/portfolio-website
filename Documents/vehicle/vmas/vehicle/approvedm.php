  <?php
session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    //var_dump($l_id);
}
// $s="SELECT * FROM  admin";
//         if(!$stmt=mysqli_query($con,$s))
//         {
//             die("prepare statement error1");
//         }
//         $result=mysqli_fetch_array($stmt);
?>

    <!-- page details -->
<!--   <div class="breadcrumb-agile py-1">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Patient</li>
    </ol>
  </div> -->
  <!-- //page details -->
   <style>
    .button {
  /*background-color: #4CAF50;*/
  border-radius: 12px;
  border: none;
  color: white;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #fff;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #031427;
  color: white;
}
</style>
<br><br>
<center>
    <div><h1>Modification Details</h1></div></center>
<center><div style="width:90%; background-color: white; ">
<table id="customers">
  <tr>
    <th>Photo</th>
    <th>description</th>


    <!-- <th>Licence</th>
    <th>Vehicle No</th>
    <th>Vehicle Type</th>

    <th>Name</th>

    <th>Model</th>
    <th>Engin No</th> -->
    <th>Add Photo</th>
    <!-- <th>Delete</th> -->
    <!-- <th>Modified</th> -->

    <!-- <th>City</th>
    <th>State</th>
    <th>Pincode</th>
 -->


  </tr>
                    <?php

$s="SELECT * FROM modified where mul_id=$l_id and m_approve='approve'";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $m_id=$row['m_id'];
  $mul_id=$row['mul_id'];

  // $subject=$row['subject'];
  $m_description=$row['m_description'];
 $image=$row['m_image'];
 

  

                                ?>
                    <tr>
    <td><img src="images/<?php echo $image;?>" width="100px" height="100px"></td>
    <!-- <td><img src="images/<?php echo $v_rc;?>" width="100px" height="100px"></td> -->

                                    <td><?php echo $m_description;?></td>
                                    
                               
                                    <td><a href="modifiedvehicle.php?mul_id=<?php echo $mul_id;?>&m_id=<?php echo $m_id;?>"><button class="btn btn-info" >Add Photo</button></a></td>
                                    
                                   <!--  <td><a href="deletem.php?mul_id=<?php echo $mul_id;?>&m_id=<?php echo $m_id;?>"><button class="btn btn-danger" >Delete</button></a></td> -->
                                     <!--  <td><a href="modified.php?vul_id=<?php echo $vul_id;?>&v_id=<?php echo $v_id;?>"><button class="btn btn-primary" >Modified</button></a></td> -->
                                    

  </tr>
  <?php
                             }
                             ?>
  
</table>
</div></center> 
<br><br>

    <?php
    include 'footer.php';
    ?>
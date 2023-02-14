<?php include 'header.php'?>

<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile number</th>
      <th scope="col">Address</th>
      <th scope="col">Qualification</th>
      <th scope="col">Year passout</th>
    </tr>
  </thead>
  <tbody>
   <?php
    $sql="SELECT `name`,`email`,`mobile_no`,`address`,`qual`,`year` FROM candidates";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
        <tr>
        <th scope="row">'.++$i.'</th>
        <td>'.$rows['name'].'</td>
        <td>'.$rows['email'].'</td>
        <td>'.$rows['mobile_no'].'</td>
        <td>'.$rows['address'].'</td>
        <td>'.$rows['qual'].'</td>
        <td>'.$rows['year'].'</td>
        </tr>';
      }
    }
    else{
      echo"";
    }
    ?>
  </tbody>
</table>
</div>
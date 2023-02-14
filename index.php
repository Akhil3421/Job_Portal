<?php include 'header.php'?>
        <div class="content">
            <p>
            <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Post Job
            </a> -->
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Post Job</button>

            </p>
            <div class="collapse" id="collapseExample">
            <div class="card card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="Company Name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="" name="cname" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPosition" class="form-label">Position</label>
                    <input type="text" class="form-control" id="exampleInputPosition" name="pos" required>
                </div>
                <div class="mb-3">
                    <label for="JobDesc" class="form-label">Job Description</label>
                    <textarea col="30" row="10" class="form-control" name="Jdesc" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="Skills" class="form-label">Skills Required</label>
                    <input type="text" class="form-control" id="skills"  name="skills" required>
                </div>
                <div class="mb-3">
                    <label for="CTC" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="CTC" name="CTC" required>
                </div>
                <button type="submit" class="btn btn-primary" name="job">Submit</button>
                </form>
            </div>
            </div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
<?php
    $sql="SELECT `cname`,`position`,`CTC` FROM jobs";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
   
    echo"
    <tbody>
    <tr>
    <td>".++$i."</td>
     <td>".$rows['cname']."</td>
      <td>".$rows['position']."</td>
      <td>".$rows['CTC']."</td>
    </tr>";
    }}
    else{
      echo"";
    }
  ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
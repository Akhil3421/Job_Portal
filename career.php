<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWVTNh8E263XmFCJ15AwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .we{
            width: 230px;
            height: 50px;
            color:greenyellow;
            text-shadow:2px 2px #333;
            font-weight:500;
            position: relative;
            animation: mymove 5s infinite;
            animation-timing-function: linear;
        }
        @keyframes mymove {
            from {left: 0px;}
            to {left: 1000px;}     
        }
        .nav {
            float: left;
            display: block;
            overflow: hidden;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        p{
        color: #fff;;
        
        }  
        .applynow{
            width: 100px;
            height: 30px;
        background: red;
        transition: width 0.5s;
        border-radius: 15px;
        box-shadow: 2px 2px 2px 2px grey;
        }
        .applynow:hover{
            width: 150px;
        }
        .lead{
            color: pink;
            text-shadow: 0.5px 0.5px #fff;
        }   
        .display-4{
            color:whitesmoke;
            font-style:oblique;
            font-variant: small-caps;
            text-shadow: 3px 2px #333;
        }
        .jobs{
        border: 3px solid greenyellow; 
        border-radius: 25px;
        transition: width 0.5s height 0.5s;
        box-shadow: 3px 3px 3px 3px grey;
        margin: 10px;
        padding: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Career</title>
</head>
<body style="margin:0;padding:0;">
    <div class="row mr-0">
    <div class="col-12 container-fluid">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('background1.jpg'); background-size:cover; padding: 100px;">
    <div class="container"> 
    <h1 class="display-4">Job Portal</h1>
    <p class="lead">Best Jobs available matching your skills</p>
    <h3 class="we">WE ARE HIRING</h3>
    </div>
    </div>
    </div>
    </div>
    <div class="row m-0" style="background-color: #333;">
    <?php
    $sql="SELECT `cname`, `position`, `Jdesc`, `CTC`, `skills` FROM jobs";
    $result=mysqli_query($conn, $sql);
    if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
    echo' 
    <div class="col-md-4">
    <div class="jobs" style="background-color: #fff;">
    <h3 style="text-align: center; font-style:">'.$rows['position'].'</h3>
    <h4 style="text-align: center; color:red">'.$rows['cname'].'</h4>
    <p style="color: black; text-align: justify; color:blue">'.$rows['Jdesc'].'</p>
    <p style="color: black;"><b>Skills Required: </b>' . $rows['skills'].'</p>
    <p style="color: black;"><b>CTC: </b>'.$rows['CTC'].'</p>
    <button class="applynow" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample" >
    Apply Now
    </button>
    </div>
    </div>';
}
}
else{
echo "";
}
?>
<div class="modal fade" id="exampleModal" Labindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="t">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Fill details</h5> 
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
</div>
<div class="modal-body">
<form method="POST">
<p style="color:black">Before completing the form, please ensure that you have the necessary skills.</p>
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Name</label>
<input type="text" class="form-control" name="name" required>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="mobile_no" required>
</div>
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Address</label>
<input type="text" class="form-control" name="address" required>
</div>
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Qualification</label>
<input type="text" class="form-control" name="qual" required>
</div>
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Year passout</label> 
<input type="text" class="form-control" name="year" required>
</div>
</div>
<div class="modal-footer">
I
<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  -->
<button type="submit" name="Submit" class="btn btn-primary">Apply</button>
</form>
</div>
</div>
</div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
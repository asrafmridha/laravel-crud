<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   

<div class="row mt-5">

   
<div class="col-md-6 offset-md-3">


<form method="POST" >
<div class="form-group">
<label for="exampleInputEmail1">Your Name</label>
<input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name"  name="name">

</div>
<div class="form-group">
<label for="exampleInputPassword1">Your Email</label>
<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" name="email">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Status</label>
<select class="form-control" name="status" id="">
  <option value="#">---Select--</option>
<option value="1">Active</option>
<option value="2">Inactive</option>
<option value="3">Suspend</option>
</select>
</div>

<button name="save" type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

</div>
</div>

</form>






</body>
</html>
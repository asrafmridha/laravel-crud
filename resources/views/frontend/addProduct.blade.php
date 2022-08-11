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
<label for="exampleInputEmail1">Product Name</label>
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name"  name="pname">

</div>
<div class="form-group">
  <label for="exampleInputEmail1">Product Category</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Category"  name="pcategory">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Description"  name="pdesc">
    
    </div>
<div class="form-group">
<label for="exampleInputPassword1">Price</label>
<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Price" name="price">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Status</label>
<select class="form-control" name="status" id="">
  <option value="#">---Select--</option>
<option value="1">Active</option>
<option value="2">Inactive</option>

</select>
</div>

<button name="save" type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

</div>
</div>

</form>






</body>
</html>
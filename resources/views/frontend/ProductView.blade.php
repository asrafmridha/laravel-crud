<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="row mt-5">

   
        <div class="col-md-8 offset-md-2">
 
   <div class="container">

    @if (Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('message') }}</li>
        </ul>
    </div>
@endif

    <a href="{{Route("addProductView")}}" class="btn btn-primary"> Add Product</a>
    <table class="table table-striped table-dark mt-3">
        <thead>
          <tr>
            <th scope="col">#Sl No</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Description</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th colspan="2" scope="col">Action</th>
            

          </tr>
        </thead>
        <tbody>

            <?php  $slno=1; ?>


          @foreach ($data as $item)
            <tr>
            <td>{{$slno}}</td>
            <td>{{$item->pname}}</td>
            <td>{{$item->pcategory}}</td>
            <td>{{$item->pdesc}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->status}}</td>
            <td><button data-bs-toggle="modal"  data-bs-target="#updateProductView{{$item->id}}" class="text-white" href=""><i class="fa-solid fa-square-pen"></i></button> </td> 
         
            <td><button data-bs-toggle="modal" data-bs-target="#deleteProduct{{$item->id}}" class="text-white" ><i class="fa-solid fa-trash"></i></button></td>
          </tr>
          <?php $slno++; ?>



          <!-- Modal For Delete -->
<div class="modal fade" id="deleteProduct{{$item->id}}"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   Are You Sure Want to Delete this item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{Route('deleteProduct',$item->id)}}"  type="button" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>


{{-- modal for update --}}



<!-- Modal -->
<div class="modal fade" id="updateProductView{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="{{Route("updateProduct",$item->id)}}" method="POST">

          @csrf

<div class="form-group">
<label for="exampleInputEmail1">Product Name</label>
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" value="{{$item->pname}}" name="pname">

</div>
<div class="form-group">
  <label for="exampleInputEmail1">Product Category</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Description"  name="pcategory"  value="{{$item->pcategory}}">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Description"  name="pdesc"  value="{{$item->pdesc}}">
    
    </div>
<div class="form-group">
<label for="exampleInputPassword1">Price</label>
<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Price" name="price" value="{{$item->price}}">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Status</label>
<select class="form-control" name="status" id="">
  <option value="#">---Select--</option>
<option value="1">Active</option>
<option value="2">Inactive</option>

</select>
</div>



<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Update</button>
</div>


</form>
      </div>
    
      
    </div>
  </div>
</div>



























    </div>
  </div>
</div>

 


          @endforeach
          
          
        </tbody>
      </table>


       

    



      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script>

         $("#updateProduct").click(function(){
            $("#updateProductView").modal('hide');
        });
      </script>

    
</body>
</html>
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
            <td><a class="text-white" href=""><i class="fa-solid fa-square-pen"></i></a> </td>
            <td><a class="text-white" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <?php $slno++; ?>

          @endforeach
          
          
        </tbody>
      </table>

    </div>
    </div>
</div>


    
</body>
</html>
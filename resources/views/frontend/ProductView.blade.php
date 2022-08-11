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

   
        <div class="col-md-8 offset-md-2">
 
   <div class="container">
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#Sl No</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Description</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>

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
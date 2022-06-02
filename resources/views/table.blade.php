<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


  <h2>contact Table</h2>
  <table class="table table-striped">
    <thead>
      <tr>
          <th>Sr.No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mobile Number</th>
        <th>Aadhar Number</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($product as $product)
        <tr>
            <td>{{$product->id}}</td>
        <td>{{$product->fname}}</td>
        <td>{{$product->lname}}</td>
        <td>{{$product->number}}</td>
        <td>{{$product->aadhar}}</td>
        <td>{{$product->address}}</td>
        <td>{{$product->email}}</td>
        <td><a href="{{route('edit',$product->id)}}"><button class="btn btn-success">Edit</button></a>
            <a href="{{route('delete',$product->id)}}"><button class="btn btn-danger">Delete</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>


</body>
</html>

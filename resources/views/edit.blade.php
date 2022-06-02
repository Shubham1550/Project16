<!DOCTYPE html>
<html lang="en">
<head>
    <title>JK Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
     <h1>Contact Form</h1>
    <form action="{{Route('update',$product->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" placeholder="Enter first name" name="fname" value="{{$product->fname}}">
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" placeholder="Enter last name" name="lname" value="{{$product->lname}}">
        </div>
        <div class="form-group">
            <label for="">Mobile Number</label>
            <input type="number" class="form-control" placeholder="Enter mobile no." name="number" value="{{$product->number}}">
        </div>
        <div class="form-group">
            <label for="">Aadhar Number</label>
            <input type="number" class="form-control" placeholder="Enter aadhar no." name="aadhar" value="{{$product->aadhar}}">
        </div>
        <div class="form-group">
            <label for="">Address</label><br>
            <textarea type="text" class="form-control" cols="5" rows="5" placeholder="Enter address" name="address" value="{{$product->address}}"></textarea>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{$product->email}}">
        </div>
        <button type="update" class="btn btn-danger">Update</button>
    </form>
</div>
</body>
</html>

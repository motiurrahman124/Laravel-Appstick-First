<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form role="form" Action="{{url('dataUpdate')}}" method="post" id="quickForm" enctype="multipart/form-data">
  @csrf
    <br>
  <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Author Name</label>
      <input type="text" class="form-control" name="x" id="inputEmail4" placeholder="Email" value="{{$v->author}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Email" value="{{$v->title}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Description</label>
      <input type="text" class="form-control" name="description"  id="inputEmail4" placeholder="Email" value="{{$v->description}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Image</label>
      <input type="file" name="image" class="form-control" name="image" id="exampleInputPassword1" ><br>
      <img src="{{ asset($v->image) }}" width="200px"  height="200px" alt="no image" />
    </div>
  </div>

  <input type="hidden" class="form-control" name="id"  id="inputEmail4" placeholder="Email" value="{{$v->id}}">

  <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
    <button type="submit" class="btn btn-success">Update</button>
    </div>
  </div>
  
  
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>




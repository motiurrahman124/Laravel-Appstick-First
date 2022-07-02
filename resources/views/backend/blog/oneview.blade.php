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
<form>
    <br>

    <div class="form-row">
        <div class="col-md-4">

        </div>
    <div class="form-group col-md-4">
      
      <img src="{{ asset($u->image) }}" width="200px"  height="200px" alt="no image" />
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
        <h6>Author Name: {{$u->author}}</h6>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
        <h6>Title: {{$u->title}}</h6>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
        <h6>Description: {{$u->description}}</h6>
    </div>
  </div>
  
  
  <!-- <div class="form-row">
    <div class="col-md-4">

    </div>
    <div class="form-group col-md-4">
    <a href="{{url('/viewData')}}"><button class="btn btn-success">Back</button></a>
    </div>
  </div> -->
  
  
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>




@extends('backend.master')
@section('content')

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Admin Panel</h2>


              
            </div>
            
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                   

                  </tr>
                </thead>
                <tbody>
               <?php $i=0 ?>
            @foreach ($x as $y)

                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$y->author}}</td>
                      <td>{{$y->title}}</td>
                      <td><img src="{{ asset($y->image) }}" width="30px"  heigh="20px" alt="no image" /></td>
                      <td>{{$y->description}}</td>
                      
                
                     
                      <td>
                        <a type="button" href="{{route('data_update',$y->id)}}" class="btn btn-info"><i class="fas fa-trash-alt">Update</i></a>
                        <a type="button" href="{{route('data_delete',$y->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt">Delete</i></a>
                       </td>
               
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body>
<form action="{{url('student/create')}}" method="post">
@csrf
  <div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $key => $datas) 
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$datas->email}}</td>
      <td>{{$datas->username}}</td>
      <td>
          <a href="" class="btn btn-success btn-sm">Edit</a>
          <a href="{{route('student.delete',$datas->id)}}" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
        </div>
        
    </div>
  </div>  
 
 
</form>
</body>
</html>
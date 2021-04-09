@extends('theme')

@section('content')
  <div class="container">
  
  <div class="row">
  
  <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
  </div>

    <div class="col col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

    <table class="table">
    
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>COLLEGE</th>
        <th>CONTACT-NO</th>
    </tr>

@foreach($faculty as $faculty)
    <tr>
        <td>{{$faculty->fname}}</td>
        <td>{{$faculty->fdesignation}}</td>
        <td>{{$faculty->fcollege}}</td>
        <td>{{$faculty->fcontact}}</td>
        
        <td><a class="btn btn-outline-primary" href="/facultyedit/{{ $faculty->id }}">EDIT</a></td>

    </tr>
@endforeach


    

    </table>

    </div>

    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>
  </div>

  </div>
  @endsection

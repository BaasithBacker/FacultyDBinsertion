@extends('theme')


@section('content')
    <div class="container">
    <div class="row">
    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>

    <div class="col col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<form action="/studentread" method="post">

{{csrf_field()}}
<table class="table">
    <tr>
        <td>Name</td>
        <td><input name="sname" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Roll-No</td>
        <td><input name="sroll" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Admission-No</td>
        <td><input name="sadd" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>College</td>
        <td><input name="scoll" type="text" class="form-control"></td>
    </tr>
    <tr>
      
        <td><button class="btn btn-outline-success">SUBMIT</button></td>
        <td>  <a class="btn btn-outline-primary" href="/studentview">VIEW</a></td>
      
    </tr>
    </table>

</form>
    </div>

    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>
    </div>
    </div>
@endsection
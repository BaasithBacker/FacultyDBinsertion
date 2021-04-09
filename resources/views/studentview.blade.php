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
    <th>ROLLNO</th>
    <th>ADMISSION</th>
    <th>COLLEGE</th>
</tr>

@foreach($student as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->rollno}}</td>
    <td>{{$student->admission}}</td>
    <td>{{$student->college}}</td>
</tr>
@endforeach


</table>
</div>

<div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>

</div>

</div>
@endsection
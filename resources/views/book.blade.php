@extends('theme')

@section('content')
    <div class="container">
    
    <div class="row">
    
    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>

    <div class="col col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<form action="/bookread" method="post">

{{csrf_field()}}

<table class="table">
    <tr>
        <td>booktitle</td>
        <td><input name="btitle" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>author</td>
        <td><input name="bauth" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>description</td>
        <td><input name="bdes" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>distributor</td>
        <td><input name="bdis" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>price</td>
        <td><input name="bprice" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-outline-success">SUBMIT</button></td>
    </tr>

    </div>
    </table>

</form>

    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>

    </div>

    </div>
@endsection
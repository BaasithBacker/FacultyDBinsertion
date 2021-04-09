@extends('theme')

@section('content')
<div class="container">

    <div class="row">
    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>

    <div class="col col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    
    <form action="/facultyupdate/{{ $faculty->id }}" method="post">
    {{csrf_field()}}
    <table class="table">
    
    <tr>
        <td>Name</td>
        <td><input value="{{  $faculty->fname  }}" name="fname" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Designation</td>
        <td><input value="{{  $faculty->fdesignation  }}" name="fdes" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>College</td>
        <td><input value="{{  $faculty->fcollege  }}" name="fcoll" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Contact-No</td>
        <td><input value="{{  $faculty->fcontact  }}" name="fcont" type="text" class="form-control"></td>
    </tr>
    <tr>
    <td><a class="btn btn-outline-danger" href="/facultyview">BACK</a></td>
        <td><button class="btn btn-outline-success">SUBMIT</button></td>
       
      
       
    </tr>

    </table>
    </form>

    </div>

    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>
    </div>

    </div>
@endsection
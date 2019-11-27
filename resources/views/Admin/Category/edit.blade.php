
   
@extends('Admin.master')

@section('Content')

<div class="right_col" role="main">

    <div class="container">
        <h2 class="page-header"> Category <small>&hearts; Edit &hearts;</small> </h2>
        <!-- Display error -->
        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul> 
            </div>
        @endif
        <!-- //Display error -->
        <form method="post" action="{{URL::action('categoryController@postEdit',$cate->id)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="txtname" value="{!! old ('txtname',isset($cate)?$cate['name']:NULL) !!}">
                </div>
            </div>
            <!-- button add -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Save</button>
                </div>
            </div>
            <!-- /butto add -->
        </form>
    </div>
</div>
@endsection




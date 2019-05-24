@extends('Admin.master')

@section('Content')
<div class="right_col" role="main">

        <h2 class="page-header"> Add Category  </h2>
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
        <form method="post" href="{{route('cate.postAdd')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" /> <!--chong hacker truy cap-->!>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name Category ..."  name="txtname">
                </div>
            </div>

            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Add Category</button>
                    
                </div>
            </div>
            <div class="row">
            </div>
            <!-- /butto add -->

        </form>


</div>
@endsection
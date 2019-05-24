@extends('Admin.master')

@section('Content')
<div class="right_col" role="main">
    <div class="container">
        <h2 class="page-header"> News Add  </h2>
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
        <form method="post" action="{{route('postAddNew')}}"enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" /> 
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="titles">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title..."  name="txttitle">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="image">Image:</label>
                    <input type="file"  name="txtimage">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="summary">Summary:</label>
                    <textarea class="form-control" placeholder="Enter Summary..."  name="txtsummary" cols='30' rows="3"></textarea> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="content">Content:</label>
                    <textarea cols="30" rows="8" class="form-control" placeholder="Enter Content..."  name="txtcontent"></textarea> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="danhmuc">Category:</label>
                    <select class="form-control" name="categories_id" id="categories_id">
                        <option value="">Erter Catergory:</option>
                        <!-- $category trong hàm getAdd của file ProductsController -->
                        @foreach($categories as $cate)
                            <option value="{!! $cate['id']!!}">-- {!! $cate['name'] !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="view">Date Post:</label>
                    <input type="Date" class="form-control" placeholder="Enter Date post...."  name="txtdate_post">
                </div>
            </div>


             <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="source">Source:</label>
                    <input type="text" class="form-control" placeholder="Enter Source ....."  name="txtsource">
                </div>
            </div>

            <!-- button add -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Add New</button>
                    
                </div>
            </div>
            <div class="row">
            </div>
            <!-- /butto add -->

        </form>

    </div>

</div>
@endsection

   
@extends('Admin.master')

@section('Content')

<div class="right_col" role="main">

    <div class="container">
        <h2 class="page-header"> News <small>&hearts; Edit &hearts;</small> </h2>
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
        <form method="post" action="{{URL::action('NewController@postEdit',$news->id)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
             <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Title:</label>
                    <input type="text" class="form-control" name="txttitle" value="{!! old ('txttitle',isset($news)?$news['titles']:NULL) !!}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="image">Image:</label>
                    <input type="file" name="txtimage" value="{!! isset($news)?$news['img']:NULL !!}">
                    <img src="{!! asset('public/backend/images/'.$news['image']) !!}" width="100">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="summary">Summary:</label>
                    
                    <input  type="textarea" class="form-control" name="txtsummary" value="{!! old ('txtsummary',isset($news)?$news['summary']:NULL) !!}">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="code">Date Post:</label>
                    <input  type="text" class="form-control" name="txtdate_post" value="{!! old ('txtdate_post',isset($news)?$news['date_post']:NULL) !!}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">ID Category:</label>
                    <select class="form-control" name="categories_id" id="categories_id">
                        <option>Mời bạn chọn</option>
                        <!-- $cate trong hàm getEdit của file newsController -->
                        @foreach($cate as $cat)
                            <option value="{!! $cat['id'] !!}" {!! $cat['id'] == $news['id_cate']?'selected' : '' !!}>-- {!! $cat['name'] !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Content:</label>
                    <input type="text" class="form-control" name="txtcontent" value="{!! old ('txtcontent',isset($news)?$news['content']:NULL) !!}">
                </div>
            </div>
             <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Source:</label>
                    <input type="text" class="form-control" name="txtsource" value="{!! old ('txtsource',isset($news)?$news['source']:NULL) !!}">
                </div>
            </div>
             <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Save</button>
                </div>
            </div>
            <!-- /butto add -->
</form>
        </form>
    </div>
</div>
@endsection

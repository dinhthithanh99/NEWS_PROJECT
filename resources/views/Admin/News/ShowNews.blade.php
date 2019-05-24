<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

@extends('Admin.master')

@section('Content')

<div class="right_col" role="main">

<div class="container-fluid">
        <div class="row">
            <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                <h1 style="text-align: center;color: green;">List News</h1>
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Titles</th>
                        <th>Summary</th>
                        <th>Date Post</th>
                        <th>Content</th>
                        <th>View</th>
                        <th>image</th>
                        <th>Source</th>
                        <th>ID Category</th>
                        <th style="width: 20%">Action</th>
                    </tr>


                </thead>
                <tbody>
                    @foreach($news as $v)
                    <tr>
                         <td> {!! $v["id"] !!} </td>
                        <td> {!! $v["titles"] !!} </td>
                        <td> {!! $v["summary"] !!} </td>
                        <td> {!! $v["date_post"] !!} </td>
                        <td> {!! $v["content"] !!} </td>
                        <td> {!! $v["view"] !!} </td>
                        <td><img src="{!! asset('public/backend/images/'.$v["img"]) !!}" width="100" ></td>
                        <td> {!! $v["source"] !!} </td>
                        <td> {!! $v["id_cate"] !!} </td>
                       
                        <td>
                            <a href="{{route('postAddNew')}}"><i class="fa fa-plus-circle"></i>&nbsp;</a>&nbsp;&nbsp;
                            <a href="{!! url('admin/news/editNew',$v['id']) !!}"><i class="fa fa-pencil"></i>&nbsp;</a>&nbsp;&nbsp;
                            <a href="{!! url('admin/news/deleteNews',$v["id"]) !!}"><i class="fa fa-trash"></i>&nbsp;</a>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </form>
        </div>









<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=351422345722757&autoLogAppEvents=1"></script>

    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable({
             "language": {
            "lengthMenu": "Limit _MENU_ products per page",
            "zeroRecords": "404 NOT FOUND",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "Product is empty",
            "infoFiltered": "(Filtered from _MAX_ total records)"
        }
        });
        } );</script>
</div>

@endsection


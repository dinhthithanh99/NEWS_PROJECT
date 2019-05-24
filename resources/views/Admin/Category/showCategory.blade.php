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
                <h1 style="text-align: center;color: green;">List Category</h1>
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Name</th>
                        <th style="width: 50%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $value)
                    <tr>
                         <td> {!! $value["id"] !!} </td>
                        <td> {!! $value["name"] !!} </td>
                        <td>
                            <a href="{{route('cate.postAdd')}}"><i class="fa fa-plus-circle"></i>&nbsp;Add</a>&nbsp;&nbsp;
                            <a href="{!! url('admin/category/edit',$value['id']) !!}"><i class="fa fa-pencil"></i>&nbsp;Update</a>&nbsp;&nbsp;

                            <a href="{!! url('admin/category/deleteCate',$value["id"]) !!}"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </form>
        </div>



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


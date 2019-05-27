<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Products</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="page-header"> Product <small>&hearts; Edit &hearts;</small> </h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul> 
            </div>
        <?php endif; ?>

        <form method="post" action="<?php echo e(URL::action('ProductsController@postEditProd',$product->id)); ?>" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Code:</label>
                    <input type="text" class="form-control" name="txtcode" value="<?php echo old ('txtcode',isset($product)?$product['code']:NULL); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="txtname" value="<?php echo old ('txtname',isset($product)?$product['name']:NULL); ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="image">Image:</label>
                    <input type="file" name="txtimage" value="<?php echo isset($product)?$product['image']:NULL; ?>">
                    <img src="<?php echo asset('public/backend/images/'.$product['image']); ?>" width="100">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Price:</label>
                    <input onkeypress='return event.charCode >= 48 && event.charCode <=57' type="text" class="form-control" name="txtprice" value="<?php echo old ('txtprice',isset($product)?$product['price']:NULL); ?>">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="quantity">Old Price:</label>
                    <input onkeypress='return event.charCode >= 48 && event.charCode <=57' type="text" class="form-control" name="txtoldprice" value="<?php echo old ('txtoldprice',isset($product)?$product['oldPrice']:NULL); ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Category:</label>
                    <select class="form-control" name="cate_id" id="cate_id">
                        <option>Mời bạn chọn</option>
                        <!-- $cate trong hàm getEdit của file ProductsController -->
                        <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo $cat['id']; ?>" <?php echo $cat['id'] == $product['cate_id']?'selected' : ''; ?>>-- <?php echo $cat['name']; ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <!-- button add -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" style="margin-left: 15px">Save</button>
                </div>
            </div>
            <!-- /butto add -->
        </form>
    </div>
</body>
</html>
<?php /* E:\LARAVEL\Thanh_Midterm\resources\views/editProd.blade.php */ ?>
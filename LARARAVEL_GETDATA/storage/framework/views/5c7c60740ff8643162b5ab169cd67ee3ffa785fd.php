<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Products</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="page-header"><small>&hearts;Products  &hearts;</small> </h2>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <h2 class="page-header"><small>&star;<?php echo $vl["name"]; ?>&star;</small> </h2>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: center;">
                    <div class="thumbnail">
                        <img src="<?php echo asset('public/backend/images/'.$value['image']); ?>" alt="<?php echo $value["name"]; ?>">
                        <div class="caption">
                            <h3><?php echo $value["name"]; ?>đ</h3>
                            <p>
                                <?php echo $value["price"]; ?>đ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php if($value["oldprice"] > 0): ?><del style="color: red"><?php echo $value["oldprice"]; ?>đ</del>
                                <?php endif; ?>
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" onclick="alert('Thank you your order ')">Đặt hàng</a>
                            </p>
                        </div>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
               <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <h2 class="page-header"><small>&star;<?php echo $vl["name"]; ?>&star;</small> </h2>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: center;">
                <div class="thumbnail">
                    <img src="<?php echo asset('public/backend/images/'.$value['image']); ?>" alt="<?php echo $value["name"]; ?>">
                    <div class="caption">
                        <h3><?php echo $value["name"]; ?></h3>
                        <p>
                            <?php echo $value["price"]; ?>đ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if($value["oldprice"] > 0): ?><del style="color: red"><?php echo $value["oldprice"]; ?>đ</del>
                            <?php endif; ?>
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" onclick="alert('Thank you your order ')">Đặt hàng</a>
                        </p>
                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </form>
</div>
</body>
</html>
<?php /* E:\LARAVEL\Thanh_Midterm\resources\views/home.blade.php */ ?>
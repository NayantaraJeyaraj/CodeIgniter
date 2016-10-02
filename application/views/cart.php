<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms</title>


    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/datepicker3.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet">
    <!--[if lt IE 9]>

    <script src="<?php echo base_url("assets/js/html5shiv.js")?>"></script>
    <script src="<?php echo base_url("assets/js/respond.min.js")?>"></script>
    <![endif]-->

</head>

<body>

<?php
foreach ($posts->result() as $post)
{

?>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Add to cart</div>
            <div class="panel-body">
                <form method=POST  action="<?php echo base_url('index.php/addtocart/addItem')?>">
                    <fieldset>
                        <div class="form-group">
                            <label>Item Name</label>
                            <input class="form-control" placeholder="Item Name" name="name" type="text" value='<?php echo $post->name;?>' required>

                        </div>
                        <div class="form-group">
                            <label> Price</label>
                            <input class="form-control" placeholder="Item Name" name="price" type="text" value='<?php echo $post->price;?>' required>

                        </div>
                        <div class="form-group">
                            <label> Quantity</label>
                            <input class="form-control" placeholder="Quantity" name="quantity" type="number" value="" required>

                        </div>
                        <div class="form-group">
                            <label>Item deliver time</label>
                            <input class="form-control" placeholder="yyyy|mm|dd" name="time" type="datetime" value="" >

                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                        <a href="">Buy</a>
                       </fieldset>
                    <?php }
                    ?>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>





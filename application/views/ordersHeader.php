<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Orders</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <a href="<?php echo base_url('index.php/ordersController/getOrders/breakfast');?>">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                        </div>
                        <div class="col-sm-12 col-lg-7 widget-right">
                            <div class="large"><?php echo $breakfastCount ; ?></div>
                            <div class="text-muted">Breakfast </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <a href="<?php echo base_url('index.php/ordersController/getOrders/lunch');?>">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo $lunchCount ; ?></div>
                            <div class="text-muted">Lunch</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <a href="<?php echo base_url('index.php/ordersController/getOrders/other');?>">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo $otherCount ; ?></div>
                            <div class="text-muted">Other</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div><!--/.row-->




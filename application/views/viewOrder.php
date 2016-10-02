<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" id="postVacancy" role="form" method="post" action="<?php echo base_url('index.php/vacancyManagement/deleteVacancies')?>">
                    <h4>Order Id : <?php echo $$orderDetails[0]['oid']?></h4>
                    <br>
                    <table class="table" style="padding: 50px" id="vacancies">
                        <tr>
                            <th>Order Id</th>
                            <th>Customer Name</th>
                            <th>Order Pickup Time</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($orderDetails as $order)
                        {
                            echo "<tr id='".$order['oid']."'>";
                            echo "<td>".$order['oid']."</td>";
                            echo "<td>".$order['name']."</td>";
                            echo "<td>".$order['orderPickupTime']."</td>";
                            echo "<td>".$order['stat']."</td>";
                            echo "<td><a href='".base_url('index.php/ordersController/viewOrder/'.$order['oid'])."'>View Order Details</a></td>";
                            echo "<td><a href='".base_url('index.php/ordersController/dispatched/'.$order['oid'].'/'.$order['meal'])."'><span class='glyphicon glyphicon-ok'>   </span></a> </td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div><!--/.row-->
</div>	<!--/.main-->

<script src="<?php echo base_url("assets/js/jquery-1.11.1.min.js")?>""></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
<script src="<?php echo base_url("assets/js/chart.min.js")?>"></script>
<script src="<?php echo base_url("assets/js/chart-data.js")?>"></script>
<script src="<?php echo base_url("assets/js/easypiechart.js")?>"></script>
<script src="<?php echo base_url("assets/js/easypiechart-data.js")?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap-datepicker.js")?>"></script>
</body>

</html>
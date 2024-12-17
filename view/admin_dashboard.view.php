<?php require('./html/top.php');?>
<?php require('./html/alert.php');?>


<div class="row container-fluid" style='height:100dvh'>

    <?php require('./html/admin_navbar.php');?>


    <div class="col-9">
    
    <div class="container  mt-5 ms-2" >
        <div class="row  gap-5 "  style='height:600px'>
            <div class="col-5 border shadow overflow-hidden" style='border-radius:3%; background:whitesmoke' >
                <h1 class='text-primary mt-4 ms-2'> Total sales : </h1>
                <h1 class='text-success mt-2 ms-2' style='font-size:6em; letter-spacing:3px;'> ₱<?=number_format($total_sales)?></h1>
            </div>

            <div class="col-5 border shadow overflow-hidden" style='border-radius:3%; background:whitesmoke' >
                <h1 class='text-primary mt-4 ms-2'> Total Profit : </h1>
                <h1 class='text-success mt-2 ms-2' style='font-size:6em; letter-spacing:3px;'> ₱<?=number_format($total_profit)?></h1>
            </div>

            <div class="col-5 border shadow overflow-hidden" style='border-radius:3%; background:whitesmoke' >
                <h1 class='text-primary mt-4 ms-2'> Food Product Sold : </h1>
                <h1 class='text-success mt-2 ms-2' style='font-size:6em; letter-spacing:3px;'> <?=number_format($total_quantity)?> </h1>
            </div>

            <div class="col-5 border shadow overflow-hidden" style='border-radius:3%; background:whitesmoke' >
                <h1 class='text-primary mt-4 ms-2'> Admin Share : </h1>
                <h1 class='text-danger mt-2 ms-2' style='font-size:6em; letter-spacing:3px;'> ₱<?=number_format($total_admin_share)?></h1> 
            </div>
        </div>
    </div>

        
    </div>  
</div>

<?php require('./html/bottom.php');?>
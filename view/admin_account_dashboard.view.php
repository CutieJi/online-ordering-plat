<?php require('./html/top.php');?>
<?php require('./html/alert.php');?>


<div class="row container-fluid" style='height:100dvh'>

    <?php require('./html/admin_account_navbar.php');?>

    <div class="col-3"></div>

    <div class="col-9">
        
        <div class='row  container-fluid  ms-5 mt-5 p-0 m-0' style='height:650px; width: 95%'>

            <div class="col ">
                <div class="container border mt-3 shadow" style='height:200px; border-radius:2%'>
                    <h2 class='text-primary mt-4 ms-2'  style='font-weight:700'> Admin Share Profit : </h2>
                    <h1 class='text-success mt-2 ms-2' style='font-size:4.4em; letter-spacing:3px;'> ₱<?=$admin_share_profit ?> </h1>
                </div>

                <div class="container border mt-3 shadow p-0 m-0" style='height:400px; border-radius:2%'>
                    <div class="container-fluid border"  style='height:100px;'>
                         <h1 class='text-primary mt-4 ms-2 ' style='font-weight:700'> Total Accounts : <?=$all_accounts?></h1>
                    </div>

                    <div class="row container-fluid border m-0 p-0"  style='height:300px;'>
                        <div class="col border">
                            <h3 class='text-primary mt-4 ms-2 text-center' style='font-weight:700; font-size:2.5em;'> User </h3>
                            <h1 class='text-center mt-4 text-primary' style='font-size:4.3em; '> <?=$users_percentage?>% </h1>
                        </div>

                        <div class="col border">
                            <h3 class='text-primary mt-4 ms-2 text-center' style='font-weight:700; font-size:2.5em;'> Business </h3>
                            <h1 class='text-center mt-4 text-primary' style='font-size:4.3em; '> <?=$business_percentage?>%    </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col ">
                <div class="container border mt-3 shadow  p-0 m-0  overflow-auto" style='height:615px; border-radius:2%'>
                    <div class="container-fluid border"  style='height:100px;'>
                         <h1 class='text-primary mt-4 ms-2 text-center' style='font-weight:700'> Business Share  </h1>
                    </div>

                    <div class="container-fluid border p-0 m-0 "  style='height:515px;'>
                         <div class="row p-0 m-0 ">

                            <div class="row col-12 border m-0 p-0" style='height:50px'>

                                <div class='col-3 border'> <h3 class='text-center text-primary mt-1'> Logo </h3> </div>

                                <div class='col-6 border'> <h3 class='text-center text-primary mt-1'> Shop Name </h3> </div>

                                <div class='col-3 border'> <h3 class='text-center text-primary mt-1'> Share  </h3>  </div>
                            </div>


                            <?php foreach($shops as $shop):?>


                            <div class="row col-12 border m-0 p-0" style='height:100px'>

                                <div class='col-3 m-0 p-0' style='height:100px'> <img src="view/img/<?=$shop['shop_logo']?>" style='height:100%; width:100%'> </div>

                                <div class='col-6 '> <h2 class=' text-center  mt-4 text-primary mt-1'> <?=$shop['shop_name']?> </h2> </div>

                                <div class='col-3 '> <h2 class='text-center text-success ms-2 mt-4  mt-1'>   ₱<?=$shop['admin_share']?> </h2>  </div>
                            </div>

                            <?php endforeach ?>


                         </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<?php require('./html/bottom.php');?>
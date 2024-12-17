<?php require('./html/top.php');?>
<?php require('./html/alert.php');?>

<div class="row container-fluid p-0 m-0" style='height:100dvh'>

    <?php require('./html/user_navbar.php');?>
    
    <div class="col-3"></div>

    <div class="row col-9 p-0 m-0">
        
        <div class="col-8 border  p-0 m-0">
            
            <div class="row container-fluid  ms-4 overflow-auto p-0 m-0" style='height:100dvh'>

            <?php foreach($products as $product): ?>

                <form action='' method='post'class="col-5 m-3 border rounded shadow p-0 m-0 position-relative" style=" height:450px;">
                    <div class='border  p-0 m-0'style='width:100%; height:300px'>
                        <img src="view/img/<?=$product['product_img']?>" style='width:100%; height:100%'>
                    </div>

                    <div class=' row border  p-0 m-0'style='width:100%; height:150px; background:whitesmoke'>
                      <div class="col-8 ">
                        <div class="container">
                            <h3 class=' p-0 m-0 mt-3 text-muted' style='font-weight:700;'> <?=$product['product_name']?> </h3>
                        </div>
                      </div>
                        
                      <div class="col-4 ">
                        <h3 class=' p-0 m-0 mt-3 text-center text-success' style='font-weight:700;'> ₱<?=$product['product_price']?> </h3>
                      </div>

                      <div class="col-7 ">
                        <input type="number" name='product_quantity' class=' mt-3 form-control form-control-lg ms-2  text-center '  placeholder='Quantity' value='1'>
                      </div>

                      <div class="col-5 ">
                        <input type="hidden" name='product_id' value='<?=$product['id']?>'>
                        <input type="hidden" name='shop_id' value='<?=$product['shop_id']?>'>
                        <input type="hidden" name='product_profit' value='<?=$product['product_profit']?>'>
                        <input type="hidden" name='product_expenses' value='<?=$product['product_expenses']?>'>
                        <input type="hidden" name='product_img' value='<?=$product['product_img']?>'>
                        <input type="hidden" name='product_name' value='<?=$product['product_name']?>'>
                        <input type="hidden" name='product_price' value='<?=$product['product_price']?>'>
                        <input type="submit" name='add' class='btn btn-primary btn-lg ms-2 mt-3' value='Add'>
                      </div>

                      
                    </div>
            </form>

            <?php endforeach ?>

            </div>


        </div>

        <div class="col  p-0 m-0 shadow" style=' background:whitesmoke'>

            <div class="container-fluid p-0 m-0 " style='height:220px; '>
                <div class="bg-warning mt-3" style='width:40%; height:150px; border-radius:50%; margin:auto; overflow:hidden; border:2px solid gray'>
                    <img src="view/img/<?=$shop_info['shop_logo']?>"  style='height:100%; width: 100%'>
                </div>
                <h2 class='text-center text-primary mt-2' style='font-weight:700'><?=$shop_info['shop_name']?></h2>
            </div>

            <div class="container border " style='height:350px; '>
                <h2 class='text-center text-primary mt-2' style='font-weight:700'>Cart</h2>
                <div class="row container overflow-auto rounded border  p-0 m-0" style='height:280px;background:white '>

                <div class="d-flex flex-column mb-3 p-0 m-0">

                    <div class="row" style='height:50px; background:whitesmoke'>
                        <div class="col-2 " class='text-center'> <h5 class='mt-2 ms-1'>  </h5> </div>
                        <div class="col-4 " class='text-center'> <h5 class='mt-2 ms-4'> Name </h5> </div>
                        <div class="col-2 " class='text-center'> <h5 class='mt-2'> Qty </h5> </div>
                        <div class="col-2 " class='text-center'> <h5 class='mt-2'> Price </h5> </div>
                        <div class="col-2 " class='text-center'> <h5 class='mt-2'>  </h5> </div>
                    </div>
                    
                

                    <?php foreach($cart as $item):?>


                        <div class="row   border" style='height:50px'>
                        <div class="col-2 m-0 p-0 overflow-hidden" style='height:50px'>
                            <img src="view/img/<?=$item['product_img']?>" style='width:100%; height:50px' class='ms-2 m-0 p-0'>
                        </div>

                        <div class="col-4 mt-2"> <b> <?=$item['product_name']?> </b></div>
                        <div class="col-2 mt-2"> <h5> <?=$item['product_quantity']?> </h5></div>
                        <div class="col-2 mt-2"> <h5> <?=$item['product_price']?> </h5></div>
                        <form class="col-2 mt-2" action='' method='post'> 
                            <input type="hidden" name='index' value='<?=$index++?>'>
                            <input type="submit" class='btn btn-danger' value='x' name='remove'></form>
                        </div>

                    <?php endforeach?>
                   



                </div>


                </div>
            </div>


            <div class="container-fluid row p-0 m-0" style="height:160px">
                <div class="col ">
                    <h5 class='text-center text-primary mt-2' style='font-weight:700'>Total</h5>
                    <div class="overflow-hidden" style='margin:auto; width:90%; height:20px background:white; border:2px solid gray'>
                        <p class='text-success text-center p-0 m-2 rounded' style='font-weight:700; transform:scale(1.8)'> ₱<?=$total?></p>
                    </div>
                </div>

                <div class="col ">
                    <h5 class='text-center text-primary mt-2' style='font-weight:700'>Balance</h5>
                    <div class="overflow-hidden" style='margin:auto; width:90%; height:20px background:white; border:2px solid gray'>
                        <p class='text-success text-center p-0 m-2 rounded' style='font-weight:700; transform:scale(1.7)'> ₱<?=$user_profile['balance']?> </p>
                    </div>
                </div>
                
                <div class="col-12 ">
                    <form action='' method='post' style='margin:auto'>
                        <input type="submit" class='btn btn-success btn-lg mt-2  p-3 px-5 ms-2' value='PAY' style='width:96%' name='pay'>
                    </form>
                  
                </div>
            </div>



        </div>

        

    </div>

</div>


<?php require('./html/bottom.php');?>
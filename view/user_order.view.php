<?php require('./html/top.php');?>


<div class="row container-fluid" style='height:100dvh'>

    <?php require('./html/user_navbar.php');?>

    <div class="col-3"></div>

    <div class="col-9">

        <div class=' row  container m-0 ms-3  gap-4' style=' overflow:auto'>

            <?php foreach($shops as $shop):?>
            
            <div class="col-3  border shadow m-0 p-0  mt-2" style='height:260px; width:350px; border-radius:10%; overflow:hidden'>
                <div class="container-fluid  m-0 p-0" style="height:190px;">
                    <img src="view/img/<?=$shop['shop_theme']?>" style='height:100%; width:100%;'>
                </div>

                <div class="row container-fluid  m-0 p-0" style="height:70px; background:whitesmoke;">
                    <div class="col-8  overflow-hidden">
                        <h4 class='ms-1 mt-2 text-primary' style='font-weight:700;'><?=$shop['shop_name']?></h4>
                        <h4 class='text-muted ms-1' style='line-height:0px; font-size:.8em'><?=$shop['shop_category']?></h4>
                    </div>
               
                    <form action="" method='post'  class="col">
                        <input type="hidden" name='shop_id'value=<?=$shop['admin_id']?>>
                        <input type='submit' class='btn btn-lg btn-primary  mt-2 ms-2' value='Visit'>
                    </form>                                    
                </div>
            </div>
            
            <?php endforeach?>

        </div>


    </div>

</div>


<?php require('./html/bottom.php');?>
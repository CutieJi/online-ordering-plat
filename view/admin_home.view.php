<?php require('./html/top.php');?>

<?php require('./html/alert.php');?>

<div class="row container-fluid" style='height:100dvh'>

    <?php require('./html/admin_navbar.php');?>

    <div class="col-9">

        <div class="row  border m-auto mt-5 ms-4 rounded shadow position-relative" style='height:430px; background:whitesmoke; '>

            <div class="col-6  border">


                <h1 class='text-center mt-3 text-primary' style='font-family:serif; font-weight:500'>Edit Info</h1>

               
               

                <form class="row" action='' method='post'>
                    <label for="b_name" class='ms-4 mt-2 text-muted' style='font-weight:700'>Business Name:</label>
                    <div class="col-9  ">
                        <input type="text" name='input1' class='form-control mt-1  ms-4' id='b_name' style='font-weight:700; width:95%'> 
                    </div>

                    <div class="col  ">
                        <input type="submit" name='submit1' class='btn btn-sm btn-primary mt-1' style='height:36px'>
                    </div>
                </form>

                <form class="row" action='' method='post'>
                    <label for="b_category" class='ms-4 mt-2 text-muted' style='font-weight:700'>Business Category:</label>
                    <div class="col-9  ">
                     <input type="text" name='input2' class='form-control mt-1  ms-4' id='b_category' style='font-weight:700; width:95%'>
                    </div>

                    <div class="col  ">
                        <input type="submit" name='submit2' class='btn btn-sm btn-primary mt-1' style='height:36px'>
                    </div>
                </form>


                
                <form class="row" action='' method='post' enctype='multipart/form-data' >
                    <label for="b_category" class='ms-4 mt-2 text-muted' style='font-weight:700'>Business Logo:</label>
                    <div class="col-9  ">
                      <input type="file" name='input3' class='form-control mt-1  ms-4' id='b_category' style=' width:95%'>
                    </div>

                    <div class="col  ">
                        <input type="submit" name='submit3' class='btn btn-sm btn-primary mt-1' style='height:36px'>
                    </div>
                </form>
               

                <form class="row" action='' method='post' enctype='multipart/form-data' >
                    <label for="b_category" class='ms-4 mt-2 text-muted' style='font-weight:700'>Business Background:</label>
                    <div class="col-9  ">
                      <input type="file" name='input4' class='form-control mt-1  ms-4' id='b_category' style=' width:95%'>
                    </div>

                    <div class="col  ">
                        <input type="submit" name='submit4' class='btn btn-sm btn-primary mt-1' style='height:36px'>
                    </div>
                </form>


            </div>

           

            <div class="col-6    " style=' padding:0'>

               <div class="container-fluid row rounded " style='width:104%; '>

                    <div class="col-12  " style='height:320px;  padding:0'>
                        <img src="view/img/<?= $admin_info['shop_theme']?>" style='width:100%; height:100%'>
                    </div>

                    <div class="col-12 border " style='height:110px'>
                        <div class="row">
                            <div class="col-8 overflow-hidden">
                                <h1 style='font-weight:700' class='mt-4 ms-3 ' id='shop_name'><?=$admin_info['shop_name']?></h1>
                                <h6 class='text-muted ms-3' style='line-height:0px'> <?= $admin_info['shop_category'] ?></h6>
                            </div>

                            <div class="col ">
                                <a href="" class="btn btn-lg btn-primary   mt-4 ms-5   " style='letter-spacing:1px; padding:14px; padding-left:25px; padding-right:25px;'> View </a>
                            </div>

                            
                        </div>
                        
                    </div>

               </div>

            </div>

        </div>

        <?php 
               $deploy_display = $admin_info['shop_show'];
               switch($deploy_display)
               {
                   case 'Hide':
                        $deploy_display = 'Deploy';
                   break;
       
                   case 'Deploy':
                        $deploy_display = 'Hide';
                   break;
               }
        ?>


        <div class="row  border m-auto mt-4 ms-4 rounded shadow position-relative" style='height:145px; background:whitesmoke; '>
            <div class="col-1"></div>
            <div class="col-8">
                <h1 class='text-primary text-center mt-5' style='font-size:2.5em; font-weight:800'> <?=$deploy_display?> Your Shop To Market Place  </h1>
            </div>


            <form action="" method='post' class='col'>
                    <input name='deploy' type="submit" class='btn btn-lg btn-primary mt-5 ms-5' value =<?=$deploy_display?> style='transform:scale(1.5)'>
            </form>
        </div>

    </div>

   

</div>


<?php require('./html/bottom.php');?>
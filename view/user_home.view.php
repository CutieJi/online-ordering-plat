<?php require('./html/top.php');?>
<?php require('./html/alert.php');?>

<div class="row container-fluid" style='height:100dvh'>

    <?php require('./html/user_navbar.php');?>
    
    <div class="col-3"></div>

    <div class="col-9">
        
    <div class="row container-fluid p-0 m-0 gap-5  ms-3 mt-5"  style='height:79dvh' >

        <div class="col border container shadow" style='height:600px; background:whitesmoke'>
            <h1 class='text-center mt-4 text-primary mb-2' style='font-size:400%'>Profile</h1>

            <div class="row container-fluid p-0 m-0  mt-4"  style='height:250px'>

                <div class="col  bg-warning  p-0 m-0" >
                    <img src="view/img/<?=$user_profile['user_img']?>" style='width:100%; height:100%' class= p-0 m-0'>
                </div>

                <div class="col ">
                    <h2 class=' mt-2 text-primary text-start' style='font-size:150%'> Name: <?=$user_profile['name']?> </h2>
                     <h2 class=' mt-2 text-primary text-start' style='font-size:150%'> Balance: ₱<?=$user_profile['balance']?> </h2>
                </div>

            </div>

            <br>

            <form action="" method='post' class='row'>
                <div class="col-9 ">
                    <label for="" class='ms-2 text-primary' style='font-weight:800'> Change Name:</label>
                    <input type="text" name='name' class='form-control form-control'>
                </div>

                <div class="col">
                    <input type="submit"  name='change_name' class='btn btn-primary mt-4'>
                </div>
       
            </form>
                <br>
            <form action="" method='post' class='row' enctype="multipart/form-data" >
                <div class="col-9 ">
                    <label for="" class='ms-2 text-primary' style='font-weight:800'> Change Profile picture:</label>
                    <input type="file" name='new_profile' class='form-control form-control'>
                </div>

                <div class="col">
                    <input type="submit" name='change_profile' class='btn btn-primary mt-4'>
                </div>
       
            </form>
            
        </div>

        <div class="col border container shadow" style='height:600px; background:whitesmoke'>
           

            <form action="" method='post' class='mt-5 ' style='width:75%; margin:auto'; >
                <h1 class='text-center mt-4 text-primary' style='font-size:300%'> Deposit </h1>
                <input type="number" name='input_deposit' class='form-control form-control-lg mt-4' >
                <br>
                <input type="submit" name='deposit' class='btn btn-primary btn-lg  '> 
            </form>



            <form action="" method='post' class='mt-5 ' style='width:75%; margin:auto'; >
                <h1 class='text-center mt-4 text-primary' style='font-size:300%'> Withdraw </h1>
                <input type="number" name='input_withdraw'class='form-control form-control-lg mt-4' >
                <br>
                <input type="submit" name='withdraw' class='btn btn-primary btn-lg  '> 
            </form>
        </div>

    </div>


    </div>

</div>


<?php require('./html/bottom.php');?>
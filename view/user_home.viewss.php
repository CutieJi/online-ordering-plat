<?php require('./html/top.php');?>

<?php require('./html/alert.php');?>

<div class="row container-fluid" style='height:100dvh'>

    <?php require('./html/user_navbar.php');?>
    
    <div class="col-3"></div>

    <div class="col-9">
        
    <div class="row container-fluid p-0 m-0   ms-3 mt-5"  style='height:79dvh' >

        <div class="col  container " style='height:600px;'>

           <div class="container border rounded mt-3 shadow" style='height:250px; background:whitesmoke; '>
             <h1 class='text-primary mt-4 ms-2'> User Balance : </h1>
             <h1 class='text-success mt-2 ms-2' style='font-size:7em; letter-spacing:3px;'> ₱<?=number_format($user_profile['balance'])?></h1>
           </div>

           <div class="container border rounded mt-3 shadow" style='height:300px; background:whitesmoke;'>

            <h1 class='text-primary mt-3 mb-3' style='font-weight:800'>Edit Profile :</h1>
            <hr>

           <form action="" method='post' class='row'>
                <div class="col-9 ">
                    <label for="" class='ms-2 text-primary' style='font-weight:800; font-size:1.4em'> Change Name:</label>
                    <input type="text" name='name' class='form-control form-control ' value=<?=$user_profile['name']?>>
                </div>

                <div class="col">
                    <input type="submit"  name='change_name' class='btn btn-primary mt-4 ' style='position:relative; top:10px; right:15px'>
                </div>
            </form>
            <br>
             <form action="" method='post' class='row' enctype="multipart/form-data" >
                <div class="col-9 ">
                    <label for="" class='ms-2 text-primary' style='font-weight:800'> Change Profile picture:</label>
                    <input type="file" name='new_profile' class='form-control form-control'>
                </div>

                <div class="col">
                    <input type="submit" name='change_profile' class='btn btn-primary mt-4' style='position:relative; right:15px'>
                </div>
       
            </form>
           </div>
            
        </div>

        <div class="col  container " style='height:600px; '>
           
         <div class="container border rounded mt-3 shadow" style='height:566px; background:whitesmoke; '>
            <h1 class='text-primary mt-4 mb-3 text-center' style='font-weight:800; font-size:5em'>CASH G </h1>
   
            <form action="" method='post' class=' ' style='width:75%; margin:auto'; >

                <div class="container row">
                    <div class="col-5">
                     <h1 class=' mt-4 text-primary' style='font-size:200%; font-weight:800; '> Deposit: </h1>
                    </div>
                    <div class="container col-5">
                     <input type="number" name='input_deposit' class='form-control form-control-lg mt-4 ' >
                    </div>

                    <div class="container col-2">
                        <input type="submit" name='deposit' class='btn btn-primary btn-lg mt-4 '> 
                    </div>
                    
                    
                </div>
            </form>
           
            <hr style='width:80%; position:relative; left:50px'>

            <form action="" method='post' class=' ' style='width:75%; margin:auto'; >

                <div class="container row">
                    <div class="col-5">
                         <h1 class=' mt-4 text-primary' style='font-size:170%; font-weight:800; position:relative; top:5px'> Withdraw: </h1>
                    </div>
                    <div class="container col-5">
                         <input type="number" name='input_withdraw'class='form-control form-control-lg mt-4' >
                    </div>

                    <div class="container col-2">
                    <input type="submit" name='withdraw'   class='btn btn-primary btn-lg mt-4 '> 
                    </div>
    
                  
                </div>
            </form>

            <hr style='width:80%; position:relative; left:50px'>
            
            <div class='text-muted text-center' style='height:200px; width:75%; margin:auto'>
                <p class=' mt-3' style='font-weight:600'>Users must be 18+ to deposit and withdraw funds via approved methods. Deposits are confirmed, while withdrawals require identity verification and are processed within [insert timeframe]. Fees and limits apply, and transactions are monitored for fraud. Users should keep credentials confidential. These terms may change with notice and are governed by the laws of [insert jurisdiction].</p>
            </div>


         </div>
            
        </div>

    </div>

    </div>

</div>


<?php require('./html/bottom.php');?>
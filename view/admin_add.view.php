<?php require('./html/top.php');?>
<?php require('./html/alert.php');?>

<div class="row container-fluid" style='height:100dvh'>

    <?php require('./html/admin_navbar.php');?>

    <div class="col-9">
       
       <form action='' method='post' enctype='multipart/form-data' class="row container  shadow mt-4 ms-2" style='height: 150px; background:whitesmoke' >

            <div class="col-2">
                <h1 class='text-center text-primary mt-3' style='font-weight:800'> Add Product </h1>
            </div>

            <div class="col-2 " >
                <h2  class='text-center mt-3  text-primary  mb-3' > Name</h2>
                <input name='name' type="text" class='form-control form-control-lg' placeholder='product name'>
            </div>

            <div class="col-2 " >
                <h2  class='text-center mt-3  text-primary  mb-3'> Image </h2>
                <input name='image' type="file" class='form-control form-control-lg ms-3' style='width:82%'>
            </div>

            <div class="col-2 " >
                <h2  class='text-center mt-3  text-primary  mb-3'> Expenses </h2>
                <input name='expenses' type="number" class='form-control form-control-lg' placeholder=''>
            </div>

            <div class="col-2 " >
               <h2  class='text-center mt-3  text-primary  mb-3'> Profit </h2>
               <input name='profit' type="number" class='form-control form-control-lg' placeholder=''>
            </div>

            <div class="col-2 " >
                <input type="submit" class='btn btn-primary btn-lg mt-5 ms-5' style='transform:scale(1.9)' value='ADD' name='add'> 
            </div>

        </form>


        <div class="container-fluid border ms-2 mt-4 shadow overflow-auto" style='height:550px;  background:whitesmoke'>
            
            <div class="border row ">

            <?php foreach($products as $product):?>
                
                <div class="col-12 border row p-0 m-0" style='height:220px'>
                    
                    <div class="col-3 p-0 m-0" overflow-hidden> <img src="view/img/<?=$product['product_img']?>"  style='width:100%; height:220px'></div>
                   
                    <form action='' method='post' class="col-2 " >
                        <h2  class='text-center mt-3  text-primary  mb-3' >Name</h2>
                        <input name='name' type="text" class='form-control form-control-lg' placeholder='<?=$product['product_name']?>'>
                        <input type="hidden" name='product_id' value='<?=$product['id']?>'>
                        <input type="submit" class='btn btn-lg btn-primary mt-3 ms-4' value='UPDATE' name='update_name'>
                    </form>

                    <form action='' method='post'  enctype='multipart/form-data' class="col-2 " >
                        <h2  class='text-center mt-3  text-primary  mb-3' >Image</h2>
                        <input name='image' type="file" class='form-control form-control-lg ms-2'  style='width:81%'>
                        <input type="hidden" name='product_id' value='<?=$product['id']?>'>
                        <input type="submit" class='btn btn-lg btn-primary mt-3 ms-4' value='UPDATE' name='update_image'>
                    </form>

                    <form action='' method='post' class="col-2 " >
                        <h2  class='text-center mt-3  text-primary  mb-3' >Expenses</h2>
                        <input name='expenses' type="number" class='form-control form-control-lg' placeholder='<?=$product['product_expenses']?>'>
                        <input type="hidden" name='product_id' value='<?=$product['id']?>'>
                        <input type="submit" class='btn btn-lg btn-primary mt-3 ms-4' value='UPDATE' name='update_expenses'>
                    </form>

                    <form action='' method='post' class="col-2 " >
                        <h2  class='text-center mt-3  text-primary  mb-3' >Profit</h2>
                        <input name='profit' type="number" class='form-control form-control-lg' placeholder='<?=$product['product_profit']?>'>
                        <input type="hidden" name='product_id' value='<?=$product['id']?>'>
                        <input type="submit" class='btn btn-lg btn-primary mt-3 ms-4' value='UPDATE' name='update_profit'>
                    </form>

                    <form action='' method='post' class="col  overflow-hidden">
                        <h2 class='text-center mt-3  text-primary  mb-3' >Price</h2>
                        <h2 class='text-center mt-3  text-success  mb-3' >₱<?=$product['product_price']?> </h2>
                        <input type="hidden" name='product_id' value='<?=$product['id']?>'>
                        <input type="submit" class='btn btn-danger mt-3' value='remove' name='remove'>
                    </form>

                </div>


            <?php endforeach?> 

            </div>


        </div>





    </div>

</div>


<?php require('./html/bottom.php');?>
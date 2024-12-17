<?php require('./html/top.php');?>
<?php require('./html/alert.php');?>


<div class="row container-fluid" style='height:100dvh'>

    <?php require('./html/user_navbar.php');?>

    <div class="col-3"></div>

    <div class="col-9">
        
        <h1 class='mt-4 text-center text-primary' style='font-weight:800'>  Purchase History</h1>

        <table class="table table-striped   mt-4 ms-3">
            <thead  class=" table-dark">
                 <tr style='font-size:1.4em'>
                    <th scope="col">Order</th>
                    <th scope="col">name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date</th>
                 </tr>
            </thead>
            <tbody>
                <?php foreach($user_history as $item):?>
                    <tr style='font-size:1.4em' >
                       <td class='p-0 m-0'><img src="view/img/<?=$item['product_img']?>" style='height:50px; width:60px' class='p-0 m-0'></td>
                       <td><b ><?=$item['name']?></b></td>
                       <td><b ><?=$item['quantiy']?></b></td>
                       <td><b >₱<?=$item['price']?></b></td>
                       <td><b ><?=$item['date']?></b></td>
                    </tr>
                <?php endforeach?>
            </tbody>            
         </table>

        
    </div>  
</div>

<?php require('./html/bottom.php');?>
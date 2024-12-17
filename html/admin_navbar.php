<div class="col-3 border shadow" >

    <div class="container m-auto bg-secondary mt-4" style='width:40%; height: 125px; border-radius:50%;position: relative; overflow: hidden; border:3px solid gray; '>
        <img src="view/img/<?=$admin_info['shop_logo']?>" style=' position: absolute; top: 0; left: 0; width: 100%; height: 100%;'>
    </div>

    <div class='container'>
        <p class='text-center mt-1 NAME' style='font-weight:800; letter-spacing:1px; font-size:1.9em; font-family:sans-serif'> <?= $admin_info['shop_name'] ?> </p>
        <p class='text-center mt-1 position-relative text-muted' style='font-weight:600; letter-spacing:1px; line-height:0px; font-size:1em; bottom:9px'> <?= $admin_info['shop_category'] ?></p>
    </div>

    <br>

    <div class='mt-3' style='width:100%'>
        <a href="/ordering_system/admin_home" class='btn btn-lg btn-outline-primary text-center mb-2' style='width:100%; font-weight:700'>Admin</a>
        <a href="/ordering_system/admin_add" class='btn btn-lg btn-outline-primary text-center mb-2' style='width:100%; font-weight:700'>Add Dish</a>
        <a href="/ordering_system/admin_dashboard" class='btn btn-lg btn-outline-primary text-center mb-2' style='width:100%; font-weight:700'>Dashboard</a>
        <a href="/ordering_system/admin_sales" class='btn btn-lg btn-outline-primary text-center mb-2' style='width:100%; font-weight:700'>Sales History</a>
    </div>

    <br><br><br><br><br><br><br><br>

    <a href="/ordering_system/" class="btn btn-lg btn-outline-primary mt-3"> Log out </a>
     
</div>

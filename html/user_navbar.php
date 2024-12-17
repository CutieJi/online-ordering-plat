

<div class="col-3 border shadow position-fixed" style='height:100dvh'>

    <div class="container m-auto bg-secondary mt-4" style='width:40%; height: 125px; border-radius:50%;position: relative; overflow: hidden; border:3px solid gray; '>
        <img src="view/img/<?=$user_profile['user_img']?>" style=' position: absolute; top: 0; left: 0; width: 100%; height: 100%;'>
    </div>

    <div class='container'>
        <p class='text-center mt-1 NAME' style='font-weight:800; letter-spacing:1px; font-size:1.9em; font-family:sans-serif'> <?=$user_profile['name']?></p>
        <p class='text-center mt-1 position-relative ' style='font-weight:600; letter-spacing:1px; line-height:0px; font-size:1em; bottom:9px'> user</p>
    </div>

    <br>

    <div class='mt-3' style='width:100%'>
        <a href="/ordering_system/user_home" class='btn btn-lg btn-outline-primary text-center mb-2' style='width:100%; font-weight:700'> Profile </a>
        <a href="/ordering_system/user_order" class='btn btn-lg btn-outline-primary text-center mb-2' style='width:100%; font-weight:700'> Order </a>
        <a href="/ordering_system/user_history" class='btn btn-lg btn-outline-primary text-center mb-2' style='width:100%; font-weight:700'> History </a>
    </div>

    <br><br><br><br><br><br><br><br>

    <a href="/ordering_system/" class="btn btn-lg btn-outline-primary mt-3"> Log out </a>
     
</div>
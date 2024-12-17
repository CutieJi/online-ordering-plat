<?php if($alert['show']):?>
    <div id='alert_box' style='z-index:1;transform:scale(1.3);transition:1s; width: 25%; right:0' class="alert ms-5  mt-4   container-fluid position-absolute <?=$alert['color'] . ' ' . $alert['text_color']?>"> <?=$alert['text']?> </div>
<?php endif ?>
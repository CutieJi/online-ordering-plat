<?php require('./html/top.php');?>

<?php require('./html/alert.php');?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <a href="/ordering_system/" class="btn btn-primary mt-2 btn-lg"> Home </a>
        </div>

        <div class="col-12 col-md-4">
            <form action="" method='POST' class='border rounded shadow mt-3 p-4'>
                <h2 class='text-center text-primary mb-4' style='font-weight:800;font-size:2em'> Login </h2>
                <div class="mb-3">
                    <label for="username" class='form-label text-muted'> Username </label>
                    <input type="text" id="username" name='username' class="form-control form-control-lg">
                </div>
                <div class="mb-3">
                    <label for="password" class='form-label text-muted'> Password </label>
                    <input type="password" id="password" name='password' class="form-control form-control-lg">
                </div>
                <hr>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between mt-3">
                    <input type="submit" class='btn btn-primary btn-lg mb-3 mb-md-0'> 
                    <a href="register" class='text-decoration-none text-muted'> Register account? </a>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-4">
        </div>
    </div>
</div>

<?php require('./html/bottom.php');?>
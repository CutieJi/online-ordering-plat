
<?php require('./html/top.php');?>
<?php require('./html/alert.php');?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <a href="/ordering_system/" class="btn btn-primary mt-2 btn-lg"> Home </a>
        </div>

        <div class="col-12 col-md-4">
            <form action="" method='POST' class='border rounded shadow mt-3 p-4'>
                <h2 class='text-center text-primary mb-4' style='font-weight:800;'> Register </h2>
                <div class="mb-3">
                    <label for="username" class='form-label'> Create Username </label>
                    <input type="text" name='username' id="username" class="form-control form-control-lg">
                </div>
                <div class="mb-3">
                    <label for="password" class='form-label'> Create Password </label>
                    <input type="password" name='password' id="password" class="form-control form-control-lg">
                </div>
                <div class="mb-3">
                    <label for="account_type" class='form-label'> Account Type </label>
                    <select name="account_type" id="account_type" class='form-select form-select-sm' style='width: auto;'>
                        <option value='user'>User</option>
                        <option value="admin">Business</option>
                    </select>
                </div>
                <hr>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between mt-3">
                    <input type="submit" class='btn btn-primary btn-lg mb-3 mb-md-0'> 
                    <a href="login" class='text-decoration-none text-muted'> Back to Login Form? </a>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-4">
        </div>
    </div>
</div>

<?php require('./html/bottom.php');?>
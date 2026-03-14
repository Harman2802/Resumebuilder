<?php
$title = "Register | Resume Maker";
require './assest/includes/header.php';
$fn->nonAuthPage();
?>
<div class="d-flex align-items-center" style="height:100vh">
    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            
            <form method="Post" action="actions/register.action.php">
                <div class="d-flex gap-2 justify-content-center">
                    <img class="mb-4" src="./assest/images/logo.png" alt="" height="50">

                    <div>
                        <h1 class="h3 fw-normal my-1"><b>Resume</b> Maker</h1>
                        <p class="m-0">Create your new account</p>

                    </div>
                </div>


                <div class="form-floating">
                    <input type="text" class="form-control" name="your_name" id="floatingName" placeholder="" required>
                    <label for="floatingInput"><i class="bi bi-person"></i> Your_name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email_id" id="floatingEmail" placeholder="name@example.com" required>
                    <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit"><i class="bi bi-person-plus-fill"></i> Register
                </button>
               

                <div class="text-center my-3">
    <span class="text-muted">or login with</span>
</div>

<div class="d-flex justify-content-center gap-3 mb-3">
    <a href="#" class="btn btn-outline-danger social-login-btn">
        <i class="bi bi-google"></i> Google
    </a>
    <a href="#" class="btn btn-outline-primary social-login-btn">
        <i class="bi bi-facebook"></i> Facebook
    </a>
    <a href="#" class="btn btn-outline-info social-login-btn">
        <i class="bi bi-linkedin"></i> LinkedIn
    </a>
</div>
<div class="text-center">
          <span class="text-muted">Already have an account? </span>
          <a href="login.php" class="text-decoration-none">Login</a>
        </div>


            </form>
        </main>
        </div>
    </div>
<?php
require './assest/includes/footer.php';
?>


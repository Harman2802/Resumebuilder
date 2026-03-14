<?php
$title = " Account | Resume Maker";
require './assest/includes/header.php';
require './assest/includes/navbar.php';
$fn->authPage();

$user = $db->query("SELECT your_name,email_id FROM users WHERE id='".$fn->Auth()['id']."'");
$user = $user->fetch_assoc();
?>
   

    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4">
            <div class="d-flex justify-content-between border-bottom">
                <h5> Account </h5>
                <div>
                    <a class="text-decoration-none" onclick='history.back()'><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form action="actions/updateaccount.action.php" method="post" class="row g-3 p-3">

                    <div class="col-md-6">
                        <label class="form-label">Your Name</label>
                        <input type="text" placeholder=" YouTube" name="your_name" value="<?=@$user['your_name']?>" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" placeholder="youtube11@gmail.com" name="email_id" value="<?=@$user['email_id']?>" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">New Password</label>
                        <input type="text" placeholder="New password" name="password" class="form-control">
                    </div>




                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Update
                           Account</button>
                    </div>
                </form>
            </div>





        </div>

    </div>
    


 <?php
require './assest/includes/footer.php';
?>
<?php
// Header and Navigation
include("includes/header.php");
include("includes/navigation.php");

if (isset($_POST['user_register'])) {

    // Catch the register form fields
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Escaping the unknown string
    $username = mysqli_real_escape_string($connect, $username);
    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);
}

?>
    
 
<!-- Page Content -->
<div class="container">
    
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="form-wrap">
                    <h1>Register</h1>
                        <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="username" class="sr-only">username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                            </div>
                             <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                            </div>
                             <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                            </div>

                            <input type="submit" name="user_register" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                        </form>

                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <hr>


<!-- Footer -->
<?php
    include("includes/footer.php");
?>

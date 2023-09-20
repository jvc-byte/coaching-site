<!-- sign in form starts -->
<form class="container" action="CMS/proccess_signin.php" method="post">
    <div class="row g-2">
        <div class="col-12">
            <label for="email" class="visually-hidden">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
        </div>
        <div class="col-12">
            <label for="login_password" class="visually-hidden">Password</label>
            <input type="password" class="form-control" id="login_password" name="password" placeholder="Password"
                required><i class="fa-regular fa-eye fa-bounce pass_eye" id="passwordeye3"></i>
        </div>

        <div class="form-check rememberMe col-6">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
        </div>
        <div class="col-6 forgotPass text-end">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
        </div>
        <input type="submit" value="Sign in" name="signin" class="btn btn-outline-primary">
    </div>
</form>
<!-- sign in form ends -->
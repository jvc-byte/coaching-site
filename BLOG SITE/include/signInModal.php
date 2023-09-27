<!-- sign in form starts -->
<form class="container" action="include/proccess_signin.php" method="post">
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

        <select class="form-select col-6" id="industry" name="program" aria-label="Select program" required>
            <option selected>Select program</option>
            <option value="classic">classic</option>
            <option value="p2p">p2p</option>
            <option value="virtual">virtual</option>
        </select>

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
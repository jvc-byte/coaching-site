<!-- sign in modal contents starts -->
<div class="modal-content">
    <!-- madal header -->
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="signUpModalLabel2">Sign in</h1>
        <button type="button" id="closeModalButton" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <!-- sign in modal body starts -->
    <div class="modal-body">
        <!-- sign in form starts -->
        <form class="container" action="CMS/proccess_signin.php" method="post">
            <div class="row g-2">
                <div class="col-12">
                    <label for="email" class="visually-hidden">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                </div>
                <div class="col-12">
                    <label for="login_password" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" id="login_password" name="password" placeholder="Password" required><i
                        class="fa-regular fa-eye fa-bounce pass_eye" id="passwordeye3"></i>
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
        <div class="container mt-4">
            <div class="row">
                <!-- Social sign up buttons -->
                <b>Or sign in with:</b>
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- sign in form ends -->
    </div>
    <!-- sign in modal body ends -->
    <!-- sign in modal footer -->
    <div class="modal-footer">
        <P>Don't have an account?</P>
        <button class="btn btn-primary" data-bs-target="#signUpModal" data-bs-toggle="modal">Sign
            up</button>
    </div>
</div>
<!-- sign in modal contents ends -->
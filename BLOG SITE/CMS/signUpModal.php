<!-- sign up modal content starts -->
<div class="modal-content">
    <!-- modal header starts -->
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="signUpModalLabel">Sign up</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <!-- modal header ends -->
    <!-- modal body starts -->
    <div class="modal-body">
        <!-- sign up form starts -->
        <form class="container" action="#" method="post">
            <div class="row g-2">
                <div class="col-6">
                    <label for="firstname" class="visually-hidden">First Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
                </div>
                <div class="col-6">
                    <label for="lastname" class="visually-hidden">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" required>
                </div>
                <div class="col-6">
                    <label for="email" class="visually-hidden">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                </div>
                <div class="col-6">
                    <label for="password" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required><i
                        class="fa-regular fa-eye fa-bounce pass_eye" id="passwordeye"></i>
                </div>
                <div class="col-6">
                    <label for="confirmPassword" class="visually-hidden">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password"
                        required>
                    <i class="fa-regular fa-eye fa-bounce pass_eye" id="passwordeye2"></i>
                </div>
                <div class="col-6">
                    <label for="number" class="visually-hidden">Phone Number</label>
                    <input type="number" class="form-control" id="number" placeholder="Phone Number" required>
                </div>
                <select class="form-select col-6" id="industry" name="industry" aria-label="Select industry">
                    <option selected>Select industry</option>
                    <option value="tech">Technology</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="agric">Agriculture</option>
                </select>
                <select class="form-select col-6" id="industry" name="industry" aria-label="Select industry">
                    <option selected>Select program</option>
                    <option value="tech">classic</option>
                    <option value="healthcare">p2p</option>
                    <option value="agric">virtual</option>
                </select>
                <!--Textarea-->
                <div class="col-6">
                    <textarea id="TextArea" class="md-textarea form-control"
                        placeholder="Describe your current challenges" required></textarea>
                    <label for="TextArea" class="visually-hidden">Textarea</label>
                </div>
                <!-- Radio buttons -->
                <div class="col-6">
                    <div>
                        <strong class="mx-2">Level:</strong>
                        <input type="radio" id="startup" name="business_stage" value="startup" required>
                        <label for="startup">Startup</label>
                        <input type="radio" id="growth" name="business_stage" value="growth" required>
                        <label for="growth">Growth</label>
                    </div>
                    <!-- Date input -->
                    <input type="date" id="coaching_date" name="coaching_date" class="form-control" required>
                </div>
                <!-- terms and condition -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        I agree to <a href="#">terms</a> and <a href="#">condition </a>
                    </label>
                </div>
                <!-- sign up button -->
                <button class="btn btn-outline-primary">Sign up</button>
            </div>
        </form>
        <div class="container mt-3">
            <div class="row">
                <!-- Social sign up icon header -->
                <strong>Or sign up with:</strong>
                <!-- Social sign up icons starts -->
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
                <!-- Social sign up icons ends -->
            </div>
        </div>
        <!-- sign up form ends -->
    </div>
    <!-- modal body ends -->
    <!-- modal footer starts -->
    <div class="modal-footer">
        <p>Already have an account?</p>
        <button class="btn btn-primary" data-bs-target="#signInModal" data-bs-toggle="modal">Sign
            in</button>
    </div>
    <!-- modal footer ends -->
</div>
<!-- sign up modal content ends -->
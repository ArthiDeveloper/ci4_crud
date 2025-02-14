<?= $this->extend('layout/auth') ?>

<?= $this->section('content') ?>
<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="card-body d-flex flex-column h-100 gap-1">

            <!-- Logo -->
            <div class="auth-brand text-center text-lg-start">
                <a href="/" class="logo-dark">
                    <span><img src="assets/images/logo.png" alt="dark logo" height="22"></span>
                </a>
                <a href="/" class="logo-light">
                    <span><img src="assets/images/logo.png" alt="logo" height="22"></span>
                </a>
            </div>

            <div class="my-auto">
                <!-- title-->
                <h4 class="mt-0">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                <!-- form -->
                <form action="<?= base_url().'login' ?>" method="POST">
                    <div class="mb-3">
                        <input class="form-control" type="email" name="email" required="" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                        <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                        </div>
                    </div>
                    <div class="d-grid mb-3 text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                    </div>
                </form>
                <!-- end form-->
            </div>

            <!-- Footer-->
            <footer class="footer footer-alt">
                <p class="text-muted">Don't have an account? <a href="register" class="text-muted ms-1"><b>Sign Up</b></a></p>
            </footer>

        </div> <!-- end .card-body -->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3">I love the color!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
            </p>
            <p>
                - Horecanation Admin User
            </p>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->
<?= $this->endSection() ?>
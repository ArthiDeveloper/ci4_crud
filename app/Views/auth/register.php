<?= $this->extend('layout/auth') ?>

<?= $this->section('content') ?>
<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="card-body d-flex flex-column h-100 gap-1">

            <!-- Logo -->
            <div class="text-center text-lg-start">
                <a href="/" class="">
                    <span><img src="assets/images/logo.png" alt="dark logo" height="22"></span>
                </a>
            </div>

            <div class="my-auto">
                <!-- title-->
                <h4 class="mt-2">Free Sign Up</h4>
                <p class="text-muted mb-3">Don't have an account? Create your account, it takes less than a minute</p>
                <!-- form -->
                <form action="<?= base_url().'register' ?>" method="POST">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" name="email" required placeholder="Enter your email">
                    </div>
                     <div class="mb-3">
                        <input class="form-control" type="text" name="mobile" required placeholder="Enter your mobile number">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" required name="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" required name="confirmpassword" placeholder="Enter your confirm password">
                    </div>
                    <div class="mb-3 d-grid text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i> Sign Up </button>
                    </div>
                </form>
                <!-- end form-->
            </div>

            <!-- Footer-->
            <footer class="footer footer-alt">
                <p class="text-muted">Already have account? <a href="/" class="text-muted ms-1"><b>Log In</b></a></p>
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
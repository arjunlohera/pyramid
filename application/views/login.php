<!doctype html>
<html>

<head>
    <title>Admin | Login</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <meta name="description" content="Admin Login to manage your blog posts.">
    <meta name="keywords" content="Admin login, pyramid infotech">
    <!-- Loading css files -->
    <link rel="shortcut icon" type="image/png" href="<?=base_url()?>/assets/img/logo/favicon.png" />
    <link rel="stylesheet" href="<?=base_url()?>plugins\bootstrap\css\bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets\css\floating-labels.css" />
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-around">
            <div class="col-6">
                <?php if(isset($err) && $err !== "") { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?=$err;?>
                    </div>    
                <?php } ?>
                <form method="post" action="<?=base_url('Auth/login_verify')?>" class="needs-validation form-signin shadow p-5 bg-white" novalidate>
                    <div class="text-center mb-4">
                        <img class="mb-4" src="<?= base_url()?>\assets\img\logo\logo.png" alt="Pyramid Infotech" width="72"
                            height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Pyramid Infotech</h1>
                        <h5 class="font-weight-normal text-muted">Login to Admin Panel</h5>
                    </div>
                    <div class="form-label-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <label for="username">Username</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid Username.
                        </div>
                    </div>
                    <div class="form-label-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid Password.
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>plugins/popper/popper.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>
    <script>
    $(document).ready(function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    });
    </script>
</body>


</html>

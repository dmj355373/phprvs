<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | PHP Router View Script Framework</title>

    <?php include 'layout/extensions.php'; ?>
</head>
<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card text-center">

                        <div class="card-body p-4">
                            <div class="text-center">
                                <h1 class="text-error">4<i class="mdi mdi-emoticon-sad"></i>4</h1>
                                <h4 class="text-uppercase text-danger mt-3">Page Not Found</h4>
                                <p class="text-muted mt-3">Wala sa System ang hinahanap mong page.<br/> Ipagbigay alam ang nangyari sa Administrator.<br/> Salamat!</p>

                                <a class="btn btn-info mt-3" href="/phprvs"><i class="mdi mdi-reply"></i> Return Home</a>
                            </div>
                        </div> <!-- end card-body-->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <?php 
    // footer
    include 'layout/footer.php'; 
    // external links
    include 'layout/plugins.php';     
    ?>

    

</body>
</html>
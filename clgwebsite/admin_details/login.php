<!-- Login Page -->

<!doctype html>
<html lang="en">

<head>
    <title>CKRETA</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Style sheets -->
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <!-- main  -->
    <div class="container ">
        <div class="row">
            <div class="column">
                <div class="card">
                    <br>
                    <h3 class="text-center my-3">Admin Login</h3>

                    <form class="my-4" action="loginprocess.php" method="POST">

                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <label for="admin_mail">Email</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="email" class="no-outline" name="email" placeholder="User email"><br>
                            
                        </div>

                        <div class="my-4">

                            <label for="password">Password</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="password" class="no-outline" name="password" placeholder="Password"><br>
                            </div>

                            <div class="d-grid gap-2 my-5">
                                <button type="submit" name="submit" class="btn btn-lg"
                                    style="background-color: #8b5c7e;color:white; border-radius:4px;">
                                    LOGIN
                                </button>

                            </div>
                            <div class="d-grid gap-2">
                                <a style="color:#8b5c7e;" href="register.php" class="text-center" style="text-decoration: none;">Creat New Account
                                    </a>

                            </div>

                    </form>

                </div>
            </div>
        </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>
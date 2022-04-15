<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<html lang="en">

<head>
    <title>TITLU</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="../css/login-signup.css">
</head>


<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">

      <form>
        <form method="POST" action="<?php echo base_url().'login/login_engine'; ?>">
            <h1>Login</h1>
            <div class="content">
                <div class="input-field">

                    <input name="username" type="text" placeholder="username" autocomplete="nope">

                </div>

                <div class="input-field">


                    <input name="password" type="password" placeholder="Password" autocomplete="new-password">


                </div>
                <a href="#" class="link">Forgot Your Password?</a>
            </div>


            <div class="action">

                <a href="<?php echo base_url().'login/signup'; ?>">
                <button type="button">Register</button>
                </a>

                <button type="submit">Sign in</button>

            </div>

        </form>
        </form>
    </div>
    <script src="./script.js"></script>

</body>
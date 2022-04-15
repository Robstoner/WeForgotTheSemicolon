<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<html lang="en">

<head>
    <title>Login</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="../css/login-signup.css">
</head>


<body>
    <div class="login-form">

        <?php if ($this->session->userdata('login_error') == TRUE) { ?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            Eroare! Username-ul nu exista!
            </div>";
        <?php } ?>

        <?php
        if ($this->session->userdata('wrong_pass') == TRUE) {
            echo "<div>
                  Eroare! Parola este gresita!
                </div>";
        }
        ?>


        <form method="POST" action="<?php echo base_url() . 'login/login_engine'; ?>">
            <h1>Login</h1>
            <div class="content">
                <div class="input-field">

                    <input name="username" type="text" class="form-control" placeholder="username" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="new-password">

                </div>
                <a href="#" class="link">Forgot Your Password?</a>
            </div>


            <div class="action">

                <a href="<?php echo base_url() . 'login/signup'; ?>">
                    <button class="btn"  type="button">Register</button>
                </a>

                <button class="btn" type="submit">Sign in</button>

            </div>

        </form>

    </div>
    <script src="./script.js"></script>

</body>
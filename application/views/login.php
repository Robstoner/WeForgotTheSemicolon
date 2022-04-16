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

        <form method="POST" action="<?php echo base_url() . 'login/login_engine'; ?>">

            <h1>Login</h1>
            <div class="content">


                <?php if ($this->session->userdata('wrong_pass') == TRUE) { ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Eroare! Parola gresita.
                    </div>
                <?php } ?>

                <?php if ($this->session->userdata('login_error') == TRUE) { ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Eroare! Username-ul nu exista.
                    </div>
                <?php } ?>

                <?php if ($this->session->userdata('signup_done') == TRUE) { ?>
                    <div class="alert-success">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Sign up reusit! Va rugam conectati-va in cont.
                    </div>
                <?php } ?>


                <div class="input-field">

                    <input name="username" type="text" class="form-control" placeholder="  Username" autocomplete="nope" required>

                </div>

                <div class="input-field">

                    <input name="password" type="password" class="form-control" placeholder="  Parola" autocomplete="new-password" required>

                </div>
                <a href="<?php echo base_url() . 'login/forgot_pass'; ?>" class="link">Ai uitat parola?</a>
            </div>
            
            <div class="no-cont">
                <p>Nu aveti cont?</p>
            </div>

            <div class="action">

                <a href="<?php echo base_url() . 'login/signup'; ?>">
                    <button class="btn" type="button">Register</button>
                </a>

                <button class="btn" type="submit">Sign in</button>

            </div>

        </form>

    </div>
    <script src="./script.js"></script>

</body>
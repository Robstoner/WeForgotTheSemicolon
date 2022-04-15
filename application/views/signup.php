<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<html lang="en">

<head>
    <title>Signup</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="../css/login-signup.css">
</head>


<body>
    <div class="login-form" style="margin: 25px auto">

        <form method="POST" action="<?php echo base_url() . 'login/signup_engine'; ?>">
            <h1>Signup</h1>
            <div class="content">

                <?php if ($this->session->userdata('signup_failed') == TRUE) { ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Signup failed! Please try again.
                    </div>
                <?php } ?>

                <div class="input-field">

                    <input name="username" type="text" class="form-control" placeholder="Username" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="name" type="text" class="form-control" placeholder="Name" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="email" type="email" class="form-control" placeholder="Email" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="phone" type="text" class="form-control" placeholder="Phone" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="new-password">

                </div>
            </div>


            <div class="action">

                <a href="<?php echo base_url() . 'login'; ?>">
                    <button class="btn" type="button">Back to Sign in</button>
                </a>

                <button class="btn" type="submit">Sign up</button>

            </div>

        </form>

    </div>
    <script src="./script.js"></script>

</body>
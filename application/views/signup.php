<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<html lang="en">

<head>
    <title>Sign up</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="../css/login-signup.css">
</head>


<body>
    <div class="login-form" style="margin: 25px auto">

        <form method="POST" action="<?php echo base_url() . 'login/signup_engine'; ?>">
            <h1>Sign up</h1>
            <div class="content">

                <?php if ($this->session->userdata('signup_failed') == TRUE) { ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Sign up nereusit! Va rugam incercati din nou.
                    </div>
                <?php } ?>

                <div class="input-field">

                    <input name="username" type="text" class="form-control" placeholder="  Username" autocomplete="nope" required>

                </div>

                <div class="input-field">

                    <input name="name" type="text" class="form-control" placeholder="  Nume" autocomplete="nope" required>

                </div>

                <div class="input-field">

                    <input name="email" type="email" class="form-control" placeholder="  Email" autocomplete="nope" required>

                </div>

                <div class="input-field">

                    <input name="phone" type="tel" class="form-control" placeholder="  Telefon" autocomplete="nope" pattern="+[0-9]{11}" required>

                </div>

                <div class="input-field">

                    <input name="password" type="password" class="form-control" placeholder="  Parola" autocomplete="new-password" required>

                </div>
            </div>


            <div class="action">

                <a href="<?php echo base_url() . 'login'; ?>">
                    <button class="btn" type="button">Inapoi la Sign in</button>
                </a>

                <button class="btn" type="submit">Sign up</button>

            </div>

        </form>

    </div>
    <script src="./script.js"></script>

</body>

</html>

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

        <form class="d-bl" method="POST" action="<?php echo base_url() . 'login/signup_engine'; ?>">
            <h1 class="d-bl">Sign up</h1>
            <div class="content d-bl">

                <?php if ($this->session->userdata('signup_failed') == TRUE) { ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Sign up nereusit! Va rugam incercati din nou.
                    </div>
                <?php } ?>

                <div class="input-field d-bl">

                    <input name="username" type="text" class="form-control d-bl" placeholder="  Username" autocomplete="nope" required>

                </div>

                <div class="input-field d-bl">

                    <input name="name" type="text" class="form-control d-bl" placeholder="  Nume" autocomplete="nope" required>

                </div>

                <div class="input-field d-bl">

                    <input name="email" type="email" class="form-control d-bl" placeholder="  Email" autocomplete="nope" required>

                </div>

                <div class="input-field d-bl">

                    <input name="phone" type="tel" class="form-control d-bl" placeholder="  Telefon" autocomplete="nope" pattern="+[0-9]{11}" required>

                </div>

                <div class="input-field d-bl">

                    <input name="password" type="password" class="form-control d-bl" placeholder="  Parola" autocomplete="new-password" required>

                </div>
            </div>


            <div class="action d-bl">

                <a class="d-bl" href="<?php echo base_url() . 'login'; ?>">
                    <button class="btn d-bl" type="button">Inapoi la Sign in</button>
                </a>

                <button class="btn d-bl" type="submit">Sign up</button>

            </div>

        </form>

    </div>
    <script src="./script.js"></script>

</body>

</html>

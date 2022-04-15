<?php $this->load->view('navbar.php'); ?>

    <div class="login-form" style="margin: 25px auto">

        <form method="POST" action="<?php echo base_url() . 'facturi/add_factura'; ?>">
            <h1>Adaugare Facturi</h1>
            <div class="content">

                <div class="input-field">

                    <input name="gaze" type="number" step="0.01" class="form-control" placeholder="Gaze" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="" type="number" step="0.01" class="form-control" placeholder="Name" autocomplete="nope">

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

                <a href="<?php echo base_url() . 'Facturi'; ?>">
                    <button class="btn" type="button">Back to Facturi</button>
                </a>

                <button class="btn" type="submit">Sign up</button>

            </div>

        </form>

    </div>
    <script src="./script.js"></script>

</body>
</html>
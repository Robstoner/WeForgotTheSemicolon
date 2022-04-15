<?php $this->load->view('navbar.php'); ?>

    <div class="login-form" style="margin: 25px auto">

        <form method="POST" action="<?php echo base_url() . 'facturi/add_factura'; ?>">
            <h1>Adaugare Facturi</h1>
            <div class="content">

                <div class="input-field">

                    <input name="gaze" type="number" step="0.01" class="form-control" placeholder="Gaze" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="apa" type="number" step="0.01" class="form-control" placeholder="Apa" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="curent" type="number" step="0.01" class="form-control" placeholder="Curent" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="net" type="number" step="0.01" class="form-control" placeholder="Net" autocomplete="nope">

                </div>

                <div class="input-field">

                    <input name="altele" type="number" step="0.01" class="form-control" placeholder="Altele" autocomplete="nope">

                </div>
            </div>


            <div class="action">

                <a href="<?php echo base_url() . 'Facturi'; ?>">
                    <button class="btn" type="button">Inapoi la Facturi</button>
                </a>

                <button class="btn" type="submit">Adaugare</button>

            </div>

        </form>

    </div>
    <script src="./script.js"></script>

</body>
</html>
<?php $this->load->view('navbar.php'); ?>

<div class="login-form" style="margin: 25px auto">

    <form method="POST" action="<?php echo base_url() . 'consum/add_consum'; ?>">
        <h1>Adaugare Facturi</h1>
        <div class="content">
            <div class="input-field">

                <input name="suma" type="number" step="0.01" class="form-control" placeholder="Suma platita in lei" autocomplete="nope">

            </div>
        </div>


        <div class="action">

            <a href="<?php echo base_url() . 'Consum'; ?>">
                <button class="btn" type="button">Inapoi la Consum</button>
            </a>

            <button class="btn" type="submit">Adaugare</button>

        </div>

    </form>

</div>
<script src="./script.js"></script>

</body>

</html>
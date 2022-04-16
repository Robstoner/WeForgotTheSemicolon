<?php $this->load->view('navbar.php'); ?>

<div class="login-form" style="margin: 25px auto">

    <form class="d-bl" method="POST" action="<?php echo base_url() . 'consum/add_consum'; ?>">
        <h1 class="d-bl">Adaugare Cheltuieli</h1>
        <div class="content d-bl">
            <div class="input-field d-bl">

                <input name="suma" type="number" step="0.01" class="form-control d-bl" placeholder="  Suma platita in lei" autocomplete="nope">

            </div>
        </div>


        <div class="action d-bl">

            <a class="d-bl" href="<?php echo base_url() . 'Consum'; ?>">
                <button class="btn d-bl" type="button">Inapoi la Consum</button>
            </a>

            <button class="btn d-bl" type="submit">Adaugare</button>

        </div>

    </form>

</div>
<script src="./script.js"></script>

</body>

</html>
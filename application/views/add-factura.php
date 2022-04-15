<?php $this->load->view('navbar.php'); ?>

<div class="login-form" style="margin: 25px auto">

    <form method="POST" action="<?php echo base_url() . 'facturi/add_factura'; ?>">
        <h1>Adaugare Facturi</h1>
        <div class="content">

            <div class="input-field">

                <label for="facturi_type">Alege un tip de factura:</label>
                <select name="facturi_type" id="facturi_type">
                    <option value="Gaze">Gaze</option>
                    <option value="Apa">Apa</option>
                    <option value="Internet">Internet</option>
                    <option value="Curent">Curent</option>
                    <option value="Altele">Altele</option>
                </select>

            </div>
            <div class="input-field">

                <input name="suma" type="number" step="0.01" class="form-control" placeholder="Suma platita in lei" autocomplete="nope">

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
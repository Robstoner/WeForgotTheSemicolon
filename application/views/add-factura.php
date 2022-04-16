<?php $this->load->view('navbar.php'); ?>

<div class="login-form" style="margin: 25px auto">

    <form class="d-bl" method="POST" action="<?php echo base_url() . 'facturi/add_factura'; ?>">
        <h1 class="d-bl">Adaugare Plata</h1>
        <div class="content d-bl">

            <div class="input-field d-bl">

                <label class="d-bl" for="facturi_type">Alege un tip de factura:</label>
                <select class="d-bl" name="facturi_type" id="facturi_type">
                    <option class="d-bl" value="Gaze">Gaze</option>
                    <option class="d-bl" value="Apa">Apa</option>
                    <option class="d-bl" value="Internet">Internet</option>
                    <option class="d-bl" value="Curent">Curent</option>
                    <option class="d-bl" value="Altele">Altele</option>
                </select>

            </div>
            <div class="input-field d-bl">

                <input name="suma" type="number" step="0.01" class="form-control d-bl" placeholder="  Suma platita in lei" autocomplete="nope">

            </div>
        </div>


        <div class="action d-bl">

            <a class="d-bl" href="<?php echo base_url() . 'Facturi'; ?>">
                <button class="btn" type="button">Inapoi la Facturi</button>
            </a>

            <button class="btn d-bl" type="submit">Adaugare</button>

        </div>

    </form>

</div>
<script src="./script.js"></script>

</body>

</html>
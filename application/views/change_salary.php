<?php $this->load->view('navbar'); ?>

<div class = "login-form" style="margin-top: 10px">
    <form class="d-bl" method="POST" action="<?php echo base_url() . 'login/change_sal_backend'; ?>">
        <h1 class="d-bl">Schimbare Salariu</h1>
        <div class="content d-bl">
            <div class="input-field d-bl">

                <input name="salariu" type="number" class="form-control d-bl" placeholder="  Salariul brut in lei" autocomplete="nope">

            </div>
        </div>


        <div class="action d-bl">

            <a class="d-bl" href="<?php echo base_url() . 'home'; ?>">
                <button class="btn d-bl" type="button">Inapoi la Home</button>
            </a>

            <button class="btn d-bl" type="submit">Schimbare</button>

        </div>

    </form>
</div>


</body>

</html>
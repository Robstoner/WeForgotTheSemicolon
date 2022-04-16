<?php $this->load->view('navbar.php'); ?>

<div class="login-form d-bl">


    <?php echo json_encode($error) ? $error : ''; ?>

    <form class="d-bl" method="POST" action="<?php echo base_url() . 'facturi/add_photo'; ?>" enctype="multipart/form-data">

        <h1 class="d-bl">Adauga poze facturi</h1>
        <div class="input-field d-bl">
            <input class="d-bl" type="file" name="userfile" size="20" />
        </div>
        <br /><br />

        <div class="action d-bl">

            <button class="btn d-bl" type="submit">Adaugare</button>

        </div>
        <!-- <input class="d-bl" type="submit" value="upload" /> -->

    </form>

</div>
<script src="./script.js"></script>

</body>

</html>
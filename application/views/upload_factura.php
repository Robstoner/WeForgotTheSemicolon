<?php $this->load->view('navbar.php'); ?>

<div class="login-form" style="margin: 25px auto">


<?php echo json_encode($error);?>

    <form method="POST" action="<?php echo base_url() . 'facturi/add_photo'; ?>" enctype="multipart/form-data">


        <input type="file" name="userfile" size="20" />

        <br /><br />

        <input type="submit" value="upload" />

    </form>

</div>
<script src="./script.js"></script>

</body>

</html>
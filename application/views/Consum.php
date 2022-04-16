<?php $this->load->view('navbar'); ?>

<?php foreach ($poze_facturi as $poza) { ?>
<div class="file-box">
    <div class="box-content">
        <h5>Factura din <?php echo $poza->data; ?></h5>
        <div class="preview">
            <embed src="<?php echo base_url().'uploads/' . $poza->user_id . '/' . $poza->filename; ?>">
        </div>
        <a href="<?php echo base_url().'facturi/download/'.$poza->id; ?>" class="dwn">Download</a>
    </div>
</div>
<?php } ?>

</body>

</html>
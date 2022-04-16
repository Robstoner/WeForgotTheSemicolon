<?php $this->load->view('navbar'); ?>

<?php foreach ($poze_facturi as $poza) { ?>


<div id="container">
    
        
        <h2>Factura din <?php echo $poza->data; ?></h2>
        
        <div class="img">
            <embed src="<?php echo base_url().'uploads/' . $poza->user_id . '/' . $poza->filename; ?>" width="80%" height="80%">
        </div>

        <a href="<?php echo base_url().'facturi/download/'.$poza->id; ?>" class="dwn">Download</a>

</div>
<?php } ?>



</body>

</html>
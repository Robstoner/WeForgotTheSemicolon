<?php $this->load->view('navbar'); ?>



<div class="adaugare">
    <a href="<?php echo base_url() . 'login/change_sal' ; ?>">
        <button class="btn" type="button">Schimba salariul</button>
    </a>
</div>


<div class="canvas-cont">
    <canvas class="pie" id="pie_chart"></canvas>
</div>

</body>

<script src="../js\piechart.js"></script>

</html>
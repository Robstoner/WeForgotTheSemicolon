<?php $this->load->view('navbar'); ?>
<div class="adaugare">
    <a href="facturi/add">
        <button class="btn2" type="button">Adauga factura plata</button>
    </a>
</div>
<div class="adaugare">
    <a href="<?php echo base_url() . 'facturi/photo'; ?>">
        <button class="btn2" type="button">Adauga factura poza/pdf</button>
    </a>
</div>

<div class="adaugare">
    <a href="consum/add">
        <button class="btn2" type="button">Adauga cheltuieli</button>
    </a>
</div>


<div class="canvas-cont" style="margin-top:-250px;">
        <canvas class="pie" id="pie_chart"></canvas>
    </div>


</body>

<script>
    const data = {
        labels: ["Gaze", "Apa", "Curent", "Internet", "Altele"],
        datasets: [{
            label: "Impartire (lei)",
            backgroundColor: ["#9e32bf", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
            data: [
                <?php echo $gaze; ?>,
                <?php echo $apa; ?>,
                <?php echo $curent; ?>,
                <?php echo $internet; ?>,
                <?php echo $altele; ?>
            ],

        }]
    };



    const config = {

        type: 'pie',
        data: data,
        options: {

            responsive: true,
            maintainAspectRatio: false,

            title: {
                display: true,
                text: 'Impartirea facturilor pe tip pentru luna curenta (lei)'
            }
        }

    };

    const pie_chart = new Chart(

        document.getElementById("pie_chart"),
        config
    );

    new Chart(ctx, {


    });
</script>


</html>
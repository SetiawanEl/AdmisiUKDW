<script>
<?php
                $no= 1;
                $result = $conn->query("select a.Jurusan_2 as j1, a.Pendaftar as p1, a.Diterima as d1,a.Regis as r1 FROM trend_2 a");
                while ($row = mysqli_fetch_assoc($result)) {
                $values[]=$row;   
                            }
                mysqli_free_result($result);
                            { 
                                             
            ?>
Chart.defaults.global.legend.labels.usePointStyle = true;
var ctx = document.getElementById('Trend2Full').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Pendaftar', 'Diterima', 'Registrasi'],
        datasets: [{
                label: '<?php echo $values[0]['j1'] ?>',
                data: [<?php echo $values[0]['p1'] ?>, <?php echo $values[0]['d1'] ?>, <?php echo $values[0]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#261447','#261447','#261447'
                ]
            },
            {
                label: '<?php echo $values[1]['j1'] ?>',
                data: [<?php echo $values[1]['p1'] ?>, <?php echo $values[1]['d1'] ?>, <?php echo $values[1]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#FF3864','#FF3864','#FF3864'
                ]
            },
            {
                label: '<?php echo $values[2]['j1'] ?>',
                data: [<?php echo $values[2]['p1'] ?>, <?php echo $values[2]['d1'] ?>, <?php echo $values[2]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#90A959','#90A959','#90A959'
                ]
            },
            {
                label: '<?php echo $values[3]['j1'] ?>',
                data: [<?php echo $values[3]['p1'] ?>, <?php echo $values[3]['d1'] ?>, <?php echo $values[3]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#E9B872','#E9B872','#E9B872'
                ]
            },
            {
                label: '<?php echo $values[4]['j1'] ?>',
                data: [<?php echo $values[4]['p1'] ?>, <?php echo $values[4]['d1'] ?>, <?php echo $values[4]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#6494AA','#6494AA','#6494AA'
                ]
            },
            {
                label: '<?php echo $values[5]['j1'] ?>',
                data: [<?php echo $values[5]['p1'] ?>, <?php echo $values[5]['d1'] ?>, <?php echo $values[5]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#753742','#753742','#753742'
                ]
            },
            {
                label: '<?php echo $values[6]['j1'] ?>',
                data: [<?php echo $values[6]['p1'] ?>, <?php echo $values[6]['d1'] ?>, <?php echo $values[6]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#A5FFD6','#A5FFD6','#A5FFD6'
                ]
            },
            {
                label: '<?php echo $values[7]['j1'] ?>',
                data: [<?php echo $values[7]['p1'] ?>, <?php echo $values[7]['d1'] ?>, <?php echo $values[7]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#7D83FF','#7D83FF','#7D83FF'
                ]
            },
            {
                label: '<?php echo $values[8]['j1'] ?>',
                data: [<?php echo $values[8]['p1'] ?>, <?php echo $values[8]['d1'] ?>, <?php echo $values[8]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#231C07','#231C07','#231C07'
                ]
            }
        ],
        
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
<?php } ?>
</script>
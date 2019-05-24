<script>
<?php
                $no= 1;
                $result = $conn->query("select a.Jurusan_1 as j1, a.Pendaftar as p1, a.Diterima as d1,
                a.Regis as r1, b.Jurusan_2 as j2, b.Pendaftar as p2, b.Diterima as d2, b.Regis as r2, 
                c.Jurusan_3 as j3, c.Pendaftar as p3, c.Diterima as d3, c.Regis as r3 from trend_1 a, trend_2 b, trend_3 c");
                while ($row = mysqli_fetch_assoc($result)) {
                $values[]=$row;   
                            }
                mysqli_free_result($result);
                            { 
                                             
            ?>
var ctx = document.getElementById('Trend2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Pendaftar', 'Diterima', 'Registrasi'],
        datasets: [{
                label: '<?php echo $values[3]['j1'] ?>',
                data: [<?php echo $values[3]['p1'] ?>, <?php echo $values[3]['d1'] ?>, <?php echo $values[3]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[4]['j1'] ?>',
                data: [<?php echo $values[4]['p1'] ?>, <?php echo $values[4]['d1'] ?>, <?php echo $values[4]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[5]['j1'] ?>',
                data: [<?php echo $values[5]['p1'] ?>, <?php echo $values[5]['d1'] ?>, <?php echo $values[5]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 2
            }
        ]
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
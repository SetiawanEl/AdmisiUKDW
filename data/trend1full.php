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
var ctx = document.getElementById('Trend1Full').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Pendaftar', 'Diterima', 'Registrasi'],
        datasets: [{
                label: '<?php echo $values[9]['j1'] ?>',
                data: [<?php echo $values[9]['p1'] ?>, <?php echo $values[9]['d1'] ?>, <?php echo $values[9]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#261447','#261447','#261447'
                ],
                borderColor: [
                    '#261447','#261447','#261447'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[10]['j1'] ?>',
                data: [<?php echo $values[10]['p1'] ?>, <?php echo $values[10]['d1'] ?>, <?php echo $values[10]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#FF3864','#FF3864','#FF3864'
                ],
                borderColor: [
                    '#FF3864','#FF3864','#FF3864'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[11]['j1'] ?>',
                data: [<?php echo $values[11]['p1'] ?>, <?php echo $values[11]['d1'] ?>, <?php echo $values[11]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#90A959','#90A959','#90A959'
                ],
                borderColor: [
                    '#90A959','#90A959','#90A959'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[12]['j1'] ?>',
                data: [<?php echo $values[12]['p1'] ?>, <?php echo $values[3]['d1'] ?>, <?php echo $values[12]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#E9B872','#E9B872','#E9B872'
                ],
                borderColor: [
                    '#E9B872','#E9B872','#E9B872'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[13]['j1'] ?>',
                data: [<?php echo $values[13]['p1'] ?>, <?php echo $values[13]['d1'] ?>, <?php echo $values[13]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#6494AA','#6494AA','#6494AA'
                ],
                borderColor: [
                    '#6494AA','#6494AA','#6494AA'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[14]['j1'] ?>',
                data: [<?php echo $values[14]['p1'] ?>, <?php echo $values[14]['d1'] ?>, <?php echo $values[14]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#753742','#753742','#753742'
                ],
                borderColor: [
                    '#753742','#753742','#753742'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[15]['j1'] ?>',
                data: [<?php echo $values[15]['p1'] ?>, <?php echo $values[15]['d1'] ?>, <?php echo $values[15]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#A5FFD6','#A5FFD6','#A5FFD6'
                ],
                borderColor: [
                    '#A5FFD6','#A5FFD6','#A5FFD6'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[16]['j1'] ?>',
                data: [<?php echo $values[16]['p1'] ?>, <?php echo $values[16]['d1'] ?>, <?php echo $values[16]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#7D83FF','#7D83FF','#7D83FF'
                ],
                borderColor: [
                    '#7D83FF','#7D83FF','#7D83FF'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[17]['j1'] ?>',
                data: [<?php echo $values[17]['p1'] ?>, <?php echo $values[17]['d1'] ?>, <?php echo $values[17]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#231C07','#231C07','#231C07'
                ],
                borderColor: [
                    '#231C07','#231C07','#231C07'
                ],
                borderWidth: 2
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
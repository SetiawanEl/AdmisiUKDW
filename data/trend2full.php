<script><?php 
require_once("conn.php");
?>
<?php
                $no= 1;
                $result = $conn->query("select a.Jurusan_2 as j1, a.Pendaftar as p1, a.Diterima as d1,
                a.Regis as r1 from trend_2 a");
                while ($row = mysqli_fetch_assoc($result)) {
                $values[]=$row;   
                            }
                mysqli_free_result($result);
                            { 
                                             
            ?>
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
                ],
                borderColor: [
                    '#261447','#261447','#261447'
                ],
                borderWidth: 2
            },
            {
                label: '<?php echo $values[1]['j1'] ?>',
                data: [<?php echo $values[1]['p1'] ?>, <?php echo $values[1]['d1'] ?>, <?php echo $values[1]['r1'] ?>],
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
                label: '<?php echo $values[20]['j1'] ?>',
                data: [<?php echo $values[20]['p1'] ?>, <?php echo $values[20]['d1'] ?>, <?php echo $values[20]['r1'] ?>],
                fill: false,
                backgroundColor: [
                    '#90A959','#90A959','#90A959'
                ],
                borderColor: [
                    '#90A959','#90A959','#90A959'
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
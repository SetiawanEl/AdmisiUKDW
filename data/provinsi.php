<script>

var ctx = document.getElementById('Provinsi').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['<?php echo $pro1?>', '<?php echo $pro2?>', '<?php echo $pro3?>', '<?php echo $pro4?>'],
        datasets: [{
            data: [<?php echo $jpr1?>, <?php echo $jpr2?>,<?php echo $jpr3?> ,<?php echo $jpr4?> ],
            backgroundColor: [
                '#0094C6',
                '#13C4A3',
                '#BF6900',
                '#FA198B'
            ]
        }]
    },
    options: {
    legend: {
      position: 'right'
   }
}
});
</script>
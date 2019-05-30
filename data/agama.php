<script>

var ctx = document.getElementById('Agama').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Kristen', 'Katholik', 'Islam', 'Lainnya..'],
        datasets: [{
            data: [<?php echo $kr?>, <?php echo $kt?>,<?php echo $isl?> ,<?php echo $lain?>],
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
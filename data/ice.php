<script>

var ctx = document.getElementById('ICE').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Level 1', 'Level 2', 'Level 3', 'ESP'],
        datasets: [{
            data: [<?php echo $ice1?>, <?php echo $ice2?>,<?php echo $ice3?> ,<?php echo $esp?> ],
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
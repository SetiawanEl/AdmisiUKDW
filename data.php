<script>
        jQuery(document).ready(function ($) {
            "use strict";
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
            // Pie chart flotPie1
            var piedata = [{

                    label: "Level 1 &nbsp",
                    data: [
                        [1, 32]
                    ],
                    color: '#5c6bc0'
                },
                {
                    label: "Level 2",
                    data: [
                        [1, 33]
                    ],
                    color: '#ef5350'
                },
                {
                    label: "Level 3",
                    data: [
                        [1, 35]
                    ],
                    color: '#66bb6a'
                },
                {
                    label: "ESP",
                    data: [
                        [1, 35]
                    ],
                    color: '#75bb3a'
                }
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End

            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [
                [0, 3],
                [1, 5],
                [2, 4],
                [3, 7],
                [4, 9],
                [5, 3],
                [6, 6],
                [7, 4],
                [8, 10]
            ];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }], {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Pendaftar', 'Diterima', 'Reg'],
                    series: [
                        [<?php echo $values[0]['p1'] ?>, <?php echo $values[0]['d1'] ?>, <?php echo $values[0]['r1'] ?>],
                        [<?php echo $values[1]['p1'] ?>, <?php echo $values[1]['d1'] ?>, <?php echo $values[1]['r1'] ?>],
                        [<?php echo $values[2]['p1'] ?>, <?php echo $values[2]['d1'] ?>, <?php echo $values[2]['r1'] ?>]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX: {
                        showGrid: true
                    }
                });

                

                chart.on('draw', function (data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data
                                    .chartRect
                                    .height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            
            
        });
        <?php } ?>
    </script>
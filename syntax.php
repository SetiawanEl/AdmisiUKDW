<?php
                                                                        $no= 1;
                                                                        $result = $conn->query("(select a.Jurusan_1 as j1, a.Pendaftar as p1, a.Diterima as d1,a.Regis as r1 FROM trend_1 a LIMIT 3)
                                                                        UNION 
                                                                        (SELECT b.Jurusan_2 as j2, b.Pendaftar as p2, b.Diterima as d2, b.Regis as r2 FROM trend_2 b LIMIT 3)
                                                                        UNION 
                                                                        (SELECT c.Jurusan_3 as j3, c.Pendaftar as p3, c.Diterima as d3, c.Regis as r3 from trend_3 c LIMIT 3)
                                                                        UNION
                                                                        (select SUM(t.ICE1) as x, SUM(t.ICE2) as y, SUM(t.ICE3) as z, SUM(t.ESP) as f from trend_1 t)
                                                                        UNION
                                                                        (select prop as pro, jumlah as jml, '01','02' from view_propinsi limit 4)
                                                                        UNION
                                                                        (select SUM(g.Kristen) as kr, SUM(g.Katholik) as kt, SUM(g.Islam) as isl,SUM(CASE WHEN g.Katholik THEN 0 ELSE 1 END) AS Lainnya from trend_1 g)");
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                        $values[]=$row;
                                                                           
                                                                                    }
                                                                            mysqli_free_result($result);
                                                                                    { 
                                                                                        
                                                                                        // progress bar trend 1
                                                                                        $p=$values[0]['p1']+$values[1]['p1']+$values[2]['p1'];
                                                                                        $p10=$values[0]['p1']/$p*100;
                                                                                        $p11=$values[1]['p1']/$p*100;
                                                                                        $p12=$values[2]['p1']/$p*100;

                                                                                        $d10=$values[0]['d1']/$p*100;
                                                                                        $d11=$values[1]['d1']/$p*100;
                                                                                        $d12=$values[2]['d1']/$p*100;

                                                                                        $r10=$values[0]['r1']/$p*100;
                                                                                        $r11=$values[1]['r1']/$p*100;
                                                                                        $r12=$values[2]['r1']/$p*100;

                                                                                        // progress bar trend 2
                                                                                        $q=$values[3]['p1']+$values[4]['p1']+$values[5]['p1'];
                                                                                        $p20=$values[3]['p1']/$q*100;
                                                                                        $p21=$values[4]['p1']/$q*100;
                                                                                        $p22=$values[5]['p1']/$q*100;

                                                                                        $d20=$values[3]['d1']/$q*100;
                                                                                        $d21=$values[4]['d1']/$q*100;
                                                                                        $d22=$values[5]['d1']/$q*100;

                                                                                        $r20=$values[3]['r1']/$q*100;
                                                                                        $r21=$values[4]['r1']/$q*100;
                                                                                        $r22=$values[5]['r1']/$q*100;

                                                                                        // progress bar trend 3
                                                                                        $r=$values[6]['p1']+$values[7]['p1']+$values[8]['p1'];
                                                                                        $p30=$values[6]['p1']/$r*100;
                                                                                        $p31=$values[7]['p1']/$r*100;
                                                                                        $p32=$values[8]['p1']/$r*100;

                                                                                        $d30=$values[6]['d1']/$r*100;
                                                                                        $d31=$values[7]['d1']/$r*100;
                                                                                        $d32=$values[8]['d1']/$r*100;

                                                                                        $r30=$values[6]['r1']/$r*100;
                                                                                        $r31=$values[7]['r1']/$r*100;
                                                                                        $r32=$values[8]['r1']/$r*100;

                                                                                        // ICE
                                                                                        $ice1 = (int)$values[9]['j1'];
                                                                                        $ice2 = (int)$values[9]['p1'];
                                                                                        $ice3 = (int)$values[9]['d1'];
                                                                                        $esp = (int)$values[9]['r1'];

                                                                                        // Provinsi
                                                                                        $pro1 = $values[10]['j1'];
                                                                                        $pro2 = $values[11]['j1'];
                                                                                        $pro3 = $values[12]['j1'];
                                                                                        $pro4 = $values[13]['j1'];

                                                                                        $jpr1 = (int)$values[10]['p1'];
                                                                                        $jpr2 = (int)$values[11]['p1'];
                                                                                        $jpr3 = (int)$values[12]['p1'];
                                                                                        $jpr4 = (int)$values[13]['p1'];

                                                                                        // Agama
                                                                                        $kr = (int)$values[14]['j1'];
                                                                                        $kt = (int)$values[14]['p1'];
                                                                                        $isl = (int)$values[14]['d1'];
                                                                                        $lain = (int)$values[14]['r1'];

                                             
                                                                    ?>
                                                                    
                                                                    <?php } ?>
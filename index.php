<?php
require_once('layout/header.php');
?>
<?php 
require_once("conn.php");
?>


<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title"> Menu</li><!-- /.menu-title -->
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="tables-data.php"><i class="menu-icon fa fa-user"></i>Daftar Mahasiwa </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><i class="fa fa-pie-chart mr-2" style="color:#0094C6"></i>Admisi UKDW</a>
                    <a class="navbar-brand hidden" href="./"><img src="images/favi.png" alt="Logo"></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <?php
                                          
                       $no= 1;
                       $result = $conn->query("select substr(sum(Tot_sumbangan),1,1) as sumb from trend_1");
                       while ($row =$result->fetch_assoc()) {                   
                   ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">Rp. <?php echo $row['sumb'] ?> M</div>
                                            <div class="stat-heading">Sumbangan</div>
                                            <a href="#">
                                            <div class="back">
                                                <p class="ml-3 mr-3">Total Sumbangan Masuk</p>
                                            </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <?php
                                          
                       $no= 1;
                       $result = $conn->query("select sum(Regis) as reg from trend_1");
                       while ($row =$result->fetch_assoc()) {                   
                   ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php echo $row['reg'] ?></div>
                                            <div class="stat-heading">Mahasiswa</div>
                                            <a href="#">
                                            <div class="back">
                                                <p>Total Mahasiswa Registrasi</p>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            
                                            <div class="stat-text">
                                                <div>
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="pills-home-tab"
                                                                data-toggle="pill" href="#pills-home" role="tab"
                                                                aria-controls="pills-home" aria-selected="true">Trend 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-profile-tab"
                                                                data-toggle="pill" href="#pills-profile" role="tab"
                                                                aria-controls="pills-profile"
                                                                aria-selected="false">Trend 2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-contact-tab"
                                                                data-toggle="pill" href="#pills-contact" role="tab"
                                                                aria-controls="pills-contact"
                                                                aria-selected="false">Trend 3</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Widgets -->
                <!--  Traffic  -->

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="box-title">Distribusi Mahasiswa - Trend 1</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="card-body">
                                            <div class="container">
                                            <canvas id="Trend1" width="200" height="150"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="card-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="default-tab">
                                                            <nav>
                                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                    <a class="nav-item nav-link" id="nav-home-tab"
                                                                        data-toggle="tab" href="#nav-home" role="tab"
                                                                        aria-controls="nav-home"
                                                                        aria-selected="false">Pendaftar</a>
                                                                    <a class="nav-item nav-link" id="nav-profile-tab"
                                                                        data-toggle="tab" href="#nav-profile" role="tab"
                                                                        aria-controls="nav-profile"
                                                                        aria-selected="false">Diterima</a>
                                                                    <a class="nav-item nav-link active show"
                                                                        id="nav-contact-tab" data-toggle="tab"
                                                                        href="#nav-contact" role="tab"
                                                                        aria-controls="nav-contact"
                                                                        aria-selected="true">Registrasi</a>
                                                                </div>
                                                            </nav>
                                                            
                                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                                <div class="tab-pane fade" id="nav-home" role="tabpanel"
                                                                    aria-labelledby="nav-home-tab">
                                                                    <div class="progress-box progress-1">
                                                                    <?php
                                                                        $no= 1;
                                                                        $result = $conn->query("(select a.Jurusan_1 as j1, a.Pendaftar as p1, a.Diterima as d1,a.Regis as r1 FROM trend_1 a LIMIT 3)
                                                                        UNION 
                                                                        (SELECT b.Jurusan_2 as j2, b.Pendaftar as p2, b.Diterima as d2, b.Regis as r2 FROM trend_2 b LIMIT 3)
                                                                        UNION 
                                                                        (SELECT c.Jurusan_3 as j3, c.Pendaftar as p3, c.Diterima as d3, c.Regis as r3 from trend_3 c LIMIT 3)
                                                                        UNION
                                                                        (select t2.Jurusan_2 as jr2, t2.Pendaftar as pn2, t2.Diterima as dt2, t2.Regis as rg2 from trend_2 t2)
                                                                        UNION
                                                                        (select t.ICE1 as a, t.ICE2 as b, t.ICE3 as c, t.ESP as d from trend_1 t)");
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
                                             
                                                                    ?>
                                                                        <h4 class="por-title"><?php echo $values[0]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[0]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $p10?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $p11?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $p12?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-profile"
                                                                    role="tabpanel" aria-labelledby="nav-profile-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title"><?php echo $values[0]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[0]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $d10?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $d11?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $d12?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade active show" id="nav-contact"
                                                                    role="tabpanel" aria-labelledby="nav-contact-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title"><?php echo $values[0]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[0]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $r10?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $r11?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $r12?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                    <a href="trend1full.php" class="btn btn-primary">Selengkapnya</a>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- /.card-body -->
                                        </div>
                                    </div> <!-- /.row -->
                                    <div class="card-body"></div>
                                </div>
                            </div><!-- /# column -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="box-title">Distribusi Mahasiswa - Trend 2</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="card-body">
                                            <div class="container">
                                            <canvas id="Trend2" width="200" height="150"></canvas>
                                            </div>
                                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                                
                               
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="card-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="default-tab">
                                                            <nav>
                                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                    <a class="nav-item nav-link" id="nav-d1-tab"
                                                                        data-toggle="tab" href="#nav-d1" role="tab"
                                                                        aria-controls="nav-d1"
                                                                        aria-selected="false">Pendaftar</a>
                                                                    <a class="nav-item nav-link" id="nav-r1-tab"
                                                                        data-toggle="tab" href="#nav-r1" role="tab"
                                                                        aria-controls="nav-r1"
                                                                        aria-selected="false">Diterima</a>
                                                                    <a class="nav-item nav-link active show"
                                                                        id="nav-s1-tab" data-toggle="tab"
                                                                        href="#nav-s1" role="tab"
                                                                        aria-controls="nav-s1"
                                                                        aria-selected="true">Registrasi</a>
                                                                </div>
                                                            </nav>
                                                            
                                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                                <div class="tab-pane fade" id="nav-d1" role="tabpanel"
                                                                    aria-labelledby="nav-d1-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title"><?php echo $values[3]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[3]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $p20?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[4]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[4]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $p21?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[5]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[5]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $p22?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-r1"
                                                                    role="tabpanel" aria-labelledby="nav-r1-tab">
                                                                    <div class="progress-box progress-1">
                                                                    <h4 class="por-title"><?php echo $values[3]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[3]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $d20?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[4]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[4]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $d21?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[5]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[5]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $d22?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade active show" id="nav-s1"
                                                                    role="tabpanel" aria-labelledby="nav-s1-tab">
                                                                    <div class="progress-box progress-1">
                                                                    <h4 class="por-title"><?php echo $values[3]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[3]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $r20?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[4]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[4]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $r21?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[5]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[5]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $r22?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Selengkapnya</button>
                                                                    </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- /.card-body -->
                                        </div>
                                    </div> <!-- /.row -->
                                    <div class="card-body"></div>
                                </div>
                            </div><!-- /# column -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="box-title">Distribusi Mahasiswa - Trend 3</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="card-body">
                                            <div class="container">
                                            <canvas id="Trend3" width="200" height="150"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="card-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="default-tab">
                                                            <nav>
                                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                    <a class="nav-item nav-link" id="p1-tab"
                                                                        data-toggle="tab" href="#p1-p3" role="tab"
                                                                        aria-controls="p1-p3"
                                                                        aria-selected="false">Pendaftar</a>
                                                                    <a class="nav-item nav-link" id="nav-d3-tab"
                                                                        data-toggle="tab" href="#nav-d3" role="tab"
                                                                        aria-controls="nav-d3"
                                                                        aria-selected="false">Diterima</a>
                                                                    <a class="nav-item nav-link active show"
                                                                        id="nav-r3-tab" data-toggle="tab"
                                                                        href="#nav-r3" role="tab"
                                                                        aria-controls="nav-r3"
                                                                        aria-selected="true">Registrasi</a>
                                                                </div>
                                                            </nav>
                                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                                <div class="tab-pane fade" id="p1-p3" role="tabpanel"
                                                                    aria-labelledby="p1-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title"><?php echo $values[6]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[6]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $p30?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[7]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[7]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $p31?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[8]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[8]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $p32?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-d3"
                                                                    role="tabpanel" aria-labelledby="nav-d3-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title"><?php echo $values[6]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[6]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $d30?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[7]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[7]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $d31?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[8]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[8]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $d32?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade active show" id="nav-r3"
                                                                    role="tabpanel" aria-labelledby="nav-r3-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title"><?php echo $values[6]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[6]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $r30?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[7]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[7]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: r31%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[8]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[8]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: r32%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary">Selengkapnya</button>
                                                                    </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- /.card-body -->
                                        </div>
                                    </div> <!-- /.row -->
                                    <div class="card-body"></div>
                                </div>
                            </div><!-- /# column -->
                        </div>
                    </div>
                </div>

                <!--  /Traffic -->
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                <div class="container">
                    <p><b>Data Mahasiswa Registrasi</b></p>
                </div>
                    <div class="row">
                    <div class="col-xl-4">
                            <div class="card">
                                <a href="google.com">
                                <div class="card-body">
                                <p><b>Provinsi</b></p>
                                <div class="container mb-2">
                                <canvas id="Provinsi" width="200" height="100"></canvas>
                                </div>
                                </div>
                                </a>
                            </div>
                        </div> 
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                <p><b>Agama</b></p>
                                <div class="container mb-2">
                                <canvas id="Agama" width="200" height="100"></canvas>
                                </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                <p><b>ICE</b></p>
                                <div class="container mb-2">
                                <canvas id="ICE" width="200" height="100"></canvas>
                                </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- /.orders -->
                <!-- To Do and Live Chat -->
                <div class="row">
                    <div class="col-lg-6">

                    </div>

                    <div class="col-lg-6">
                        <div class="card">

                        </div><!-- /.card -->
                    </div>
                </div>
                <!-- /To Do and Live Chat -->
                <!-- Calender Chart Weather  -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">

                        </div><!-- /.card -->
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="card weather-box">

                        </div><!-- /.card -->
                    </div>
                </div>

                <div class="modal fade none-border" id="event-modal">

                </div>

                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text"
                                                name="category-name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..."
                                                name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                    data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
    
<?php 
require("layout/footer.php");
?>
    
</body>
<?php 
require("data/trend1.php");
require("data/trend2.php");
require("data/trend3.php");
require("data/trend1full.php");
require("data/trend2full.php");
require("data/trend3full.php");
require("data/ice.php");
require("data/provinsi.php");
require("data/agama.php");
?>
</html>
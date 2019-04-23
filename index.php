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
                    <a class="navbar-brand" href="./"><img src="images/lg.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/favi.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
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
                                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                                <div id="traffic-chart" class="traffic-chart"></div>
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
                                                                        $result = $conn->query("select a.Jurusan_1 as j1, a.Pendaftar as p1, a.Diterima as d1,
                                                                        a.Regis as r1, b.Jurusan_2 as j2, b.Pendaftar as p2, b.Diterima as d2, b.Regis as r2, 
                                                                        c.Jurusan_3 as j3, c.Pendaftar as p3, c.Diterima as d3, c.Regis as r3 from trend_1 a, trend_2 b, trend_3 c");
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                        $values[]=$row;
                                                                           
                                                                                    }
                                                                            mysqli_free_result($result);
                                                                                    { 
                                             
                                                                    ?>
                                                                        <h4 class="por-title"><?php echo $values[10]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[0]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="progress-box progress-2 float-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary">Selengkapnya</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-profile"
                                                                    role="tabpanel" aria-labelledby="nav-profile-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title"><?php echo $values[0]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[0]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary">Selengkapnya</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade active show" id="nav-contact"
                                                                    role="tabpanel" aria-labelledby="nav-contact-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title"><?php echo $values[0]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[0]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
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
                                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                                <div id="traffic-chart" class="traffic-chart"></div>
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
                                                                        <h4 class="por-title"><?php echo $values[8]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[8]['p2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[9]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[9]['p2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[10]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[10]['p2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary">Selengkapnya</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-r1"
                                                                    role="tabpanel" aria-labelledby="nav-r1-tab">
                                                                    <div class="progress-box progress-1">
                                                                    <h4 class="por-title"><?php echo $values[8]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[8]['d2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[9]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[9]['d2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[10]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[10]['d2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary">Selengkapnya</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade active show" id="nav-s1"
                                                                    role="tabpanel" aria-labelledby="nav-s1-tab">
                                                                    <div class="progress-box progress-1">
                                                                    <h4 class="por-title"><?php echo $values[8]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[8]['r2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[9]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[9]['r2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                    <h4 class="por-title"><?php echo $values[10]['j2'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[10]['r2'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                    <div class="progress-box progress-2 float-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary">Selengkapnya</button>
                                                                    </div>
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
                                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                                <div id="traffic-chart" class="traffic-chart"></div>
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
                                                                        data-toggle="tab" href="#p1-home" role="tab"
                                                                        aria-controls="p1-home"
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
                                                                <div class="tab-pane fade" id="p1-home" role="tabpanel"
                                                                    aria-labelledby="p1-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title">Kedokteran</h4>
                                                                        <div class="por-txt">130 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title">Informatika</h4>
                                                                        <div class="por-txt">700 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title">Sistem Informasi</h4>
                                                                        <div class="por-txt">300 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary">Selengkapnya</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-profile"
                                                                    role="tabpanel" aria-labelledby="nav-profile-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title">Kedokteran</h4>
                                                                        <div class="por-txt">1300 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title">Informatika</h4>
                                                                        <div class="por-txt">700 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title">Sistem Informasi</h4>
                                                                        <div class="por-txt">300 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary">Selengkapnya</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade active show" id="nav-contact"
                                                                    role="tabpanel" aria-labelledby="nav-contact-tab">
                                                                    <div class="progress-box progress-1">
                                                                        <h4 class="por-title">Kedokteran</h4>
                                                                        <div class="por-txt">1300 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title">Informatika</h4>
                                                                        <div class="por-txt">700 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: 24%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title">Sistem Informasi</h4>
                                                                        <div class="por-txt">300 Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
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
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Orders </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">Avatar</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="serial">1.</td>
                                                    <td class="avatar">
                                                        <div class="round-img">
                                                            <a href="#"><img class="rounded-circle"
                                                                    src="images/avatar/1.jpg" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td> #5469 </td>
                                                    <td> <span class="name">Louis Stanley</span> </td>
                                                    <td> <span class="product">iMax</span> </td>
                                                    <td><span class="count">231</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Complete</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">2.</td>
                                                    <td class="avatar">
                                                        <div class="round-img">
                                                            <a href="#"><img class="rounded-circle"
                                                                    src="images/avatar/2.jpg" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td> #5468 </td>
                                                    <td> <span class="name">Gregory Dixon</span> </td>
                                                    <td> <span class="product">iPad</span> </td>
                                                    <td><span class="count">250</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Complete</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">3.</td>
                                                    <td class="avatar">
                                                        <div class="round-img">
                                                            <a href="#"><img class="rounded-circle"
                                                                    src="images/avatar/3.jpg" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td> #5467 </td>
                                                    <td> <span class="name">Catherine Dixon</span> </td>
                                                    <td> <span class="product">SSD</span> </td>
                                                    <td><span class="count">250</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Complete</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">4.</td>
                                                    <td class="avatar">
                                                        <div class="round-img">
                                                            <a href="#"><img class="rounded-circle"
                                                                    src="images/avatar/4.jpg" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td> #5466 </td>
                                                    <td> <span class="name">Mary Silva</span> </td>
                                                    <td> <span class="product">Magic Mouse</span> </td>
                                                    <td><span class="count">250</span></td>
                                                    <td>
                                                        <span class="badge badge-pending">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr class=" pb-0">
                                                    <td class="serial">5.</td>
                                                    <td class="avatar pb-0">
                                                        <div class="round-img">
                                                            <a href="#"><img class="rounded-circle"
                                                                    src="images/avatar/6.jpg" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td> #5465 </td>
                                                    <td> <span class="name">Johnny Stephens</span> </td>
                                                    <td> <span class="product">Monitor</span> </td>
                                                    <td><span class="count">250</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Complete</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div> <!-- /.col-lg-8 -->

                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body">
                                            <div class="chart-container ov-h">
                                                <div id="flotPie1" class="float-chart"></div>
                                            </div>
                                        </div>
                                    </div><!-- /.card -->
                                </div>

                                <div class="col-lg-6 col-xl-12">
                                    <div class="card bg-flat-color-3  ">
                                        <div class="card-body">
                                            <h4 class="card-title m-0  white-color ">August 2018</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="flotLine5" class="flot-line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.col-md-4 -->
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
require("data.php");
?>
</html>
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

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="box-title"><a href="index.php"><i class="fa fa-arrow-circle-left"></i></a> | Trend 2 - Detail</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                            <canvas id="Trend2Full" width="200" height="100"></canvas>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-12">
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
                                                                        $result = $conn->query("select a.Jurusan_2 as j1, a.Pendaftar as p1, a.Diterima as d1,a.Regis as r1 FROM trend_2 a");
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                        $values[]=$row;
                                                                           
                                                                                    }
                                                                            mysqli_free_result($result);
                                                                                    { 
                                                                                        $p=$values[0]['p1']+$values[1]['p1']+$values[2]['p1']+$values[3]['p1']+$values[4]['p1']+$values[5]['p1']+$values[6]['p1']+$values[7]['p1'];
                                                                                        $p0=$values[0]['p1']/$p*100;
                                                                                        $p1=$values[1]['p1']/$p*100;
                                                                                        $p2=$values[2]['p1']/$p*100;
                                                                                        $p3=$values[3]['p1']/$p*100;
                                                                                        $p4=$values[4]['p1']/$p*100;
                                                                                        $p5=$values[5]['p1']/$p*100;
                                                                                        $p6=$values[6]['p1']/$p*100;
                                                                                        $p7=$values[7]['p1']/$p*100;

                                                                                        $d0=$values[0]['d1']/$p*100;
                                                                                        $d1=$values[1]['d1']/$p*100;
                                                                                        $d2=$values[2]['d1']/$p*100;
                                                                                        $d3=$values[3]['d1']/$p*100;
                                                                                        $d4=$values[4]['d1']/$p*100;
                                                                                        $d5=$values[5]['d1']/$p*100;
                                                                                        $d6=$values[6]['d1']/$p*100;
                                                                                        $d7=$values[7]['d1']/$p*100;

                                                                                        $r0=$values[0]['r1']/$p*100;
                                                                                        $r1=$values[1]['r1']/$p*100;
                                                                                        $r2=$values[2]['r1']/$p*100;
                                                                                        $r3=$values[3]['r1']/$p*100;
                                                                                        $r4=$values[4]['r1']/$p*100;
                                                                                        $r5=$values[5]['r1']/$p*100;
                                                                                        $r6=$values[6]['r1']/$p*100;
                                                                                        $r7=$values[7]['r1']/$p*100;
                                             
                                                                    ?>
                                                                        <h4 class="por-title"><?php echo $values[0]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[0]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-1"
                                                                                role="progressbar" style="width: <?php echo $p0?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $p1?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-3"
                                                                                role="progressbar" style="width: <?php echo $p2?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[3]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[3]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $p3?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[4]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[4]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-5"
                                                                                role="progressbar" style="width: <?php echo $p4?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[5]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[5]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-6"
                                                                                role="progressbar" style="width: <?php echo $p5?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[6]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[6]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-7"
                                                                                role="progressbar" style="width: <?php echo $p6?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[7]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[7]['p1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-3"
                                                                                role="progressbar" style="width: <?php echo $p7?>%;"
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
                                                                                role="progressbar" style="width: <?php echo $d0?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $d1?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-3"
                                                                                role="progressbar" style="width: <?php echo $d2?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[3]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[3]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $d3?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[4]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[4]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-5"
                                                                                role="progressbar" style="width: <?php echo $d4?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[5]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[5]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-6"
                                                                                role="progressbar" style="width: <?php echo $d5?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[6]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[6]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-7"
                                                                                role="progressbar" style="width: <?php echo $d6?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[7]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[7]['d1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-3"
                                                                                role="progressbar" style="width: <?php echo $d7?>%;"
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
                                                                                role="progressbar" style="width: <?php echo $r0?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[1]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[1]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-2"
                                                                                role="progressbar" style="width: <?php echo $r1?>%;"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[2]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[2]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-3"
                                                                                role="progressbar" style="width: <?php echo $r2?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[3]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[3]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-4"
                                                                                role="progressbar" style="width: <?php echo $r3?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[4]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[4]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-5"
                                                                                role="progressbar" style="width: <?php echo $r4?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[5]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[5]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-6"
                                                                                role="progressbar" style="width: <?php echo $r5?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[6]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[6]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-7"
                                                                                role="progressbar" style="width: <?php echo $r6?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress-box progress-2">
                                                                        <h4 class="por-title"><?php echo $values[7]['j1'] ?></h4>
                                                                        <div class="por-txt"><?php echo $values[7]['r1'] ?> Mahasiswa</div>
                                                                        <div class="progress mb-2" style="height: 5px;">
                                                                            <div class="progress-bar bg-flat-color-3"
                                                                                role="progressbar" style="width: <?php echo $r7?>%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="progress-box progress-2 float-right">
                                                                    <a href="index.php" class="btn btn-primary mt-5">Kembali</a>
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
                    <?php } ?>
                </div>
                <div class="clearfix"></div>
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
?>
</html>
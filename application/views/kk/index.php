<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon.png">
    <title>U-KK</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url();?>assets/images/logo-icon.png" alt="U-KK" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <!-- <span class="logo-text">
                            
                             <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span> -->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <!-- <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
               
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Welcome');?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Kk');?>" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Lihat KK</span></a></li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li> -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Kartu Keluarga</h4>
                       
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
						<?php foreach($kk as $k){ ?>
                            <h3><b>No.</b> <span class="pull-right"><?php echo $k['Nokk']; ?></span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <!-- <h3> &nbsp;<b class="text-danger">Material Pro Admin</b></h3> -->
                                            <p class="text-muted m-l-5"> <b>
												Nama Kepala Keluarga : <?php echo $k['Kepkeluarga']; ?>
                                                <br/> Alamat : <?php echo $k['Alamat']; ?>
                                                <br/> RT/RW  : <?php echo $k['RT/RW']; ?>
                                                <br/> Kode Pos : <?php echo $k['Kodepos']; ?></b></p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <!-- <h3>To,</h3> -->
                                            <!-- <h4 class="font-bold">Gaala & Sons,</h4> -->
                                            <p class="text-muted m-l-30"> <b>
												Desa/Kelurahan :<?php echo $k['Desakel']; ?>
												<br/>Kecamatan :<?php echo $k['Kecamatan']; ?>
												<br/>Kabupaten/kota :<?php echo $k['Kabkota']; ?>
												<br/>Provinsi :<?php echo $k['Provinsi']; ?></b>
                                            </p>
                                            <p class="m-t-30"><b><?php echo $k['kk']; ?></b></p>
                                            <!-- <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2018</p> -->
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">NIK</th>
                                                    <th>Nama</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php foreach($anggota as $a){ ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $a['Nik']; ?></td>
                                                    <td><?php echo $a['Nama']; ?></td>
                                                    <td class="text-right"><a href="<?php echo site_url('Anggotakk/edit/'.$a['Nik']); ?>">Edit</a></td>
												</tr>
												<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <!-- <p>Sub - Total amount: $13,848</p>
                                        <p>vat (10%) : $138 </p>
                                        <hr>
                                        <h3><b>Total :</b> $13,986</h3> -->
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <!-- <div class="text-right">
                                        <a href="<?php echo site_url('Kk/cetak');?>" class="btn btn-danger" type="button">Cetak Surat KET. KK</a>
                                    </div> -->

                                    <!-- Form -->
                                        <form class="form-horizontal m-t-20" id="loginform" action="<?php echo site_url('Kk/cetak');?>" method="post">
                                            <div class="row p-b-30">
                                                <div class="col-12">
                                                    <label class="col-md-3 m-t-15">Pilih Nik yang dicetak</label>
                                                    <div class="col-md-9">
                                                            <select name="Nik" class="select2 form-control custom-select" style="width: 100%; height:36px;">									
                                                            <?php 
                                                            
                                                                foreach($anggota as $a)
                                                                {
                                                                    // $selected = ($display_text == $anggotakk['Kewarganegaraan']) ? ' selected="selected"' : "";

                                                                    echo '<option value="'.$a['Nik'].'" >'.$a['Nik'].'</option>';
                                                                } 
                                                                ?>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="p-t-20">
                                                            <!-- <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button> -->
                                                            <button class="btn btn-success float-right" type="submit">Cetak Surat Keterangan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                </div>
							</div>
							<?php } ?>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <!-- All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>. -->
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>dist/js/custom.min.js"></script>
</body>

</html>
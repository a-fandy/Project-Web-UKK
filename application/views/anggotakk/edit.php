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
    <link rel="stylesheet" type="text/css" h<?php echo base_url();?>assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/quill/dist/quill.snow.css">
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
                        <h4 class="page-title">Data Anggota Keluarga</h4>
                        <!-- <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div> -->
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
                        <div class="card">
                            <form class="form-horizontal" action="<?php echo site_url('Anggotakk/edit/'.$anggotakk['Nik']);?>" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input required="" type="text" class="form-control" id="fname" placeholder="Nama Lengkap" name="Nama" value="<?php echo ($this->input->post('Nama') ? $this->input->post('Nama') : $anggotakk['Nama']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">NIK</label>
                                        <div class="col-sm-9">
                                            <input Disabled required="" type="text" class="form-control" id="lname" name="NIK" value="<?php echo ($this->input->post('Nik') ? $this->input->post('Nik') : $anggotakk['Nik']); ?>" placeholder="NIK">
                                        </div>
									</div>
									<div class="form-group row">
									<label class="col-md-3 m-t-15">Jenis Kelamin</label>
								
                                    <div class="col-md-9">
											<select name="JenisKel" class="select2 form-control custom-select" style="width: 100%; height:36px;">									
													<?php 
													
													$JenisKel_values = array('PEREMPUAN','LAKI-LAKI'
													);
													foreach($JenisKel_values as $value => $display_text)
													{
														$selected = ($display_text == $anggotakk['JenisKel']) ? ' selected="selected"' : "";
														echo '<option  value="'.$display_text.'" '.$selected.'>'.$display_text.'</option>';
													} 
													?>
											</select>
										</div>
									</div>

									<div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input required="" type="text" class="form-control" id="lname" name="Tl" value="<?php echo ($this->input->post('Tl') ? $this->input->post('Tl') : $anggotakk['Tl']); ?>" placeholder="Tempat Lahir">
                                        </div>
									</div>

									<label class="m-t-15">Tanggal Lahir</label>
									<div class="input-group">
										<input type="text" name="Tgl" value="<?php echo ($this->input->post('Tgl') ? $this->input->post('Tgl') : $anggotakk['Tgl']); ?>" class="form-control" id="datepicker-autoclose" placeholder="yyyy/mm/dd">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
									
									<label class="col-md-3 m-t-15">Agama</label>
                                    <div class="col-md-9">
											<select name="Agama" class="select2 form-control custom-select" style="width: 100%; height:36px;">									
											<?php 
												$Agama_values = array('KATOLIK','ISLAM','HINDU','BUDHA','KRISTEN'
												);

												foreach($Agama_values as $value => $display_text)
												{
													$selected = ($display_text == $anggotakk['Agama']) ? ' selected="selected"' : "";

													echo '<option  value="'.$display_text.'" '.$selected.'>'.$display_text.'</option>';
												} 
												?>
											</select>
									</div>
									

									<div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Pendidikan</label>
                                        <div class="col-sm-9">
                                            <input required="" type="text" class="form-control" id="lname" name="Pendidikan" value="<?php echo ($this->input->post('Pendidikan') ? $this->input->post('Pendidikan') : $anggotakk['Pendidikan']); ?>" placeholder="Pendidikan">
                                        </div>
									</div>
									
									<div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Jenis Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input required="" type="text" class="form-control" id="lname" name="JenisPek" value="<?php echo ($this->input->post('JenisPek') ? $this->input->post('JenisPek') : $anggotakk['JenisPek']); ?>" placeholder="JenisPek">
                                        </div>
									</div>

									<label class="col-md-3 m-t-15">Status Perkawinan</label>
                                    <div class="col-md-9">
											<select name="Kawin" class="select2 form-control custom-select" style="width: 100%; height:36px;">									
											<?php 
												$Agama_values = array('BELUM KAWIN','KAWIN'
												);

												foreach($Agama_values as $value => $display_text)
												{
													$selected = ($value == $anggotakk['Kawin']) ? ' selected="selected"' : "";

													echo '<option  value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
												} 
												?>
											</select>
									</div>

									<label class="col-md-3 m-t-15">Status Hubungan dalam keluarga</label>
                                    <div class="col-md-9">
											<select name="Hubkel" class="select2 form-control custom-select" style="width: 100%; height:36px;">									
											<?php 
												$Agama_values = array('ISTERI', 'ANAK','KEPALA KELUARGA'
												);

												foreach($Agama_values as $value => $display_text)
												{
													$selected = ($display_text == $anggotakk['Hubkel']) ? ' selected="selected"' : "";

													echo '<option  value="'.$display_text.'" '.$selected.'>'.$display_text.'</option>';
												} 
												?>
											</select>
									</div>
									
									<label class="col-md-3 m-t-15">Kewarganegaraan</label>
                                    <div class="col-md-9">
											<select name="Kewarganegaraan" class="select2 form-control custom-select" style="width: 100%; height:36px;">									
											<?php 
												$Agama_values = array('WNA', 'WNI'
												);

												foreach($Agama_values as $value => $display_text)
												{
													$selected = ($display_text == $anggotakk['Kewarganegaraan']) ? ' selected="selected"' : "";

													echo '<option value="'.$display_text.'" '.$selected.'>'.$display_text.'</option>';
												} 
												?>
											</select>
									</div>
									
									<div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">No Paspor</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="lname" name="Nopaspor" value="<?php echo ($this->input->post('Nopaspor') ? $this->input->post('Nopaspor') : $anggotakk['Nopaspor']); ?>" placeholder="Nopaspor">
                                        </div>
									</div>

									<div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">No Kitab</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="lname" name="Nokitap" value="<?php echo ($this->input->post('Nokitap') ? $this->input->post('Nokitap') : $anggotakk['Nokitap']); ?>" placeholder="Nokitap">
                                        </div>
									</div>

									<div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ayah</label>
                                        <div class="col-sm-9">
                                            <input required="" type="text" class="form-control" id="lname" name="Ayah" value="<?php echo ($this->input->post('Ayah') ? $this->input->post('Ayah') : $anggotakk['Ayah']); ?>" placeholder="Ayah">
                                        </div>
									</div>

									<div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ibu</label>
                                        <div class="col-sm-9">
                                            <input required="" type="text" class="form-control" id="lname" name="Ibu" value="<?php echo ($this->input->post('Ibu') ? $this->input->post('Ibu') : $anggotakk['Ibu']); ?>" placeholder="Ibu">
                                        </div>
									</div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
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
    <!-- This Page JS -->
    <script src="<?php echo base_url();?>assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/pages/mask/mask.init.js"></script>
    <script src="<?php echo base_url();?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?php echo base_url();?>assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker({
			format: 'yyyy/mm/dd',
		});
        jQuery('#datepicker-autoclose').datepicker({
			format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>
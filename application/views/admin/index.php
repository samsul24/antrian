<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<div class="cc">
  <div class="tableSize">
<head>
<link href='<?=base_url("assets/uploads/images/avatar.png"); ?>' rel='shortcut icon' type='image/x-icon' />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/summernote/summernote-bs4.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
	
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-success" ><i class="nav-icon fas fa-home" ></i> Dashboard</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content" >
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-home"></i> Dashboard
        </div>
        <div class="row">
          <div class="col"> 
              <div class="card">
            <div class="card-body">
                  
    <section class="content" >
      <div class="container-fluid">
        <div class="row">
    <body>

    <div class="col-lg-2 col-6" style="margin-left:170px;"><br>
      <div class="small-box bg-blue">
        <div class="inner">
          <h1 style="font-size: 40px; color: #20B2AA;">
            <!-- <i class="ion ion-android-alarm-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            <a href="" class="small-box-header"><h1 align="center" style='color: white;' >Loket 1 </h1> </a>
         </div>
            <div class="small-box bg-white">
            <a ><h5 align="center" style='color: black; ' > 
        <br>
            <?php  
            $this->db->where('id_loket', 1);
            $loket = $this->db->get('loket')->row('status');
            print_r($loket);
            ?>
             </h5></a>
        <br>
         </div>
      </div>
  </div>
    <div class="col-lg-2 col-6"><br>
      <div class="small-box bg-blue">
        <div class="inner">
          <h1 style="font-size: 40px; color: #20B2AA;">
            <!-- <i class="ion ion-android-alarm-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            <a href="" class="small-box-header"><h1 align="center" style='color: white;' >Loket 2 </h1> </a>
         </div>
            <div class="small-box bg-white">
            <a ><h5 align="center" style='color: black; ' > 
        <br>
            <?php  
            $this->db->where('id_loket', 2);
            $loket = $this->db->get('loket')->row('status');
            print_r($loket);
            ?>
             </h5></a>
        <br>
         </div>
      </div>
  </div>
    <div class="col-lg-2 col-6"><br>
      <div class="small-box bg-blue">
        <div class="inner">
          <h1 style="font-size: 40px; color: #20B2AA;">
            <!-- <i class="ion ion-android-alarm-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            <a href="" class="small-box-header"><h1 align="center" style='color: white;' >Loket 3 </h1> </a>
         </div>
            <div class="small-box bg-white">
            <a ><h5 align="center" style='color: black; ' > 
        <br>
            <?php  
            $this->db->where('id_loket', 3);
            $loket = $this->db->get('loket')->row('status');
            print_r($loket);
            ?>
             </h5></a>
        <br>
         </div>
      </div>
  </div>
    <div class="col-lg-2 col-6"><br>
      <div class="small-box bg-blue">
        <div class="inner">
          <h1 style="font-size: 40px; color: #20B2AA;">
            <!-- <i class="ion ion-android-alarm-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            <a href="" class="small-box-header"><h1 align="center" style='color: white;' >Loket 4 </h1> </a>
         </div>
            <div class="small-box bg-white">
            <a ><h5 align="center" style='color: black; ' > 
        <br>
            <?php  
            $this->db->where('id_loket', 4);
            $loket = $this->db->get('loket')->row('status');
            print_r($loket);
            ?>
             </h5></a>
        <br>
         </div>
      </div>
  <br>
  </div>

    
    <div class="card bg-gradient-info" style="margin-left:7px">
      <h3 class="card-title" style="margin-right: 1300px;"></h3><br> <br>
    </div>       
    
           <div class="col-lg-2 col-6">          
                  <br>
                <div class="small-box bg-white">
                  <div class="inner">
                  <h1 style="font-size: 40px; color: #20B2AA;">
                  <i class="ion ion-android-alarm-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php  
               $this->db->where('status', 1);
               $this->db->where('id_instansi', 11);
               $antrian = $this->db->get('antrian')->num_rows();
               print($antrian);?> </h1>
                </div>
                  <a href="" class="small-box-footer"><h5 align="left" style='color: #20B2AA;' >&nbsp;&nbsp; SEDANG <br>&nbsp;&nbsp; MENUNGGU &nbsp;  <i class="fas fa-chevron-right"></i></h5> </a>
                </div>
              </div>
    
              <div class="col-lg-2 col-6">
              <br>
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3 style="font-size: 40px; color:#DAA520;">
                  <i class="ion ion-person-stalker"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php  
               $this->db->where('status', 2);
               $this->db->where('id_instansi', 11);
               $antrian = $this->db->get('antrian')->num_rows();
               print($antrian);?> </h1>
                </div>
                <a href="" class="small-box-footer"><h5 align="left" style="color:#DAA520;">&nbsp;&nbsp; SEDANG <br>&nbsp;&nbsp; DILAYANI &nbsp;  <i class="fas fa-chevron-right"></i></h5> </a>
                 </div>
              </div>
              <div class="col-lg-2 col-6">
              <br>
                <div class="small-box bg-white">
                  <div class="inner">
                  <h1 style="font-size: 40px; color: #B22222;">
                    <i class="ion ion-checkmark-round"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php  
               $this->db->where('status', 3);
               $this->db->where('id_instansi', 11);
               $antrian = $this->db->get('antrian')->num_rows();
               print($antrian);?> </h1>
                </div>
                <a href="" class="small-box-footer"><h5 align="left" style='color:#B22222'> <br>&nbsp;&nbsp;TERLAYANI &nbsp;<i class="fas fa-chevron-right"></i><br></h5> </a>
                 </div>
              </div>
    
              <div class="col-lg-2 col-6">
              <br>
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3 style="font-size: 40px; color: #9932CC;">
                  <i class="ion ion-thumbsdown"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php  
               $this->db->where('status', 4);
               $this->db->where('id_instansi', 11);
               $antrian = $this->db->get('antrian')->num_rows();
                print($antrian);?> </h1>
                </div>
                <a href="" class="small-box-footer"><h5 align="left" style='color:#9932CC'><br>&nbsp;&nbsp; ABSEN &nbsp;  <i class="fas fa-chevron-right"></i></h5> </a>
                 </div>
              </div>
              <div class="col-lg-4 col-6">
              <br>
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3 style="font-size: 40px; color: #1E90FF;">
                  <i class="ion ion-thumbsup subdued"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php  
               $this->db->where('id_instansi', 11);
               $antrian = $this->db->get('antrian')->num_rows();
                print($antrian);?> </h1>
                </div>
                <a href="" class="small-box-footer"><h5 align="left" style='color:#1E90FF'><br>&nbsp;&nbsp; TOTAL DILAYANI &nbsp;  <i class="fas fa-chevron-right"></i></h5> </a>
                 </div>
              <br>
              </div>
    </body>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h1 style="font-size: 40px">
            <?php  
           $this->db->where('id_instansi', 11);
            $user = $this->db->get('user')->num_rows();
            print($user);?> </h1> <p style="font-size: 30px">User</p>
            </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="<?php echo site_url(); ?>userclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="font-size: 40px">
						<?php echo $this->db->get('user_role')->num_rows(); ?>
            </h3>
                <p style="font-size: 30px">User Role</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>


              </div>
              <a href="<?php echo site_url(); ?>roleuserclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 style="font-size: 40px">
            <?php 
             $this->db->where('id_instansi', 11);
             $layanan = $this->db->get('layanan')->num_rows();
             print($layanan);
             ?>
            </h3>
                <p style="font-size: 30px">Layanan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo site_url(); ?>layananclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3 style="font-size: 40px">
            <?php 
             $this->db->where('id_user', 243);
             $log = $this->db->get('log')->num_rows();
             print($log);?>
            </h3>
                <p style="font-size: 30px">Log</p>
              </div>
              <div class="icon">
              <i class="ion ion-android-time"></i>

              </div>
              <a href="<?php echo site_url(); ?>logclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <br>
        </div>
                    <div class="card bg-gradient-info" style="margin-left:7px">
              <h3 class="card-title" style="margin-right: 1300px;">
              </h3>
                <br>
                <br>
              </div>  
          <div class="card bg-gradient-info" style="margin-left:7px">
            <div class="card-header border-0"  style="height: 480px; width:487px " >
              <h3 class="card-title" style="margin-right: 85px;">
                <i class="fas fa-th mr-1 "></i>
                Grafik 
              </h3>
              <div class="card-tools">

                <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
                <br>
                <br>
                
              <style>
#chart{
 z-index:-10;} 
</style>
<body>
 <div id="chart">
 </div>
      <script src="<?=base_url('assets');?>/highcharts/jquery.min.js" type="text/javascript"></script>
      <script src="<?=base_url('assets');?>/highcharts/highcharts.js" type="text/javascript"></script>
      <script src="<?=base_url('assets');?>/highcharts/modules/exporting.js" type="text/javascript"></script>
      <script src="<?=base_url('assets');?>/highcharts/modules/offline-exporting.js" type="text/javascript"></script>
      <script type="text/javascript">
  jQuery(function(){
    new Highcharts.Chart({
        chart: {
        renderTo: 'chart',
        type: 'column',
        },
        title: {
        text: 'Grafik Statistik Antrian',
        x: -20
        },
        subtitle: {
        text: 'Count Antrian',
        x: -20
        },
        xAxis: {
          categories: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des ']
      },
      exporting: { 
            enabled: false 
        },
        yAxis: {
        title: {
          text: 'Total pengunjung'
        }
      },
        series: [{
        name: 'Data dalam Bulan',
        data: <?php echo json_encode($antrian); ?>
        }]
      });
    }); 
</script>   
</div>
</div>

<div class="card bg-gradient-info" style="margin-left:7px">
          
          <div class="card-header border-0"  style="height: 480px; width:487px " >
            <h3 class="card-title" style="margin-right: 85px;">
              <i class="fas fa-th mr-1 "></i>
              Grafik 
            </h3>
            <div class="card-tools">
              <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
              <br>
              <br>

<body>
<div id="chart1">
</div>
    <script src="<?=base_url('assets');?>/highcharts/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url('assets');?>/highcharts/highcharts.js" type="text/javascript"></script>
    <script src="<?=base_url('assets');?>/highcharts/modules/offline-exporting.js" type="text/javascript"></script>
    <script type="text/javascript">
jQuery(function(){
  new Highcharts.Chart({
      chart: {
      renderTo: 'chart1',
      type: 'pie',
      },
      title: {
        text: 'Grafik Statistik Antrian',
      x: -20
      },
      subtitle: {
      text: 'Count Antrian',
      x: -20
      },
      xAxis: {
        categories: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des ']
      
      },
      yAxis: {
      title: {
        text: 'Total pengunjung'
      }
      },
      series: [{
      name: 'Data dalam Bulan',
      data: <?php echo json_encode($antrian); ?>
      }]
    });
  }); 
</script>
</body>   
</div>
</div>

<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/adminlte.js"></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/pages/dashboard.js"></script>

</body>

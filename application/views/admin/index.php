<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<div class="cc">
  <div class="tableSize">
<head>
<link href='<?=base_url("assets/uploads/images/avatar.png"); ?>' rel='shortcut icon' type='image/x-icon' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
  <div class="content-wrapper" style="margin-left:-5px; margin-right:5px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" ><i class="nav-icon fas fa-chart-line"></i> Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">admin</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content" >
      <div class="container-fluid">
        <div class="row">
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
						<?php echo $this->db->get('log')->num_rows(); ?>
            </h3>
                <p style="font-size: 30px">Log</p>
              </div>
              <div class="icon">
              <i class="ion ion-thumbsup subdued"></i>

              </div>
              <a href="<?php echo site_url(); ?>logclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
            <div class="card bg-gradient-info" style="margin-left:7px">
              <div class="card-header border-0" >
                <h3 class="card-title" style="margin-right: 85px;">
                  <i class="fas fa-th mr-1 "></i>
                  Grafik 
                </h3>
                <div class="card-tools">
                    <!-- <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button> -->
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <br>
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
          type: 'line',
          },
          title: {
          text: 'Grafik Statistik Antrian',
          x: -20
          },
          subtitle: {
          text: 'Count visitor',
          x: -20
          },
          xAxis: {
          // categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun','Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des','Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun','Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des',
          // 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun','Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des','Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun','Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
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
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>

</body>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/adminlte.js"></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/pages/dashboard.js"></script>
</body>



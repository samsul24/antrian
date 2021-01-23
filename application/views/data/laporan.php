<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="cc">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-success" ><i class="nav-icon fas fa-tablet" ></i> Data Laporan</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp;  &nbsp;<i class="nav-icon fas fa-tablet"></i> Laporan
        </div>
        <div class="row">
          <div class="col"> 
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body" >
                <div class='card-header' style="margin-left:-20px;">
                    <a class='btn btn-success'href="<?php echo site_url(); ?>laporanexcel">
                    <i class="fa fa-file-excel"></i>
                    <span>
                        Ekspor
                    </span>
                    </a>
                    <a class='btn btn-danger'href="<?php echo site_url(); ?>laporanpdf">
                    <i class="fa fa-file-pdf"></i>
                    <span >
                        Pdf
                    </span>
                    </a>
                    <br><br>
              <!-- <form method="post" action="search.php" class="form-inline">
                <div class="form-group">
                  <label for="Date_From">Insert Date &ensp;&ensp;</label>
                  <input type="date" name="date_from" value="<?php echo date('Y-m-d'); ?>" class="form-control" />
                </div>&ensp;
                <button type="submit" name="search" class="btn btn-primary">Search</button>
              </form> -->

              <form method="get" class="form-inline mt-3" action="<?= site_url()?>laporanclient/date">
                  <label for="date1">Tanggal mulai &ensp;</label>
                    <input type="date" name="tanggal_awal" class="form-control mr-2">
                  <label for="date2">to &ensp;</label>
                    <input type="date" name="tanggal_akhir" class="form-control mr-2">
                  <button type="submit" name="submit" class="btn btn-primary">Cari</button>&nbsp;
                  <button colspan="2" class="btn btn-danger" type="reset" value="Reset" >Reset</button>

              </form>
              <br>
            
            </div>   
            <br>
            
              <table id="tabel" class="table table-bordered">
                <thead>
              
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nomor</th>
                  <th>Id Instansi</th>
                  <th>Id Layanan</th>
                  <th>Waktu Datang</th>
                  <th>Waktu Panggil</th>
                  <th>Waktu Selesai</th>
                  <th>Status</th>
                 
                </tr>
                </thead>
                <tbody>
                <?php $i= 1;
                 foreach ($laporan as $rows) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo date('d-M-Y', strtotime($rows->tanggal)); ?></td >
                        <td><?php echo $rows->nomor; ?></td>
                        <td><?php echo $rows->id_instansi ; ?></td>
                        <td><?php echo $rows->id_layanan; ?></td>
                        <td><?php echo $rows->waktu_datang; ?></td>
                        <td><?php echo $rows->waktu_panggil; ?></td>
                        <td><?php echo $rows->waktu_selesai; ?></td>
                        <td><?php echo $rows->status; ?></td>
                        
                    </tr>
                    <?php endforeach ; ?>
                </tbody>
              </table>             
            <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
   <!-- /.content-wrapper -->


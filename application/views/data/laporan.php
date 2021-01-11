<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
    <div class="cc">
        <h1 class="mt-2 mb-3 font-weight-bold">Laporan</h1>
        <div class="mb-3">
                <a href="<?php echo site_url(); ?>userclient/post" class="btn btn-primary">
                <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data </a>
            
    </div>
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
                    <th scope="col">NO</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">NOMOR</th>
                    <th scope="col">NAMA INSTANSI</th>
                    <th scope="col">LAYANAN</th>
                    <th scope="col">DATANG</th>
                    <th scope="col">PANGGIL</th>
                    <th scope="col">SELESAI</th>
                    <th scope="col">STATUS</th>
				</tr>
            </thead>
             <tbody>
                <?php $i= 1;
                 foreach ($laporan as $rows) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $rows->tanggal; ?></td>
                        <td><?php echo $rows->nomor; ?></td>
                        <td><?php echo $rows->id_instansi; ?></td>
                        <td><?php echo $rows->id_layanan; ?></td>
                        <td><?php echo $rows->waktu_datang; ?></td>
                        <td><?php echo $rows->waktu_panggil; ?></td>
                        <td><?php echo $rows->waktu_selesai; ?></td>
                        <td><?php echo $rows->status; ?></td>
                        
                    </tr>
                 <?php endforeach; ?>
                </tbody>
            </table>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

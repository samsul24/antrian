<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
    <div class="cc">
    <div class="row">
        <div class="col-lg-12">
            <h1 >Layanan</h1>
                <ol class="breadcrumb">
                    <li><a href=""><span class="fa fa-home"></span>&nbsp;/&nbsp;</a></li>
                    <li><a href="">Layanan</a></li>
                    <li class="active">&nbsp;/&nbsp;Data Layanan</li>
                </ol>
            </div>    
            </div>    
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA LAYANAN</th>
                    <th scope="col">KODE</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ID INSTANSI</th>
                    <th scope="col">ID KATEGORI</th>
                    <th scope="col">ACTION</th>
				</tr>
            </thead>
             <tbody>
                <?php foreach ($layanan as $rows) : ?>
                    <tr>
                        <td><?php echo $rows->id_layanan; ?></td>
                        <td><?php echo $rows->nama_layanan; ?></td>
                        <td><?php echo $rows->kode; ?></td>
                        <td><?php echo $rows->status; ?></td>
                        <td><?php echo $rows->id_instansi; ?></td>
                        <td><?php echo $rows->id_kategori_layanan; ?></td>
                        <td>
                            <a href="<?php echo site_url(); ?>userclient/put/<?php echo $rows->id_layanan; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>userclient/delete/<?= $rows->id_layanan ;?>" class="btn btn-danger"
                            onClick="return confirm('yakin mau hapus');">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
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

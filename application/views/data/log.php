<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
    <div class="cc">
        <h1 class="mt-2 mb-3 font-weight-bold">Layanan</h1>
        <div class="mb-3">
                <a href="<?php echo site_url(); ?>userclient/post" class="btn btn-primary">
                <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data </a>
            
    </div>
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
                    <th scope="col">NO</th>
                    <th scope="col">WAKTU</th>
                    <th scope="col">ID USER</th>
                    <th scope="col">AKTIVITAS</th>
				</tr>
            </thead>
             <tbody>
                <?php $i=1;
                 foreach ($log as $rows) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $rows->waktu; ?></td>
                        <td><?php echo $rows->id_user; ?></td>
                        <td><?php echo $rows->aktivitas; ?></td>
                        
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

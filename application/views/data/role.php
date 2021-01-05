<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
    <div class="cc">
        <h1 class="mt-2 mb-3 font-weight-bold">User Role</h1>
        <div class="mb-3">
                <a href="<?php echo site_url(); ?>userclient/post" class="btn btn-primary">
                <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data </a>
            <!-- <a href="<?php echo site_url(); ?>adminclient/verification" class="btn btn-success">
            <i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Verification</a> -->
    </div>
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
                    <th scope="col">ID</th>
                    <th scope="col">USER ROLE</th>
                    <!-- <th scope="col">MENU AKSES</th> -->
                    <th scope="col">ACTION</th>
				</tr>
            </thead>
             <tbody>
                <?php foreach ($roleuser as $rows) : ?>
                    <tr>
                        <td><?php echo $rows->id_user_role; ?></td>
                        <td><?php echo $rows->user_role; ?></td>
                        <!-- <td><?php echo $rows->menu_akses; ?></td> -->
                        <td>
                            <a href="<?php echo site_url(); ?>userclient/put/<?php echo $rows->id_user_role; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>userclient/delete/<?= $rows->id_user_role ;?>" class="btn btn-danger"
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

<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
    <div class="cc">
    <div class="row">
        <div class="col-lg-12">
            <h1 >Role User</h1>
                <ol class="breadcrumb">
                    <li><a href=""><span class="fa fa-home"></span>&nbsp;/&nbsp;</a></li>
                    <li><a href="">Role User</a></li>
                    <li class="active">&nbsp;/&nbsp;Data Role User</li>
                </ol>
            </div>    
            </div>    

	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
                    <th scope="col">ID</th>
                    <th scope="col">USER ROLE</th>
                    <!-- <th scope="col">MENU AKSES</th> -->
                    <!-- <th scope="col">ACTION</th> -->
				</tr>
            </thead>
             <tbody>
                <?php foreach ($roleuser as $rows) : ?>
                    <tr>
                        <td><?php echo $rows->id_user_role; ?></td>
                        <td><?php echo $rows->user_role; ?></td>
                        <!-- <td><?php echo $rows->menu_akses; ?></td> -->
                        <!-- <td>
                            <a href="<?php echo site_url(); ?>roleuserclient/put/<?php echo $rows->id_user_role; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>roleuserclient/delete/<?= $rows->id_user_role ;?>" class="btn btn-danger"
                            onClick="return confirm('yakin mau hapus');">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td> -->
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

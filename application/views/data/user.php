<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>

    <div class="cc">
    <div class="row">
        <div class="col-lg-12">
            <h1 >User</h1>
                <ol class="breadcrumb">
                    <li><a href=""><span class="fa fa-home"></span>&nbsp;/&nbsp;</a></li>
                    <li><a href="">User</a></li>
                    <li class="active">&nbsp;/&nbsp;Data User</li>
                </ol>
            </div>    
            </div>    

	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
                    <th scope="col">ID</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ID INSTANSI</th>
                    <th scope="col">ACTION</th>
				</tr>
            </thead>
             <tbody>
                <?php foreach ($user as $rows) : ?>
                    <tr>
                        <td><?php echo $rows->id_user; ?></td>
                        <td><?php echo $rows->username; ?></td>
                        <td><?php echo $rows->password; ?></td>
                        <td><?php echo $rows->nama; ?></td>
                        <td><?php echo $rows->id_instansi;?></td>
                        <td>
                            <a href="<?php echo site_url(); ?>userclient/put/<?php echo $rows->id_user; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>userclient/delete/<?= $rows->id_user ;?>" class="btn btn-danger"
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
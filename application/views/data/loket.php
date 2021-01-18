<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
    <div class="cc">
    <div class="row">
        <div class="col-lg-12">
            <h1 >Loket</h1>
                <ol class="breadcrumb">
                    <li><a href=""><span class="fa fa-home"></span>&nbsp;/&nbsp;</a></li>
                    <li><a href="">Loket</a></li>
                    <li class="active">&nbsp;/&nbsp;Data Loket</li>
                </ol>
            </div>    
            </div>    
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA LOKET</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
				</tr>
            </thead>
             <tbody>
                <?php 
                $i=1;
                foreach ($loket as $rows) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td>Loket <?php echo $rows->loket; ?></td>
                        <td><?php echo $rows->status; ?>
                            </td>
                        <td>
                            <a href="<?php echo site_url(); ?>loketclient/put/<?php echo $rows->id_loket; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?=  base_url(); ?>loketclient/delete/<?= $rows->id_loket ;?>" class="btn btn-danger"
                            onClick="return confirm('yakin mau hapus');">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                 <?php endforeach; 
                //  print_r($loket);
                //  exit;
                 ?>
                </tbody>
            </table>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
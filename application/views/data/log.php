<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
    <div class="cc">
    <div class="row">
        <div class="col-lg-12">
            <h1 >Log</h1>
                <ol class="breadcrumb">
                    <li><a href=""><span class="fa fa-home"></span>&nbsp;/&nbsp;</a></li>
                    <li><a href="">Log</a></li>
                    <li class="active">&nbsp;/&nbsp;Data Log</li>
                </ol>
            </div>    
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

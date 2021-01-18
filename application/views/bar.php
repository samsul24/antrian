<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<div class="topBar">
	<div id="sidebar" >
		<div class="menubar d-flex flex-row justify-content-between" style="margin-left:-30px; margin-top:-5px">
			<div class="rowBar" style="margin-left:30px;">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="dropdown" >
				<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false" >
					<i class="fa fa-user" aria-hidden="true"></i><?php echo $this->session->flashdata('user');?>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
					<a class="dropdown-item" href="<?= base_url().'login/out' ?>" onClick="return confirm('Logout sekarang ??');" >Log Out</a>
				</div>
			</div>
		</div>
		<div class="card bg-dark text-white rounded-0" style="height:61.5rem">
			<div class="card-header">
				<span class="fa fa-home" style="font-size:2rem"></s>
						<span style="font-size:2rem"><a class="" href="<?php echo site_url(); ?>adminclient" style="color:white;"> Dashboard</a></span>
			</div>
			<div class="card-body p-0">
				<ul class="nav d-flex flex-column">
				<li class="nav-item">
						<a href="" class="nav-link active text-white av">
							<i class="" aria-hidden="true"></i> &nbsp;
							<span> ANTRIAN </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>userclient" class="nav-link text-white">

							<i class="fa fa-user" aria-hidden="true"></i> &nbsp;
							<span> User </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>roleuserclient" class="nav-link text-white">
							<i class="fas fa-user-plus" aria-hidden="true"></i>&nbsp;
							<span> User Role </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>layananclient" class="nav-link active text-white">
							<i class="fa  fa-tablet " aria-hidden="true"></i> &nbsp;
							<span> Layanan </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>loketclient" class="nav-link active text-white">
							<i class="fa fa-microphone " aria-hidden="true"></i> &nbsp;
							<span> Loket </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link active text-white av">
							<i class="" aria-hidden="true"></i> &nbsp;
							<span> LAPORAN ANTRIAN </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>laporanclient" class="nav-link active text-white">
							<i class="fas  fa-book" aria-hidden="true"></i> &nbsp;
							<span> Laporan </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>logclient" class="nav-link active text-white">
							<i class="fas fa-history" aria-hidden="true"></i> &nbsp;
							<span> Log </span>
						</a>
					</li>
				</ul>
			</div>
			<div class="card-footer">
				<h6 class="text-white">@ Copyright by KemanagKota Malang</h6>
			</div>
		</div>
	</div>
</div>
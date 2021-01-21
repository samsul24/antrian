<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <h2>Export Excel</h2>
         <form class="" action="<?php echo base_url('laporanexcel') ?>" method="post">
             <button type="submit" name="button" class="btn btn-primary">Export data</button>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid mt-3">
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
                    
                    <div class="card">
                        
                    <div class="card-body login-card-body">
                    <img class="profile-img" src="<?=base_url();?>css/assets/img/logo-kecil.png"alt="" height="120px" style="display: block; margin: auto;"><br>
                    <center> <p class="">Welcome admin</p></center>
                    <?php if ($this->session->flashdata('result') != '') { ?>
                        <div class="alert alert-dark alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php
                    }
                ?>
                    <form action="<?php echo site_url() ?>login/log_process" class="needs-validation" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="user" placeholder="Masukkan username" name="user" required>
                                <div class="input-group-append">
                                 <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                 </div>
                                </div>
                        </div>
                        
                        <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" required>
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                    Remember Me
                                    </label>
                                </div>
                                </div>
                                    <div class="col-4">
                                <button type="submit" class="btn  btn-success btn-block">Login</button>
                                </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
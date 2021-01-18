<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<div class="cc">
        <div class="row">
        <div class="col-lg-12">
            <h1 >Layanan</h1>
                <ol class="breadcrumb">
                    <li><a href=""><span class="fa fa-home"></span>&nbsp;/&nbsp;</a></li>
                    <li><a href="">Layanan</a></li>
                    <li class="active">&nbsp;/&nbsp;Data Layanan&nbsp;/&nbsp;Edit Layanan</li>
                </ol>
            </div>    
            </div>    
            <div class="row" >
            <div class="col-md-3" ></div>
            <div class="col-md-6">
            <div class="box">
                <form action="<?php echo site_url('userclient/put_process');?>" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
                    <?php foreach ($user as $rows) : ?>
                        <div class="form-group">
                                <label for="id_user">Id User :</label>
                                <input type="text" class="form-control" id="id_user" value="<?php echo $rows->id_user; ?>" name="id_user" required readonly >
                            </div>
                        <div class="form-group">
                                <label for="id_instansi">Instansi :</label>
                                <input type="text" class="form-control" id="id_instansi" placeholder="ID Instansi" value="<?php echo $rows->id_instansi;?>&nbsp; - &nbsp;KEMENAG KOTA MALANG" name="id_instansi" required readonly> 
                            </div>
                        <div class="form-group">
                                <label for="username">Username :</label>
                                <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $rows->username; ?>" name="username" required >
                            </div>
                        <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" value="<?php echo $rows->password; ?>" name="password" required >
                            </div>
                        <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" value="<?php echo $rows->nama; ?>" name="nama" required >
                            </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Update
                                </button>
                                <!-- The Modal -->
                            <script>
                                function setSelectBoxByText(eid, etxt) {
                                    var eid = document.getElementById(eid);
                                    for (var i = 0; i < eid.options.length; ++i) {
                                        if (eid.options[i].value === etxt)
                                            eid.options[i].selected = true;
                                    }
                                }

                                var eid = "loket";
                                var etxt = document.getElementById("selected").value;
                                document.getElementById("selected").style.display = "none";
                                setSelectBoxByText(eid, etxt)
                            </script>
                                   
                        <?php endforeach; 
                                    // print_r($loket);
                                    // exit;
                        ?>
                    </form>
                </div>
            </div>
        </div>
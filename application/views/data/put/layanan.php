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
                <form action="<?php echo site_url('layananclient/put_process');?>" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
                    <?php foreach ($layanan as $rows) : ?>
                        <div class="form-group">
                                <label for="id_layanan">Id layanan :</label>
                                <input type="text" class="form-control" id="id_layanan" value="<?php echo $rows->id_layanan; ?>" name="id_layanan" required readonly >
                            </div>
                        <div class="form-group">
                                <label for="id_instansi">Instansi :</label>
                                <input type="text" class="form-control" id="id_instansi" placeholder="ID Loket" value="<?php echo $rows->id_instansi;?>&nbsp; - &nbsp;KEMENAG KOTA MALANG" name="id_instansi" required readonly> 
                            </div>
                        <div class="form-group">
                                <label for="kode">Kode :</label>
                                <input type="text" class="form-control" id="kode" placeholder="ID Loket" value="<?php echo $rows->kode; ?>" name="kode" required >
                            </div>
                        <div class="form-group">
                                <label for="nama_layanan">Nama Layanan :</label>
                                <input type="text" class="form-control" id="nama_layanan" placeholder="ID Loket" value="<?php echo $rows->nama_layanan; ?>" name="nama_layanan" required >
                            </div>
                        <div class="form-group">
                            <label for="sel1" >Status Layanan :</label>
                                <input type="text" class="form-control" id="selected" value="<?php echo $rows->status; ?>">
                                 <select class="form-control" id="status" name="status" required>
                                        <option value="Y">Aktif</option>
                                        <option value="N">Tidak</option>
                                </select>
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
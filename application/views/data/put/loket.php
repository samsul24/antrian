<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<div class="cc">
        <div class="row">
        <div class="col-lg-12">
            <h1 >Loket</h1>
                <ol class="breadcrumb">
                    <li><a href=""><span class="fa fa-home"></span>&nbsp;/&nbsp;</a></li>
                    <li><a href="">Loket</a></li>
                    <li class="active">&nbsp;/&nbsp;Data Loket&nbsp;/&nbsp;Edit Loket</li>
                </ol>
            </div>    
            </div>    
            <div class="row" >
            <div class="col-md-3" ></div>
            <div class="col-md-6">
            <div class="box">
                <form action="<?php echo site_url('loketclient/put_process');?>" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
                    <?php foreach ($loket as $rows) : ?>
                        <div class="form-group">
                                <label for="id_loket">ID Loket :</label>
                                <input type="text" class="form-control" id="id_loket" placeholder="ID Loket" value="<?php echo $rows->id_loket; ?>" name="id_loket" required readonly>
                            </div>
                        <div class="form-group">
                                <label for="loket">No Loket :</label>
                                <input type="text" class="form-control" id="loket" placeholder="Loket" value="<?php echo $rows->loket; ?>" name="loket" required readonly>
                            </div>
                        <div class="form-group">
                            <label for="sel1" >Status Loket :</label>
                                <input type="text" class="form-control" id="selected" value="<?php echo $rows->status; ?>">
                                 <select class="form-control" id="status" name="status" required>
                                        <option value="Kosong">Kosong</option>
                                        <option value="Digunakan">Digunakan</option>
                                        <option value="Istirahat">Istirahat</option>
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
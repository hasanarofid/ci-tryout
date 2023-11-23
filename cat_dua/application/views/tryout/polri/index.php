<?php $this->load->view('templates/header'); ?>

<div class="container-xxl flex-grow-1 container-p-y">
        <span class="text-muted fw-light">Hi,<?= $this->session->userdata('user_user') ?></span>
        <br>
        <span class="text-muted fw-light">Selamat mengikuti try out</span>
           
    <div class="page-inner mt-5">
        <div class="row mt-2">
                <div class="card-body text-center">
                <h4>Pilih Try Out yang Akan
                        Kamu Kerjakan!</h4>
                </div>
        </div>

        <div class="row mt-2">
        <?php foreach ($jenis as $jenis_tryout): ?>
            <?php
        $param_value = $jenis_tryout->slug; 
    ?>
     <div class="col-md-4" onclick="location.href='<?php echo base_url('tryout/polri/' . $param_value); ?>';" style="cursor: pointer;">
    
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title"><?= $jenis_tryout->nama; ?></div>
                        <div class="card-category"><?= $jenis_tryout->judul; ?></div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/psikologi.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><?= $jenis_tryout->deskripsi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        <?php endforeach; ?>

           

        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
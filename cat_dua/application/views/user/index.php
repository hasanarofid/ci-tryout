<?php $this->load->view('templates/header'); ?>


            <!-- Content -->

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

            <div class="row mt-0">
                <div class="col-md-4" onclick="location.href='<?php echo base_url('tryout/polri'); ?>'" style="cursor: pointer;">
                    <div class="card full-height">
                        <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/polri.png" alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4" onclick="location.href='<?php echo base_url('tryout/tni'); ?>'" style="cursor: pointer;">
                    <div class="card full-height">
                        <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/tni.png" alt="Card image cap">
                    </div>
                </div>
                
                <div class="col-md-4" onclick="location.href='<?php echo base_url('tryout/kedinasan'); ?>" style="cursor: pointer;">
                    <div class="card full-height">
                        <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/kedinasan.png" alt="Card image cap">
                    </div>
                </div>
            </div>    
            
            <div class="row mt-2">
                <div class="col-md-4" onclick="location.href='<?php echo base_url('tryout/casn'); ?>" style="cursor: pointer;">
                    <div class="card full-height">
                        <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/TES_CASN.png" alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4" onclick="location.href='<?php echo base_url('tryout/utbk'); ?>" style="cursor: pointer;">
                    <div class="card full-height">
                        <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/utbk.png" alt="Card image cap">
                    </div>
                </div>
                
                <!-- <div class="col-md-4 " style="cursor: pointer;">
                    <div class="card full-height modalDanger " data-toggle="modal" data-target="#modalDanger">
                        <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/utbk.png" alt="Card image cap">
                    </div>
                </div> -->
                
                <div class="col-md-4" onclick="location.href='<?php echo base_url('tryout/bumn'); ?>" style="cursor: pointer;">
                    <div class="card full-height">
                        <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/tes_bumn.png" alt="Card image cap">
                </div>
            </div>
                        

        </div>
        

    </div>
</div>

            </div>
            <!-- / Content -->

            <?php $this->load->view('templates/footer'); ?>
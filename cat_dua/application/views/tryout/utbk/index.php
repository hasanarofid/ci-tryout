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
                        <div class="col-md-4" onclick="location.href='https://tryout.mitrasiswa.id/user/category/polri/psikologi';" style="cursor: pointer;">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">TES PSIKOLOGI</div>
                        <div class="card-category">Ayo tingkatkan kemampuanmu pada tes ini</div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/psikologi.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Berisi berbagai jenis try out mulai dari tes kecerdasan, kecermatan dan kepribadian</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
                        <div class="col-md-4" onclick="location.href='https://tryout.mitrasiswa.id/user/category/polri/akademik';" style="cursor: pointer;">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">TES AKADEMIK</div>
                        <div class="card-category">Ayo tingkatkan kemampuanmu pada tes ini</div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/akademik.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Berisi berbagai jenis try out semua mapel tes akademik persiapan seleksi anggota POLRI</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
                        <div class="col-md-4" onclick="location.href='https://tryout.mitrasiswa.id/user/category/polri/lainnya-polri';" style="cursor: pointer;">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">TES LAINNYA</div>
                        <div class="card-category">Ayo tingkatkan kemampuanmu pada tes ini</div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/lainnya.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Berisi paket tryout tes lainnya</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            
            
        </div>

           

        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
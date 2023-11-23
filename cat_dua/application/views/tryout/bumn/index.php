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

           

        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
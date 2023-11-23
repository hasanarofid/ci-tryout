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

            <div class="row mt--2">
                                    <div class="col-md-4" onclick="location.href='https://tryout.mitrasiswa.id/user/category/polri';" style="cursor: pointer;">
                <div class="card full-height">
                    <!-- <div class="card-body"> -->
                    <!-- <div class="card-title">POLRI</div> -->
                    <!-- <div class="card-category">Daily information about statistics in system</div> -->
                    <!-- <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"> -->
                    <!-- <div class="card" style="width: 18rem;"> -->
                    <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/polri.png" alt="Card image cap">
                    <!-- <div class="card-body"> -->
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div>   -->
                </div>
            </div>
                                                <div class="col-md-4" onclick="location.href='https://tryout.mitrasiswa.id/user/category/tni';" style="cursor: pointer;">
                <div class="card full-height">
                    <!-- <div class="card-body"> -->
                    <!-- <div class="card-title">TNI</div> -->
                    <!-- <div class="card-category">Daily information about statistics in system</div> -->
                    <!-- <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"> -->
                    <!-- <div class="card" style="width: 18rem;"> -->
                    <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/tni.png" alt="Card image cap">
                    <!-- <div class="card-body"> -->
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div>   -->
                </div>
            </div>
                                                <div class="col-md-4" onclick="location.href='https://tryout.mitrasiswa.id/user/category/sekolah-kedinasan';" style="cursor: pointer;">
                <div class="card full-height">
                    <!-- <div class="card-body"> -->
                    <!-- <div class="card-title">SEKOLAH KEDINASAN</div> -->
                    <!-- <div class="card-category">Daily information about statistics in system</div> -->
                    <!-- <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"> -->
                    <!-- <div class="card" style="width: 18rem;"> -->
                    <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/kedinasan.png" alt="Card image cap">
                    <!-- <div class="card-body"> -->
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div>   -->
                </div>
            </div>
                                                <div class="col-md-4" onclick="location.href='https://tryout.mitrasiswa.id/user/category/cpns';" style="cursor: pointer;">
                <div class="card full-height">
                    <!-- <div class="card-body"> -->
                    <!-- <div class="card-title">CPNS</div> -->
                    <!-- <div class="card-category">Daily information about statistics in system</div> -->
                    <!-- <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"> -->
                    <!-- <div class="card" style="width: 18rem;"> -->
                    <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/TES_CASN.png" alt="Card image cap">
                    <!-- <div class="card-body"> -->
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div>   -->
                </div>
            </div>
                                                <div class="col-md-4 " style="cursor: pointer;">
                <div class="card full-height modalDanger " data-toggle="modal" data-target="#modalDanger">
                    <!-- <div class="card-body"> -->
                    <!-- <div class="card-title">UTBK SBMPTN</div> -->
                    <!-- <div class="card-category">Daily information about statistics in system</div> -->
                    <!-- <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"> -->
                    <!-- <div class="card" style="width: 18rem;"> -->
                    <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/utbk.png" alt="Card image cap">
                    <!-- <div class="card-body"> -->
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div>   -->
                </div>
            </div>
                                                <div class="col-md-4" onclick="location.href='https://tryout.mitrasiswa.id/user/category/bumn';" style="cursor: pointer;">
                <div class="card full-height">
                    <!-- <div class="card-body"> -->
                    <!-- <div class="card-title">BUMN</div> -->
                    <!-- <div class="card-category">Daily information about statistics in system</div> -->
                    <!-- <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"> -->
                    <!-- <div class="card" style="width: 18rem;"> -->
                    <img class="card-img-top" src="https://tryout.mitrasiswa.id/assets/img/tes_bumn.png" alt="Card image cap">
                    <!-- <div class="card-body"> -->
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div>   -->
                </div>
            </div>
                        

        </div>
        

    </div>
</div>

            </div>
            <!-- / Content -->
            <?php $this->load->view('templates/footer'); ?>
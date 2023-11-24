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

            <div class="accordion mt-3" id="accordionExample">
<?php 
$accordion_data = [];

foreach ($soal as $row) {
    $judul = $row->judul;
    $subjudul = $row->sub_judul;

    if (!isset($accordion_data[$judul])) {
        $accordion_data[$judul] = ['subitems' => []];
    }

    $accordion_data[$judul]['subitems'][] = [
        'id' => $row->id,
        'subjudul' => $subjudul,
        'paket' => $row->paket,
    ];
}
?>
            <?php
            $no = 1;
            foreach ($accordion_data as $judul => $data): ?>


        <div class="card accordion-item <?php echo ($no == 1) ? 'active' : ''; ?>">
            <h2 class="accordion-header">
                <button type="button" class="accordion-button <?php echo ($no == 1) ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $no; ?>" aria-expanded="<?php echo ($no == 1) ? 'true' : 'false'; ?>" aria-controls="collapse_<?php echo $no; ?>">
                    <?php echo $judul; ?>
                </button>
            </h2>
            <div id="collapse_<?php echo $no; ?>" class="accordion-collapse collapse <?php echo ($no == 1) ? 'show' : ''; ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php foreach ($data['subitems'] as $subitem): ?>
                        <?php 
                            if($subitem['paket'] == 'Free'){
                                $class_paket = 'bg-warning';
                            }else if($subitem['paket'] == 'Premium'){
                                $class_paket = 'bg-success';
                            }else{
                                $class_paket = 'bg-danger';
                            }

                            ?>
                        <div class="card" style="max-height:80px!important">
                        <div class="card-body modalStartVip" idx-id="<?php echo $subitem['id']; ?>">
                            <a style="cursor: pointer;" class="open-modal"  data-target="#modalStartVip"  data-idsoal="<?php echo $subitem['id']; ?>"
                             data-subjudul="<?php echo $subitem['subjudul']; ?>" data-paket="<?php echo $subitem['paket']; ?>"
                             data-user="<?php echo  $this->session->userdata('user_id'); ?>"
                             >
                                <?php echo $subitem['subjudul']; ?>
                            </a>
                            <span class="badge rounded-pill <?= $class_paket ?>" style="position: absolute;right: 100px"><?php echo $subitem['paket']; ?></span>
                        </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
                    <?php $no++; ?>
    <?php endforeach; ?>
         

            </div>
        </div>
    <!-- Modal -->
    <div class="modal fade" id="modalStartVip" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <a href="#" id="lanjutkanButton" class="btn btn-primary">Lanjutkan</a>
                              </div>
                            </div>
                          </div>
                        </div>
</div>
  
</div>

<?php $this->load->view('templates/footer'); ?>

<script>
    $(document).ready(function () {
        $('.open-modal').click(function () {

            var subjudul = $(this).data('subjudul');
            var paket = $(this).data('paket');
            var id_soal = $(this).data('idsoal');
            var id_user = $(this).data('user');
            var base_url = '<?php echo base_url(); ?>';

// Example usage with parameters
var id_soal = $(this).data('idsoal');
var id_user = $(this).data('user');

var urlWithParameters = base_url + 'ujian/mulai/' + id_soal + '/' + id_user;



            var keterangan = '';
            if(paket === 'Free'){
                keterangan ='Apakah Anda ingin memulai try out? ';
                $('#modalStartVip .modal-footer').show();
                $('#lanjutkanButton').attr('href', urlWithParameters);
            }else if(paket === 'Premium'){
                keterangan ='Anda harus membeli paket Premium ';
                $('#modalStartVip .modal-footer').hide();

            }else{
                keterangan ='Anda harus membeli paket VIP ';
                $('#modalStartVip .modal-footer').hide();
            }
            // Set the modal content dynamically
            $('#modalStartVip .modal-body').html('<p>' + keterangan + '</p>');

            // Show the modal
            $('#modalStartVip').modal('show');
        });
    });
</script>

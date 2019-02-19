<?php $this->load->view('global/01_header'); ?>

<?php $this->load->view('global/02_navbar'); ?>
<?php $this->load->view('global/03_sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cek Kondisi Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo  site_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/peminjaman'); ?>/daftar_peminjaman">Daftar Peminjaman</a></li>
              <li class="breadcrumb-item active">Cek Kondisi Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card card-primary">



            <?php echo form_open('peminjaman/konfirmasi_kembali/'.$this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5)); ?>
            <?php if (validation_errors()): ?>
                <div class="alert alert-danger"><strong><?php echo validation_errors(); ?></strong></div>
            <?php endif ?>
              <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Kondisi (%)</span>
                        </div>
                        <input required="required" name="detail_kondisi" type="number" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>

              </div>



                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button class="btn btn-primary">Submit</button>
                </div>


            </div>
            <?php echo form_close(); ?>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




<?php $this->load->view('global/05_controlbar'); ?>


<?php $this->load->view('global/06_footer'); ?>
<?php $this->load->view('global/07_javascript'); ?>

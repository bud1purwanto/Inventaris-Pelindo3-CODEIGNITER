<?php $this->load->view('global/01_header'); ?>
<?php $this->load->view('global/02_navbar'); ?>
<?php $this->load->view('global/03_sidebar'); ?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Password</h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active">Menu Admin</a></li>
              <li class="breadcrumb-item active">Edit Password</li>
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

            <?php echo form_open('dashboard/gantiPassword'); ?>
            <?php if (validation_errors()): ?>
                <div class="alert alert-">
                	<strong>
                		<?php echo validation_errors(); ?>
                	</strong>
                </div>
            <?php endif ?>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-">
                	<strong>
                		<?php echo $this->session->flashdata('error'); ?>
                	</strong>
                </div>
            <?php endif ?>
            <?php if ($this->session->flashdata('password')): ?>
                <div class="alert alert-danger">
                  <strong>
                    <?php echo $this->session->flashdata('password'); ?>
                  </strong>
                </div>
            <?php endif ?>
              <!-- /.card-header -->
              <!-- form start -->

                <div class="card-body">
                  

                  <div class="row">
                    <div class="col-4">
                  		<label>Password Lama</label>
                  		<input required="required" value="<?php echo set_value('password_lama') ?>" id="password_lama" name="password_lama" type="Password" class="form-control" placeholder="Isi Password Lama">
                  	</div>
                    <div class="col-4">
                      <label>Password</label>&nbsp<label class="text-primary">Baru</label>
                      <input required="required" value="<?php echo set_value('password_baru') ?>" id="password" name="password_baru" type="Password" class="form-control" placeholder="Isi Password">
                    </div>
                    <div class="col-4">
                      <label>Konfirmasi Password</label>&nbsp<label class="text-primary">Baru</label>
                      <input required="required" value="<?php echo set_value('konfirmasi_password') ?>" id="confirm_password" name="konfirmasi_password" type="Password" class="form-control" placeholder="Isi Password">
                    </div>
                  	


                  </div>
                </div>



                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <span id='message'></span>
                </div>
              <?php echo form_close(); ?>
            </div>
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

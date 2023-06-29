<div class="container-fluid">
  <div class="animated fadeIn">
    <?php echo $this->session->flashdata('validasi'); ?>
    <?php echo $this->session->flashdata('validasi1'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-primary">
          <div class="card-body pb-0">
            <div class="btn-group float-right">
            </div>
            <div class="text-value">
              <?php echo $model->jumlah_alternatif; ?>
            </div>
            <div>Data Alternatif</div>
          </div>
        </div>
      </div>
      <!-- /.col-->
      <div class="col-sm-9 col-lg-3">
        <div class="card text-white bg-info">
          <div class="card-body pb-0">
            <div class="text-value">
              <?php echo $model->jumlah_kriteria; ?>
            </div>
            <div>Data Kriteria</div>
          </div>
        </div>
      </div>
      <!-- /.col-->
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-warning">
          <div class="card-body pb-0">
            <div class="btn-group float-right">
            </div>
            <div class="text-value">
              <?php echo $model->jumlah_parameter; ?>
            </div>
            <div>Data Parameter</div>
          </div>
        </div>
      </div>
      <!-- /.col-->
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-danger">
          <div class="card-body pb-0">
            <div class="btn-group float-right">
            </div>
            <div class="text-value">
              <?php echo $model->jumlah_nilai; ?>
            </div>
            <div>Data Nilai</div>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
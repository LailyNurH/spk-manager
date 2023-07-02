<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12">
          <?php echo $this->session->flashdata('tambah'); ?>
          <?php echo $this->session->flashdata('ubah'); ?>
          <?php echo $this->session->flashdata('hapus'); ?>
          <div class="card">
            <div class="card-header">Tabel Data Alternatif
            </div>
            <div class="card-body">
              <nav>
                <form method="post">

                  <a class="btn btn-primary float-right"
                    href="<?php echo base_url('index.php/data_alternatif1/create'); ?>">+ Tambah Alternatif</a>
                  <br>
                  <br>
              </nav>
              <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>NK</th>
                    <th>NAMA KARYAWAN</th>
                    <th>JENIS KELAMIN</th>
                    <th>POSISI</th>
                    <th>KELOLA</th>
                  </tr>
                </thead>
                <?php
                $no = 1;

                foreach ($data['data']->result() as $row) {
                  ?>
                  <tbody>
                    <tr>
                      <td>
                        <?php echo $row->nk; ?>
                      </td>
                      <td>
                        <?php echo $row->nama_karyawan; ?>
                      </td>
                      <td>
                        <?php echo $row->jenis_kelamin; ?>
                      </td>
                      <td>
                        <?php echo $row->divisi; ?>
                      </td>
                      <td>
                        <span class="badge badge-warning"><a
                            href="<?php echo base_url('index.php/data_alternatif1/update?id_alternatif=' . $row->id_alternatif); ?>">Ubah</a></span>
                        <span class="badge badge-danger"><a
                            href="<?php echo base_url('index.php/data_alternatif1/delete?id_alternatif=' . $row->id_alternatif); ?>"
                            onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data Ini ?')">Hapus</a></span>
                      </td>
                    </tr>
                  </tbody>

                  <?php
                  $no++;
                } ?>


              </table>
              <?php
              if (isset($data['pagination'])) {
                echo $data['pagination'];
              }
              ?>

            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
    </div>
  </div>
  </main>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .search-form {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 15px;
    }

    .search-form input {
      margin-left: 10px;
    }

    .font-color {
      color: white;
      padding: 20px 15px;
    }
  </style>
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
            <div class="card-header">
              </i>Tabel Data Kriteria
            </div>
            <div class="card-body">
              <nav>
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link"
                      href="<?php echo base_url('index.php/gap_controller/data_kriteria/index?tambah=form_tambah'); ?>">
                      <i class="fas fa-plus"></i> Tambah
                    </a>
                  </li>
                </ul>
              </nav>
              <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>ID KRITERIA</th>
                    <th>NAMA KRITERIA</th>
                    <th>KELOLA</th>
                  </tr>
                </thead>
                <?php foreach ($rows as $row) { ?>
                  <tbody>
                    <tr>
                      <td>
                        <?php echo $row->id_kriteria; ?>
                      </td>
                      <td>
                        <?php echo $row->nama_kriteria; ?>
                      </td>
                      <td>
                        <span class="badge badge-warning"><a
                            href="<?php echo base_url('index.php/gap_controller/data_kriteria/update?id_kriteria=' . $row->id_kriteria); ?>"><i
                              class="fas fa-edit"></i>Edit</a></span>
                        <span class="badge badge-danger"><a class="font-color"
                            href="<?php echo base_url('index.php/gap_controller/data_kriteria/delete?id_kriteria=' . $row->id_kriteria); ?>"
                            onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data Ini ?')"><i
                              class="fas fa-trash"></i>Hapus</a></span>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
    </div>
  </div>
</body>

</html>
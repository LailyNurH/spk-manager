<!DOCTYPE html>
<html>
<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title></title>
</head>

<body>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h2>Tabel Data Hasil Pemilihan Manager Terbaik</h2>
            </div>
            <div class="card-body">
              <form method="post">
                <div class="table-responsive">
                  <h4><b>Tabel Nilai Kriteria Penilaian</b></h4>
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">

                    <thead>
                      <tr align="center">
                        <th>NO</th>
                        <th>NK</th>
                        <th>NAMA KARYAWAN</th>
                        <?php
                        foreach ($this->model->subkriteria_penilaian as $nama_kriteria) {
                          ?>
                          <th>
                            <?php echo $nama_kriteria; ?>
                          </th>
                        <?php } ?>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data1['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->nilai ?>
                          </td>
                          <td>
                            <?php echo $data12->row($i)->nilai; ?>
                          </td>
                          <td>
                            <?php echo $data13->row($i)->nilai; ?>
                          </td>

                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                      <tr align="center">
                        <th colspan="3">Nilai Target</th>
                        <th>
                          <?php echo $target_kriteria1; ?>
                        </th>
                        <th>
                          <?php echo $target_kriteria2; ?>
                        </th>
                        <th>
                          <?php echo $target_kriteria3; ?>
                        </th>

                      </tr>

                      <tr align="center">
                        <th colspan="6">GAP</th>
                      </tr>
                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data1['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->gap; ?>
                          </td>
                          <td>
                            <?php echo $data12->row($i)->gap; ?>
                          </td>
                          <td>
                            <?php echo $data13->row($i)->gap; ?>
                          </td>
                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                      <tr align="center">
                        <th colspan="6">Pembobotan</th>
                        <th>NCF</th>
                        <th>NSF</th>
                        <th>Total Nilai</th>
                      </tr>

                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data1['data']->result() as $row) {

                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->nilai_bobot; ?>
                          </td>
                          <td>
                            <?php echo $data12->row($i)->nilai_bobot;
                            ; ?>
                          </td>
                          <td>
                            <?php echo $data13->row($i)->nilai_bobot;
                            ; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_cf_c1[$i]; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_sf_c1[$i]; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_total_c1[$i]; ?>
                          </td>
                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                      <tr align="center">
                        <th colspan="3">Pengelompokan Subkriteria</th>
                        <th>CF</th>
                        <th>SF</th>
                        <th>CF</th>
                      </tr>

                    </tbody>

                  </table>
                </div>



                <div class="table-responsive">
                  <h4><b>Tabel Nilai Kriteria Pengalaman Kerja</b></h4>
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">

                    <thead>
                      <tr align="center">
                        <th>NO</th>
                        <th>nk</th>
                        <th>NAMA KARYAWAN</th>
                        <?php
                        foreach ($this->model->subkriteria_keagamaan as $nama_kriteria) {
                          ?>
                          <th>
                            <?php echo $nama_kriteria; ?>
                          </th>
                        <?php } ?>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data2['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->nilai ?>
                          </td>
                          <td>
                            <?php echo $data22->row($i)->nilai; ?>
                          </td>
                          <td>
                            <?php echo $data23->row($i)->nilai; ?>
                          </td>
                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                      <tr align="center">
                        <th colspan="3">Nilai Target</th>
                        <th>
                          <?php echo $target_kriteria4; ?>
                        </th>
                        <th>
                          <?php echo $target_kriteria5; ?>
                        </th>
                        <th>
                          <?php echo $target_kriteria6; ?>
                        </th>

                      </tr>
                      <tr align="center">
                        <th colspan="6">GAP</th>
                      </tr>
                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data2['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->gap; ?>
                          </td>
                          <td>
                            <?php echo $data22->row($i)->gap; ?>
                          </td>
                          <td>
                            <?php echo $data23->row($i)->gap; ?>
                          </td>

                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                      <tr align="center">
                        <th colspan="6">Pembobotan</th>
                        <th>NCF</th>
                        <th>NSF</th>
                        <th>Total Nilai</th>
                      </tr>

                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data2['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->nilai_bobot; ?>
                          </td>
                          <td>
                            <?php echo $data22->row($i)->nilai_bobot; ?>
                          </td>
                          <td>
                            <?php echo $data23->row($i)->nilai_bobot; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_cf_c2[$i]; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_sf_c2[$i]; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_total_c2[$i]; ?>
                          </td>
                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                      <tr align="center">
                        <th colspan="3">Pengelompokan Subkriteria</th>
                        <th>CF</th>
                        <th>CF</th>
                        <th>SF</th>
                      </tr>

                    </tbody>

                  </table>
                </div>

                <div class="table-responsive">
                  <h4><b>Tabel Nilai Kepimpinan dan Komunikasi</b></h4>
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">

                    <thead>
                      <tr align="center">
                        <th>NO</th>
                        <th>NK</th>
                        <th>NAMA KARYAWAN</th>
                        <?php
                        foreach ($this->model->subkriteria_kesehatan as $nama_kriteria) {
                          ?>
                          <th>
                            <?php echo $nama_kriteria; ?>
                          </th>
                        <?php } ?>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data3['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->nilai ?>
                          </td>
                          <td>
                            <?php echo $data32->row($i)->nilai; ?>
                          </td>
                          <td>
                            <?php echo $data33->row($i)->nilai; ?>
                          </td>
                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                      <tr align="center">
                        <th colspan="3">Nilai Target</th>
                        <th>
                          <?php echo $target_kriteria7; ?>
                        </th>
                        <th>
                          <?php echo $target_kriteria8; ?>
                        </th>
                        <th>
                          <?php echo $target_kriteria9; ?>
                        </th>
                      </tr>
                      <tr align="center">
                        <th colspan="6">GAP</th>
                      </tr>
                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data3['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->gap; ?>
                          </td>
                          <td>
                            <?php echo $data32->row($i)->gap; ?>
                          </td>
                          <td>
                            <?php echo $data33->row($i)->gap; ?>
                          </td>
                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>
                      <tr align="center">
                        <th colspan="6">Pembobotan</th>
                        <th>NCF</th>
                        <th>NSF</th>
                        <th>Total Nilai</th>
                      </tr>
                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data3['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->nilai_bobot; ?>
                          </td>
                          <td>
                            <?php echo $data32->row($i)->nilai_bobot; ?>
                          </td>
                          <td>
                            <?php echo $data33->row($i)->nilai_bobot; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_cf_c3[$i]; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_sf_c3[$i]; ?>
                          </td>
                          <td>
                            <?php echo $this->model->nilai_total_c3[$i]; ?>
                          </td>
                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                      <tr align="center">
                        <th colspan="3">Pengelompokan Subkriteria</th>
                        <th>CF</th>
                        <th>CF</th>
                        <th>SF</th>
                      </tr>

                    </tbody>

                  </table>
                </div>
                <div class="table-responsive">
                  <h4><b>Tabel Perankingan</b></h4>
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">

                    <thead>
                      <tr align="center">
                        <th>nk</th>
                        <th>NAMA SISWA</th>
                        <th>TOTAL NILAI</th>
                        <th>RANKING</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $no = 1;
                      $i = 0;
                      foreach ($data['data']->result() as $row) {
                        ?>
                        <tr align="center">
                          <td>
                            <?php echo $row->nk; ?>
                          </td>
                          <td>
                            <?php echo $row->nama_karyawan; ?>
                          </td>
                          <td>
                            <?php echo $row->total; ?>
                          </td>
                          <td>
                            <?php echo $no; ?>
                          </td>
                        </tr>
                        <?php
                        $no++;
                        $i++;
                      } ?>

                    </tbody>

                  </table>
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
<?= $this->extend('template') ?>

<?= $this->section('pembayaran_active') ?>
active
<?= $this->endSection() ?>

<?= $this->section('konten') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Pembayaran</h3>
            <p class="text-subtitle text-muted">
            Data pembayaran akan ditampilkan disini
            </p>
        </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <!-- <div class="card-header float-start">
                <h4 class="card-title">Apa isinya bagus gaeesssssssssss??</h4>
            </div> -->
            <div class="card-body">
            <table class="table table-lg">
                          <thead>
                            <tr>
                              <th>Konsumen</th>
                              <th>Nominal</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-bold-500">Michael Right</td>
                              <td>Rp75.000</td>
                              <td><span class="badge bg-success">Selesai</span></td>
                            </tr>
                            <tr>
                              <td class="text-bold-500">Michael Left</td>
                              <td>Rp65.000</td>
                              <td><span class="badge bg-danger">Batal</span></td>
                            </tr>
                            <tr>
                              <td class="text-bold-500">Michael Center</td>
                              <td>Rp55.000</td>
                              <td><span class="badge bg-warning">Sedang Proses</span></td>
                            </tr>
                          </tbody>
                        </table>
            </div>
        </div>


    </section>
</div>

<?= $this->endSection() ?>


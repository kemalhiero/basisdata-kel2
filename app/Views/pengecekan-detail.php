<?= $this->extend('template') ?>

<?= $this->section('pengecekan_active') ?>
active
<?= $this->endSection() ?>

<?= $this->section('konten') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Detail pengecekan barang</h3>
            <p class="text-subtitle text-muted">
            Berikut ditampilkan detail data pengecekan
            </p>
        </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
        <div class="card-header float-start">
            <!-- <h4 class="card-title">Horizontal Form</h4> -->
        </div>
        <div class="card-body">
        <form class="form form-horizontal">
            <div class="form-body">
                <div class="row">
                <div class="col-md-4">
                    <label>ID Pengecekan</label>
                </div>
                <div class="col-md-8 form-group">
                    <input
                    type="text"
                    class="form-control"
                    name="fname"
                    placeholder="id pengecekan"
                    />
                </div>
                <div class="col-md-4">
                    <label>Nama Pelanggan</label>
                </div>
                <div class="col-md-8 form-group">
                    <input
                    type="text"
                    class="form-control"
                    name="email-id"
                    placeholder="nama pelanggan"
                    />
                </div>
                <div class="col-md-4">
                    <label>Nama Teknisi</label>
                </div>
                <div class="col-md-8 form-group">
                    <input
                    type="text"
                    id="contact-info"
                    class="form-control"
                    name="contact"
                    placeholder="nama teknisi"
                    />
                </div>
                <div class="col-md-4">
                    <label>Tanggal</label>
                </div>
                <div class="col-md-8 form-group">
                    <input
                    type="date"
                    class="form-control"
                    name="password"
                    />
                </div>
                </div>
            </div>
        </form>

        <table class="table table-striped" id="table1">
            <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Keluhan</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1313</td>
                <td>kulkas</td>
                <td>tidak dingin.</td>
                <td>2</td>
                <td>
                    <a href="" class="btn icon icon-left btn-danger" title="detail pengecekan barang"><i class="bi bi-x"></i></a>
                </td>
            </tr>
            </tbody>
        </table>

        </div>
        </div>

    </section>
</div>

<?= $this->endSection() ?>


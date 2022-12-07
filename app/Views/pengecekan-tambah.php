<?= $this->extend('template') ?>

<?= $this->section('pengecekan_active') ?>
active
<?= $this->endSection() ?>

<?= $this->section('konten') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Tambah pengecekan barang</h3>
            <p class="text-subtitle text-muted">
            Berikut ditampilkan form pengecekan barang
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
                    name="pelanggan"
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
                    name="teknisi"
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
                    name="tanggal"
                    />
                </div>
                <!-- <div class="col-sm-12 d-flex justify-content-end">
                    <button
                    type="submit"
                    class="btn btn-primary me-1 mb-1"
                    >
                    Submit
                    </button>
                    <button
                    type="reset"
                    class="btn btn-light-secondary me-1 mb-1"
                    >
                    Reset
                    </button>
                </div> -->
                </div>
            </div>
        </form>

        <br>
        <div class="float-start">
            <a href="/tambah-pengecekan" class="btn icon icon-left btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white" width="30"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>    
            Tambah Barang</a>
        </div><br><br>

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
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                <td>5</td>
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


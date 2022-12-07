<?= $this->extend('template') ?>

<?= $this->section('pengecekan_active') ?>
active
<?= $this->endSection() ?>

<?= $this->section('konten') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data pengecekan barang konsumen</h3>
            <p class="text-subtitle text-muted">
            Pengecekan Barang yang diperbaiki akan ditampilkan disini
            </p>
        </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
        <div class="card-header float-start">
            <a href="/tambah-pengecekan" class="btn icon icon-left btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white" width="30"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>    
            Tambah Pengecekan</a>
        </div>
        <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
            <tr>
                <th>ID Pengecekan</th>
                <th>Nama Pelanggan</th>
                <th>Nama Teknisi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1313</td>
                <td>pelanggannnnnn</td>
                <td>teknisi1</td>
                <td>04/12/2022</td>
                <td>
                    <a href="/detail-pengecekan" class="btn icon icon-left btn-info" title="detail pengecekan barang"><i data-feather="info"></i> Detail</a>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
        </div>

    </section>
</div>

<?= $this->endSection() ?>


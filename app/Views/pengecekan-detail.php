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
                    <input value="<?= esc($cek['kode_pengecekan']); ?>" readonly
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
                    <input value="<?= esc($cek['nama_customer']); ?>" readonly
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
                    <input value="<?= esc($cek['nama_teknisi']); ?>" readonly
                    type="text"
                    id="contact-info"
                    class="form-control"
                    name="contact"
                    placeholder="nama teknisi"
                    />
                </div>
                <div class="col-md-4">
                    <label>Tanggal/Waktu</label>
                </div>
                <div class="col-md-8 form-group">
                    <input value="<?= esc($cek['tanggal']); ?>" readonly
                    type="text"
                    class="form-control"
                    name="password"
                    />
                </div>
                <div class="col-md-4">
                    <label>Harga Perbaikan (Rp)</label>
                </div>
                <div class="col-md-8 form-group">
                    <input value="" placeholder="tambahkan harga"
                    type="text"
                    class="form-control"
                    name="password"
                    />
                </div>
                <div class="col-md-4">
                    <label>Deskripsi Pengecekan</label>
                </div>
                <div class="col-md-8 form-group">
                    <textarea placeholder="tambahkan deskipsi"
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"
                      ></textarea>
                </div>
                </div>
            </div>
        </form>

        <br><br>
        <div class="float-end">
            <a href="/tambah-barang-pengecekan/<?= esc($cek['kode_pengecekan']); ?>" class="btn icon icon-left btn-primary">
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
            <?php foreach($barang as $b): ?>
            <tr>
                <td><?= esc($b['kode_barang']); ?></td>
                <td><?= esc($b['nama_barang']); ?></td>
                <td><?= esc($b['keluhan_barang']); ?></td>
                <td><?= esc($b['jumlah']); ?></td>
                <td>

                    <button type="button" class="btn icon btn-danger" title="Hapus" data-bs-toggle="modal" data-bs-target="#modalHapusBarang<?= esc($b['id']); ?>">
                            <i class="bi bi-x"></i></button>

                    <!--Danger theme Modal -->
                    <div class="modal fade text-left" id="modalHapusBarang<?= esc($b['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
                        <div
                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                        role="document"
                        >
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                            <h5 class="modal-title white" id="myModalLabel120">
                                Hapus Data Barang
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                                <i data-feather="x"></i>
                            </button>
                            </div>
                            <div class="modal-body">
                            Anda yakin ingin menghapus data barang ini?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tutup</span>
                            </button>
                            <form action="/hapus-barang-pengecekan/<?= esc($b['id']); ?>" method="post">
                            <?php csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="kode_pengecekan" value="<?= esc($cek['kode_pengecekan']); ?>">
                                <button type="submit" class="btn btn-danger ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Hapus</span>
                                </button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        </div>
        </div>

    </section>
</div>

<?= $this->endSection() ?>


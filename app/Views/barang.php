<?= $this->extend('template') ?>

<?= $this->section('data_barang_active') ?>
active
<?= $this->endSection() ?>

<?= $this->section('konten') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Barang Konsumen</h3>
            <p class="text-subtitle text-muted">
            Barang apa saja yang diperbaiki akan ditampilkan disini
            </p>
        </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
        <div class="card-header float-start">
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalTambahBarang"
            >
                Tambah Barang
            </button>
        </div>
        <div class="card-body">
        <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Tanggal</th>
                      <th>Pemilik</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Kulkas 2 Pintu</td>
                        <td>26/11/2022 17.20</td>
                        <td>Graiden</td>
                        <td>
                            <span class="badge bg-warning">Sedang Proses</span>
                        </td>
                        <td>
                        <button type="button" class="btn icon btn-info" title="Detail" data-bs-toggle="modal" data-bs-target="#modalDetailBarang">
                            <i data-feather="info"></i></button>
                        <button type="button" class="btn icon btn-warning" title="Edit" data-bs-toggle="modal" data-bs-target="#modalEditBarang">
                            <i data-feather="edit"></i></button>
                        <button type="button" class="btn icon btn-danger" title="Hapus" data-bs-toggle="modal" data-bs-target="#modalHapusBarang">
                            <i data-feather="trash"></i></button>
                        </td>
                    </tr>
                  </tbody>
                </table>
        </div>
        </div>

        <!--Modal Form Tambah Data -->
        <div class="modal fade text-left" id="modalTambahBarang" tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div
            class="modal-dialog modal-dialog-scrollable"
            role="document"
            >
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">
                   Form Tambah Barang
                </h4>
                <button
                    type="button"
                    class="close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                    <i data-feather="x"></i>
                </button>
                </div>
                <form action="#">
                <div class="modal-body">
                    <label>Nama Barang: </label>
                    <div class="form-group">
                    <input type="text" placeholder="nama" class="form-control"/>
                    </div>
                    <label>Pemilik: </label>
                    <div class="form-group">
                        <select class="choices form-select">
                        <?php foreach($items as $d): ?>
                            <option value="<?= esc($d); ?>"><?= esc($d); ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <label>Deskripsi: </label>
                    <div class="form-group">
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" >
                        <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tambahkan</span>
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>


        <!--Modal Form Edit Data -->
        <div class="modal fade text-left" id="modalEditBarang" tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div
            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            role="document"
            >
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">
                   Form Edit Barang
                </h4>
                <button
                    type="button"
                    class="close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                    <i data-feather="x"></i>
                </button>
                </div>
                <form action="#">
                <div class="modal-body">
                    <label>Nama: </label>
                    <div class="form-group">
                    <input type="text" placeholder="nama" class="form-control"/>
                    </div>
                    <label>Pemilik: </label>
                    <div class="form-group">
                    <select class="choices form-select">
                        <?php foreach($items as $d): ?>
                            <option value="<?= esc($d); ?>"><?= esc($d); ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    <label>Status: </label>
                    <div class="form-group">
                    <select class="form-select">
                            <option value="Selesai">Selesai</option>
                            <option value="Sedang Proses" selected>Sedang Proses</option>
                            <option value="Batal">Batal</option>
                    </select>
                    </div>
                    <label>Deskripsi: </label>
                    <div class="form-group">
                        <input type="text"placeholder="deskripsi" class="form-control"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" >
                        <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                    </button>
                    <button type="button" class="btn btn-warning ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Edit</span>
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>


        <!--Modal Detail Data -->
        <div class="modal fade text-left" id="modalDetailBarang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">
                   Detail Barang
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
                </div>
                <form action="#">
                <div class="modal-body">
                    <label>Nama: </label>
                    <div class="form-group">
                        <input type="text" class="form-control" readonly value=" data nama"/>
                    </div>
                    <label>Tanggal: </label>
                    <div class="form-group">
                        <input type="text" class="form-control" readonly value=" data tanggal"/>
                    </div>
                    <label>Pemilik: </label>
                    <div class="form-group">
                        <input  type="text" class="form-control" readonly value=" data pemilik"/>
                    </div>
                    <label>Status: </label>
                    <div class="form-group">
                        <input  type="text" class="form-control" readonly value=" data status"/>
                    </div>
                    <label>Deskripsi: </label>
                    <div class="form-group">
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>

        <!--Danger theme Modal -->
        <div class="modal fade text-left" id="modalHapusBarang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
            <div
            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            role="document"
            >
            <div class="modal-content">
                <div class="modal-header bg-danger">
                <h5
                    class="modal-title white"
                    id="myModalLabel120"
                >
                    Hapus Data Barang
                </h5>
                <button
                    type="button"
                    class="close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                    <i data-feather="x"></i>
                </button>
                </div>
                <div class="modal-body">
                Anda yakin ingin menghapus data barang ini?
                </div>
                <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-light-secondary"
                    data-bs-dismiss="modal"
                >
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block"
                    >Tutup</span
                    >
                </button>
                <button
                    type="button"
                    class="btn btn-danger ml-1"
                    data-bs-dismiss="modal"
                >
                    <i
                    class="bx bx-check d-block d-sm-none"
                    ></i>
                    <span class="d-none d-sm-block"
                    >Hapus</span
                    >
                </button>
                </div>
            </div>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection() ?>


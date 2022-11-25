<?= $this->extend('template') ?>

<?= $this->section('konten') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Ini teks gais</h3>
            <p class="text-subtitle text-muted">
            Ini teks tapi lebih kecil.
            </p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav
            aria-label="breadcrumb"
            class="breadcrumb-header float-start float-lg-end"
            >
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="/">Ini namanya breadcumb</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                ini sub breadcumbnya
                </li>
            </ol>
            </nav>
        </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ini contoh konten</h4>
        </div>
        <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Consectetur quas omnis laudantium tempore exercitationem,
            expedita aspernatur sed officia asperiores unde tempora maxime
            odio reprehenderit distinctio incidunt! Vel aspernatur dicta
            consequatur!
        </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>


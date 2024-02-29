<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Satuan Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active">Satuan Produk</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <a href="<?= site_url('tambah-satuan'); ?>" class="btn btn-outline-primary"></a>
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus-circle"></i>
                                </span>
                                <span class="text">Tambah</span>
                            </div>

                            <!-- <h1 class="card-title">Data Kategori Produk</h1>
                        <p>Dibawah ini adalah data Kategori Produk.</p> -->

                            <!-- Table with stripped rows -->
                            <table class="table table-striped datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Satuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($listSatuan as $row): ?>
                                        <tr>
                                            <td>
                                                <?= $no++ ?>
                                            </td>
                                            <td>
                                                <?= $row['nama_satuan']; ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary"><i
                                                        class="ri ri-edit-box-fill"></i></button>
                                                <button type="button" class="btn btn-outline-primary"><i
                                                        class="ri ri-delete-bin-5-fill"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection(); ?>
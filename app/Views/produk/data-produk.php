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
                                <a href="<?= site_url('tambah-produk'); ?>" class="btn btn-outline-primary"></a>
                            </div>
                        </div>
                        <!-- <h1 class="card-title">Data Kategori Produk</h1>
                        <p>Dibawah ini adalah data Kategori Produk.</p> -->

                        <!-- Table with stripped rows -->
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>Kode Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Beli</th>
                                    <th>Satuan Produk</th>
                                    <th>Kategori Produk</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listProduk as $row): ?>
                                    <tr>
                                        <td>
                                            <?= $row['kode_produk']; ?>
                                        </td>
                                        <td>
                                            <?= $row['nama_produk']; ?>
                                        </td>
                                        <td>
                                            <?= $row['harga_beli']; ?>
                                        </td>
                                        <td>
                                            <?= $row['nama_satuan']; ?>
                                        </td>
                                        <td>
                                            <?= $row['nama_kategori']; ?>
                                        </td>
                                        <td>
                                            <?= $row['stok']; ?>
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
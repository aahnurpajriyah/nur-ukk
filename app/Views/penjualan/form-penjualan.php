<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Kategori Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active">Kategori Produk</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="mt-4 col-3">
                            <a class="btn btn-primary" aria-current="true" href="<?= site_url('tambah-penjualan') ?>">

                                <span class="icon text-white-50">
                                    <i class="fas fa-plus-circle"></i>
                                </span>
                                <span class="text">Tambah</span>
                            </a>
                            <!-- <button type="button" class="btn btn-primary"><i class="ri ri-add-circle-fill"></i> Tambah</button> -->
                        </div>
                        <!-- <h1 class="card-title">Data Penjualan Produk</h1>
                        <p>Dibawah ini adalah data Penjualan Produk.</p> -->

                        <!-- Table with stripped rows -->
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penjualan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($listPenjualan as $row): ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>
                                        <td>
                                            <?= $row['nama_penjualan']; ?>
                                        </td>
                                        <td>
                                        <td>
                      <a href=<?=site_url('/edit-penjualan/'.$row['id_penjualan']); ?>><i class="bi bi-pencil-square"></i></a>
                      <a href=<?=site_url('/hapus-penjualan/'.$row['id_penjualan']); ?>><i class="bi bi bi-trash-fill"></i></a>
                    </td>
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
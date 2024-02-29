<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

    <!-- <div class="pagetitle">
        <h1>Data Kategori Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active">Kategori Produk</li>
            </ol>
        </nav>
    </div> -->
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Produk</h5>

                        <!-- Floating Labels Form -->
                        <form class="row g-3" action="<?= site_url('simpan-produk'); ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="kodeProduk" name="kodeProduk">
                                    <label for="kodeProduk">Kode Produk</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="namaProduk" name="namaProduk">
                                    <label for="namaProduk">Nama Produk</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="hargaBeli" name="hargaBeli">
                                    <label for="hargaBeli">Harga Beli</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="State">
                                        <option selected>box</option>
                                        <option value="1">pack</option>
                                        <option value="2">liter</option>
                                    </select>
                                    <label for="floatingSelect">Satuan Produk</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="State">
                                        <option selected>sayuran</option>
                                        <option value="1">Makanan</option>
                                        <option value="2">Minuman</option>
                                    </select>
                                    <label for="floatingSelect">Kategori Produk</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="stok" name="stok">
                                    <label for="stok">Stok</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End floating Labels Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection(); ?>
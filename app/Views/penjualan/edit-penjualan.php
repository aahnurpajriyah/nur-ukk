<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <section class="section">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Edit Penjualan</h5>

          <!-- Vertical Form -->
          <form action="<?= site_url('perbarui-penjualan') ?>" method="post" class="row g-3">
            <? csrf_field(); ?>
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Jenis Penjualan</label>
              <input type="hidden" name="id_penjualan" class="form-control" id="inputJenis" value="<?= $detailKategori[0]['id_penjualan']; ?>">
              <input type="text" name="nama_no faktur" class="form-control" id="inputJenis" required name="penjualan" value="<?= $detailPenjualan[0]['no_faktur']; ?>">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
      </div>
      </form><!-- End Horizontal Form -->
</main>
<?= $this->endSection(); ?>
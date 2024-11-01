<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $url = site_url('artikel/' . buat_slug($post)) ?>
<?php $abstract = potong_teks(strip_tags($post['isi']), 300) ?>
<?php $image = ($post['gambar'] && is_file(LOKASI_FOTO_ARTIKEL . 'sedang_' . $post['gambar'])) ?
  AmbilFotoArtikel($post['gambar'], 'sedang') :
  gambar_desa($desa['logo']);
?>

<div class="max-w-full w-full bg-white shadow rounded-lg p-3 lg:p-5 border overflow-auto">
  <figure class="h-auto lg:h-32 w-1/3 float-left pr-3 pb-3">
    <img src="<?= $image ?>" alt="<?= $post['judul'] ?>" class="lg:h-32 object-cover object-center max-w-full mx-auto h-auto w-full">
  </figure>
  <div class="space-y-3">
    <a href="<?= $url ?>" class="text-h5 hover:text-primary-100"><?= potong_teks($post['judul'], 80) ?><?= strlen($post['judul']) > 80 ? '...' : '' ?></a>
    <p style="word-break: break-all;" class="line-clamp-4"><?= potong_teks($abstract, 100) ?><?= strlen($abstract) > 100 ? '...' : '' ?></p>
    <ul class="inline-flex gap-x-5 gap-y-3 text-xs lg:text-sm text-gray-500 flex-wrap">
      <li><i class="fas fa-calendar-alt mr-1 text-primary-100"></i> <?= tgl_indo($post['tgl_upload']) ?></li>
      <li><i class="fas fa-user mr-1 text-primary-100"></i> <?= $post['owner'] ?></li>
      <?php if ($post['kategori']) : ?>
        <li><i class="fas fa-bookmark mr-1 text-primary-100"></i> <?= $post['kategori'] ?></li>
      <?php endif ?>
    </ul>
  </div>
</div>
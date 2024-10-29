<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
  $title = (!empty($judul_kategori))? $judul_kategori: 'Artikel Terkini';
  $slug = 'terkini';
  if(is_array($title)){
    $slug = $title['slug'];
    $title = $title['kategori'];
  }
?>
<div class="container mx-9 flex flex-col lg:flex-row my-5 gap-3 lg:gap-5 text-gray-600 h-auto">
  <main class="lg:basis-9/12 w-full grow h-400 overflow-hidden space-y-5 flex flex-col">
    <!-- Tampilkan slider hanya di halaman awal. Tidak tampil pada daftar artikel di halaman kategori atau halaman selanjutnya serta halaman hasil pencarian -->
    <?php if(empty($cari AND count($slider_gambar ?? []) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
      <?php $this->load->view($folder_themes .'/partials/slider') ?>
    <?php endif; ?>

    <!-- Judul Kategori / Artikel Terkini -->
    <div class="flex justify-between items-center w-full">
      <h3 class="text-h4 text-primary-200"><?= $title ?></h3>
      <a href="<?= site_url('arsip') ?>" class="text-sm hover:text-primary-100">Indeks <i class="fas fa-chevron-right ml-1"></i></a>
    </div>

    <div class="overflow-auto max-h-80 my-2 flex-grow">
      <?php if($artikel) : ?>
        <?php foreach($artikel as $post) : ?>
          <?php $data['post'] = $post ?>
          <?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
        <?php endforeach ?>
      <?php else : ?>
        <?php $data['title'] = $title ?>
        <?php $this->load->view($folder_themes .'/partials/empty_article', $data) ?>
      <?php endif ?>
    </div>

    <div class="pagination space-y-1 flex-wrap w-full">
      <?php $this->load->view($folder_themes .'/commons/paging', $data) ?>
    </div>

    <!-- Menampilkan Aparatur Desa -->
    <div class="mt-5 container-fluid py-2 ">
      <h3 class="text-h4 text-primary-200">Aparatur Desa</h3>
      <div class="d-flex flex-row flex-nowrap">
        <?php $this->load->view($folder_themes . '/widgets/aparatur_desa', ['judul_widget' => 'Aparatur Desa']) ?>
      </div>
    </div>

    
  </main>

  <!-- Bagian sidebar / widget -->
  <div class="lg:w-1/4 w-full">
    <?php $this->load->view($folder_themes .'/partials/sidebar2') ?>
  </div>
</div>
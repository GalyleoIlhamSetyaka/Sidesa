<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
  $title = (!empty($judul_kategori))? $judul_kategori: 'Artikel Terkini';
  $slug = 'terkini';
  if(is_array($title)){
    $slug = $title['slug'];
    $title = $title['kategori'];
  }
?>
<div class="container mx-auto lg:px-3 px-2 flex flex-col lg:flex-row my-5 gap-3 lg:gap-5 text-gray-600">
  <div class="lg:w-1/4 w-full"> <!-- Sidebar -->
    <?php $this->load->view($folder_themes .'/partials/sidebar') ?>
  </div>

  <main class="lg:w-2/3 w-full overflow-hidden space-y-5"> <!-- Artikel -->
    <!-- Slider -->
    <?php if(empty($cari AND count($slider_gambar ?? []) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
      <?php $this->load->view($folder_themes .'/partials/slider') ?>
    <?php endif; ?>

    <!-- Judul Kategori / Artikel Terkini -->
    <div class="flex justify-between items-center w-full">
      <h3 class="text-h4 text-primary-200"><?= $title ?></h3>
      <a href="<?= site_url('arsip') ?>" class="text-sm hover:text-primary-100">Indeks <i class="fas fa-chevron-right ml-1"></i></a>
    </div>

    <!-- Daftar Artikel -->
    <?php if($artikel) : ?>
      <?php foreach($artikel as $post) : ?>
        <?php $data['post'] = $post ?>
        <?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
      <?php endforeach ?>
      <div class="pagination space-y-1 flex-wrap w-full">
        <?php $this->load->view($folder_themes .'/commons/paging', $data) ?>
      </div>
    <?php else : ?>
      <?php $data['title'] = $title ?>
      <?php $this->load->view($folder_themes .'/partials/empty_article', $data) ?>
    <?php endif ?>
  </main>
</div>
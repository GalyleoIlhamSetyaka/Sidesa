<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
  $title = (!empty($judul_kategori)) ? $judul_kategori : 'Artikel Terkini';
  $slug = 'terkini';
  if (is_array($title)) {
    $slug = $title['slug'];
    $title = $title['kategori'];
  }
?>
<div class="container my-8 lg:px-5 px-3 flex flex-col my-2 gap-3 lg:gap-5 text-gray-600 ">
  <main class="lg:w-9/12 w-full space-y-5 m-2">
    <!-- Tampilkan slider hanya di halaman awal. Tidak tampil pada daftar artikel di halaman kategori atau halaman selanjutnya serta halaman hasil pencarian -->
    <?php if (empty($cari AND count($slider_gambar ?? []) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
      <div class="flex flex-col gap-5 lg:flex-row" >
        <div class="lg:w-3/4 h-auto w-200 mx-1">
          <?php $this->load->view($folder_themes . '/partials/slider') ?>
        </div>
        <div class="lg:w-1/3 w-full mt-5 lg:mt-0">
          <?php $this->load->view($folder_themes . '/partials/sidebar2') ?> <!-- Sidebar di samping slider -->
        </div>
      </div>
    <?php endif; ?>

    <!-- Judul Kategori / Artikel Terkini -->
    <div class="object-center w-full mt-5">
      <h3 class="text-h3 text-primary-200 mb-3 text-center cursor-pointer" onclick="window.location.href='<?= site_url('arsip') ?>'"><?= $title ?></h3>
    </div>

    <div class="bg-gradient-to-r from-blue-500 to-green-500 p-4 rounded-lg"> <!-- Menambahkan card dengan background gradient -->
      <div class="scrollable-article scrollbar-hidden overflow-auto max-h-80 my-1">
        <?php if ($artikel) : ?>
          <?php foreach ($artikel as $post) : ?>
            <?php $data['post'] = $post ?>
            <div class="mb-4">
              <?php $this->load->view($folder_themes . '/partials/article_list', $data) ?>
            </div>
          <?php endforeach ?>
        <?php else : ?>
          <?php $data['title'] = $title ?>
          <?php $this->load->view($folder_themes . '/partials/empty_article', $data) ?>
        <?php endif ?>
      </div>

      <div class="pagination space-y-1 flex-wrap w-full">
        <?php $this->load->view($folder_themes . '/commons/paging', $data) ?>
      </div>
    </div>

    <!-- Menampilkan Aparatur Desa -->
    <div class="mt-5 container-fluid h-7">
    <h3 class="text-h3 text-primary-200 mb-3 text-center">Aparatur Desa</h3>
      <div class="d-flex flex-row flex-nowrap shadow rounded-lg bg-white overflow-hidden mb-5">
        <?php $this->load->view($folder_themes . '/widgets/aparatur_desa', ['judul_widget' => 'Aparatur Desa']) ?>
      </div>
    </div>

    <!-- Menampilkan Statistik, Arsip, dan Agenda -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mt-5">
      <?php 
      $widgets = [
        ['isi' => 'statistik', 'judul' => 'Statistik'],
        ['isi' => 'arsip_artikel', 'judul' => 'Arsip'],
        ['isi' => 'agenda', 'judul' => 'Agenda']
      ];
      foreach ($widgets as $widget): ?>
        <div class="col-span-1 shadow rounded-lg bg-white overflow-hidden mx-5">
          <div class="box box-primary box-solid">
            <div class="box-header">
              <h3 class="box-title"><?= $widget['judul'] ?></h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <?php $this->load->view($folder_themes . '/widgets/' . $widget['isi'], ['judul_widget' => $widget['judul']]) ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </main>

</div>

<style>
  .scrollable-article {
    max-height: 60vh; /* Batasi tinggi kontainer artikel */
    overflow-y: auto; /* Aktifkan scroll vertikal */
  }
  .scrollbar-hidden::-webkit-scrollbar {
    display: none; /* Sembunyikan scrollbar untuk Webkit (Chrome, Safari) */
  }
  .scrollbar-hidden {
    -ms-overflow-style: none;  /* Sembunyikan scrollbar untuk Internet Explorer dan Edge */
    scrollbar-width: none;  /* Sembunyikan scrollbar untuk Firefox */
  }
</style>
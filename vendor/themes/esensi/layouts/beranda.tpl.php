<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
  $title = (!empty($judul_kategori)) ? $judul_kategori : 'Artikel Terkini';
  $slug = 'terkini';
  if (is_array($title)) {
    $slug = $title['slug'];
    $title = $title['kategori'];
  }
?>
<div class="beranda container mx-auto my-8 lg:px-5 px-3 text-gray-600">
  <main class="w-full space-y-5 mt-5">
    
    <!-- Slider Section (only on the homepage) -->
    <?php if (empty($cari AND count($slider_gambar ?? []) > 0) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
      <div class="flex flex-col gap-5 lg:flex-row">
        <div class="lg:w-3/4 w-full h-full lg:h-[680px] mx-1">
          <?php $this->load->view($folder_themes . '/partials/slider') ?>
        </div>
        <div class="lg:w-1/3 w-full mt-5 lg:mt-0">
          <?php $this->load->view($folder_themes . '/partials/sidebar2') ?>
        </div>
      </div>
    <?php endif; ?>

    <!-- Category Title / Latest Articles -->
    <div class="card p-4 rounded-lg text-slate-500">
      <div class="w-full my-5 text-center">
        <h3 class="text-h3 font-semibold cursor-pointer" onclick="window.location.href='<?= site_url('arsip') ?>'"><?= $title ?></h3>
      </div>

      <!-- Articles List -->
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

      <!-- Pagination -->
      <div class="pagination flex flex-wrap justify-center space-y-1 mt-4">
        <?php $this->load->view($folder_themes . '/commons/paging', $data) ?>
      </div>
    </div>

    <!-- Gallery Section -->
    <div class="galleri mt-5 bg-white shadow rounded-lg overflow-hidden h-[500px]">
      <h3 class="text-xl font-bold text-center bg-yellow-400 py-3 underline">Galeri Foto</h3>

      <!-- Owl Carousel for the gallery -->
      <div class="galleri owl-carousel owl-theme h-[500px]">
        <?php foreach ($w_gal as $data): ?>
          <?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>
            <div class="item">
              <a href='<?= site_url("first/sub_gallery/$data[id]"); ?>' title="<?= "Album : $data[nama]" ?>" class="flex-shrink-0 w-full h-full overflow-hidden">
                <img src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" alt="<?= "Album : $data[nama]" ?>" class="object-cover w-full h-full">
              </a>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
    
    <!-- Widgets Section (Statistics, Archive, Agenda) -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-5">
        <?php 
        $widgets = [
          ['isi' => 'statistik', 'judul' => 'Statistik', 'icon' => 'fa fa-chart-pie'],
          ['isi' => 'arsip_artikel', 'judul' => 'Arsip', 'icon' => 'fas fa-folder-open'],
          ['isi' => 'agenda', 'judul' => 'Agenda', 'icon' => 'fas fa-calendar-alt']
        ];
        foreach ($widgets as $widget): ?>
          <div class="shadow rounded-lg bg-white p-4">
            <h3 class="text-lg font-bold mb-3">
              <i class="<?= $widget['icon'] ?> mr-1"></i>
              <?= $widget['judul'] ?>
            </h3>
            <div>
              <?php $this->load->view($folder_themes . '/widgets/' . $widget['isi']) ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      
    <!-- Village Staff Section -->
    <div class="mt-5 bg-white shadow rounded-lg overflow-hidden">
      <h3 class="text-xl font-bold text-center bg-yellow-400 py-3 underline">Aparatur Desa</h3>
      <?php $this->load->view($folder_themes . '/widgets/aparatur_desa', ['judul_widget' => 'Aparatur Desa']) ?>
    </div>

  </main>
</div>

<style>
  .scrollable-article {
    max-height: 60vh; 
    overflow-y: auto; 
  }
  .scrollbar-hidden::-webkit-scrollbar {
    display: none; 
  }
  .scrollbar-hidden {
    -ms-overflow-style: none;  /* Hide scrollbar for IE and Edge */
    scrollbar-width: none;  /* Hide scrollbar for Firefox */
  }
</style>

<script>
  $(document).ready(function() {
  $(".galleri .owl-carousel").owlCarousel({
    loop: true,
    margin: 16,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      640: {
        items: 3
      },
      1024: {
        items: 3
      }
    }
  });
});
</script>
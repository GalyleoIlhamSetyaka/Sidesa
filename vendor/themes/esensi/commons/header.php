<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $bg_header = $latar_website ?>

<div class="max-w-screen-xl md:px-8 lg:px-10 mx-auto">
  <header style="background-image: url(<?= $bg_header ?>);" class="bg-center bg-cover bg-no-repeat relative text-white">
    <div class="absolute bg-gray-800 bg-opacity-60 top-0 left-0 right-0 h-full">
    </div>
    
    <?php $this->load->view($folder_themes .'/commons/category_menu') ?>

    <section class="relative z-10 text-center space-y-7 mt-3 px-3 lg:px-5 pb-6">
      <a href="<?= site_url() ?>">
        <figure>
          <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="h-30 mx-auto pb-10">
        </figure>
        <span class="text-h2 block"><?= NAMA_DESA ?></span>
        <p><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?>
          <?= ucwords($desa['nama_kecamatan']) ?>,
          <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
          <?= ucwords($desa['nama_kabupaten']) ?>,
          Provinsi 
          <?= ucwords($desa['nama_propinsi']) ?>
        </p>
      </a>
    </section>
  </header>
  <?php $this->load->view($folder_themes .'/commons/main_menu') ?>
  <?php $this->load->view($folder_themes .'/commons/mobile_menu') ?>
</div>

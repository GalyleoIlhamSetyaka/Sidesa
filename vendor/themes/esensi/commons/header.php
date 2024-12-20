<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $bg_header = $latar_website ?>

<div class="max-w-screen-xl md:px-8 lg:px-10 mx-auto ">
  <header style="background-image: url(<?= $bg_header ?>);" class="bg-center bg-cover bg-no-repeat relative text-white">
    <div class="absolute bg-opacity-60 top-0 left-0 right-0 h-full">
    </div>
    
    <?php $this->load->view($folder_themes .'/commons/category_menu') ?>

    <section class="relative z-10 text-center space-y-7 mt-0 px-3 lg:px-5 pb-0">
      <a href="<?= site_url() ?>">
        <figure>
          <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="h-50 mx-auto pb-10">
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
    <?php if($teks_berjalan) : ?>
      <div class="block px-3 bg-slate-200 text-white bg-opacity-20 py-1.5 text-2x1 mt-6 mb-0 z-20 relative">
        <marquee onmouseover="this.stop();" onmouseout="this.start();" class="block divide-x-4 relative">
          <?php foreach($teks_berjalan as $marquee) : ?>
            <span class="px-3">
              <?= $marquee['teks'] ?>
              <?php if(trim($marquee['tautan']) && $marquee['judul_tautan']) : ?>
              <a href="<?= $marquee['tautan'] ?>" class="hover:text-link"><?= $marquee['judul_tautan']?></a>
              <?php endif ?>
            </span>
          <?php endforeach ?>
        </marquee>
      </div>
    <?php endif ?>
  </header>
  <?php $this->load->view($folder_themes .'/commons/main_menu') ?>
  <?php $this->load->view($folder_themes .'/commons/mobile_menu') ?>
</div>

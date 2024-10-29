<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="box shadow rounded-lg bg-transparent overflow-hidden">
  <div class="box-body">
    <div class="d-flex overflow-auto space-x-3 scrollbar-hidden">
      <?php foreach ($aparatur_desa['daftar_perangkat'] as $data) : ?>
        <div class="card" style="min-width: 400px; background: rgba(255, 255, 255, 0.8); min-height= 550px;">
          <img src="<?= $data['foto'] ?>" alt="<?= $data['nama'] ?>" class="card-img-top object-cover" style="height: 250px; height= 550px;">
          <div class="card-body text-center">
            <h5 class="card-title"><?= $data['nama'] ?></h5>
            <p class="card-text"><?= $data['jabatan'] ?></p>
            <?php if ($data['pamong_niap']) : ?>
              <p class="text-gray-500"><?= $this->setting->sebutan_nip_desa ?>: <?= $data['pamong_niap'] ?></p>
            <?php endif ?>
            <?php if ($data['kehadiran'] == 1) : ?>
              <?php if ($data['status_kehadiran'] == 'hadir') : ?>
                <span class="btn btn-primary w-200">Hadir</span>
              <?php else : ?>
                <span class="btn btn-danger w-200"><?= ucwords($data['status_kehadiran']); ?></span>
              <?php endif ?>
            <?php else : ?>
              <span class="btn btn-danger w-200">Belum Rekam Kehadiran</span>
            <?php endif ?>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<style>
  .scrollbar-hidden::-webkit-scrollbar {
    display: none;
  }

  .scrollbar-hidden {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>
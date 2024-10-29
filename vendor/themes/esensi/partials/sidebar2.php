<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<aside class="space-y-50 sidebar">
  <?php
    // Menentukan widget yang akan ditampilkan
    $widgets = [
      'peta_wilayah_desa',
      'peta_lokasi_kantor'
    ];
  ?>
  
  <?php foreach($widgets as $widget) : ?>
    <div class="shadow rounded-lg bg-white overflow-hidden">
      <?php
        $judul_widget = [
          // Menghilangkan underscore pada judul widget
          'judul_widget' => str_replace(['Desa', '_'], [ucwords($this->setting->sebutan_desa), ' '], ucfirst($widget))
        ];
      ?>
      <?php $this->load->view("{$folder_themes}/widgets/{$widget}", $judul_widget) ?>
    </div>
  <?php endforeach ?>
</aside>
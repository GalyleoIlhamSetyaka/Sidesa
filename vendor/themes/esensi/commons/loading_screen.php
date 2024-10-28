<?php
  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div 
  x-data="{loading: true, onLoading() {setTimeout(() => {this.loading = false}, 1500)}}"
  x-init="onLoading()">
  <div
    class="fixed bg-white left-0 top-0 w-screen h-screen z-[9999] flex justify-center items-center"
    x-show="loading">
    <!-- Mengganti spinner dengan l-superballs -->
    <l-pulsar
      size="150"
      speed="2.1"
      color="#204f8a"
    ></l-pulsar>
  </div>
</div>

<script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/pulsar.js"></script>

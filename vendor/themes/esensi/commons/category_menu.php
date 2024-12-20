<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $alt_slug = IS_PREMIUM ? 'artikel' : 'first'; ?>

<section x-data="{catMenu: false}">
  <button 
    type="button"
    class="lg:hidden inline-block py-4 px-6 z-10 relative"
    @click="catMenu = !catMenu">
    <i class="fa fa-bars fa-lg " style="color: black;"></i>
  </button>

  <div 
    x-show="catMenu"
    x-on:click="catMenu = false"
    x-transition.opacity
    class="fixed inset-0 bg-black bg-opacity-50 z-30 backdrop-blur-sm"
  ></div>

  <div
    class="lg:py-3 px-3 lg:block transform transition-transform duration-300 lg:visible z-40"
    :class="{'bg-white text-gray-700 w-3/4 shadow fixed top-0 left-0 h-screen block inset-0 overflow-y-auto opacity-100 visible': catMenu, 'bg-white lg:bg-transparent fixed lg:relative -translate-x-full h-screen lg:h-auto lg:translate-x-0 opacity-0 lg:opacity-100':!catMenu}"
    x-transition
    x-on:click.stop
    x-trap.noscroll.inert="catMenu">
    <div class="flex lg:flex-row flex-col justify-between items-center relative z-10">
      </ul>

      <div class="flex flex-col gap-3 mt-5 lg:justift-end w-5 px-3">
        <?php if($this->setting->layanan_mandiri == 1) : ?>
          <a href="<?= site_url('layanan-mandiri') ?>" class="btn btn-primary text-sm w-full text-center">Layanan Mandiri <i class="fas fa-external-link-alt ml-1"></i></a>
        <?php endif ?>
        <a href="<?= site_url('siteman') ?>" class="btn btn-accent text-sm w-full text-center">Login Admin <i class="fas fa-external-link-alt ml-1"></i></a>
      </div>
    </div>
  </div>

</section>

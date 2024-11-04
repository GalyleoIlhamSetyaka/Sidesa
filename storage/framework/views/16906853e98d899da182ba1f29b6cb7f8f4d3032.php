<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('title'); ?>
    <h1>
        PRODUK
        <small>Daftar Data</small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Daftar Data</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layouts.components.konfirmasi_hapus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.lapak.navigasi', $navigasi, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="box box-info">
        <div class="box-header with-border">
            <?php if(can('u')): ?>
                <a href="<?php echo e(ci_route("{$controller}/produk_form")); ?>" class="btn btn-social btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Tambah Data"><i class="fa fa-plus"></i> Tambah
                </a>
            <?php endif; ?>
            <?php if(can('h')): ?>
                <a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform','<?php echo e(ci_route("{$controller}/produk_delete_all")); ?>')" class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih"><i
                        class='fa fa-trash-o'
                    ></i> Hapus</a>
            <?php endif; ?>
        </div>
        <form id="mainform" name="mainform" method="post">
            <div class="box-header with-border form-inline">
                <div class="row">
                    <div class="col-sm-2">
                        <select class="form-control input-sm select2" id="status" name="status">
                            <option value="">Semua Status</option>
                            <option value="1">Aktif</option>
                            <option value="2">Non Aktif</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select class="form-control input-sm select2" id="id_pend" name="id_pend">
                            <option value="">Semua Pelapak</option>
                            <?php $__currentLoopData = $pelapak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($pel->id_pend); ?>"><?php echo e($pel->nik . ' - ' . $pel->pelapak); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select class="form-control input-sm select2" id="id_produk_kategori" name="id_produk_kategori">
                            <option value="">Semua Kategori</option>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($kat->id); ?>"><?php echo e($kat->kategori); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable table-hover tabel-daftar" id="tabel-produk">
                        <thead class=" disabled color-palette">
                            <tr>
                                <th><input type="checkbox" id="checkall" /></th>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Pelapak</th>
                                <th>Produk</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Satuan</th>
                                <th>Potongan</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            let tabel_produk = $('#tabel-produk').DataTable({
                'processing': true,
                'serverSide': true,
                'autoWidth': false,
                'pageLength': 10,
                'order': [
                    [4, 'desc']
                ],
                'columnDefs': [{
                        'orderable': false,
                        'targets': [0, 1, 2]
                    },
                    {
                        'className': 'padat',
                        'targets': [0, 1, 7, 8]
                    },
                    {
                        'className': 'aksi',
                        'targets': [2]
                    },
                    {
                        'className': 'dt-nowrap',
                        'targets': [9],
                        'width': '30%'
                    }
                ],
                'ajax': {
                    'url': "<?php echo e(ci_route("{$controller}/produk")); ?>",
                    'method': 'get',
                    'data': function(d) {
                        d.status = $('#status').val();
                        d.id_pend = $('#id_pend').val();
                        d.id_produk_kategori = $('#id_produk_kategori').val();
                    }
                },
                'columns': [{
                        orderable: false,
                        searchable: false,
                        'data': function(data) {
                            return `<input type="checkbox" name="id_cb[]" value="${data.id}"/>`
                        }
                    },
                    {
                        orderable: false,
                        searchable: false,
                        'data': 'DT_RowIndex'
                    },
                    {
                        orderable: false,
                        searchable: false,
                        'data': function(data) {
                            let status;
                            if (data.status == 1) {
                                status = `<a href="<?php echo e(ci_route("{$controller}/produk_status/")); ?>${data.id}/2" class="btn bg-navy btn-sm" title="Non Aktifkan Produk"><i class="fa fa-unlock"></i></a>`
                            } else {
                                status = `<a href="<?php echo e(ci_route("{$controller}/produk_status/")); ?>${data.id}/1" class="btn bg-navy btn-sm" title="Aktifkan Produk"><i class="fa fa-lock"></i></a>`
                            }

                            return `
                        <?php if(can('u')): ?>
                            <a href="<?php echo e(ci_route("{$controller}/produk_form/")); ?>${data.id}" title="Edit Data"  class="btn bg-orange btn-sm"><i class="fa fa-edit"></i></a>
                            ${status}
                        <?php endif; ?>
                        <?php if(can('h')): ?> 
                            <a href="#" data-href="<?php echo e(ci_route("{$controller}/produk_delete/")); ?>${data.id}" class="btn bg-maroon btn-sm"  title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                        <?php endif; ?>
                        <a href="<?php echo e(ci_route("{$controller}/produk_detail/")); ?>${data.id}" class="btn bg-blue btn-sm" title="Tampilkan" data-target="#modalBox" data-remote="false" data-toggle="modal" data-backdrop="false" data-keyboard="false" data-title="Detail Produk"><i class="fa fa-eye"></i></a>
                        `
                        }
                    },
                    {
                        searchable: false,
                        'data': 'pelapak'
                    },
                    {
                        'data': 'nama'
                    },
                    {
                        'name': 'pk.kategori',
                        'data': 'kategori'
                    },
                    {
                        'data': 'harga',
                        'render': $.fn.dataTable.render.number('.', ',', 0, 'Rp. ')
                    },
                    {
                        'data': 'satuan'
                    },
                    {
                        'name': 'potongan',
                        'data': function(data) {
                            return `${(data.tipe_potongan == 1) ? data.potongan + '%' : 'Rp. ' + formatRupiah(data.potongan.toString())}`
                        }
                    },
                    {
                        name: 'deskripsi',
                        'data': 'deskripsi',
                        'render': function(data) {
                            return data.length > 150 ? data.substr(0, 150) + '…' : data;
                        }
                    }
                ],
                'language': {
                    'url': "<?php echo e(base_url('/assets/bootstrap/js/dataTables.indonesian.lang')); ?>"
                }
            });

            if (hapus == 0) {
                tabel_produk.column(0).visible(false);
            }

            if (ubah == 0) {
                tabel_produk.column(2).visible(false);
            }

            $('#status').on('select2:select', function(e) {
                tabel_produk.ajax.reload();
            });

            $('#id_pend').on('select2:select', function(e) {
                tabel_produk.ajax.reload();
            });

            $('#id_produk_kategori').on('select2:select', function(e) {
                tabel_produk.ajax.reload();
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sidesa\resources\views/admin/lapak/produk/index.blade.php ENDPATH**/ ?>
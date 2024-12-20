<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('title'); ?>
    <h1>
        Pelapak
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
                <a
                    href="<?php echo e(site_url("lapak_admin/pelapak_form/{$main->id}")); ?>"
                    class="btn btn-social btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                    title="Tambah"
                    data-target="#modalBox"
                    data-remote="false"
                    data-toggle="modal"
                    data-backdrop="false"
                    data-keyboard="false"
                    data-title="Tambah Data"
                ><i class="fa fa fa-plus"></i> Tambah</a>
            <?php endif; ?>
            <?php if(can('h')): ?>
                <a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform','<?php echo e(site_url('lapak_admin/pelapak_delete_all')); ?>')" class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih"><i
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
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable table-hover tabel-daftar" id="tabel-pelapak">
                        <thead class=" disabled color-palette">
                            <tr>
                                <th><input type="checkbox" id="checkall" /></th>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Pelapak</th>
                                <th>No. Telelpon</th>
                                <th>Jumlah Produk</th>
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
            let tabel_produk = $('#tabel-pelapak').DataTable({
                'processing': true,
                'serverSide': true,
                'autoWidth': false,
                'pageLength': 10,
                'order': [
                    [3, 'desc']
                ],
                'columnDefs': [{
                        'searchable': false,
                        'targets': [0, 1, 2, 5]
                    },
                    {
                        'orderable': false,
                        'targets': [0, 1, 2]
                    },
                    {
                        'className': 'padat',
                        'targets': [0, 1, 4, 5]
                    },
                    {
                        'className': 'aksi',
                        'targets': [2]
                    }
                ],
                'ajax': {
                    'url': "<?php echo e(site_url('lapak_admin/pelapak')); ?>",
                    'method': 'get',
                    'data': function(d) {
                        d.status = $('#status').val();
                    }
                },
                'columns': [{
                        'data': function(data) {
                            if (data.jumlah == 0) {
                                return `<input type="checkbox" name="id_cb[]" value="${data.id}"/>`
                            } else return ''
                        }
                    },
                    {
                        'data': 'DT_RowIndex'
                    },
                    {
                        'data': function(data) {
                            let status;
                            if (data.status == 1) {
                                status = `<a href="<?php echo e(site_url('lapak_admin/pelapak_status/')); ?>${data.id}/2" class="btn bg-navy btn-sm" title="Non Aktifkan Pelapak"><i class="fa fa-unlock"></i></a>`
                            } else {
                                status = `<a href="<?php echo e(site_url('lapak_admin/pelapak_status/')); ?>${data.id}/1" class="btn bg-navy btn-sm" title="Aktifkan Pelapak"><i class="fa fa-lock"></i></a>`
                            }

                            let hapus;
                            if (data.jumlah == 0) {
                                hapus = `<a href="#" data-href="<?php echo e(site_url('lapak_admin/pelapak_delete/')); ?>${data.id}" class="btn bg-maroon btn-sm" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>`
                            } else {
                                hapus = ''
                            }

                            return `
                        <?php if(can('u')): ?>
                            <a href="<?php echo e(site_url('lapak_admin/pelapak_form/')); ?>${data.id}" title="Edit Data" class="btn bg-orange btn-sm" data-target="#modalBox" data-remote="false" data-toggle="modal" data-backdrop="false" data-keyboard="false" data-title="Ubah Pelapak"><i class="fa fa-edit"></i></a>
                            ${status}
                        <?php endif; ?>
                        <?php if(can('h')): ?>
                            ${hapus}
                        <?php endif; ?>
                        <?php if(can('u')): ?>
                            <a href="<?php echo e(site_url('lapak_admin/pelapak_maps/')); ?>${data.id}" class="btn bg-green btn-sm" title="Lokasi"><i class="fa fa-map"></i></a>
                        <?php endif; ?>
                        `
                        }
                    },
                    {
                        'data': 'pelapak',
                        'name': 'p.nama'
                    },
                    {
                        'data': 'telepon'
                    },
                    {
                        'data': 'jumlah'
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
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sidesa\resources\views/admin/lapak/pelapak/index.blade.php ENDPATH**/ ?>
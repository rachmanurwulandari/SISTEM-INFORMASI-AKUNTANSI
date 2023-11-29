<?php $__env->startSection('container'); ?>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-5">
                <h1>Inventory</h1>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="php-email-form">
                        <div class="create mb-3">
                            <a href="<?php echo e(route('create-inventory')); ?>" class="btn-create"><i class="bi bi-plus-square"></i>
                                Tambah Data</a>
                        </div>
                        <div class="col-lg-12 mt-lg-0 d-flex align-items-stretch mx-auto" data-aos="fade-up"
                            data-aos-delay="200">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga Beli</th>
                                        <th scope="col">Harga Jual</th>
                                        <th scope="col">Jumlah Stok</th>
                                        <th scope="col">Jumlah Terjual</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $inventory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->id); ?></td>
                                            <td><?php echo e($item->nama_barang); ?></td>
                                            <td><?php echo e($item->kategori); ?></td>
                                            <td>Rp<?php echo e(number_format($item->harga_beli, 0, ',', '.')); ?></td>
                                            <td>Rp<?php echo e(number_format($item->harga_jual, 0, ',', '.')); ?></td>
                                            <td><?php echo e($item->jumlah_stok); ?></td>
                                            <td><?php echo e($item->jumlah_terjual); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('edit-inventory', ['id' => $item->id])); ?>"
                                                    class="btn-edit">Edit</a>
                                                <a href="<?php echo e(route('delete-inventory', ['id' => $item->id])); ?>"
                                                    class="btn-delete">Delete</a>
                                                
                                            </td>
                                            
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RACHMA GUTHUB\mbah-jiwo\resources\views/inventory/inventory.blade.php ENDPATH**/ ?>
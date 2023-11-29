<?php $__env->startSection('content'); ?>
<div class="container">
    <a class="btn btn-secondary mb-3 me-3" href="<?php echo e(route('list')); ?>" role="button">戻る</a>
    <a class="btn btn-warning mb-3" href="<?php echo e(route('show.update', $product->id)); ?>">編集</a>
    
    <table class="table table-striped text-center table-bordered">
        <tr>
            <th class="p-4 w-25">ID</th>
            <td class="p-4 text-sm-start"><?php echo e($product->id); ?></td>
        </tr>
        <tr>
            <th class="p-4">商品名</th>
            <td class="p-4 text-sm-start"><?php echo e($product->name); ?></td>
        </tr>
        <tr>
            <td class="p-4 align-middle">商品画像</td>
            <td class="d-flex align-middle table-striped justify-content-start">
                <?php if($product->img_path === ''): ?>
                <p class="mt-5 mb-5">※画像がありません</p>
                <?php else: ?>
                <img src="<?php echo e(asset($product->img_path)); ?>" alt="" width="100px" height="100px">
                <?php endif; ?>
              </td>
        </tr>
        <tr>
            <th class="p-4">商品価格</th>
            <td class="p-4 text-sm-start">¥<?php echo e($product->price); ?></td>
        </tr>
        <tr>
            <th class="p-4">在庫数</th>
            <td class="p-4 text-sm-start"><?php echo e($product->stock); ?></td>
        </tr>
        <tr>
            <th class="p-4">メーカー名</th>
            <td class="p-4 text-sm-start"><?php echo e($product->company->company_name); ?></td>
        </tr>
        <tr>
            <th class="p-4">コメント</th>
            <td class="p-4 text-sm-start"><?php echo e($product->comment); ?></td>
        </tr>
    </table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/test2/resources/views/page/show.blade.php ENDPATH**/ ?>
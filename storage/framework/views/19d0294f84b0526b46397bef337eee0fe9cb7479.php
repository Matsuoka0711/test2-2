<?php $__env->startSection('content'); ?>
<div class="container">
<a class="btn btn-secondary mb-3" href="<?php echo e(route('product.show', $product->id)); ?>" role="button">戻る</a>

<form method="post" action="<?php echo e(route('product.update', ['id' => $product->id])); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <table class="table table-striped text-center table-bordered">
    <tr>
        <th class="p-4 align-middle w-25">ID</th>
        <td class="p-4 text-sm-start"><?php echo e($product->id); ?></td>
    </tr>
    <tr>
        <th class="p-3 align-middle w-25">商品名</th>
        <td class="p-3 text-sm-start">
            <input type="text" value="<?php echo e($product->name); ?>" name="name" class="form-control">
        </td>
    </tr>
    <tr>
        <th class="p-3 align-middle w-25">商品画像</th>
        <td class="p-3 text-sm-start d-flex align-middle">
            <div class="w-50 d-flex align-items-center me-5">
                <input type="file" class="form-control" name="img_path" accept="image/jpeg, image/png, image/jpg, image/gif">
            </div>
            <div class="text-center">
                <?php if($product->img_path === ''): ?>
                <p class="mt-5 mb-5">※未登録</p>
                <?php else: ?>
                <img src="<?php echo e(asset($product->img_path)); ?>" alt="" width="100px" height="100px">
                <?php endif; ?>
                <p class="m-0 mt-3">変更前の画像</p>
            </div>
        </td>
    </tr>
    <tr>
        <th class="p-3 align-middle">商品価格</th>
        <td class="p-3 text-sm-start">
            <input type="text" name="price" id="price" value="<?php echo e($product->price); ?>" class="form-control">
        </td>
    </tr>
    <tr>
        <th class="p-3 align-middle">在庫数</th>
        <td class="p-3 text-sm-start">
            <input type="text" name="stock" id="stock" value="<?php echo e($product->stock); ?>" class="form-control">
        </td>
    </tr>
    <tr>
        <th class="p-3 align-middle">メーカー名</th>
        <td class="p-3 text-sm-start">
            <select class="p-2 w-100 form-select" name="company_id">
                <option value="<?php echo e($product->company_id); ?>"><?php echo e($product->company->company_name); ?></option>
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($product->company->company_name !== $company->company_name): ?>
                <option value="<?php echo e($company->id); ?>"><?php echo e($company->company_name); ?></option>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <th class="p-3 align-middle">コメント</th>
        <td class="p-3 text-sm-start">
            <textarea type="text" name="comment" id="comment" class="form-control"><?php echo e($product->comment); ?></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" class="btn btn-primary">更新</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/test2/resources/views/page/update.blade.php ENDPATH**/ ?>
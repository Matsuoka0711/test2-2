<?php $__env->startSection('title', '投稿画面'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <nav class="d-flex justify-content-end align-items-center mb-4">
    <div class="w-50">
      <a class="btn btn-success" href="<?php echo e(route('regist')); ?>" role="button">新規登録</a>
    </div>
    <div class="w-50">
      <form class="d-flex" action="<?php echo e(route('searchPost')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input class="form-control w-25 justify-content-ceneter me-4" type="text" placeholder="商品名で検索" name="name_search">
        <select class="w-50 me-4 form-select" name="company_id_search" id="">
          <option value="null">選択していません</option>
          <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($company->id); ?>"><?php echo e($company->company_name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <button class="btn btn-primary" type="submit">検索</button>
      </form>
    </div>
  </nav>
  <?php if(session('massage')): ?>
  <div class="alert alert-danger">
  <?php echo e(session('massage')); ?>

  </div>
  <?php endif; ?>
  <?php echo e($products->links()); ?>

  <div class="row">
    <table class="table table-striped text-center table-bordered">
      <thead>
        <tr>
          <th scope="col ">ID</th>
          <th scope="col">商品名</th>
          <th scope="col">商品画像</th>
          <th scope="col">商品価格</th>
          <th scope="col">在庫</th>
          <th scope="col">メーカー</th>
          <th scope="col">詳細</th>
          <th scope="col">削除</th>
        </tr>
      </thead>
      <tbody >
        <?php if($products->count() === 0): ?>
          <tr>
            <td colspan="8" class="text-center">商品が登録されていません</td>
          </tr>
        <?php else: ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="align-middle table-striped"><?php echo e($product->id); ?></td>
            <td class="align-middle table-striped"><?php echo e($product->name); ?></td>
            
            <td class="align-middle table-striped">
              <?php if($product->img_path === ''): ?>
              <p class="mt-5 mb-5">※未登録</p>
              <?php else: ?>
              <img src="<?php echo e(asset($product->img_path)); ?>" alt="" width="100px" height="100px">
              <?php endif; ?>
            </td>
            
            <td class="align-middle table-striped">¥<?php echo e($product->price); ?></td>
            <td class="align-middle table-striped"><?php echo e($product->stock); ?></td>
            <td class="align-middle table-striped"><?php echo e($product->company->company_name); ?></td>
            <td class="align-middle table-striped">
              <a href="<?php echo e(route('product.show', $product->id)); ?>" class="btn btn-warning ">詳細</a>
            </td>
            <td class="align-middle table-striped">
              <form method="POST" action="<?php echo e(route('product.destroy', ['id' => $product->id])); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">削除</button>
              </form>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/test2/resources/views/page/list.blade.php ENDPATH**/ ?>
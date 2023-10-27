<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>

<div class="cards">
    <div class="cards-details">
        <img src="" alt="">
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/consultation">Consultation</a>
  </div>
  <div class="cards">
    <div class="cards-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/grooming_service">Grooming</a>
  </div>
  <div class="cards">
    <div class="cards-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/products">Products</a>
  </div>
  <div class="cards">
    <div class="cards-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/pet_boarding">Pet Boarding</a>
  </div>
</div>
<footer>
<div class="footcontainer">
    <p>Hello World</p>
</div>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VIVVY\Desktop\dbarkingzoo\resources\views/home.blade.php ENDPATH**/ ?>
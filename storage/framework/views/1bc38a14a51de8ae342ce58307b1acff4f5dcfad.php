<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?php echo e(route('home.index')); ?>" class="nav-link px-2 text-white">Home</a></li>
        <?php if(auth()->guard()->check()): ?>
          <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
          <li><a href="<?php echo e(route('users.index')); ?>" class="nav-link px-2 text-white">Users</a></li>
          <li><a href="<?php echo e(route('roles.index')); ?>" class="nav-link px-2 text-white">Roles</a></li>
          <?php endif; ?>
          <li><a href="<?php echo e(route('posts.index')); ?>" class="nav-link px-2 text-white">Posts</a></li>
        <?php endif; ?>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>

      <?php if(auth()->guard()->check()): ?>
        <?php echo e(auth()->user()->name); ?>&nbsp;
        <div class="text-end">
          <a href="<?php echo e(route('logout.perform')); ?>" class="btn btn-outline-light me-2">Logout</a>
        </div>
      <?php endif; ?>

      <?php if(auth()->guard()->guest()): ?>
        <div class="text-end">
          <a href="<?php echo e(route('login.perform')); ?>" class="btn btn-outline-light me-2">Login</a>
          <a href="<?php echo e(route('register.perform')); ?>" class="btn btn-warning">Sign-up</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header><?php /**PATH C:\xampp\htdocs\roles\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>
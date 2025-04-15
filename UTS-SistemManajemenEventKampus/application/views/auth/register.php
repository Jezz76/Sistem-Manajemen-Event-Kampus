<div class="row justify-content-center">
  <div class="col-md-6">
    <h2 class="mb-4">Form Registrasi Mahasiswa</h2>

    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

    <form method="post">
      <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirm" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>No. Telepon</label>
        <input type="text" name="telepon" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
      <a href="<?php echo site_url('auth/login'); ?>" class="btn btn-link">Sudah punya akun?</a>
    </form>
  </div>
</div>

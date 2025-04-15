<div class="row justify-content-center">
  <div class="col-md-6">
    <h3 class="mb-4 text-center">Login Mahasiswa</h3>
    <?php if (!empty($error)): ?>
      <div class="alert alert-danger text-center"><?= $error ?></div>
    <?php endif; ?>
    <form method="post" class="card p-4 shadow-sm border-0">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="<?= site_url('auth/register'); ?>" class="btn btn-link mt-2">Belum punya akun? Register</a>
      </div>
    </form>
  </div>
</div>
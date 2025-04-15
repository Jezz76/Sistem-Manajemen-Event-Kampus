
<h3><?= isset($event) ? 'Edit' : 'Buat' ?> Event</h3>
<form method="post">
  <div class="mb-3">
    <input type="text" name="nama" class="form-control" placeholder="Nama Event" value="<?= isset($event) ? $event->nama : '' ?>" required>
  </div>
  <div class="mb-3">
    <input type="text" name="tempat" class="form-control" placeholder="Tempat" value="<?= isset($event) ? $event->tempat : '' ?>" required>
  </div>
  <div class="mb-3">
    <input type="datetime-local" name="waktu" class="form-control" value="<?= isset($event) ? $event->waktu : '' ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
  <a href="<?= site_url('event') ?>" class="btn btn-secondary">Kembali</a>
</form>

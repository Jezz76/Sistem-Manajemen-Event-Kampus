<h2>Edit Event</h2>
<form method="post">
  <div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $event->nama; ?>" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Tempat</label>
    <input type="text" name="tempat" value="<?php echo $event->tempat; ?>" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Waktu</label>
    <input type="datetime-local" name="waktu" value="<?php echo date('Y-m-d\TH:i', strtotime($event->waktu)); ?>" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

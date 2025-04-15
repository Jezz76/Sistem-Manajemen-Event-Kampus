<h2>Daftar Event</h2>

<?php if ($user->role === 'admin'): ?>
  <a href="<?php echo site_url('event/create'); ?>" class="btn btn-primary mb-3">Tambah Event</a>
<?php endif; ?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Tempat</th>
      <th>Waktu</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($events as $event): ?>
    <tr>
      <td><?php echo $event->nama; ?></td>
      <td><?php echo $event->tempat; ?></td>
      <td><?php echo $event->waktu; ?></td>
      <td>
        <?php if ($user->role === 'admin'): ?>
          <a href="<?php echo site_url('event/edit/' . $event->id); ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="<?php echo site_url('event/delete/' . $event->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus event ini?')">Hapus</a>
          <a href="<?php echo site_url('event/peserta/' . $event->id); ?>" class="btn btn-info btn-sm">Lihat Peserta</a>
        <?php else: ?>
          <?php if (isset($event->sudah_daftar) && $event->sudah_daftar): ?>
            <span class="badge bg-success">Sudah Terdaftar</span>
            <a href="<?php echo site_url('event/batal/' . $event->id); ?>" class="btn btn-outline-danger btn-sm">Batal</a>
          <?php else: ?>
            <a href="<?php echo site_url('event/daftar/' . $event->id); ?>" class="btn btn-success btn-sm">Daftar</a>
          <?php endif; ?>
        <?php endif; ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

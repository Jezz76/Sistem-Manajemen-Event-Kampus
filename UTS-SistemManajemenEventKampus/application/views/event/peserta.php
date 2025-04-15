<h2>Peserta Event</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Username</th>
      <th>Email</th>
      <th>Nomor Telepon</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($peserta as $p): ?>
      <tr>
        <td><?php echo $p->username; ?></td>
        <td><?php echo $p->email; ?></td>
        <td><?php echo $p->telepon; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo site_url('event'); ?>" class="btn btn-secondary mt-3">Kembali</a>

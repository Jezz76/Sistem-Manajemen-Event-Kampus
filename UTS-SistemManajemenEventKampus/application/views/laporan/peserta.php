<h2 class="mb-3">Daftar Peserta Event</h2>
<ul class="list-group mb-3">
  <?php foreach ($peserta as $p): ?>
    <li class="list-group-item"><?= $p->username ?></li>
  <?php endforeach ?>
</ul>
<a href="<?= site_url('event') ?>" class="btn btn-secondary">Kembali</a>
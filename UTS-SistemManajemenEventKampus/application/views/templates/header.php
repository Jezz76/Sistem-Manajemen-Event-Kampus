<!DOCTYPE html>
<html>
<head>
  <title>Sistem Event Kampus</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body, html {
      height: 100%;
    }

    .wrapper {
      min-height: 100%;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url('event'); ?>">Event Kampus</a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <?php if ($this->session->userdata('user_id')): ?>
              <li class="nav-item">
                <span class="nav-link text-white">Halo, <?php echo $this->session->userdata('username'); ?></span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container">

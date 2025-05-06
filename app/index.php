<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Team Info</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="container py-5">
    <h1 class="text-center mb-4 header-title">Giới thiệu Thành viên Team</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
        $sql = "SELECT * FROM members";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()):
      ?>
        <div class="col">
          <div class="member-card h-100 text-center p-3">
            <img src="images/avatar.jpg" alt="Team Avatar" class="avatar-img">
            <h5 class="card-title"><?= $row['name'] ?></h5>
            <p class="card-text text-muted">MSSV: <?= $row['mssv'] ?></p>
            <p class="card-text"><?= $row['role'] ?></p>
            <p class="card-text">Kỹ năng: <?= $row['skills'] ?></p>
            <div class="contact-info mt-3">
              <p>Email: <?= $row['email'] ?></p>
              <a href="<?= $row['github'] ?>" class="text-primary" target="_blank">GitHub</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="project-section text-center mt-5">
      <?php
        $project = $conn->query("SELECT * FROM project WHERE id=1")->fetch_assoc();
      ?>
      <h3>Tên Đồ Án</h3>
      <p><?= $project['title'] ?></p>
      <p class="text-muted mx-auto" style="max-width: 600px;">
        <?= $project['description'] ?>
      </p>
    </div>

    <div class="mt-5">
      <h3 class="text-center mb-3">Tiến độ Đồ Án</h3>
      <ul class="list-group timeline-section">
        <?php
          $timeline = $conn->query("SELECT * FROM timeline ORDER BY start_date ASC");
          while($row = $timeline->fetch_assoc()):
        ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span><?= date('d/m/Y', strtotime($row['start_date'])) ?> - <?= date('d/m/Y', strtotime($row['end_date'])) ?>: <?= $row['description'] ?></span>
            <span class="badge bg-success"><?= $row['status'] ?></span>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>


    <div class="team-contact text-center mt-5">
      <?php
        $contact = $conn->query("SELECT * FROM contact WHERE id=1")->fetch_assoc();
      ?>
      <h3>Liên Hệ Với Nhóm</h3>
      <p>Email: <?= $contact['email'] ?></p>
      <p>GitHub: <a href="<?= $contact['github'] ?>" class="text-primary" target="_blank"><?= $contact['github'] ?></a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>

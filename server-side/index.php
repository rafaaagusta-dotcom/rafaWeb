<?php
  $nama     = "Rafa Augusta Aryasatya Kurniawan";
  $nim      = "102022500365";
  $fakultas = "Rekayasa Industri";
  $prodi    = "Sistem Informasi";
  $sosmed   = [
    "X"  => "https://x.com/username",
    "GH" => "https://github.com/rafaaagusta-dotcom",
    "IG" => "https://instagram.com/rafaagsta",
    "in" => "https://linkedin.com/in/username"
  ];
  $biodata  = [
    "Nama" => $nama, "NIM" => $nim, "Fakultas" => $fakultas,
    "Program Studi" => $prodi, "Universitas" => "Telkom University"
  ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $nama; ?> | Personal Web (PHP)</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <img class="foto" src="fotoAing.jpeg" alt="Foto <?php echo $nama; ?>">
    <h1><?php echo $nama; ?></h1>
    <h3><?php echo "$nim / Fakultas $fakultas / $prodi"; ?></h3>
  </header>

  <main>
    <section>
      <h2>Sosial Media</h2>
      <p class="sosmed">
        <?php foreach ($sosmed as $label => $url) {
          echo "<a href=\"$url\" target=\"_blank\" rel=\"noopener\" aria-label=\"$label\">$label</a>";
        } ?>
      </p>
    </section>

    <section>
      <h2>Tentang Saya</h2>
      <p>Halaman ini dibuat dengan <span style="color:#d71920;font-weight:600">PHP</span> dan dijalankan di localhost (XAMPP).</p>
      <h4>Biodata</h4>
      <table>
        <?php foreach ($biodata as $k => $v) {
          echo "<tr><th>$k</th><td>$v</td></tr>";
        } ?>
      </table>
      <h5>Diakses pada</h5>
      <p><?php echo date("d-m-Y H:i:s"); ?></p>
    </section>
  </main>

  <footer><h6>&copy; <?php echo date("Y") . " " . $nama; ?> &mdash; Pengembangan Aplikasi Web</h6></footer>
</body>
</html>

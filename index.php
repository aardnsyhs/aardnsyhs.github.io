<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> 
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Selamat Ulang Tahun Sayang</title> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> 
    <script src="https://dekatutorial.github.io/crd/s.js"></script>
    <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> 
  </head> 
  <body> 
  <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?>
  <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crd/lv.svg" />
        <p>Klik Love-nya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ Kirim Pesan ]</button>
      </div>
    </div>
<script>
konten = [
  {
    gambar: "1.jpeg",
    ucapan: "Alooo sayaang",
  },
  {
    gambar: "2.jpeg",
    ucapan: "Happy Birthday yaa sayaang",
  },
  {
    gambar: "3.jpeg",
    ucapan: "Hari ini adalah hari yang spesial, karena hari ini adalah hari ulang tahunmu. Aku pengen ngucapin selamat ulang tahun yang paling tulus buat kamu",
  },
  {
    gambar: "4.jpeg",
    ucapan: "Semoga di hari ulang tahunmu ini, kamu selalu bahagia, sehat, dan sukses dalam segala hal. Aku selalu ada buat kamu, apapun yang terjadi",
  },
  {
    gambar: "5.jpeg",
    ucapan: "Semoga kita bisa sama-sama selamanya yaa sayang",
  },
  {
    ucapan: "I love u Princess",
  }
];

nomorWhatsapp = "62895416079900";

</script>
    <script> DekaTutorial(konten, nomorWhatsapp); 
    </script>
  </body> 
</html>

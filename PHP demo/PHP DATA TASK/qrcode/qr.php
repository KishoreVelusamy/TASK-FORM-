<!DOCTYPE html>
<html>
<head>
  <title>Generate QR Code</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">
    #qr-code {
      width: 200px;
      height: 200px;
      margin: 20px auto;
      display: block;
    }
  </style>
</head>
<body>
    <div class="container">
      <h1 class="text-center">Generate QR Code</h1>
      <form action="generate_qr_code.php" method="post">
        <div class="form-group">
          <label for="text">Text:</label>
          <input type="text" class="form-control" id="text" name="text">
        </div>
        <button type="submit" class="btn btn-primary center-block">Generate QR Code</button>
    </form>
    </div>
    <?php
if (isset($_POST['text'])) {
  require 'phpqrcode/qrlib.php';
  $text = $_POST['text'];
  $file = 'C:\Users\kisho\Downloads\qrcode.png';
  QRcode::png($text, $file);
  echo '<img id="qr-code" src="' . $file . '"/>';
}
?>
</body>
</html>

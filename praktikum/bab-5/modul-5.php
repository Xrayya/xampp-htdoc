<body>
  <!-- <form action="proses.php" method="get"> -->
  <!--   <input type="text" name="nama"> -->
  <!--   <input type="submit" value="Go"> -->
  <!-- </form> -->

  <!-- <form action="proses02.php" method="post" name="input"> -->
  <!--   Nama Anda: <input type="text" name="nama" required> -->
  <!--   <br> -->
  <!--   <input type="submit" name="input" value="Input"> -->
  <!-- </form> -->

<form enctype="multipart/form-data" action="upload.php" method="post">
  Chose a file to upload:
  <input type="file" name="uploadedfile" />
  <br>
  <input type="submit" value="Upload File" />
</form>
</body>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../style/expertise/playlist.css" />
</head>

<body>
  <?php
  require_once("header.php");
  ?>
  <section class="video-form">
    <h1 class="heading">upload content</h1>

    <form action="" method="post" enctype="multipart/form-data">
      <p>video status <span>*</span></p>
      <select name="status" class="box" required>
        <option value="" selected disabled>-- select status</option>
        <option value="active">active</option>
        <option value="deactive">deactive</option>
      </select>
      <p>video title <span>*</span></p>
      <input type="text" name="title" maxlength="100" required placeholder="enter video title" class="box" />
      <p>video description <span>*</span></p>
      <textarea name="description" class="box" required placeholder="write description" maxlength="1000" cols="30"
        rows="10"></textarea>
      <p>video playlist <span>*</span></p>
      <select name="playlist" class="box" required>
        <option value="" disabled selected>--select playlist</option>
      </select>
      <p>select thumbnail <span>*</span></p>
      <input type="file" name="thumb" accept="image/*" required class="box" />
      <p>select video <span>*</span></p>
      <input type="file" name="video" accept="video/*" required class="box" />
      <input type="submit" value="upload video" name="submit" class="btn" />
    </form>
  </section>
</body>

</html>
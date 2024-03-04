<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Playlists</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../style/expertise/playlist.css" />
</head>

<body>

  <?php
  require_once("header.php");
  ?>
  <section class="playlists">
    <h1 class="heading">added playlists</h1>

    <div class="box-container">
      <div class="box" style="text-align: center">
        <h3 class="title" style="margin-bottom: 0.5rem">
          create new playlist
        </h3>
        <a href="add_playlists.php" class="btn">add playlist</a>
      </div>

      <div class="box">
        <div class="flex">
          <div>
            <!-- <i
                class="fas fa-circle-dot"
                style="<?php if ($fetch_playlist['status'] == 'active') {
                  echo 'color:limegreen';
                } else {
                  echo 'color:red';
                } ?>"
              ></i> -->
            <!-- <span
                style="<?php if ($fetch_playlist['status'] == 'active') {
                  echo 'color:limegreen';
                } else {
                  echo 'color:red';
                } ?>"
                ><?= $fetch_playlist['status']; ?></span
              > -->
          </div>
          <div>
            <i class="fas fa-calendar"></i>
            <!-- <span><?= $fetch_playlist['date']; ?></span> -->
          </div>
        </div>
        <div class="thumb">
          <!-- <span><?= $total_videos; ?></span> -->
          <img src="../img/logo.png" alt="" />
        </div>
        <h3 class="title"></h3>
        <p class="description"></p>
        <form action="" method="post" class="flex-btn">
          <input type="hidden" name="playlist_id" value="" />
          <a href="" class="option-btn">update</a>
          <input type="submit" value="delete" class="delete-btn" onclick="return confirm('delete this playlist?');"
            name="delete" />
        </form>
        <a href="" class="btn">view playlist</a>
      </div>
    </div>
  </section>
</body>

</html>
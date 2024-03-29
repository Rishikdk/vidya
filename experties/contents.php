<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/expertise/playlist.css" />

</head>

<body>
   <?php
   require_once("header.php");
   ?>
   <section class="contents">

      <h1 class="heading">your contents</h1>

      <div class="box-container">

         <div class="box" style="text-align: center;">
            <h3 class="title" style="margin-bottom: .5rem;">create new content</h3>
            <a href="add_content.php" class="btn">add content</a>
         </div>
         <div class="box">
            <div class="flex">
               <div><i class="fas fa-dot-circle"> </span></div>
               <div><i class="fas fa-calendar"></i><span></span></div>
            </div>
            <img src="" class="thumb" alt="">
            <h3 class="title"></h3>
            <form action="" method="post" class="flex-btn">
               <input type="hidden" name="video_id" value="">
               <a href="" class="option-btn">update</a>
               <input type="submit" value="delete" class="delete-btn" onclick="return confirm('delete this video?');"
                  name="delete_video">
            </form>
            <a href="" class="btn">view content</a>
         </div>

      </div>

   </section>

</body>

</html>
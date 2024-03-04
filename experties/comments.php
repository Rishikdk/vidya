<?php
require_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/expertise/comment.css" />
  <title>Comments</title>
</head>


<body>
  <div class="containers_cmt">
    <form action="../server/experties/discuss.php" method="post">
      <div class="container_learner">
        <div class="comment_profile">
          <img src="../img/head.jpg" />
        </div>

        <div class="comment_details">
          <label>Name of the learner</label>
          <input type="id" value="1" hidden>
          <textarea type="textarea" name="l_comment" id="comment" placeholder="give your feedback"></textarea>
          <button class="btn-primary takespace">Comment</button>
        </div>
      </div>

      <div class="container_expertise">
        <div class="comment_ex_profile">
          <img src="../img/head.jpg" />
        </div>

        <div class="comment_ex_details">
          <label>Name of the experties</label>
          <textarea type="textarea" name="e_comment" id="comment" placeholder="give your answer"></textarea>
          <button class="btn-primary takespace">Reply</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
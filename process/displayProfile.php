
<div class="card-group" style="width:100%">
  <div class="card justify-content-center align-items-center"><?
  if($_SESSION["image"] == ''){
    $_SESSION["image"] = 'uploads/img_avatar1.png';
  }
  ?>
  <h3 class="card-title"><?=$_SESSION["firstName"]?> <?=$_SESSION["lastName"]?></h3>
  <img class="card-img-top" src=<?=$_SESSION["image"]?> alt="Card image" style="width:50%;">
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input class="btn btn-info form-control" type="file" name="fileToUpload" id="fileToUpload">
    <input class="btn btn-info form-control" type="submit" value="Upload Image" name="submit">
  </form>
</div>
  <div class="card justify-content-center align-items-center">
    <h3 class="card-title"><strong>Contact Information:</strong></h3><br>
    <p class="card-text">Email: <?=$_SESSION["email"]?></p>
    <p class="card-text">Phone: <?=$_SESSION["phone"]?></p><br><br>
    <h3 class="card-title"><strong>Address:</strong></h3><br>

    <p class="card-text"><?=$_SESSION["streetAddress"]?></p>
    <p class="card-text"><?=$_SESSION["streetAddress2"]?></p>
    <p class="card-text"><?=$_SESSION["city"]?>, <?=$_SESSION["state"]?> <?=$_SESSION["postCode"]?></p>
  </div>
</div>

<form action="reflection/insert.php" method="post">
  <fieldset>
    <legend>Wyślij refleksje</legend>
      <div class="form-group">
        <label for="title" title="Tytuł" class="hidden"> Tytuł:</label>
        <input type="text"   title="Tytuł" name="title" id="title" class="form-control" placeholder="Tytuł"/>
      </div>
      <div class="form-group">
        <label for="reflection" class="hidden">Refleksja:</label>
        <textarea name="reflection" class="form-control " placeholder="Refleksja" id="reflection"></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-block btn-success" type="submit">Dodaj</button>
      </div>
    </fieldset>
</form>
<?php
  $con = mysqli_connect("10.254.94.2", "s173566", "zfbFQa83", "s173566");// Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con, "SELECT * FROM Reflection");

?>

<h3>Refleksje</h3>
<div class="list-group">
  <?php while ($row = mysqli_fetch_array($result)) { ?>
    <a class="list-group-item">
      <h4 class="list-group-item-heading"><?= $row['title'] ?></h4>
      <p class="list-group-item-text"><?= $row['reflection'] ?></p>
    </a>
  <?php } ?>
</div>

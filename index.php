<?php
include_once 'header.php'
?>

<section class="content">
  <?php
  if (isset($_SESSION["useruid"])) {
    echo "<h1>MISSION COMPLETE</h1>";
  }
  ?>
  <h1>This is landing page</h1>
  <p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi eum obcaecati ducimus nulla facilis maxime modi quam laboriosam tempore, ea totam dolorum aspernatur asperiores, debitis tempora! Totam mollitia ratione eos.
  </p>
</section>


<?php
include_once 'footer.php'
?>
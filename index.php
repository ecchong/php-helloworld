<html>
<h1>Hello World
  <p>From server:
    <?php
    echo $_SERVER['SERVER_ADDR'];
    echo "<p>The time is " . date("h:i:sa");
    ?>
</html>

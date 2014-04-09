<?php
    session_start();
    if (!isset($_SESSION['CurrentUser'])) {
        header("location:login.php");
    }
?>
<html>
  <?php include 'header.html'; ?>
  <?php include 'navbar.html'; ?>
  <body>
    <div>
      <!-- Main component for a primary marketing message or call to action -->
      <table class="table table-striped table-bordered table-condensed">
        <tr>
          <th>Album</th>
          <th>Artist</th>
            <?php
                if(isset($_SESSION['CurrentUser'])) {
                    echo "<th>Purchase</th></tr>";
                }
            ?>
        </tr>    
        <tr>
          <td>True</td>
          <td>Avicii</td>
          <td><a href="bought.php?type=album&name=True&artist=Avicii">Buy me!</a></td>
        </tr><!-- Table Row -->
        <tr class='even'>
          <td>Islands</td>
          <td>Ludovico Einaudi</td>
          <td><a href="bought.php?type=album&name=Islands&artist=Ludovico+Einaudi">Buy me!</a></td>
        </tr><!-- Darker Table Row -->

        <tr>
          <td>Piano Masterpieces</td>
          <td>Beethoven</td><td><a href="bought.php?type=album&name=Piano+Masterpieces&artist=Beethoven">Buy me!</a></td>
        </tr><!-- Table Row -->
        
        <tr class='even'>
          <td>Verities and Balderdash</td>
          <td>Harry Chaplin</td>
          <td><a href="bought.php?type=album&name=Verities+and+Balderdash&artist=Harry+Chaplin">Buy me!</a></td>
        </tr><!-- Darker Table Row -->
      </table>
    </div> <!-- /container -->
  </body>
      <?php include 'footer.html'; ?>
</html>

    <?php
         if(isset($_SESSION['success']))
        {
      ?>  
                   <form action="logged_in.php">
             <input type="submit" value="Logout" style="color:#000000;">
                     </form>
          <?php
        }
        else
        {
        ?>
            <a href="logged_in.php"><button class="btn" style="font:TimesNewRoman; font-size:20px;">Sign In</button></a>
          <?php
        }
        ?>
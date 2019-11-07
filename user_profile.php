<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Profile</title>
    <link type="text/css" rel="stylesheet" href="styles/user_profile.css" />
  </head>
  <body>
    <?php
      include('menu.php');
      if($_SESSION['isLogin'] == true) {
        // If logged in, hide login option and show profile link & logout option
        ?>
        <script type='text/javascript'>
          document.getElementById("login_btn").style.display = 'none';
          document.getElementById("profile_link").style.display = 'none';
          document.getElementById("logout_btn").style.display = 'block';
        </script>
        <?php
      }
      else {
        header('Location: home.php');
      }
    ?>
    <div class="container">
      <!-- Data Goes Here  -->
      <div style="border: 1px solid red;"><img src="logo.jpg" style="width: 100px; height: 100px; "></div>
      <div style="border: 1px solid yellow;">
        Name :
      </div>
    </div>
    <?php
      include('footer.php');
    ?>
  </body>
</html>

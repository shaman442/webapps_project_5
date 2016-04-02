<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/drop-theme-arrows-bounce-dark.min.css" />
    <script src="js/tether.min.js"></script>
    <script src="js/drop.min.js"></script>
    <?php include 'defaultheader.php'; ?>
    <?php include 'params.php' ?>
    <?php include 'handlelogin.php' ?>
    <title>People's Choice Awards</title>

    <script type="text/javascript">
      // Javascript necessary for the top bar to work.
      function showSigninFlyout() {
        // TODO: Do stuff to show the siginin flyout.
      }

      $(function (){
        drop = new Drop({
          target: document.querySelector('#signin'),
          content: '<form action="index.php" method="post" id="loginform">Name: <input type="text" /></br>Password: <input type="password" style="color:black"/></form><button id="submitlogin">Log in</button>',
          position: 'bottom center',
          openOn: 'click',
          classes: 'drop-target drop-theme-arrows-bounce-dark'
        });

        $("#signin").click(function (){
          return false;
        });
      });
    </script>
  </head>
  <body>
    <!-- /// JUMBOTRON \\\ -->
    <div class="jumbotron cd-intro">
      <div class="container cd-intro-content mask">
        <div class="hr animated fadeIn">
          <img src="1st trophy.png" alt="Maple Leaf logo">
          <hr>
        </div>

        <h1 data-content="People's Choice Awards"><span>People's Choice Awards</span></h1>

        <div class="action-wrapper">
          <p>
            <a href="#projects" class="cd-btn main-action" role="button">View Projects</a>
            <a href="404.html" class="cd-btn" id="signin" target="_blank" role="button"><?php
              // Generate sign in button.
              if(isset($_SESSION[$userParam])){
                $name = $_SESSION[$userParam];
                echo 'Welcome $name! | (Not you?)';
              } else {
                echo 'Sign in';
              }
            ?></a>
          </p>
        </div>
      </div>
    </div>
    <!-- /// END JUMBOTRON \\\ -->
    <section id="projects">
      Projects Area
      <?php
        // TODO: Generate projects table from the database
      ?>
    </section>
  </body>
</html>

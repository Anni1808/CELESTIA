<html <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="front.css">
    </head>
    <body>
        <div class="container">


            <div class="nav">
              <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="registration.php">Register</a></li>
                <!-- <li><button id="demoButton"><a href="login.php"></a>Log out</button></li> -->
              </ul>
            </div>
        
          <div class="section">
            <h1>Celestia</h1>
            <p class="one">Discover the cosmos</p><br>
            <p class="two">Where learning meets the stars</p>
            <img src="http://salehriaz.com/404Page/img/earth.svg"  alt="" class="earth">
            <img src="https://cdn-icons-png.flaticon.com/512/619/619175.png" alt="" class="rocket">
            <img src="http://salehriaz.com/404Page/img/moon.svg" alt="" class="moon">
            <img src="http://salehriaz.com/404Page/img/astronaut.svg"  alt="" class="ast">
          </div>
          
          <section class="wrapper">
            <div id="stars1"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
          </div>
       <script>
        document.getElementById("demoButton").addEventListener("click", function() {
      // Replace 'demo-page.html' with the URL of your demo page
      window.location.href = 'login.php';
    });
       </script>
    </body>
</html>

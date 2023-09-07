<?php
    include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Weatherit</title>
    <link rel="stylesheet" href="weatherit.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
  </head>
  <body>
    <!-- Background -->
    <div class="app-wrap">
      <!-- Current weather -->
      <div class="current">
        <div class="temp">5°</div>
        <div class="city">Varna</div>
        <div class="weather">Clear</div>
      </div>
      <!-- Username -->
      <p class="username">Hey, <?php echo $_SESSION['username']; ?>!</p>
      <!-- Search-box -->
      <header>
        <input
          type="text"
          autocomplete="off"
          class="search-box"
          placeholder="Search for a city..."
          name="city"
        >
      </header>
      <!-- At the moment -->
      <main>
        <div type="time" name="time" class="clock" id="DisplayClock" onload="showTime()"></div>
        <div class="time">Hours Minutes Seconds</div>
        <section class="location">
          <div class="date">Wednesday 
            <p class="day">9 December</p>
            2020
          </div>
        </section>
      </main>
      <!-- Logout -->
      <p class="logout"><a href="logout.php">Logout</a></p>
    </div>
    <!-- Scripts -->
    <script src="weatherit.js"></script>
    <script src="clock.js"></script>
  </body>
</html>

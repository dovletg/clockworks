<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ClockWorks</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;800&display=swap" rel="stylesheet">
  </head>
  <body>

    <h1>Clockworks</h1>

    <section id="controls">
      <div class="inputGroup">
        <label for="minutesInput">Minutes</label>
        <input type="number" placeholder="0" id="minutesInput" max="300" min="0">
      </div>

      <div class="inputGroup">
        <label for="secondsInput">Seconds</label>
        <input type="number" placeholder="0" id="secondsInput" max="59" min="0" step="5">
      </div>

      <button type="button" id="startButton" onclick="startTimer();">Start</button>
      <button type="button" id="stopButton" onclick="stopTimer();" disabled>Stop</button>
      <button type="button" id="pauseButton" onclick="pauseTimer();" disabled>Pause</button>

    </section>

    <h2><span id="minutes">0</span>: <span id="seconds">00</span></h2>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
  </body>
</html>

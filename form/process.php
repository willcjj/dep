<?php
session_start();
//API Url
$url = 'https://drug-education-project-backend.herokuapp.com/questions';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'userId' => $_SESSION['Id'],
    'team' => $_SESSION['Team'],
    'day1a' => $_POST["day1a"],
    'day1b' => $_POST["day1b"],
    'day1c' => $_POST["day1c"],
    'day2a' => $_POST["day2a"],
    'day2b' => $_POST["day2b"],
    'day2c' => $_POST["day2c"],
    'day3a' => $_POST["day3a"],
    'day3b' => $_POST["day3b"],
    'day3c' => $_POST["day3c"],
    'day4a' => $_POST["day4a"],
    'day4b' => $_POST["day4b"],
    'day4c' => $_POST["day4c"],
    'day5a' => $_POST["day5a"],
    'day5b' => $_POST["day5b"],
    'day5c' => $_POST["day5c"],
    'day6a' => $_POST["day6a"],
    'day6b' => $_POST["day6b"],
    'day6c' => $_POST["day6c"],
    'day7a' => $_POST["day7a"],
    'day7b' => $_POST["day7b"],
    'day7c' => $_POST["day7c"],
    'day8a' => $_POST["day8a"],
    'day8b' => $_POST["day8b"],
    'day8c' => $_POST["day8c"],
    'day9a' => $_POST["day9a"],
    'day9b' => $_POST["day9b"],
    'day9c' => $_POST["day9c"],
    'day10a' => $_POST["day10a"],
    'day10b' => $_POST["day10b"],
    'day10c' => $_POST["day10c"],
    'day11a' => $_POST["day11a"],
    'day11b' => $_POST["day11b"],
    'day11c' => $_POST["day11c"],
    'day12a' => $_POST["day12a"],
    'day12b' => $_POST["day12b"],
    'day12c' => $_POST["day12c"],
    'day13a' => $_POST["day13a"],
    'day13b' => $_POST["day13b"],
    'day13c' => $_POST["day13c"],
    'day14a' => $_POST["day14a"],
    'day14b' => $_POST["day14b"],
    'day14c' => $_POST["day14c"],
    'q1' => $_POST["q1"],
    'q2' => $_POST["q2"],
    'q3' => $_POST["q3"],
    'q4' => $_POST["q4"],
    'q5' => $_POST["q5"],
    'q6' => $_POST["q6"],
    'q7' => $_POST["q7"],
    'q8' => $_POST["q8"],
    'q9' => $_POST["q9"],
    'q10' => $_POST['q10']
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

// echo $jsonDataEncoded;

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Customized CSS  -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Drug Education Project</title>
  </head>
  <body>
    <div class="results">
      <h2>Your results summary:</h2>
      <p>For the past two weeks you have consumed alcohol for a total of <strong><?php
      $yescounter = 0;
      foreach((array) $jsonData as $item) {
        if ($item == 'yes') {
          $yescounter += 1;
        }
      }
      echo $yescounter;
      ?></strong> days.</p>
      <p>In the past two weeks, the amount of drinks you had equates to <strong>
        <?php
        $drinkscounter = 0;
        foreach((array) $jsonData as $key => $val) {
          if (substr($key, -1) == 'b') {
            $drinkscounter += $val;
          }
        }
        echo $drinkscounter;
        ?>
      </strong> drinks.</p>
      <p>In the past two weeks, you drank for a total of <strong>
        <?php
        $minutescounter = 0;
        foreach((array) $jsonData as $key => $val) {
          if (substr($key, -1) == 'c') {
            $minutescounter += $val;
          }
        }
        $totalminutes = $minutescounter;
        if ($totalminutes >= 60) {
          $totalhours = (int) ($totalminutes/60);
          $remainder = $totalminutes%60;
          echo $totalhours;
        } else {
          $totalhours = 0;
          echo $totalhours;
        }

        ?>
      </strong> hour(s) and <strong>
        <?php
        if ($totalminutes >= 60) {
          echo $remainder;
        } else {
          echo $totalminutes;
        }
        ?>
      </strong> minutes.</p>
      <p>Here are the symptoms or actions you've reported:
        <ul>
        <strong>
        <?php
        $symptoms = array(
          'q1' => "Hangovers",
          'q2' => "Unrational decisions",
          'q3' => "Loss in judgement of time",
          'q4' => "Drop in quality of work or school work",
          'q5' => "Fatigue",
          'q6' => "Feelings of regret",
          'q7' => "Spontaneous drinking habit",
          'q8' => "Change in physical appearance",
          'q9' => "Saying or doing embarrasing things",
          'q10' => "Nauseous after drinking",
        );

        foreach((array) $jsonData as $key => $val) {
          if ($val == 'Yes') {
            foreach((array) $symptoms as $k => $v) {
              if (substr($k, 0) == $key) {
                echo '<li>' . $v . '</li>';
              }
            }
          }
        }
        ?>
        </strong>
        </ul>
      </p>
      <br />
      <p>You would be spending approximately: <strong>$
        <?php
        echo $drinkscounter*5;
        ?>
      </strong> on drinks.
      </p>
      <p>You would be consuming approximately: <strong>
        <?php
        echo $drinkscounter*104;
        ?>
      </strong> calories in alcohol. Which is equivalent to <strong><?php
        echo (int) (($drinkscounter*104)/151);
        ?>
      </strong> hot dogs, <strong><?php echo (int) (($drinkscounter*104)/150) ?></strong>
      cans of coke, and <strong><?php echo (int) (($drinkscounter*104)/352) ?></strong> slices of
      chocolate cake.
      </p>

      <br />
      <br />
      <h2>Other students:</h2>
      <p>The typical male college student averages 8 drinks per week. The typical male college athlete averages 10 drinks per week.*</p>
      <p>The charts below illustrate how much you drink and how much other students actually drink.
      </p>

      <div id="chart1"></div>

      <p>
        *Note: This information comes from a random sample of approximately 52,000 college students, 9,000 of whom were college athletes.
      </p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
     google.charts.load("current", {packages:['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ["Athletes", "Amount Drank", { role: "style" } ],
         ["You", <?php
                 echo $drinkscounter/2;
                 ?>, "#b87333"],
         ["Average Student Athlete", 10, "silver"]
       ]);

       var view = new google.visualization.DataView(data);
       view.setColumns([0, 1,
                        { calc: "stringify",
                          sourceColumn: 1,
                          type: "string",
                          role: "annotation" },
                        2]);

       var options = {
         title: "Average Amount Drank Each Week",
         width: 600,
         height: 400,
         bar: {groupWidth: "95%"},
         legend: { position: "none" },
       };
       var chart = new google.visualization.ColumnChart(document.getElementById("chart1"));
       chart.draw(view, options);
   }
   </script>
  </body>
</html>

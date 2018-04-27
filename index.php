<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Customized CSS  -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Drug Education Project</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row home">
        <div class="unc-background">
          <img src="images/ramses.jpg" alt="UNC mascot Ramses" />
        </div>
        <div class="description">
          <h1 class="center">Drug Education Program</h1>
          <br />
          <p>
          This short program will ask you questions about how much alcohol you drink and which drugs you use (illegal, prescription, and over-the-counter). When you are finished, you’ll instantly get a response with information specific to what you answered. Your information can help you increase your health and improve your athletic performance.
          </p>
          <br />
          <div>
              <form id="introForm" class="center" method="POST" action="intro.php">

                <div class="input-group">
                  <p>Enter your Unique ID Number: </p>
                  <br />
                  <br />
                  <input type="number" name="userId" >
                </div>

                <br/>

                <div class="input-group">
                  <p>Please choose which team you play for: </p>
                  <br />
                  <br />
                  <p><select name="team">
                    <option value="mbasketball">Men's Basketball</option>
                    <option value="mbaseball">Men's Baseball</option>
                    <option value="mcrosscountry">Men's Cross Country</option>
                    <option value="mfencing">Men's Fencing</option>
                    <option value="mfootball">Men's Football</option>
                    <option value="mgolf">Men's Golf</option>
                    <option value="mlacrosse">Men's Lacrosse</option>
                    <option value="msoccer">Men's Soccer</option>
                    <option value="mswimmingdiving">Men's Swimming and Diving</option>
                    <option value="mtennis">Men's Tennis</option>
                    <option value="mtrackfield">Men's Track and Field</option>
                    <option value="mwrestling">Men's Wrestling</option>
                    <option value="wbasketball">Women's Basketball</option>
                    <option value="wcrosscountry">Women's Cross Country</option>
                    <option value="wfencing">Women's Fencing</option>
                    <option value="wfieldhockey">Women's Field Hockey</option>
                    <option value="wgolf">Women's Golf</option>
                    <option value="wgymnastics">Women's Gymnastics</option>
                    <option value="wlacrosse">Women's Lacrosse</option>
                    <option value="wrowing">Women's Rowing</option>
                    <option value="wsoccer">Women's Soccer</option>
                    <option value="wsoftball">Women's Softball</option>
                    <option value="wswimmingdiving">Women's Swimming and Diving</option>
                    <option value="wtennis">Women's Tennis</option>
                    <option value="wtrackfield">Women's Track and Field</option>
                    <option value="wvolleyball">Women's Volleyball</option>
                  </select></p>
                </div>

                <br/>

                <div class="input-group">
                  <button type="submit" id="btn">Next</button>
                </div>

              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script>
    $(document).ready(function(){
      var id = $('input[name="userId"]').val();
      console.log(id);
      $('#submit').click(function() {
        console.log(hi2);
        if(id == '' || id == null) {
          alert('You must enter your Unique Id to continue');
        }
      });
    });

    </script> -->
  </body>
</html>

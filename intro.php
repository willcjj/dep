<?php
session_start();
//API Url
$url = 'https://drug-education-project-backend.herokuapp.com/';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'userId' => $_POST["userId"],
    'team' => $_POST["team"]
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);

$_SESSION['Id']= $_POST['userId'];
$_SESSION['Team'] = $_POST['team'];
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
        <div class="intro-description col">
            <p>
              The ID you are taking this assessment with is: <h2><?php echo $_SESSION['Id']; ?></h2>
              <br />Keep record of this ID and <strong>DO NOT</strong> lose it.<br>
            </p>
            <br />
            <br />
            <p>The better you complete this program, the more you'll learn about yourself. No coaches, administrators, or teammates will see your results unless you decide to show them. There will be no penalties for anything you submit.</p>
            <p>In fact, UNC Athletics has a policy to ensure you will NOT GET IN TROUBLE for seeking help for substance use, or for your responses in this program.</p>
          <div class="assess">
            <br />
            <a href="form/form.php"><button id="assess-button">Take the Assessment</button></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

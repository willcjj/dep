<?php
session_start();
?>

<!DOCTYPE html>
 <html>
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
            <div class="row main">
              <div class="q1">
              <h2>1. Alcohol Consumption in the Past 2 Weeks</h2>
              <p>For <strong>A</strong>, did you consume alcohol for that day? Please state <span class="highlight">Yes</span> or <span class="highlight">No</span>.</p>
              <p>For <strong>B</strong>, approximately how many drinks did you consume? Please input your amount in <span class="highlight">whole numbers</span>.</p>
              <p>For <strong>C</strong>, for how long did you consume these drinks <strong>(unit: minutes)</strong>? Please input your amount in <span class="highlight">whole numbers</span>.</p>

              <form method="post" action="process.php">
                  <table class="calendar">
                      <tr>
                          <th>Sunday</th>
                          <th>Monday</th>
                          <th>Tuesday</th>
                          <th>Wednesday</th>
                          <th>Thursday</th>
                          <th>Friday</th>
                          <th>Saturday</th>
                      </tr>
                      <tr>
                          <td>
                          A
                          Yes <input type="radio" name="day1a" value="yes"/>
                          No <input type="radio" name="day1a" value="no"/>

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day2a" value="yes" />
                          No <input type="radio" name="day2a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day3a" value="yes" />
                          No <input type="radio" name="day3a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day4a" value="yes" />
                          No <input type="radio" name="day4a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day5a" value="yes" />
                          No <input type="radio" name="day5a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day6a" value="yes" />
                          No <input type="radio" name="day6a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day7a" value="yes" />
                          No <input type="radio" name="day7a" value="no" />

                          </td>
                      </tr>
                      <tr>
                        <td>

                        B <input type="number" name="day1b" value="0" />
                        </td>
                        <td>

                        B <input type="number" name="day2b" value="0" />
                        </td>
                        <td>

                        B <input type="number" name="day3b" value="0" />

                        <td>

                        B <input type="number" name="day4b" value="0" />

                        </td>
                        <td>

                        B <input type="number" name="day5b" value="0" />

                        </td>
                        <td>

                        B <input type="number"name="day6b" value="0" />

                        <td>

                        B <input type="number" name="day7b" value="0" />

                        </td>
                      </tr>
                      <tr>
                          <td>

                          C
                          <input type="number" name="day1c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day2c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day3c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day4c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day5c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day6c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day7c" value="0" />
                          </td>
                      </tr>
                      <tr>
                          <th>Sunday</th>
                          <th>Monday</th>
                          <th>Tuesday</th>
                          <th>Wednesday</th>
                          <th>Thursday</th>
                          <th>Friday</th>
                          <th>Saturday</th>
                      </tr>
                      <tr>
                          <td>
                          A
                          Yes <input type="radio" name="day8a" value="yes"/>
                          No <input type="radio" name="day8a" value="no"/>

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day9a" value="yes" />
                          No <input type="radio" name="day9a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day10a" value="yes" />
                          No <input type="radio" name="day10a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day11a" value="yes" />
                          No <input type="radio" name="day11a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day12a" value="yes" />
                          No <input type="radio" name="day12a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day13a" value="yes" />
                          No <input type="radio" name="day13a" value="no" />

                          </td>
                          <td>
                          A
                          Yes <input type="radio" name="day14a" value="yes" />
                          No <input type="radio" name="day14a" value="no" />

                          </td>
                      </tr>
                      <tr>
                        <td>
                        B <input type="number" name="day8b" value="0" />
                        </td>
                        <td>

                        B
                        <input type="number" name="day9b" value="0" />
                        </td>
                        <td>

                        B
                        <input type="number" name="day10b" value="0" />

                        <td>

                        B
                        <input type="number" name="day11b" value="0" />

                        </td>
                        <td>

                        B
                        <input type="number" name="day12b" value="0" />

                        </td>
                        <td>

                        B
                        <input type="number"name="day13b" value="0" />

                        <td>

                        B
                        <input type="number" name="day14b" value="0" />

                        </td>
                      </tr>
                      <tr>
                          <td>

                          C
                          <input type="number" name="day8c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day9c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day10c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day11c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day12c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day13c" value="0" />
                          </td>
                          <td>

                          C
                          <input type="number" name="day14c" value="0" />
                          </td>
                      </tr>
                  </table>
                  </div>
              <div class="q2">
              <h2>2. Brief Young Adult Alcohol Consequences Questionnaire</h2>
              <p>
              Below is a list of things that sometimes happen to people either during or after they have been drinking alcohol.  Next to each item below, please mark an “X” in either the NO or the YES column to indicate whether that item describes something that has happened to you IN THE PAST YEAR.
              </p>

                  <table class="trueFalse">
                      <tr>
                          <th>In the past year...</th>
                          <th>YES</th>
                          <th>NO</th>
                      </tr>
                      <tr>
                          <td>1. I have had a hangover (headache, sick stomach) the morning after I had been drinking.</td>
                          <td><input type="radio" name="q1" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q1" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>2. I have taken foolish risks when I have been drinking.</td>
                          <td><input type="radio" name="q2" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q2" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>3. I’ve not been able to remember large stretches of time while drinking heavily.</td>
                          <td><input type="radio" name="q3" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q3" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>4. The quality of my work or school work has suffered because of my drinking.</td>
                          <td><input type="radio" name="q4" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q4" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>5. I have had less energy or felt tired because of my drinking.</td>
                          <td><input type="radio" name="q5" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q5" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>6. My drinking has gotten me into sexual situations I later regretted.</td>
                          <td><input type="radio" name="q6" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q6" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>7. I often have ended up drinking on nights when I had planned not to drink.</td>
                          <td><input type="radio" name="q7" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q7" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>8. My physical appearance has been harmed by my drinking.</td>
                          <td><input type="radio" name="q8" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q8" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>9. While drinking, I have said or done embarrassing things.</td>
                          <td><input type="radio" name="q9" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q9" value="No" />&nbsp;</td>
                      </tr>
                      <tr>
                          <td>10. I have felt very sick to my stomach or thrown up after drinking.</td>
                          <td><input type="radio" name="q10" value="Yes" />&nbsp;</td>
                          <td><input type="radio" name="q10" value="No" />&nbsp;</td>
                      </tr>
                  </table>
                  <br>
                  <center><input type="submit" name="submit" value="Submit" /></center>
                  <br />

              </form>
              </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
 </html>

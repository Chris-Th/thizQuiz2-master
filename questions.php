
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="styles/style.css" rel="stylesheet">

    <script src="scripts/script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/a26c0b57c5.js" crossorigin="anonymous"></script>

</head>





<body>

<?php
/*

require "./includes/db.php";

// SQL-Statement formulieren: alle Daten (Tabellenzeile)
        // zur Frage mit der erhaltenen $id auslesen
        $id = 9999;
        $question = fetchQuestionById($id, $dbConnection);
*/
        ?>



<?php 
/*
echo $question["question_text"]; ?>

<form id="quiz-form" action="questions.php" method="post" onsubmit="return navigate('next')">

<?php 
// generiere antw radio buttons mit beschr.

// Single choice: hole den Namen der richtigen Spalte in $correct, aus $question["correct"]
$correct = $question["correct"];

for ($a = 1; $a <= 5; $a++) {
		// Setzte für $answerColumnName den Namen der Tabellenspalte "answer-N" zusammen
        $answerColumnName = "answer-" . $a;

		// falls es überhaupt antworttext in $question[$answerColumnName] gibt
		// und der antworttext nicht gleich '', dann .... 

        


        if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
			// ....hole den antworttext aus $question

          $answerText = $question[$answerColumnName];


			// entscheide für $value, wieviele punkte die antwort ergibt:
			// richtig -> 1 punkt, falsch -> 0 punkt   if () {

                //... hole antworttext
        
		  if ($correct === $answerColumnName) $value = 1;
		  else $value = 0;


			echo "<div class='form-check'>
					<input class='form-check-input' type='radio' name='single-coice' id='$answerColumnName' value'=$value'>
					<label class='form-check-label' for='single-choice-0'>$answerText</label>
					</div>"; 
        }
}
*/
?>




<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</na<div class="container mt-3">
  <h2>Radio buttons</h2>
  <p>The form below contains three radio buttons. The first option is checked by default, and the last option is disabled:</p>
  <form action="/action_page.php">
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
      <label class="form-check-label" for="radio1">Option 1</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
      <label class="form-check-label" for="radio2">Option 2</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" disabled>
      <label class="form-check-label">Option 3</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>

          
 
  <div class="py-2 h5 mb-0"><b>Welches Thema?</b></div> 
    
      <!-- topic dropdown -->
    <div class="dropdown dropend p-1 ">
      <button class="btn btn-warning me-3 pt-0 rounded-pill" type="button" data-bs-toggle="dropdown">
          <p style="line-height: 12px; text-align: center;">⦁</p>
      </button>

      <ul class="dropdown-menu dropdown-menu-end ms-2">
          <li><a class="dropdown-item" href="#">1</a></li>
          <li><a class="dropdown-item" href="#">2</a></li>
      </ul>
    </div>
    
  <div class="py-2 h5 mb-0"><b>Wieviele Fragen?</b></div> 
    
   <!-- topic dropdown -->  
  <div class="dropdown dropend p-1 pt-2">
      <button class="btn btn-warning me-3 pt-0 rounded-pill" type="button" data-bs-toggle="dropdown">
          <p style="line-height: 12px; text-align: center;">⦁</p>
      </button>

  <ul class="dropdown-menu dropdown-menu-end ms-2">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
  </ul>
  </div>  
         
 
   
          
          
</div>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
      <form class="d-flex">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
</nav> 
</body>

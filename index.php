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
<?php /*
  require "./includes/db.php";

  // teste die Verbindung zur Datenbank
  $sqlStatement = $dbConnection->query("SELECT * FROM `questions`");

  // Durch den Array hindurch die Ang zu einem Buch in eine tabellenzeile ausgenben
  echo "<table>";

  while ( $row = $sqlStatement->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr>";
    foreach ($row as $columnName => $value) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }

  echo "</table>";
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
  </nav> 
       

          

 

     
        
  <div class="container mt-sm-5 my-1">
    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h5"><b>Q. which option best describes your job role?</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
            <label class="options">Small Business Owner or Employee
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="options">Nonprofit Owner or Employee
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="options">Journalist or Activist
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="options">Other
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
        </div>
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

        
       
        
        
       

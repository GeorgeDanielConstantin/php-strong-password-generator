<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <title>Password Generator</title>
  </head>
  <body>
    <main>
      <?php 
        $allCharacters[] = ['!','"','#', '$', '%', '&', "'", '(', ')', '*', '+', ',', '-', '.', '/', ':', '<', '>', '='];
        foreach( range('0', '9') as $NumberCharacters) {
          $numbers[] =  $NumberCharacters;
        }
        $allCharacters[] = $numbers;
        foreach( range('a', 'z') as $characters) {
          $lcLetters[] =  $characters;
        }
        $allCharacters[] = $lcLetters;
        foreach( range('a', 'z') as $characters) {
          $ucLetters[] =  strtoupper($characters);
        }
        $allCharacters[] = $ucLetters;

        $password = '';
        $password_length = $_GET['password_length'];
        while (strlen($password) < $password_length) {
            $randArray = $allCharacters[array_rand($allCharacters)];
            $password .= $randArray[array_rand($randArray)];
        }
        ?>
        <div class="container">
        <div class="card col-6 m-auto">
          <div class="card-header">Password Generator</div>
          <div class="card-body">
          <?php echo $password ?>
          </div>
        </div>
      </div>

        </div>
    </main>
  </body>
</html>
        

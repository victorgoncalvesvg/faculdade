<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Finance Plus</title>
  </head>
  <body> <center>
    <h1>Bem vindo ao Finance<b>+Plus<b></h1>

    <br>

  <form method="POST" action="calculo.php">
    <div class="col-sm-7">
      <div class="input-group">
        <span class="input-group-text">Primeiro e Último nome</span>
        <input type="text" aria-label="First name" class="form-control" name="nome">
        <input type="text" aria-label="Last name" class="form-control" name="sobrenome">
        </div>
      </div>
        <br>


    <div class="col-sm-4">
      <div class="input-group mb-3">
      
      <span class="input-group-text">Valor a ser financiado</span>
      <span class="input-group-text">R$</span>
      <input type="text" name="valor" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
      
      </div>
    </div>


    <div class="col-sm-4">
      <div class="input-group mb-3">
      
      <span class="input-group-text">Taxa de juros mensal</span>

      <input type="text" name="taxa" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">

      <span class="input-group-text">%</span>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="input-group mb-3">
      <span class="input-group-text">t</span>
      <span class="input-group-text">Tempo para Pagamento em meses</span>
      <input type="text" name="tempo" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
      </div>
    </div>

        <button type="submit" class="btn btn-success">Calcular</button>

      </form>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </center>

</body>
</html>


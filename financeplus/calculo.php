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
  <body> 
    <center>

<?php 
    
    $nome = $_POST["nome"] ?? ' ';
    $sobrenome = $_POST["sobrenome"] ?? ' ';
    $valor = $_POST["valor"] ?? ' ';
    $taxaI = $_POST["taxa"] ?? ' ';
    $tempo = $_POST["tempo"] ?? ' ';

    $taxa = $taxaI / 100;

      $vF = $valor;

   
    $saldoDevedor = array($tempo);   

    //$vF = $valor* (pow((1 + $taxa),$tempo )); 

     $totalJuros = 0;

     for($i = 0; $i < $tempo; ++$i) {
           

        $jurosMomento = ($vF * $taxa);

        $vF = $vF + $jurosMomento;

        $saldoDevedor[$i] = $jurosMomento;

        $saldo[$i] = $vF;

        $totalJuros += $jurosMomento; 

        $valorFinal = number_format($vF, 2 , ',' , '.');

     }

     echo "<center> <h1> <br> Sr(a) $nome $sobrenome , o valor final é  R$ $valorFinal </h1> </center>";
     
    // for($i = 0; $i < $tempo; ++$i) {

    //         echo "Juro em cada mês R$ $saldoDevedor[$i] <br> ";

    // }
    
    //  echo "<h4> Total acumulado de Juros:  $totalJuros <br> </h4>";
?>

<table class="table table-striped table-hover" style="width: 80%;">
    <tr>
      <th>
        Tempo (m)
      </th>
      <th>
        Taxa (%)
      </th>
      <th>
        Valor acumulado <br> em Juros (R$)
      </th>
      <th>
        Saldo (R$)
      </th>
    </tr>

    <tr>
      <td>
        <?php for($j = 1; $j <= $tempo; ++$j) {
            echo "$j <br> ";
          }
        ?>
      </td>
      <td>
        <?php for($i = 0; $i < $tempo; ++$i) {
           echo "$taxaI <br>"; 
        } 
        ?>
      </td>
      <td>
       <?php for($i = 0; $i < $tempo; ++$i) {
         $valor = $saldoDevedor[$i];
         $valor = number_format($valor, 2 , ',' , '.');
        echo "$valor <br>";
        }
      ?>
      </td>
      <td>
        <?php for($i = 0; $i < $tempo; ++$i) {
            $saldoF = $saldo[$i];
            $saldoF = number_format($saldoF, 2 , ',' , '.');
              echo "$saldoF <br>";
              }
     ?>
      </td>
    </tr>
    <tr>
      <td colspan=2>
        <b> Total final de juros <b>
      </td>
      <td>
        <?php 

          $totalJuros = number_format($totalJuros, 2 , ',' , '.');

          echo "$totalJuros";
        
        ?>
      </td>
      <td>
        
      </td>
    </tr>
  </table> <br>

  <button type="button"  onclick="location.href='index.php'" class="btn btn-success" > Voltar </button>
  </body>
</html>

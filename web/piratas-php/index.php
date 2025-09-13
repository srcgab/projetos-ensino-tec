<?php
$db=mysqli_connect("localhost","root","123456","banco-dos-piratas");
$db->set_charset("utf-8");
      if(!$db){
        $descricaoErro="Erro:não php,mostrando erro :p";
        $descricaoErro=$descricao."Detalhes:".mysqli_connect_error();

      }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Controle de Estoque dos Tesouros</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="calice.ico">
  </head>
  <body>
    <h1>Gerenciador de Tesouros <?php echo"caete"?></h1>
<?php
      $sql="SELECT *FROM tesouros";
      $result=$db->query($sql);
?>
    <table>
      <caption>Estes são os tesouros acumulados do Barba-Ruiva em suas aventuras</caption>
      <thead>
        <tr>
          <th>Tesouro</th>
          <th>Nome</th>
          <th>Valor unitário</th>
          <th>Quantidade</th>
          <th>Valor total</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($result as $tesouroAtual) {
          ?>
        <tr>
          <td><img src="<?php echo $tesouroAtual["valorUnitario"]?>"></td>
          <td><?php echo $tesouroAtual["nome"]?>?></td>
          <td> <?php echo$tesouroAtual["valorUnitario"]?></td>
          <td><?php echo$tesouroAtual["quantidade"]?></td>
          <td><?php echo $tesouroAtual["valorUnitario"]*$tesouroAtual["quantidade"]?></td>
        </tr>

<?php
}
?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4">Total geral</td>
          <td>15.000</td>
        </tr>
      </tfoot>
    </table>
    <p>Yarr Harr, marujo! Aqui é o temido Barba-Ruiva e você deve me ajudar
      a contabilizar os espólios das minhas aventuras!</p>
  </body>
</html>

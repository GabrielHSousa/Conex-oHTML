<?php
    namespace Projeto\HTMLPHP\HTML;

    require_once("../PHP/Conexao.php");
    require_once("../PHP/Atualizar.php");

    use Projeto\HTMLPHP\PHP\Conexao;
    use Projeto\HTMLPHP\PHP\Atualizar;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="URF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form method='POST'>
        <label>Codigo: </label>
        <input type="number" name="tCodigo" require/><br><br>

        <label>Campo: </label>
        <input type="text" name="tCampo"require/><br><br>

        <label>Novo Dado: </label>
        <input type="text" name="tNovoDado"require/><br><br>

        <button>Atualizar</button>

    <?php
        
         if($_POST['tCampo'] != "" && $_POST['tNovoDado'] != "" && $_POST['tCodigo'] != 0){
            $conexao = new Conexao();
            $atu = new Atualizar();
            echo $atu->update($conexao ,$_POST['tCampo'],$_POST['tNovoDado'],$_POST['tCodigo'],"pessoa");
            return;
         }
         echo "Impossivel Atualizar, preencha os campos!";
    ?>
    </form>
    <a href="ConsultarTudo.php"><button>Consultar</button></a>
    <a href="CadastrarPessoa.php"><button>Inserir</button></a>
    <a href="Deletar.php"><button>Excluir</button></a>
</body>
</html>
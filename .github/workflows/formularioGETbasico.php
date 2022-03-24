<!DOCTYPE html>
<head>
    <title>
        Formulário
    </title>
</head>
<body>
    <h1>
        Formulário de cadastro de Pessoal
    </h1>
    <form method="get" action="formulariocadastro.php">
        <label for="nome">Nome <br></label>
        <input type="text" name="nome" id="nome" />
        <br><br>
        <label for="nascimento">Nascimento <br></label>
        <input type="date" name="nascimento" id="nascimento" />
        <br><br>
        <input type="submit" value="Cadastrar" />
        <hr>
    </form>

<?php 
    if (isset($_GET["nome"])) {

        $nome = $_GET["nome"];
        $nascimento = $_GET["nascimento"];
    
    class Cadastro {
        private $nome;
        private $nascimento;

        public function __construct($nome, $nascimento)
        {

            $this->nome = $nome;
            $this->nascimento = $nascimento;
        }

        public function __toString()
        {
            return "Seu nome é ".$this->nome." e você nasceu em ".$this->nascimento."." ;
        }

    }

    $meuCadastro = new Cadastro($_GET["nome"], $_GET["nascimento"]) ;
    echo $meuCadastro ;


    }




?>



</body>




</html>

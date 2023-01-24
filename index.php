<html>

<head>
    <title>Exemplo PHP</title>
</head>

<body>

    <?php
    ini_set("display_errors", 1);
    header('Content-Type: text/html; charset=iso-8859-1');

    echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

    //Variáveis de conexão
    $servername = "54.234.153.24";
    $username = "root";
    $password = "Senha123";
    $database = "meubanco";

    // Conexão
    $link = new mysqli($servername, $username, $password, $database);

    //Verifica conexão
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    //Variáveis para gerar valores pseudo aleatórios para povoar o DB
    $valor_rand_geral = strtoupper(substr(bin2hex(random_bytes(4)), 1));
    $valor_rand_numero =  rand(1, 999);
    $host_name = gethostname();

    //
    $query = "INSERT INTO clientes (nome_cliente, sobrenome_cliente, endereco_cliente, cidade_cliente, estado_cliente, cep_cliente, Host) VALUES ('$valor_rand_geral' , '$valor_rand_geral', '$valor_rand_geral', '$valor_rand_geral', '$valor_rand_geral', '$valor_rand_numero', '$host_name')";


    if ($link->query($query) === TRUE) {
        echo "Novo cliente cadastrado no sistema.";
    } else {
        echo "Error: " . $link->error;
    }

    ?>
</body>

</html>
<?php
$connectionString = "host=localhost
                        port=5432
                        dbname=cleberBase
                        user=postgres
                        password=1234";

$connection = pg_connect($connectionString);

// if (!$connection) {
//     die("Erro na conexão com o banco de dados");
// } else {
//     echo "Sucesso na conexão com o banco de dados";
// }

// $result = pg_query($connection, "SELECT COUNT(*) QTDTABS FROM pg_tables");

// if ($result) {
//     $row = pg_fetch_assoc($result);
//     echo "<br>Quantidade de tabelas: " . $row['qtdtabs'];
// } else {
//     echo "Erro na consulta";
// }

// $insertResult = pg_query($connection, "INSERT INTO TBPESSOA (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO) 
//                                             VALUES ('Cleber', 'Nardelli', 'cleber@example.com', 'senha123', 'São Paulo', 'SP')");

// if ($insertResult) {
//     echo "<br>Usuário inserido com sucesso";
// } else {
//     echo "<br>Erro ao inserir usuário";
// }

?>

<?php

include "connection.php";

    $query = "INSERT INTO TBPESSOA (pescodigo, pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado) 
            VALUES (DEFAULT, '" . $_POST['nome'] . "',
                             '" . $_POST['sobrenome'] . "',
                             '" . $_POST['email'] . "', 
                             '" . $_POST['password'] . "', 
                             '" . $_POST['cidade'] . "', 
                             '" . $_POST['estado'] . "')";

    $insert = pg_query($connection, $query);

   if ($insert) {
       echo "Cadastro realizado com sucesso!";
   } else {
       echo "Erro ao realizar cadastro.";
   }

   echo '<br><a href="index.php">Voltar</a>';

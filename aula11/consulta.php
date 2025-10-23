
<fieldset>
    <legend>Consulta</legend>
    
    <!-- <form action="" method="get">
        <label for="filtro">Filtro:</label>
        <select name="dado" id="dado">
            <option value="pescodigo">Codigo</option> 
            <option value="pesnome">Nome</option>
            <option value="pessobrenome">Sobrenome</option>
            <option value="pesemail">Email</option>
            <option value="pespassword">Senha</option>
            <option value="pescidade">Cidade</option>
            <option value="pesestado">Estado</option>
        </select>
        <input type="text" id="filtro" name="filtro" value="< ?=$_GET['filtro']?>">
        <button type="submit">Consultar</button>
    </form> -->

    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Cidade</th>
            <th>Estado</th>
        </tr>
        
        <?php

            $filtro = '';
            if ($_GET['dado'] && $_GET['filtro']) {
                $filtro = " WHERE " . $_GET['dado'] . " ILIKE '%" . $_GET['filtro'] . "%'";
            }

            $query = "SELECT *
                        FROM TBPESSOA" . $filtro;

            $select = pg_query($connection, $query);
            
            $codigo = pg_fetch_all($select);
            
            if (count($codigo)) {
                foreach ($codigo as $escreve) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($escreve['pescodigo']) . "</td>";
                    echo "<td>" . htmlspecialchars($escreve['pesnome']) . "</td>";
                    echo "<td>" . htmlspecialchars($escreve['pessobrenome']) . "</td>";
                    echo "<td>" . htmlspecialchars($escreve['pesemail']) . "</td>";
                    echo "<td>" . htmlspecialchars($escreve['pespassword']) . "</td>";
                    echo "<td>" . htmlspecialchars($escreve['pescidade']) . "</td>";
                    echo "<td>" . htmlspecialchars($escreve['pesestado']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum registro encontrado.</td></tr>";
            }

        ?>
</fieldset>
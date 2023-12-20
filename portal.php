

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="portal.css">
</head>
<body>
    <header>
        <h1 id="nome"> Portal </h1>
        <nav>
            <ul>
            <div class="navigation_header" id="navigation_header">
             <a href="">Editar Usuário</a>
             <br>
             <a href="criar_recado.php">Adicionar Recado</a>   
            </div>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <h2 id="oi">Bem vindo(a) ao portal do Usuário</h2>
    <br>
    <h1>Lista de Recados</h1>
    <table>
		<tr>
			<th>ID</th>
			<th>Recado</th>
			<th>Data</th>
		</tr>
        <?php
        include("config.php");
         $sql = "select * from tbtask";
         $result = $conn->query($sql);
      
		while ($row = mysqli_fetch_assoc($row)) {
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['tarefa'] . "</td>";
			echo "<td>" . $row['data'] . "</td>";
			echo "<td><a href='editar_tarefa.php?id=' . $row[id] .>Editar</a> | <a href='excluir_tarefa.php ?id=" . $row['id'] . ">Excluir</a></td>";
			echo "</tr>";
		}
		?>
	</table>
<br>
<br>
<br>
<a href="logout.php">Sair</a>
</body>
</html>
<?php	
	$pdo = Database::connect(); 
	$sql = 'SELECT * FROM address ORDER BY id DESC LIMIT 10'; 
	foreach ($pdo->query($sql) as $row) { 
		echo '<tr>';
		echo '<td>'. $row['estado'] . '</td>';
		echo '<td>'. $row['cidade'] . '</td>';
		echo '<td>'. $row['bairro'] . '</td>';
		echo '<td>'. $row['logradouro'] . '</td>';
		echo '<td>'. $row['complemento'] . '</td>';
		echo '<td>'. $row['cep'] . '</td>';
		echo '<td>'. $row['dataBusca']. '</td>';
		echo '</td>';
		echo '</tr>';                
	}	
	
	Database::disconnect(); 
?>
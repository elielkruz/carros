<h1>Listar Modelo</h1>
<?php
	$sql = "SELECT * FROM modelo AS mo
			INNER JOIN marca AS ma
			ON mo.marca_id_marca = ma.id_marca";

	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Marca</th>";
		print "<th>Modelo</th>";
		print "<th>Cor</th>";
		print "<th>Ano</th>";
		print "<th>Placa</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_modelo."</td>";
			print "<td>".$row->nome_marca."</td>";
			print "<td>".$row->nome_modelo."</td>";
			print "<td>".$row->cor_modelo."</td>";
			print "<td>".$row->ano_modelo."</td>";
			print "<td>".$row->placa_modelo."</td>";
			print "<td>
					  <button onclick=\"location.href='?page=modelo-editar&id_modelo=".$row->id_modelo."';\" class='btn btn-primary'>Editar</button>

					  <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=modelo-salvar&acao=excluir&id_modelo=".$row->id_modelo."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
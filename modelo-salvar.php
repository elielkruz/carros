<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO modelo (
						marca_id_marca,
						nome_modelo,
						cor_modelo,
						ano_modelo,
						placa_modelo
					)VALUES(
						".$_POST["marca_id_marca"].",
						'".$_POST["nome_modelo"]."',
						'".$_POST["cor_modelo"]."',
						'".$_POST["ano_modelo"]."',
						'".$_POST["placa_modelo"]."'
					)";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=modelo-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=modelo-listar';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE modelo SET
						marca_id_marca=".$_POST['marca_id_marca'].",
						nome_modelo='".$_POST['nome_modelo']."',
						cor_modelo='".$_POST['cor_modelo']."',
						ano_modelo='".$_POST['ano_modelo']."',
						placa_modelo='".$_POST['placa_modelo']."'
					WHERE
						id_modelo=".$_POST['id_modelo'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=modelo-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=modelo-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM modelo WHERE id_modelo=".$_REQUEST['id_modelo'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=modelo-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=modelo-listar';</script>";
			}
			break;
	}
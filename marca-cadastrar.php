<h1>Cadastrar Marca</h1>
<form action="?page=marca-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome da Marca</label>
		<input type="text" name="nome_marca" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>
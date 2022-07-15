<?php include __DIR__ . '/../inicio-html.php'; ?>

    <form action="/salvar-usuario<?= isset($id) ? '?id='.$id : ''; ?>" method="post" >
        
		<div class="form-group">
            <label for="login">Login</label>
            <input type="text" 
                id="login" 
                name="login" 
                class="form-control"
				required="required"
                value="<?= isset($login) ? $login : ''; ?>"
            >
        </div> 

		<div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" 
                id="senha" 
                name="senha" 
                class="form-control"
				<?= (!isset($id) ?  'required="required"' : ''); ?>
                value=""
            >
        </div> 

		<div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" 
                id="nome" 
                name="nome" 
                class="form-control"
				required="required"
                value="<?= isset($nome) ? $nome: ''; ?>"
            >
        </div> 

		<div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" 
                id="email" 
                name="email" 
                class="form-control"
				required="required"
                value="<?= isset($email) ? $email : '' ; ?>"
            >
        </div> 

		<div class="form-group">
            <label for="observacao">Observação</label>
            <input type="text" 
                id="observacao" 
                name="observacao" 
                class="form-control"
                value="<?= isset($observacao) ? $observacao : ''; ?>"
            >
        </div> 

		<div class="form-group">
            <label for="administrador">Administrador</label>
            <select class="form-control" id="administrador" name="administrador" required="required" >
				<option></option>
				<option <?= ((isset($administrador) and $administrador=='S') ? 'selected': '') ; ?> value='S' >Sim</option>
				<option <?= ((isset($administrador) and $administrador=='N') ? 'selected': '') ; ?> value='N' >Não</option>
			</select>
        </div> 

		<?php if (isset($id)) : ?>
		<div class="form-group">
            <label for="ativo">Ativo</label>
            <select class="form-control" id="ativo" name="ativo" required="required" >
				<option></option>
				<option <?= ((isset($ativo) and $ativo=='S') ? 'selected': '') ; ?> value='S' >Sim</option>
				<option <?= ((isset($ativo) and $ativo=='N') ? 'selected': '') ; ?> value='N' >Não</option>
			</select>
        </div> 
		<?php endif; ?>

        <button class="btn btn-primary">Salvar</button>
        <a href="/usuarios" class="btn btn-secondary">
            Voltar
        </a>
    </form>

<?php include __DIR__ . '/../fim-html.php'; ?>
<h1>Cadastro de Fornecedores</h1>
    <hr>

    <form 
    action="<?php echo isset($fornecedor) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

       <label for="nome">Nome</label><br>
       <input type="text" name="nome" id="nome" value="<?php echo $fornecedor['nome'] ?? ""; ?>"><br>

       <label for="cnpj">CNPJ</label><br>
       <textarea  name="cnpj" id="cnpj"><?php echo $fornecedor['cnpj'] ?? ""; ?></textarea><br>

       <label for="email">Email</label><br>
       <input type="text" name="name"  value="<?php echo $produto['email'] ?? ""; ?>"><br>

       <label for="telefone">Telefone</label><br>
       <input type="text" name="telefone" id="telefone"><br>

       <br>
       <button type="submit">Cadastrar</button>

    </form>
    
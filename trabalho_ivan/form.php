
    <h1>Cadastro Tarefas</h1>
    <hr>
    <form action="<?php  echo isset($fornecedor) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post" 
    
    enctype="multipart/form-data">

    <label for="nome">nome</label><br>
    <input type="text" name="nome" id="nome" value="<?php echo $fornecedor['nome'] ?? ""; ?>"><br>
   
    <input type="hidden" name="id" id="id" value="<?php echo $fornecedor['idfornecedores'] ?? ""; ?>"><br>

    <label for="cnpj">cnpj</label><br>
    <textarea name= "cnpj" id="cnpj"><?php echo $fornecedor['cnpj'] ?? ""; ?></textarea><br>

    <label for="email">email</label><br>
    <input type="text"  name="email" id="email" value="<?php echo $fornecedor['email'] ?? ""; ?>"><br>

    <label for="telefone">telefone</label><br>
    <input type="text"  name="telefone" id="telefone" value="<?php echo $fornecedor['telefone'] ?? ""; ?>"><br><br>

    <button type="submit">Cadastrar</button>

    </form>
    
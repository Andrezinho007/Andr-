 <?php require_once "consultar_todos.php"; ?>
<?php require_once "../conexao.php"; ?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  </head>
  <body>

  <div class="container">
        <h1>Fornecedor</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Cadastrar Fornecedor
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                
            </tr>
        </thead>
        <tbody>

        <?php foreach($fornecedores as $fornecedor){ ?>
            <tr>
                <th scope="row"><?php echo $fornecedor['nome']; ?></th>
                
                <td><?php echo $fornecedor['cnpj']; ?></td>
                
                <td><?php echo $fornecedor['email']; ?></td>
               
                <td><?php echo $fornecedor['telefone']; ?></td>
            
              
              </td>
                <td>
                  <a href="excluir.php?idfornecedores=<?php echo $fornecedor['idfornecedores']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?idfornecedores=<?php echo $fornecedor['idfornecedores']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>
    
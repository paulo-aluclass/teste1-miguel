<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste - Miguel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="container">

  <div class="row">
    <div class="col-12 mt-4 mb-4 text-end">
      <div class="btn-group">
        <a href="index.php" class="btn btn-primary" aria-current="page">Inserir cliente</a>
        <a href="list.php" class="btn btn-primary active">Listar clientes</a>
      </div>
    </div>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid">
        <h1 class="display-5 fw-bold">Teste Miguel</h1>
        <p class="col-md-8 fs-4">Listar clientes.</p>
      </div>
    </div>

    <div class="col-12">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#</td>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td><a href="update.php" class="btn btn-sm btn-info">Alterar</a></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>
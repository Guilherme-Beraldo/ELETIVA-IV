<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alterar Escola</title>
  </head>
  <body>
    <main class="container">
        <h3>Alterar Escola</h3>
        <form action="/escola/editar" method="post">
            <input type="hidden" name="id" value="<?= $resultado["id"] ?>">
            <div class="row">
                <div class="col-6">
                    <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" class="form-control" value="<?= $resultado['nome'] ?>">
                        <label for="tipo" class="form-label">TIPO:</label>
                        <select name="tipo" class="form-control">
                            <option value="estadual" <?= ($resultado['tipo'] == 'estadual') ? 'selected' : '' ?>>Estadual</option>
                            <option value="municipal" <?= ($resultado['tipo'] == 'municipal') ? 'selected' : '' ?>>Municipal</option>
                            <option value="regional" <?= ($resultado['tipo'] == 'regional') ? 'selected' : '' ?>>Regional</option>
                        </select>

                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" name="endereco" class="form-control" value="<?= $resultado['endereco'] ?>">

                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpj" class="form-control" value="<?= $resultado['cnpj'] ?>"> <br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
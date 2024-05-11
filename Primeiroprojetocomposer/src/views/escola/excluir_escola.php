<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Excluir Escola</title>
  </head>
  <body>
    <main class="container">
        <h3>Excluir Escola</h3>
        <form action="/escola/deletar" method="post">
            <input type="hidden" name="id" value="<?= $resultado["id"] ?>">
            <div class="row">
                <div class="col-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" disabled value="<?= $resultado['nome']?>">
                </div>
                <div class="col-3">
                <label for="tipo" class="form-label">TIPO:</label>
                    <select name="tipo" class="form-control" disabled value="<?= $resultado['tipo']?>">
                        <option value="estadual">Estadual</option>
                        <option value="municipal">Municipal</option>
                        <option value="regional">Regional</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" name="endereco" class="form-control" disabled value="<?= $resultado['endereco']?>">
                </div>
                <div class="col-3">
                    <label for="cnpj" class="form-label">CNPJ:</label>
                    <input type="text" name="cnpj" class="form-control" disabled value="<?= $resultado['cnpj']?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p> VOCÊ DESEJA REALMENTE EXLUIR ESTE REGISTRO? </p>
                    <button type="submit" class="btn btn-danger">
                        Excluir
                    </button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<?php

require __DIR__."/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

#use Php\Primeiroprojeto\Router
$r = new Php\Primeiroprojeto\Router($metodo, $caminho);

#ROTAS

$r->get('/olamundo', 'Php\Primeiroprojeto\Controllers\HomeController@olaMundo');

$r->get('/olapessoa/{nome}', function($params){ 
    return 'Olá'.$params[1]; 
} );

$r->get('/exer1/formulario', 'Php\Primeiroprojeto\Controllers\HomeController@formExer1');

$r->post('/exer1/resposta', function(){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    return "A soma é: {$soma}";
});

$r->get('/exer4/formulario', function(){
    require_once('exer4.html');
});

$r->post('/exer4/resposta', function(){
    $valor = $_POST['valor1'];
    $resposta = "";
    for ($i=1; $i<=10; $i++){
        $resultado = $valor * $i;
        $resposta .= "$valor x $i = $resultado<br/>";
    }
    return $resposta;
});

//chamando o formulario para inserir categoria
$r->get('/categoria/inserir', 'Php\Primeiroprojeto\Controllers\CategoriaController@inserir');

//rota para salvar 
$r->post('/categoria/novo', 'Php\Primeiroprojeto\Controllers\CategoriaController@novo');

//rota para o INDEX de categoria
$r->get('/categoria/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\CategoriaController@index');

$r->get('/categoria', 'Php\Primeiroprojeto\Controllers\CategoriaController@index');

$r->get('/categoria/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\CategoriaController@alterar');

$r->get('/categoria/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\CategoriaController@excluir');

$r->post('/categoria/editar', 'Php\Primeiroprojeto\Controllers\CategoriaController@editar');

$r->post('/categoria/deletar', 'Php\Primeiroprojeto\Controllers\CategoriaController@deletar');

//rota para salvar 
$r->post('/pessoa/novo', 'Php\Primeiroprojeto\Controllers\PessoaController@novo');

//chamando o formulario para inserir pessoa
$r->get('/pessoa/inserir', 'Php\Primeiroprojeto\Controllers\PessoaController@inserir');

//rota para salvar 
$r->post('/veiculo/novo', 'Php\Primeiroprojeto\Controllers\VeiculoController@novo');

//chamando o formulario para inserir veiculo
$r->get('/veiculo/inserir', 'Php\Primeiroprojeto\Controllers\VeiculoController@inserir');

//rota para salvar 
$r->post('/produto/novo', 'Php\Primeiroprojeto\Controllers\ProdutosController@novo');

//chamando o formulario para inserir produto
$r->get('/produto/inserir', 'Php\Primeiroprojeto\Controllers\ProdutosController@inserir');

//rota para salvar 
$r->post('/escola/novo', 'Php\Primeiroprojeto\Controllers\EscolaController@novo');

//chamando o formulario para inserir escola
$r->get('/escola/inserir', 'Php\Primeiroprojeto\Controllers\EscolaController@inserir');

//rota para o INDEX de escolas
$r->get('/escola/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\EscolaController@index');

$r->get('/escola', 'Php\Primeiroprojeto\Controllers\EscolaController@index');

$r->get('/escola/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\EscolaController@alterar');

$r->get('/escola/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\EscolaController@excluir');

$r->post('/escola/editar', 'Php\Primeiroprojeto\Controllers\EscolaController@editar');

$r->post('/escola/deletar', 'Php\Primeiroprojeto\Controllers\EscolaController@deletar');

//rota para o INDEX de produtos
$r->get('/produtos/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\ProdutosController@index');

$r->get('/produtos', 'Php\Primeiroprojeto\Controllers\ProdutosController@index');

$r->get('/produtos/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\ProdutosController@alterar');

$r->get('/produtos/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\ProdutosController@excluir');

$r->post('/produtos/editar', 'Php\Primeiroprojeto\Controllers\ProdutosController@editar');

$r->post('/produtos/deletar', 'Php\Primeiroprojeto\Controllers\ProdutosController@deletar');

//rota para o INDEX de pessoas
$r->get('/pessoa/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\PessoaController@index');

$r->get('/pessoa', 'Php\Primeiroprojeto\Controllers\PessoaController@index');

$r->get('/pessoa/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\PessoaController@alterar');

$r->get('/pessoa/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\PessoaController@excluir');

$r->post('/pessoa/editar', 'Php\Primeiroprojeto\Controllers\PessoaController@editar');

$r->post('/pessoa/deletar', 'Php\Primeiroprojeto\Controllers\PessoaController@deletar');

//rota para o INDEX de veiculos
$r->get('/veiculos/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\VeiculoController@index');

$r->get('/veiculos', 'Php\Primeiroprojeto\Controllers\VeiculoController@index');

$r->get('/veiculos/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\VeiculoController@alterar');

$r->get('/veiculos/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\VeiculoController@excluir');

$r->post('/veiculos/editar', 'Php\Primeiroprojeto\Controllers\VeiculoController@editar');

$r->post('/veiculos/deletar', 'Php\Primeiroprojeto\Controllers\VeiculoController@deletar');





#ROTAS

$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure) {
    echo $resultado($r->getParams());
} elseif (is_string($resultado)){
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($r->getParams());
}


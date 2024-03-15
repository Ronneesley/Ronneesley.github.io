<?php
// setup the autoloading
require_once './vendor/autoload.php';

// setup Propel
require_once './generated-conf/config.php';

use modelo\Livros;

$livro = new Livros();
$livro->setId(1);
$livro->setNome('Harry Pother');
$livro->setDescricao('O Harry não é muito forte!');
$livro->save();

echo "Salvo com sucesso!";

?>

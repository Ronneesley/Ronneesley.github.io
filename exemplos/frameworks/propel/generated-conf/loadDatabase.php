<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->initDatabaseMapFromDumps(array (
  'default' => 
  array (
    'tablesByName' => 
    array (
      'livros' => '\\modelo\\Map\\LivrosTableMap',
    ),
    'tablesByPhpName' => 
    array (
      '\\Livros' => '\\modelo\\Map\\LivrosTableMap',
    ),
  ),
));

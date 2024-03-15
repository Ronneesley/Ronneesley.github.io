{* Smarty *}
Olá {$name}!

<ul>
    {foreach $pessoas as $p}
        <li>{$p->nome} é de {$p->cidade->nome}</li>
    {/foreach}
</ul>

Confuso!
<ul>
    {foreach $lista2 as $p}
        <li>{$p.nome}</li>
    {/foreach}
</ul>


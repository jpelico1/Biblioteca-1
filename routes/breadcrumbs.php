<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Inicio
Breadcrumbs::for('inicio', function ($trail) {
    $trail->push('Inicio', route('inicio'));
});

// Inicio > Generos
Breadcrumbs::for('menu', function ($trail) {
    $trail->parent('inicio');
    $trail->push('Menu', route('menu'));
});

Breadcrumbs::for('crear_menu', function ($trail) {
    $trail->parent('menu');
    $trail->push('Crear Menú', route('crear_menu'));
});

Breadcrumbs::for('editar_menu', function ($trail,$data) {
    $trail->parent('menu');
    $trail->push('Editar: '.$data->nombre, route('editar_menu',$data->id));
});

?>
<?php

return [
    'create'        => [
        'success'   => 'Relación de :name añadida.',
        'title'     => 'Crear Relación',
    ],
    'destroy'       => [
        'success'   => 'Relación de :name eliminada.',
    ],
    'fields'        => [
        'attitude'  => 'Actitud',
        'is_star'   => 'Fijada',
        'relation'  => 'Relación',
        'target'    => 'Objetivo',
        'two_way'   => 'Reflejar relación creada',
    ],
    'helper'        => 'Crea relaciones entre entidades y configura su actitud y visibilidad. Las relaciones también se pueden fijar al menú de la entidad.',
    'hints'         => [
        'attitude'  => 'Este campo opcional puede usarse para definir el orden en el que las relaciones aparecen por defecto de forma descendiente.',
        'mirrored'  => [
            'text'  => 'Esta relación está reflejada en :link.',
            'title' => 'Reflejada',
        ],
        'two_way'   => 'Al reflejar una relación, ésta se copiará en el objetivo seleccionado. Sin embargo, si editas una, la otra no se verá afectada.',
    ],
    'placeholders'  => [
        'attitude'  => 'Desde -100 hasta 100, siendo 100 muy positiva.',
        'relation'  => 'Naturaleza de la relación',
        'target'    => 'Elige una entidad',
    ],
    'show'          => [
        'title' => 'Relaciones de :name',
    ],
    'update'        => [
        'success'   => 'Relación de :name actualizada.',
        'title'     => 'Actualizar relaciones',
    ],
];

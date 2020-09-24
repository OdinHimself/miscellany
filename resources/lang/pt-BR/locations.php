<?php

return [
    'characters'    => [
        'description'   => 'Personagens presentes no local',
        'title'         => 'Personagens em :name',
    ],
    'create'        => [
        'description'   => 'Criar um novo local',
        'success'       => 'Local \':name\' criado.',
        'title'         => 'Criar um novo local',
    ],
    'destroy'       => [
        'success'   => 'Local \':name\' removido',
    ],
    'edit'          => [
        'success'   => 'Local \':name\' atualizado.',
        'title'     => 'Editar Local :name',
    ],
    'events'        => [
        'description'   => 'Eventos que ocorreram no local',
        'title'         => 'Eventos em :name',
    ],
    'families'      => [
        'title' => 'Famílias de :name',
    ],
    'fields'        => [
        'characters'        => 'Personagens',
        'image'             => 'Imagem',
        'is_map_private'    => 'Mapa privado',
        'location'          => 'Local',
        'locations'         => 'Locais',
        'map'               => 'Mapa',
        'name'              => 'Nome',
        'relation'          => 'Relação',
        'type'              => 'Tipo',
    ],
    'helpers'       => [
        'characters'        => 'Ver todos personagens nesta localização e locais relacionados a ela, ou apenas aqueles localizados  diretamente nela.',
        'descendants'       => 'Esta lista contém todos locais que estão relacionados a esta localização, e não apenas os diretamente relacionados a ela.',
        'families'          => 'Locais podem ser a sede de famílias poderosas.',
        'map'               => 'Adicionar um mapa a um local permitirá colocar "pontos" no mapa, vinculando-os a outras entidades na campanha.',
        'map_deprecated_2'  => 'Os mapas agora são seu próprio módulo! Os mapas antigos ainda podem ser atualizados, mas todos os novos mapas vão para o novo módulo Mapas.',
        'nested'            => 'Quando em Visualização aninhada, você pode visualizar seus locais de maneira aninhada. Locais que não são relacionados a uma localização principal serão mostrados por padrão. Locais que contém locais relacionados podem ser clicados para ver esses locais secundários. Você pode continuar clicando até que não haja mais locais secundários para ver.',
        'organisations'     => 'Ver todas Organizações nesta localização e locais relacionados a ela, ou apenas aquelas localizadas  diretamente nela.',
    ],
    'hints'         => [
        'is_map_private'    => 'Um mapa Privado é visível apenas para membros com o cargo de "Admnistrador".',
    ],
    'index'         => [
        'actions'       => [
            'explore_view'  => 'Visualização de Exploração',
        ],
        'add'           => 'Novo Local',
        'description'   => 'Gerencie os locais de :name.',
        'header'        => 'Locais em :name',
        'title'         => 'Locais',
    ],
    'items'         => [
        'description'   => 'Itens que estão na localização, ou que vem dela.',
        'title'         => 'Itens do local :name',
    ],
    'journals'      => [
        'description'   => 'Jornais que foram escritos neste local.',
        'title'         => 'Jornais do local :name',
    ],
    'locations'     => [
        'description'   => 'Lugares que fazem parte da localização atual',
        'title'         => 'Lugares localizados em :name',
    ],
    'map'           => [
        'actions'   => [
            'admin_mode'        => 'Habilitar modo de edição',
            'big'               => 'Vista completa',
            'confirm_delete'    => 'Você tem certeza que quer deletar este ponto no mapa?',
            'download'          => 'Baixar',
            'points'            => 'Editar Pontos',
            'toggle_hide'       => 'Esconder pontos',
            'toggle_show'       => 'Mostrar pontos',
            'view_mode'         => 'Voltar ao modo de visualização',
            'zoom_in'           => 'Aumentar o Zoom',
            'zoom_out'          => 'Diminuir o zoom',
            'zoom_reset'        => 'Reiniciar o zoom',
        ],
        'helper'    => 'Clique no mapa para adicionar links para uma local, ou clique num ponto existente para removê-lo.',
        'helpers'   => [
            'admin' => 'Habilite para permitir clicar em qualquer lugar do mapa e adicionar novos pontos , clicar nos pontos para editá-los ou movê-los.',
            'info'  => 'Mais informação a respeito do mapa',
            'label' => 'Este ponto é um rótulo. Nada mais, nada menos.',
            'view'  => 'Clique em qualquer ponto do mapa para ver os detalhes sobre ele. Use Ctrl + Zoom para ampliar e reduzir o mapa.',
        ],
        'legend'    => 'Legenda',
        'modal'     => [
            'submit'    => 'Adicionar',
            'title'     => 'Alvo do novo ponto',
        ],
        'no_map'    => 'Por favor carregue um mapa para o local primeiro',
        'points'    => [
            'empty_label'   => 'Ponto sem Nome',
            'fields'        => [
                'axis_x'    => 'Eixo X',
                'axis_y'    => 'Eixo Y',
                'colour'    => 'Cor de fundo',
                'icon'      => 'Ícone',
                'name'      => 'Rótulo',
                'shape'     => 'Formato',
                'size'      => 'Tamanho',
            ],
            'helpers'       => [
                'location_or_name'  => 'Um ponto do mapa pode apontar para uma entidade existente ou ser apenas um rótulo.',
            ],
            'icons'         => [
                'anchor'        => 'Âncora',
                'anvil'         => 'Bigorna',
                'apple'         => 'Maçã',
                'aura'          => 'Aura',
                'axe'           => 'Machado',
                'beer'          => 'Cerveja',
                'biohazard'     => 'Risco Biológico',
                'book'          => 'Livro',
                'bridge'        => 'Ponte',
                'campfire'      => 'Fogueira',
                'candle'        => 'Vela',
                'capitol'       => 'Capitólio',
                'castle-emblem' => 'Castelo',
                'cat'           => 'Gato',
                'cheese'        => 'Queijo',
                'cog'           => 'Engrenagem',
                'crown'         => 'Coroa',
                'dead-tree'     => 'Árvore Morta',
                'diamond'       => 'Diamante',
                'dragon'        => 'Dragão',
                'emerald'       => 'Esmeralda',
                'entity'        => 'Imagem da entidade alvo',
                'fire'          => 'Fogo',
                'flask'         => 'Frasco',
                'flower'        => 'Flor',
                'horseshoe'     => 'Ferradura',
                'hourglass'     => 'Ampulheta',
                'hydra'         => 'Hidra',
                'kaleidoscope'  => 'Caleidoscópio',
                'key'           => 'Chave',
                'lever'         => 'Alavanca',
                'meat'          => 'Carne',
                'octopus'       => 'Polvo',
                'palm-tree'     => 'Palmeira',
                'pin'           => 'Alfinete',
                'pine-tree'     => 'Pinheiro',
                'player'        => 'Personagem',
                'potion'        => 'Poção',
                'reactor'       => 'Reator',
                'repair'        => 'Reparo',
                'sheep'         => 'Ovelha',
                'shield'        => 'Escudo',
                'skull'         => 'Caveira',
                'snake'         => 'Serpente',
                'spades-card'   => 'Carta de Espadas',
                'sprout'        => 'Broto',
                'sun'           => 'Sol',
                'tentacle'      => 'Tentáculo',
                'toast'         => 'Torrada',
                'tombstone'     => 'Lápide',
                'torch'         => 'Tocha',
                'tower'         => 'Torre',
                'vase'          => 'Vaso',
                'water-drop'    => 'Água',
                'wooden-sign'   => 'Missão',
                'wrench'        => 'Chave Inglesa',
            ],
            'modal'         => 'Criar ou editar um ponto no mapa',
            'placeholders'  => [
                'axis_x'    => 'Posição à esquerda',
                'axis_y'    => 'Posição superior',
                'name'      => 'Título do ponto quando nenhum local for providenciado',
            ],
            'return'        => 'Voltar para :name',
            'shapes'        => [
                'circle'    => 'Círculo',
                'custom'    => 'Customizar',
                'square'    => 'Quadrado',
            ],
            'sizes'         => [
                'huge'      => 'Enorme',
                'large'     => 'Grande',
                'small'     => 'Pequeno',
                'standard'  => 'Padrão',
                'tiny'      => 'Minúsculo',
            ],
            'success'       => [
                'create'    => 'Ponto do mapa de localização criado',
                'delete'    => 'Ponto do mapa de localização removido.',
                'update'    => 'Ponto do mapa de localização atualizado.',
            ],
            'title'         => 'Pontos no Mapa do Local :name',
        ],
        'success'   => 'Pontos de Mapa salvos.',
    ],
    'maps'          => [
        'title' => 'Mapas em :name',
    ],
    'organisations' => [
        'title' => 'Organizações em :name',
    ],
    'panels'        => [
        'map'   => 'Mapa',
    ],
    'placeholders'  => [
        'location'  => 'Escolha uma localidade',
        'name'      => 'Nome do local',
        'type'      => 'Cidade, Reino, Ruína',
    ],
    'quests'        => [
        'description'   => 'Missões das quais o local é parte.',
        'title'         => 'Missões no local :quests',
    ],
    'show'          => [
        'description'   => 'Uma visão detalhada de um local',
        'tabs'          => [
            'characters'    => 'Personagens',
            'events'        => 'Eventos',
            'families'      => 'Famílias',
            'information'   => 'Informações',
            'items'         => 'Itens',
            'journals'      => 'Jornal',
            'locations'     => 'Locais',
            'map'           => 'Mapa',
            'maps'          => 'Mapas',
            'menu'          => 'Menu',
            'organisations' => 'Organizações',
            'quests'        => 'Missões',
        ],
        'title'         => 'Local :name',
    ],
];

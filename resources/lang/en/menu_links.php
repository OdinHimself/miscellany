<?php

return [
    'create'        => [
        'success'   => 'Quick Link \':name\' created.',
        'title'     => 'New Quick Link',
    ],
    'destroy'       => [
        'success'   => 'Menu Quick \':name\' removed.',
    ],
    'edit'          => [
        'success'   => 'Quick Link \':name\' updated.',
        'title'     => 'Quick Link :name',
    ],
    'fields'        => [
        'dashboard'     => 'Dashboard',
        'entity'        => 'Entity',
        'filters'       => 'Filters',
        'menu'          => 'Menu',
        'name'          => 'Name',
        'position'      => 'Position',
        'random'        => 'Random',
        'random_type'   => 'Random Entity Type',
        'tab'           => 'Tab',
        'type'          => 'Entity Type',
    ],
    'helpers'       => [
        'dashboard' => 'Have the quick link target one of the campaign\'s custom dashboards. This feature is only available to :boosted.',
        'entity'    => 'Set up this quick link to go directly to an entity. The :tab field controls which of the tabs is focused. The :menu field controls which subpage of the entity is opened.',
        'position'  => 'Use this field to control in which ascending order the links appear in the menu.',
        'random'    => 'Use this field to have a quick link pointing to a random entity. You can filter the link to only go to a specific entity type.',
        'type'      => 'Set up this quick link to go directly to a list of entities. To filter the results, copy parts of the url on the filtered entity list after the :? sign into the :filter field.',
    ],
    'index'         => [
        'add'   => 'New Quick Link',
        'title' => 'Quick Links',
    ],
    'placeholders'  => [
        'entity'    => 'Choose an entity',
        'filters'   => 'location_id=15&type=city',
        'menu'      => 'Menu subpage (use the last text of the url)',
        'name'      => 'Name of the quick link',
        'tab'       => 'entry, relations, notes',
    ],
    'random_types'  => [
        'any'   => 'Any entity',
    ],
    'show'          => [
        'tabs'  => [
            'information'   => 'Information',
        ],
        'title' => 'Quick Link :name',
    ],
];

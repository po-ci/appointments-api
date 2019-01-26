<?php

return [
    'navigation' => [
        'default' => [
            [
                'label' => 'Agenda',
                'detail' => '',
                'icon' => '',
                'permission' => 'ver-calendarios',
                'uri' => '',
                'pages' => [
                    [
                        'label' => 'Calendarios',
                        'detail' => '',
                        'icon' => 'date_range',
                        'permission' => 'ver-calendarios',
                        'route' => 'ZfMetalCalendar/Calendar/Grid',
                    ],
                    [
                        'label' => 'Grupos Calendarios',
                        'detail' => '',
                        'icon' => 'group_work',
                        'permission' => 'ver-calendarios',
                        'route' => 'ZfMetalCalendar/CalendarGroup/Grid',
                    ],
                    [
                        'label' => 'Feriados',
                        'detail' => '',
                        'icon' => 'free_breakfast',
                        'permission' => 'ver-calendarios',
                        'route' => 'ZfMetalCalendar/Holiday/Grid',
                    ],
                    [
                        'label' => 'Licencias',
                        'detail' => '',
                        'icon' => 'stop',
                        'permission' => 'ver-calendarios',
                        'route' => 'ZfMetalCalendar/OutOfService/Grid',
                    ],
                    [
                        'label' => 'Tipos de Visita',
                        'detail' => '',
                        'icon' => '',
                        'permission' => 'ver-calendarios',
                        'route' => 'ZfMetalCalendar/EventType/Grid',
                    ],
                    [
                        'label' => 'Estados de Visita',
                        'detail' => '',
                        'icon' => '',
                        'permission' => 'ver-calendarios',
                        'route' => 'ZfMetalCalendar/EventState/Grid',
                    ],
                ],
            ],
        ],
    ],
];
<?php

    return [

        'plugin' => [
            'name'              => 'Leaflet Map',
            'description'       => 'Show Location Map using LeafLet and OpenStreetMaps'
        ],

        'components' => [
            'leafletmap' => [
                'name'        => 'Leaflet Map',
                'description' => 'Displays OpenstreetMap and lets you mark one location',
                'coords' => [
                    'title'     => 'Map Coordinates',
                    'name'      => 'Map center latitude and longitude, comma separated'
                ],
                'zoom' => [
                    'title'             => 'Zoom',
                    'description'       => 'Zoom value from 0-18',
                    'validationMessage' => 'The Zoom property can contain only numeric symbols'
                ],
                'markerCoords' => [
                    'title'       => 'Marker Coordinates',
                    'description' => 'Marker Longitude and latitude comma separated. If left empty no marker will be shown',
                ],
                'markerText' => [
                    'title'       => 'Marker text',
                    'description' => 'Show defined text on the marker',
                    'default'     => 'Your marker description here'
                ],
                'scrollProtection' => [
                    'title'         => 'Controls Enabled',
                    'description'   => 'Disable/Enable maps controls like zoom by using scroll etc until visitor clicks on map, if checked controls are enabled'
                ]

            ]
        ]

    ];

?>
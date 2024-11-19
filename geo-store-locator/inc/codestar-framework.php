<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'geo_store_locator_options';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Geo Store Locator',
      'menu_slug'  => 'geo-store-locator',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
    //   'title'  => 'Tab Title 1',
      'fields' => array(
  
        // A text field
        array(
          'id'    => 'api_key',
          'type'  => 'text',
          'title' => 'Google Map API Key',
        ),
  
      )
    ) );


    // Set a unique slug-like ID
    $prefix = 'geo_store_locator_meta';

    // Create a metabox
    CSF::createMetabox( $prefix, [
        'title'     => 'Options',
        'post_type' => 'geo-store-map',
    ]);

    // Create a section
    CSF::createSection( $prefix, array(
        'fields' => [
        [
            'id'    => 'map_type',
            'type'  => 'select',
            'title' => 'Map Type',
            'options' => [
                'google_map' => 'Google Map',
                'openstreet_map' => 'OpenStreet Map',            
            ],
        ],
        [
            'ids' => 'maps',
            'type' => 'group',
            'title' => 'Maps',
            'fields' => [
                [
                    'id' => 'title',
                    'type' => 'text',
                    'title' => 'Title',
                ],
                [
                    'id' => 'latitude',
                    'type' => 'text',
                    'title' => 'Latitude',
                ],
                [
                    'id' => 'longitude',
                    'type' => 'text',
                    'title' => 'Longitude',
                ],
                [
                    'id' => 'address',
                    'type' => 'text',
                    'title' => 'Address',
                ],
                [
                    'id' => 'phone',
                    'type' => 'text',
                    'title' => 'Phone',
                ],
                [
                    'id' => 'hours',
                    'type' => 'text',
                    'title' => 'Hours',
                ],
                [
                    'id' => 'website',
                    'type' => 'text',
                    'title' => 'Website',
                ],
            ]
        ]

      ]
    ) );

  }
  
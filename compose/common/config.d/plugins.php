<?php

return [
    'plugins' => [
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical'],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],
        
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
        'MapasBlame' => [
            'namespace' => 'MapasBlame',
            'config' => [
                'request.logData.PATCH' => function ($data) {
                    return $data;
                },
            ]
        ],
        "LocationPatch" => [
            "namespace" => "LocationPatch",
            "config" => [
                "enable" => env("LOCATION_PATCH_ENABLE", true),
                "cutoff" => env("LOCATION_PATCH_CUTOFF", "19800101000001"),
            ],
        ],
        'SubsiteImporter' => [
            'namespace' => 'SubsiteImporter',
            'config' => [
                'public_key' => env('SUBI_PUB_KEY', null),
                'private_key' => env('SUBI_PRIV_KEY', null),
                'subsite_importer_password' => "mapas@123",
                'url_import' => 'http://camacari.ba.mapas.cultura.gov.br/',
                'query_string' => [
                    '@files' => '(avatar,gallery,header):url,description',
                ],
                'entities_to_import' => ["agent"],
                'get_metadata' => true,
                'import_files' => true,
                'owner_id' => 2,
                'files_grp_import' => ['avatar', 'header'],
                'space_cb' => function($space, $entity){},
                'header_get_userdata' => [
                    'cookie' => env('SUBI_COOKIE_KEY', null),
                    'host' => env('SUBI_COOKIE_HOST', null),
                    'referer' => env('SUBI_COOKIE_REFERER', null),
                ],
            ]
        ]
    ]
];

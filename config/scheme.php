<?php

return [
    /*
     * Описание настроек плагина для интерфейса редактирования
     */
    '$config_scheme$' => [
        'encrypt_prefix' => [
            'type'        => 'string',
            'name'        => 'config.main.encrypt_prefix.name',
            'description' => 'config.main.encrypt_prefix.description',
            'validator'   => [
                'type'   => 'String',
                'params' => [
                    'min'         => 3,
                    'max'         => 30,
                    'allowEmpty'  => false
                ]
            ]
        ],
        'encrypt_suffix' => [
            'type'        => 'string',
            'name'        => 'config.main.encrypt_suffix.name',
            'description' => 'config.main.encrypt_suffix.description',
            'validator'   => [
                'type'   => 'String',
                'params' => [
                    'min'        => 3,
                    'max'        => 30,
                    'allowEmpty' => false
                ]
            ]
        ]
    ],
    /**
     * Описание разделов для настроек
     * Каждый раздел группирует определенные параметры конфига
     */
    '$config_sections$' => [
        [
            'name'         => 'config_sections.main.name',
            'description'  => 'config_sections.main.description',
            'allowed_keys' => [
                'encrypt_prefix',
                'encrypt_suffix'
            ]
        ]
    ]
];

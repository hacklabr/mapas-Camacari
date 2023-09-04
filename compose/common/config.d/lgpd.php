<?php 
use MapasCulturais\i;

return [
    'module.LGPD' => [
        'termsOfUsage'=>[
            'title'=> 'Termos e Condições de Uso', 
            'text'=> file_get_contents(__DIR__ . '/../lgpd-terms/terms-of-usage.html'),
            'buttonText' => i::__('Aceito os termos de uso')
        ],
        'privacyPolicy' => [
            'title'=>  'Política de Privacidade',
            'text'=> file_get_contents(__DIR__ . '/../lgpd-terms/privacy-policy.html'),
            'buttonText' => i::__('Aceito as políticas de privacidade')
        ],
        'imageOfUsage' => [
            'title'=>  'Autorização de uso de imagem',
            'text'=> file_get_contents(__DIR__ . '/../lgpd-terms/image-of-usage.html'),
            'buttonText' => i::__('Autorizo o uso de imagem')
        ],
    ]
];
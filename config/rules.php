<?php
return  [
            ['class' => 'yii\rest\UrlRule',
            'pluralize'=>false,
            'controller' => ['ciudades'],
            ],
            ['class' => 'yii\rest\UrlRule',
            'controller' => ['user'],
            'pluralize'=>false,
            'extraPatterns'=>['POST authenticate'=>'authenticate']
            ]
 
    ];
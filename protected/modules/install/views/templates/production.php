<?php
return CMap::mergeArray(require ('main.php'), array(
     'components' => array(
         'db' => array(
             'connectionString'      => 'mysql:host={{DB_HOST}};dbname={{DB_NAME}};',
             'emulatePrepare'        => true,
             'username'              => '{{DB_LOGIN}}',
             'password'              => '{{DB_PASS}}',
             'charset'               => 'utf8',
             'enableProfiling'       => true,
             'initSQLs'=>array("
                 SET NAMES 'utf8' COLLATE 'utf8_general_ci';
                 SET CHARACTER SET 'utf8';
                 SET character_set_client = 'utf8';
                 SET character_set_results = 'utf8';
                 SET character_set_connection = 'utf8';
             ")
         ),
     )
));


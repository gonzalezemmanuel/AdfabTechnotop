<?php
return array(
	'doctrine' => array(
		'connection' => array(
			'orm_default' => array(
				'driverClass' => 'Doctrine\DBAL\Driver\PDOSqlite\Driver',
				'params' => array(
					'path'=> __DIR__.'/../../../../data/application.db',
				)
			)
		)
	),
    'rss' => array(
    	'url' => 'http://www.tf1.fr',
    ),
    'channel' => 'test',
    
);

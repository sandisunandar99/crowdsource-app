<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|    'connectionString' Hostname, database, port and database type for 
|     the connection. Driver example: mysql. Currently supported:
|                 mysql, pgsql, mssql, sqlite, oci
|    'username' The username used to connect to the database
|    'password' The password used to connect to the database
|    'tablePrefix' You can add an optional prefix, which will be added
|                 to the table name when using the Active Record class
|
*/
return array(
	'components' => array(
		'db' => array(
			'connectionString' => 'mysql:host='.getenv('MYSQL_HOST').';port='.getenv('MYSQL_PORT').';dbname='.getenv('MYSQL_DATABASE').';',
			'emulatePrepare' => true,
			'username' => getenv('MYSQL_USER'),
			'password' => getenv('MYSQL_PASSWORD'),
			'charset' => 'utf8mb4',
			'tablePrefix' => 'jds_',
		),
		
		// Uncomment the following lines if you need table-based sessions.
		// Note: Table-based sessions are currently not supported on MSSQL server.
		'session' => array (
			'class' => 'application.core.web.DbHttpSession',
			'connectionID' => 'db',
			'sessionTableName' => '{{sessions}}',
		),
		
		'urlManager' => array(
			'urlFormat' => 'path',
			'rules' => array(
				// You can add your own rules here
			),
			'showScriptName' => true,
		),
	
	),
	// For security issue : it's better to set runtimePath out of web access
	// Directory must be readable and writable by the webuser
	// 'runtimePath'=>'/var/limesurvey/runtime/'
	// Use the following config variable to set modified optional settings copied from config-defaults.php
	'config'=>array(
	// debug: Set this to 1 if you are looking for errors. If you still get no errors after enabling this
	// then please check your error-logs - either in your hosting provider admin panel or in some /logs directory
	// on your webspace.
	// LimeSurvey developers: Set this to 2 to additionally display STRICT PHP error messages and get full access to standard templates
		'debug' => getenv('LS_DEBUG'),
		'debugsql' => getenv('LS_DEBUG_SQL'), // Set this to 1 to enanble sql logging, only active when debug = 2
		// Update default LimeSurvey config here
		'updatable' => false,
	)
);
/* End of file config.php */
/* Location: ./application/config/config.php */
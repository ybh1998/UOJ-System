<?php
return [
	'profile' => [
		'oj-name' => 'Universal Online Judge',
		'oj-name-short' => 'UOJ',
		'administrator' => 'root',
		'admin-email' => 'admin@local_uoj.ac',
		'QQ-group' => '',
		'ICP-license' => ''
	],
	'database' => [
		'database' => 'app_uoj233',
		'username' => 'root',
		'password' => '_database_password_',
		'host' => '127.0.0.1'
	],
	'web' => [
		'domain' => null,
		'main' => [
			'protocol' => 'http',
			'host' => '_httpHost_',
			'port' => 80
		],
		'blog' => [
			'protocol' => 'http',
			'host' => '_httpHost_',
			'port' => 80
		]
	],
	'security' => [
        'verify-code' => '1234',
		'user' => [
			'client_salt' => 'salt0'
		],
		'cookie' => [
			'checksum_salt' => ['salt1', 'salt2', 'salt3']
		],
	],
	'mail' => [
		'noreply' => [
			'username' => 'noreply@local_uoj.ac',
			'password' => '_mail_noreply_password_',
			'host' => 'smtp.local_uoj.ac',
			'secure' => '',
			'port' => 25
		]
	],
	'judger' => [
		'socket' => [
			'port' => '233',
			'password' => '_judger_socket_password_'
		]
	],
	'svn' => [
		'our-root' => [
			'username' => 'our-root',
			'password' => '_svn_ourroot_password_'
		]
	],
	'switch' => [
		'web-analytics' => false,
		'blog-use-subdomain' => false
	]
];

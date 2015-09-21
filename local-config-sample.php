<?php

/*

	Escribe aqui tu configuración local y luego guarda el archivo como 'local-config.php'

*/

// Global DB config
	define('DB_NAME', 'chile_travel');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '1234');
	define('DB_HOST', 'localhost');

	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');

/**
 * https://api.wordpress.org/secret-key/1.1/salt/
 **/

	define('AUTH_KEY',         '>3^r!D5HV $N27[%aO!5ci! 3(NurC!HGI*1WJX?UsMJMMPJkH;^VUyh$2tpnfBX');
	define('SECURE_AUTH_KEY',  '-l)(m NBP;EK?xf[;AlTIB85BpSiL=d,hv1f,z;+CsI_?-Q6XL:wp+~^BT.KiI3h');
	define('LOGGED_IN_KEY',    'L8L[TCWaKgu_dBJ?cO{PS+SD)k#>T^Q+2Bq{|*0OP7g)RoUv_xV[Kq22yjF|[WG-');
	define('NONCE_KEY',        'Fkzbr+erDN5iX=bv0-wq)Qs-PO@B|u!+Wa!G!8O}!*q}+B$bMj4>+qlQ_wrGq<M+');
	define('AUTH_SALT',        'c0;-BlHc/Gwrra#Uw)}F`Uf$t_&e?S9mzo8>@8[CD[3Ka5<gK~;X*j#IoUyus{LW');
	define('SECURE_AUTH_SALT', '*G9&,%V[*JFhfopvM>v;-/[TR,5mBp=,VJ^g-}bnp-:*[ iI+(2Di.:4:8w8}&|v');
	define('LOGGED_IN_SALT',   '@(M2p9(izcm$Sa%YLlYms ;9+DlR/9 }6:[r[}rc+=&-Y{#_.UbR^,r-8af}F-cX');
	define('NONCE_SALT',       '<*Y^6E.Oky%4|3zN,j|wtF?qN^/uD+w5hZF3e|v3Cv7r7wCWFN-dfZGO-5Tk5O~c');

	define('WP_DEBUG', true);

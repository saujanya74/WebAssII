<?php
if($_SERVER['HTTP_HOST'] == "localhost")
{
	define(URL,'http://localhost/WebAssII/');
	define(LIBS,'libs/');

	define(DB_TYPE,'mysql');
	define(DB_HOST,'localhost');
	define(DB_NAME,'vinh_moviezone_db');
	define(DB_USER,'root');
	define(DB_PASS,'');
}
else
{
	define(URL,'http://infotech.scu.edu.au/~blama11/');
	define(LIBS,'libs/');

	define(DB_TYPE,'mysql');
	define(DB_HOST,'localhost');
	define(DB_NAME,'blama11_moviezone');
	define(DB_USER,'blama11');
	define(DB_PASS,'23159105');
}
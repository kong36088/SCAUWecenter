<?php
/*
+--------------------------------------------------------------------------
|   WeCenter [#RELEASE_VERSION#]
|   ========================================
|   by WeCenter Software
|   © 2011 - 2014 WeCenter. All Rights Reserved
|   http://www.wecenter.com
|   ========================================
|   Support: WeCenter@qq.com
|
+---------------------------------------------------------------------------
*/

// 定义 Cookies 作用域
define('G_COOKIE_DOMAIN','192.168.102.139');

// 定义 Cookies 前缀
define('G_COOKIE_PREFIX','zio_');

// 定义应用加密 KEY
define('G_SECUKEY','ejpxlibekdal');
define('G_COOKIE_HASH_KEY', 'tbllkunyrasrkop');

define('G_INDEX_SCRIPT', '?/');

define('X_UA_COMPATIBLE', 'IE=edge,Chrome=1');

// GZIP 压缩输出页面
define('G_GZIP_COMPRESS', FALSE);

// Session 存储类型 (db, file)
define('G_SESSION_SAVE', 'db');

// Session 文件存储路径
define('G_SESSION_SAVE_PATH', '');

//GOGS域名
define('G_GOGS_URL' , 'http://192.168.102.139:3001');

//CURL GOGS域名
define('G_GOGS_CURL_URL', 'http://192.168.102.139:3001');

//GOGS COOKIE路径
define('G_GOGS_COOKIE_DIR', dirname(__FILE__) . '/../cache/cookie/');

//顶级域名
define('G_GOGS_DOMAIN','192.168.102.139');

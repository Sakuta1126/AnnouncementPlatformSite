<?php
//	Parametry bazy
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "ogloszenia");
//	Definiujemy url

define("PROTOCOL", "http://");
define("ROOT_DOMAIN", "localhost/Sigmowo/");
define("ROOT_URL", PROTOCOL . ROOT_DOMAIN);
foreach (glob("app/*.php") as $filename) {
    include $filename;
}
foreach (glob("controllers/*.php") as $filename) {
    include $filename;
}
foreach (glob("models/*.php") as $filename) {
    include $filename;
}
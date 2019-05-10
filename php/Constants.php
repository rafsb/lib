<?php
/***************/
/* 
 * USERS
 */
define("DEBUG",true);
define("USER",1);
define("UUID",2);

/* 
 * CALL TYPES
 */
define("SYNC",true);
define("ASYNC",false);
define("IN",true);
define("OUT",false);
define("SCAN",'{*}');
define("NOSCAN",false);

/*
 * HANDLER MODES
 */
define("NEW",0);
define("INSERT",0);
define("EDIT",1);
define("UPDATE",1);
define("REMOVE",2);
define("DELETE",2);
define("VIEW",3);
define("REPLACE",4);
define("APPEND",5);
define("PREPEND",6);
define("RECURSIVE",true);
define("NORECURSIVE",false);
define("FORCE",true);
define("NOFORCE",false);
define("LOG",true);
define("NOLOG",false);
define("PRINT",true);
define("NOPRINT",false);
define("APP",true);
define("CLIENT",false);

/*
 * ENVIROMENTS
 */
define("SESSION",1);
define("COOKIE",2);

/*
 * RESPONSE FORMATS
 */
define("ASSOC",0);
define("ARRAY",1);
define("JSON",2);
define("OBJECT",3);
define("MYSQLI_OBJ",4);

define("DISK","disk");
define("DATABASE","database");

define("DS",'/');
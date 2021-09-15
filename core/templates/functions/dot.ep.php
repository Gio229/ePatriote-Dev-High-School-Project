<?php 
use PhpFromZero\Config\Config;
use PhpFromZero\Http\Request;

$coreConf = new Config();
$coreRequest = new Request();


// Variables exposed to our templates
// They are global to allow below function to access them
global $ep_base_dir;// it's the way for the public directory
global $ep_user;
global $ep_env;
global $ep_project_root;

$ep_base_dir = $coreConf->getBaseUrl();
$ep_user = $coreRequest->getUser();
$ep_env = $coreConf->getEnv();
$ep_project_root = $coreConf->getProjectDir();





// Functions exposed to our templates
// Note that you can use any php builtin function inside your ep.php templates


/**
 * Check whether the current user is authenticated
 * 
 * @return true|false True if current user is authenticated, false otherwise
 */
function isAuthenticated(){
    global $ep_user;
    return null !== $ep_user;
}

/**
 * Check whether the current user has admin role
 * 
 * @return true|false True if current user has admin role
 * , false otherwise
 */
function isAdmin(){
    global $ep_user;
    if(isAuthenticated()) return "ROLE_INFORMATIC" == $ep_user["role"];
    return false;
}

/**
 * Check whether the current user has student role
 * 
 * @return true|false True if current user has student role
 * , false otherwise
 */
function isStudent(){
    global $ep_user;
    if(isAuthenticated()) return "ROLE_STUDENT" == $ep_user["role"];
    return false;
}

/**
 * Check whether the current user has teacher role
 * 
 * @return true|false True if current user has teacher role
 * , false otherwise
 */
function isTeacher(){
    global $ep_user;
    if(isAuthenticated()) return "ROLE_TEACHER" == $ep_user["role"];
    return false;
}

/**
 * Check whether the current user has parent role
 * 
 * @return true|false True if current user has teacher role
 * , false otherwise
 */
function isParent(){
    global $ep_user;
    if(isAuthenticated()) return "ROLE_PARENT" == $ep_user["role"];
    return false;
}

/**
 * Check whether the current user has censor role
 * 
 * @return true|false True if current user has teacher role
 * , false otherwise
 */
function isCensor(){
    global $ep_user;
    if(isAuthenticated()) return "ROLE_CENSOR" == $ep_user["role"];
    return false;
}
<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/fun.php';


// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Game Grumps');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('header.tpl');

// Get newsarticles from database

$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action){
    case 'admin':
        $cms = isset($_GET['cms'])?$_GET['cms']:'show';
        switch($cms){
            case 'show':
                include ('model/home.php');
                $templateParser->assign('result', $result);
                $templateParser->display('home2.tpl');
                break;
            case 'edit':

                break;
            case 'delete':
                $id = isset($_GET['id'])?$_GET['id']:0;
                include ('model/admin_delete.php');
                break;
            case 'insert':
                include ('model/admin_video.php');
                $templateParser->display('admin_video.tpl');
        }
        break;


}




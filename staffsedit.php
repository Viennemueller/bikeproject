<?php

    require 'libs/Smarty.class.php';

    $smarty = new Smarty;
    $smarty->force_compile = true;
    $smarty->debugging = false;
    $smarty->caching = false;

    $smarty->cache_lifetime = 0;

    $smarty->assign("title", "BikeProject.com");
    session_start();

    include('DatabaseClassConfig.php');

    //Place Code here






    //End Code Here



            if(  $_SESSION["username"] == ""  )
            {

                $smarty->assign("loginbutton",  "Login" );
                $smarty->assign("accountdropdown",  "hidden" );
            }
            else
            {
                $smarty->assign("loginbutton",  "Logout" );
                $smarty->assign("accountdropdown",  "visible" );
            }


    $smarty->display('staffedit.tpl');


?>
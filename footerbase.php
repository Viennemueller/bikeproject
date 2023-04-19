
<?php


if(  $_SESSION["admin"] == "1"  )
{

     $smarty->assign("admindropdown",  "hidden" );
}
else
{

    $smarty->assign("admindropdown",  "visible" );
}



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

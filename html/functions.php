<?php

function end_session()
    {
        $_SESSION = array();
        if(isset($_COOKIE["PHPSESSID"])){
            setcookie("PHPSESSID",'',time()-3600,'/');
        }
        session_destroy();
    }

    function restart_session(){
        end_session();
        session_start();
    }


?>
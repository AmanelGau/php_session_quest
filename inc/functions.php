<?php

function isSessionSet(): bool
{   
    startSession();
    if(isset($_SESSION["name"]))
    {
        
        return true;
    }
    return false;
}

function startSession()
{
    if (session_status() === 1) {
        session_start();
    }
}
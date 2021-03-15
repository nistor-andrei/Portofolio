<?php

class Form
{
    public $method;
    public $action;

    public function __construct($method, $action)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function build()
    {
        echo sprintf('<form method="%s" action="%s">', $this->method, $this->action);
        echo '<input type= "text" name="text">';
        echo '<input type="submit" value="submit">';
        echo '</form>';
    }

    public function preventXSS($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
}

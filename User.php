<?php
class User {

    public $name;
    public $username;
    public $password;
    private $tasks = array(
        'title' => array()
    );

    function __construct($name, $username, $password)
    {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
    }

    public function addTask($title) {
        array_push($this->tasks['title'], $title);
    }

    public function clearTasksList() {
        $this->tasks = array(
            'title' => array()
        );
    }

    public function showTask() {
        $tasks = $this->tasks['title'];
        foreach ($tasks as $task) {
            # code...
            echo '<li><span>'. $task .'</span></li>';
            echo '<br>';

        }
    }

    public function login($username, $password) {
        if ($this->username == $username and $this->password == $password) {
            return true;
        } else {
            return false;
        }
    }
}
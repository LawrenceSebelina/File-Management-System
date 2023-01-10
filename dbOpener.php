<?php

class DbConnector {

var $theQuery;
var $link;

function DbConnector(){

        $host = 'localhost';
        $db = 'schoolfilemanagementsystem';
        $user = 'root';
        $pass = '';

        $this->link = mysqli_connect($host, $user, $pass,$db);
        register_shutdown_function(array(&$this, 'close'));
        return $this->link;

    }
	
    function query($query) {

        $this->theQuery = $query;
        return mysqli_query($this->link,$query);

    }

    function fetchArray($result) {

        return mysqli_fetch_array($result);

    }

    function close() {

        mysqli_close($this->link);

    }
	
}

    $connector = new DbConnector();
?>
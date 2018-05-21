<?php

    function db_connect()
    {
        $host = 'localhost';
        $user = 'ksu_nya';
        $password = '1234';
        $db = 'art2';
        
        $connection = mysql_connect($host, $user, $password);
        if(!connection || !mysql_select_db($db, $connection))
        {
            return false;
        } 
        return $connection;
    }

    function db_result_to_array($result)
    {
        $res_array = array();        
        $count = 0;
        
        while($row = mysql_fetch_array($result))
        {
            $res_array[$count] = $row;
            $count++;
        }
        return $res_array;
    }

    function get_services() 
    {        
        $query = "SELECT * FROM services ORDER BY id";
        
        return get_db_array($query);
    }
    
    function get_information()
    {
        $query = "SELECT * FROM information ORDER BY id";
        
        return get_db_array($query);
    }
    
    function get_db_array($query)
    {
        db_connect();
        
        $result = mysql_query($query);
                
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    function get_catalog()
    {
        $query = "SELECT * FROM catalog ORDER BY id";
        
        return get_db_array($query);
    }
    
    function get_inf_item($id)
    {
        db_connect();
        
        $query = "SELECT * FROM information WHERE id='$id'";
        
        $result = mysql_query($query);
        
        $row = mysql_fetch_array($result);
        
        return $row;
    }
?>
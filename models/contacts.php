<?php 
    function contacts_all($link){
        $query = "SELECT * FROM contacts ORDER BY id ";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $n = mysqli_num_rows ($result);
        $contacts = array();
        
        for ($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $contacts[] = $row;
        }
        return $contacts;
    }
?>
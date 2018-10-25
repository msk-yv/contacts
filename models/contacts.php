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

    function contact_input($link, $name, $phone, $email){
        $query = "INSERT INTO `contacts`.`contacts` (`name`, `phone`, `email`) VALUES ('".$name."', '".$phone."', '".$email."')";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
    }

    function contact_search($link, $search){
        $query = "SELECT * FROM contacts WHERE `name` like '%".$search."%' or `phone` like '%".$search."%' or `email` like '%".$search."%' ORDER BY id ";
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
    //contacts_getById($link, $_GET['id'])
    function contacts_getById($link, $ID){
        $query = "SELECT * FROM contacts WHERE id=".$ID." ";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $contacts = array(mysqli_fetch_assoc($result));
            
        
        return $contacts;
    }
    //contact_update($link, $_POST['name'], $_POST['name'], $_POST['phone'], $_POST['email']);
    //UPDATE `contacts`.`contacts` SET `name`='yr', `phone`='1234', `email`='qwe@qwe1.ru' WHERE `id`='3'
    function contact_update($link, $ID, $name, $phone, $email){
        $query = "UPDATE `contacts`.`contacts` SET `name`='".$name."', `phone`='".$phone."', `email`='".$email."' WHERE `id`='$ID';";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        return ;
    }
    
    function contact_delete($link, $ID){
        $query = "DELETE FROM `contacts`.`contacts` WHERE `id`='".$ID."';";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
            
        return ;
    }
?>
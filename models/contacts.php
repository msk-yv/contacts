<?php
//get all contacts from db
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
//insert new contact in db
    function contact_input($link, $name, $phone, $email){
        //place to validate||transform phone # & e-mails
        $query = "INSERT INTO `contacts`.`contacts` (`name`, `phone`, `email`) VALUES ('".$name."', '".$phone."', '".$email."')";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return ;
    }
//search by any column in db
/*    function contact_search($link, $search){
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
*/
//search by name column in db
    function contact_search($link, $search){
        $query = "SELECT * FROM contacts WHERE `name` like '%".$search."%' ORDER BY id ";
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
//get contact by id from db
    function contacts_getById($link, $ID){
        $query = "SELECT * FROM contacts WHERE id=".$ID." ";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $contact = array(mysqli_fetch_assoc($result));
            
        
        return $contact;
    }
 //update contact info in db
    function contact_update($link, $ID, $name, $phone, $email){
        $query = "UPDATE `contacts`.`contacts` SET `name`='".$name."', `phone`='".$phone."', `email`='".$email."' WHERE `id`='$ID';";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        return ;
    }
//delete contact by in db
    function contact_delete($link, $ID){
        $query = "DELETE FROM `contacts`.`contacts` WHERE `id`='".$ID."';";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
            
        return ;
    }
?>
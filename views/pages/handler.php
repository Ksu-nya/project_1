<?  
    include('../../db_fns.php');
    
    $connection = db_connect(); 

    if(isset($_POST['add']))
    {
        $name = strip_tags(trim($_POST['name']));
        $surname = strip_tags(trim($_POST['surname']));
        $patronymic = strip_tags(trim($_POST['patronymic']));
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $result = mysql_query("INSERT INTO feedback(name, patronymic, surname, mail, phone) 
                                VALUES ('$name','$patronymic','$surname','$email','$phone')");
                                
        mysql_close();
        
        if($result)
        {
            header('Location: ../../index.php?view=feedback_success');
        }
    }
?>
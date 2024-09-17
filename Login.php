if (isset($_POST['submit']))
{
    if ((!isset($_POST['firstname'])) || (!isset($_POST['lastname'])) ||  
        (!isset($_POST['address'])) || (!isset($_POST['emailaddress'])) ||  
        (!isset($_POST['password'])) || (!isset($_POST['gender']))) 
    { 
        $error = "*" . "Please fill all the required fields"; 
    } 
    else
    { 
        $firstname = $_POST['firstname']; 
        $lastname = $_POST['lastname']; 
        $address = $_POST['address']; 
        $emailaddress = $_POST['emailaddress']; 
        $password = $_POST['password']; 
        $gender = $_POST['gender']; 
    } 
} 

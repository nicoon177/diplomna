<?php 

//Особистий кабінет користувача
class CabinetController 
{
//    Головна 
    public function actionIndex()
    {
        
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
        
        require_once (ROOT . '/views/cabinet/index.php');
        
        return true;
        
    }
    
//    Редагування сторінки
    public function actionEdit()
    {
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
        
        $name = $user['name'];
        $password = $user['password'];
        
        $result = false;
        
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $password = $_POST['password'];
            
            $errors = false;

            if (User::checkName($name) == false) {
                $errors[] = 'Імя не повинно бути меншим за 3 символа';   
            }


            if (User::checkPassword($password) == false) {
                $errors[] = 'Пароль не повинен бути менше 6-ти символів';   
            }


            if($errors == false) {
                $result = User::edit($userId, $name, $password);
            }

        }
        
        require_once (ROOT . '/views/cabinet/edit.php');
        
        return true;
    }
}
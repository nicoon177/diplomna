<?php 

//Користувач
class UserController
{
//    Регістація
    public function actionRegister()
    {
        $name = false;
        $email = false;
        $password = false;
        $result = false;
        
        
        if (isset($_POST['submit'])) {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (User::checkName($name) == false) {
                $errors[] = 'Імя не повинно бути меншим за 3 символа';   
            }
            
            if (User::checkEmail($email) == false) {
                $errors[] = 'Неправильнй email';   
            }
            
            if (User::checkPassword($password) == false) {
                $errors[] = 'Пароль не повинен бути менше 6-ти символів';   
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такий email вже викоростовується';
            }
            
            if($errors == false) {
                $userid = User::register($name, $email, $password);
                if ($userid) {
                    User::auth($userid);
                    header("Location: /cabinet/"); exit;
                }
            }
            
        }
        
        require_once (ROOT . '/views/user/register.php');
        
        return true;
    }
    
//    Вхід на сайт
    public function actionLogin()
    {
        $email = false;
        $password = false;


        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (User::checkEmail($email) == false) {
                $errors[] = 'Неправильнй email';   
            }

            if (User::checkPassword($password) == false) {
                $errors[] = 'Пароль не повинен бути менше 6-ти символів';   
            }

            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {
                $errors[] = 'Неправильні дані для входу на сайт!';
            } else {
                User::auth($userId);
                
                header("Location: /cabinet/");
            }
            
        }

        require_once (ROOT . '/views/user/login.php');

        return true;
    }
    
//    Вихід з сайта
    public function actionLogout()
    {
        unset($_SESSION['user']);
        header("Location: /");
    }
    
}
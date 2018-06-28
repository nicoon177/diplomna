<?php

//Користувач
class User
{
    
//    Регістрація
    public static function register($name, $email, $password) 
    {
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO user (name, email, password, role) VALUES (:name, :email, :password, :role)';
        $role = 'user';
        
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->bindParam(':role', $role, PDO::PARAM_STR);
  
        if ($result->execute()) {
            return self::checkUserData($email, $password);
        } else {
            return false;
        }
        /*$result->execute();
        $result->debugDumpParams();
        var_dump($result->errorInfo());*/
    }
    
//    Перевірка даних користувача
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();
        
        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;
    }
    
//    Авторизація
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }
    
//    Перевірка входу
    public static function checkLogged()
    {
        
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        
        header("Location: /user/login");
    }
    
//    Відвудувач гість
    public static function isGuest()
    {
        
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
    
//    Отримання користувача по ID
    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE id = :id';
            
            $result = $db->prepare($sql);
            $result->bindparam('id', $id, PDO::PARAM_INT);
            
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            
            return $result->fetch();
        }
    }
    
//    Обновлення даних
    public static function edit($id, $name, $password)
    {
        
        $db = Db::getConnection();
        
        $sql = 'UPDATE user SET name = :name, password = :password WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
        
    }
    
//    Перевірка імені
    public static function checkName($name)
    {
        if(strlen($name) >= 3) {
            return true;
        }
        return false;
    }
    
//    Перевірка паролю
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }
    
//    Перевірка телефона
    public static function checkPhone($userPhone)
    {
        if (strlen($userPhone) >= 10) {
            return true;
        }
        return false;
    }
    
//    Перевірка Email
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
//    Перевірка на існуючий Email
    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();
        
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        
        if ($result->fetchColumn())
            return true;
        return false;
    }
    
}
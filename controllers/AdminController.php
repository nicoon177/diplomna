<?php
 
class AdminController extends AdminBase
{
//    Головна сторінка
    public function ActionIndex()
    {
        self::checkAdmin();
        
        require_once (ROOT . '/views/admin/index.php');
        return true;
    }
    
}
<?php 

class SiteController
{
//    Головна 
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $latestProducts = array();
        $latestProducts = Product::getLatesProduct();
        
        $sliderProducts = Product::getRecommendedProducts();
        
        require_once(ROOT . '/views/site/index.php');
        
        return true;
    }
    
//    Відправлення на пошту
    public function actionContact()
    {
        
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            
            $errors = false;
            
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'неправильний email';
            }
            
            if ($errors == false) {
                $adminEmail = 'nicoon177@gmail.com';
                $message = "Текст: {$userText}. Від {$userEmail}";
                $subject = 'Тема повідомлення';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
            
        }
        
        require_once(ROOT . '/views/site/contact.php');
        
        return true;
        
    }
    
//    Виклик сторінки про магазин
    public function actionAbout ()
    {
        
        require_once(ROOT . '/views/site/about.php');
        return true;
    }
    
    public function actionSearch()
    {
        $searched = Product::getSearchedProducts();
        
        require_once(ROOT . '/views/site/search.php');
        
        return true;
    }
}
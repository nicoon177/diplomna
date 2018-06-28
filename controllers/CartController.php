<?php 

//Корзина
class CartController 
{
//    Добавлення в корзину
    public function actionAdd($id)
    {
        
        Cart::addProduct($id);
        
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
        
    }
    
//    Добавлення в корзину через AJAX
    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        
        return true;
    }
    
//    Головна 
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $productsInCart = false;
        
        $productsInCart = Cart::getProducts();
        
        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            
            $totalPrice = Cart::getTotalPrice($products);
        }
        
        require_once(ROOT . '/views/cart/index.php');
        
        return true;   
    }
        
//    Відправлення замовлень 
    public function actionCheckout()
    {
            
        $productsInCart = Cart::getProducts();

       
        if ($productsInCart == false) {
            header("Location: /");
        }

        
        $categories = Category::getCategoriesList();

       
        $productsIds = array_keys($productsInCart);
        $products = Product::getProductsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);

       
        $totalQuantity = Cart::countItems();

        
        $userName = false;
        $userPhone = false;
        $userComment = false;

       
        $result = false;

        
        if (!User::isGuest()) {
            $userId = User::checkLogged();
            $user = User::getUserById($userId);
            $userName = $user['name'];
        } else {
            $userId = false;
        }

       
        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            
            $errors = false;

            
            if (!User::checkName($userName)) {
                $errors[] = 'Неправильне імя';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Неправильний телефон';
            }


            if ($errors == false) {
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {               
                    $adminEmail = 'nicoon177@gmail.com';
                    $message = '<a href="http://crowdme.com/admin/orders">Список замовленнь</a>';
                    $subject = 'Нове замовлення!';
                    mail($adminEmail, $subject, $message);

                    Cart::clear();
                }
            }
        }

       
        require_once(ROOT . '/views/cart/checkout.php');
        return true;
    }
    
//    Видалення з корзини
    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        
        header("Location: /cart");
    }
    
}
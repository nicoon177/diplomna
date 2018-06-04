<?php 
// Корзина
class Cart
{
//    Додавання в корзину
    public static function addProduct($id)
    {
        
        $id = intval($id);
        
        $productsInCart = array();
        
        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }
        
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id] ++;
        } else {
            $productsInCart[$id] = 1;
        }
        
        $_SESSION['products'] = $productsInCart;
        
        return self::countItems();
        
    }
    
//    Кількісьть елемкнтів в корзині
    public static function countItems()
    {
        
        if (isset($_SESSION['products'])) {
            // Если массив с товарами есть
            // Подсчитаем и вернем их количество
            $count = 0;
            foreach($_SESSION['products'] as $id => $quantity) {
                $count += $quantity;
            }
            return $count;
        } else {
            // Если товаров нет, вернем 0
            return 0;
        }
        
    }
    
//    Відображення продуктів
    public static function getProducts()
    {
        if(isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }
    
//    Підрахунок суми
    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();
        $total = 0;
        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        
        return $total;
    }
    
//    Очистка корзини
    public static function clear()
    {
        if(isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }
    
//    Видалення продикту
    public static function deleteProduct($id)
    {
          
        $productsInCart = self::getProducts();
        
        unset($productsInCart[$id]);
        
        $_SESSION['products'] = $productsInCart;
        
    }
    
}
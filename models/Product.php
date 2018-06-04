<?php

//Продукти
class Product
{
//    Значення по замовчуванню
    const SHOW_BY_DEFOULT = 6;
    
//    Отримання останніх продуктів
    public static function getLatesProduct($count = self::SHOW_BY_DEFOULT)
    {
        
        $db = Db::getConnection();
        
        $sql = 'SELECT id, name, price, is_new FROM product WHERE status = "1" ORDER BY id DESC LIMIT :count';
        
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $result->execute();
        
        
        
        $i = 0;
        $productList = array();
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        
        return $productList;
    }
    
//    Отримання продуктів згідноо категорії
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        
        if ($categoryId) {
            
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFOULT;
            
            $db = Db::getConnection();
            
            $result = $db->query("SELECT id, name, price, is_new FROM product WHERE status = '1' AND category_id = '$categoryId' 
            ORDER BY id DESC LIMIT " . self::SHOW_BY_DEFOULT . " OFFSET " . $offset);
        
        

        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['is_new'] = $row['is_new'];
            $i++;
            }

            return $products;
        }
    }
    
//    Отримання продуктів по ID
    public static function getProductById($id)
    {
        $id = intval($id);
        
        if($id){
            
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM product WHERE id =' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
            
        }
    }
    
//    Отримання загальної кількості продуктів
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();
        
        $result = $db->query('SELECT count(id) AS count FROM product WHERE status= "1" AND category_id ='.$categoryId);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $row = $result->fetch();
        
        return $row['count'];
    }
    
//    Продукти які є в наявності
    public static function getProductsByIds($idsArray)
    {
        
        $products = array();
        
        $db = Db::getConnection();
        
        $idsString = implode(',', $idsArray);
        
        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";
        
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        $products = array();
        while($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        
        return $products;
    }
    
//    Отримання списку продуктів
    public static function getProductsList()
    {
        
        $db = Db::getConnection();
        
        $result = $db->query('SELECT id, name, price, code FROM product ORDER BY id ASC');
        $productList = array();
        $i = 0;
        while($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['code'] = $row['code'];
            $i++;
        }
        return $productList;
        
    }
    
//    Отримання рекомендованих продуктів
    public static function getRecommendedProducts()
    {
        
        $db = Db::getConnection();
        
        $result = $db->query('SELECT id, name, price, is_new FROM product WHERE status = "1" AND is_recommended = "1" ORDER BY id DESC');
        
        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        
        return $productsList;
        
    }
    
//    Вибір фотографій
    public static function getImage($id)
    {
        $noImage = 'no-image.jpg';
        
        $path = '/upload/images/products/';
        
        $pathToProductImage = $path . $id . '.jpg';
        
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage)) {
            return $pathToProductImage;
        }
        
        return $path . $noImage;
    }
    
//    Видалення продукту згідно ID
    public static function deleteProductById($id)
    {
        
        $db = Db::getConnection();
        
        $sql = 'DELETE FROM product WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
        
    }
    
//    Створення продукту
    public static function createProduct($options)
    {
        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO product (name, code, price, category_id, brand, availability, description, is_new, is_recommended, status) VALUES (:name, :code, :price, :category_id, :brand, :availability, :description, :is_new, :is_recommended, :status)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if($result->execute()) {
            return $db->lastInsertId();
        }
        
        return 0;
        
    }
    
//    Обновлення продуктів по ID
    public static function updateProductById($id, $options)
    {
        
        $db = Db::getConnection();
        
        $sql = 'UPDATE product SET name = :name, code = :code, price = :price, category_id = :category_id, brand = :brand, avalability = :avalability, description = :description, is_new = :is_new, is_recommended = :is_recommended, status = :status WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_INT);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':avalability', $options['avalability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
        
    }
    
//    Статус продукту
    public static function getAvailabilyText($availability)
    {
        switch($availability) {
            case '1':
                return 'В наявності';
                break;
            case '0':
                return 'Під замовлення';
                break;
        }
    }
    
    public static function getSearchedProducts()
    {
        $search = $_GET['val'];
        echo $search;
    }
}
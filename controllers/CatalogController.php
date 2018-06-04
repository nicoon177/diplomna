<?php 

class CatalogController
{
//    Головна список товарів
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatesProduct();

        require_once(ROOT . '/views/catalog/index.php');

        return true;
    }
    
//    Вивід усіх товарів
    public function actionCategory($categoryId, $page = 1)
    {
        
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
        
        $total = Product::getTotalProductsInCategory($categoryId);
        
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFOULT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
}
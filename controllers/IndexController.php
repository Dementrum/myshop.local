<?php
/**
  *  Контроллер главной страницы
  * 
 */

//подключаем модели
include_once '../models/CategoriesModels.php';

function testAction() {
    echo "IndexController.php > testAction";
}

/**
 * Формирование главной страницы сайта
 * @param object $smarty шаблонизатор
 *
 */
function indexAction($smarty){
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'index');// загрузка шаблона

}
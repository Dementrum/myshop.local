<?php
/**
  * Основные Функции 
  *
 */

/**
  *  Формирование запрашиваемой страницы
  *  
  * @param string $controllerName  название контроллера
  * @param string $actionName  название функции обработки страницы
  *@
 */
function loadPage($smarty, $controllerName, $actionName = 'index') {
   include_once PATH_PREFIX . $controllerName . PATH_POSTFIX;

    //Формируем название функции
    $function = $actionName . 'Action';
    $function($smarty);
}


/**
 * Загрузка шаблона
 * @param object $smarty    обьект шаблонизатора
 * @param string $templateName    название файла шаблонизатора
 */
function  loadTemplate($smarty, $templateName){
    $templateName .= TEMPLATE_POSTFIX;
    $smarty->display($templateName); // формируем имя шаблона
}

/**
 * Функция отладки.
 * Останавливает работу программы, выводя значение переменной $value
 *
 * @param variant $value переменная для вывода ее на страницу
 * @param int $die
 */
function d($value = null, $die = 1){
    echo "Debug :<br><pre>";
    print_r($value);
    echo "</pre>";

    if($die) $die;
}
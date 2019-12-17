<?php
/**
  *  Файл настроек
  * 
 */

//< Константы для обращения к контроллерам
define('PATH_PREFIX', '../controllers/');
define('PATH_POSTFIX', 'Controller.php');
// >

// < используемый шаблон
$template = 'default';

//пути к файлам шаблонов (*.tpl)
define('TEMPLATE_PREFIX', "../views/{$template}/"); 
define('TEMPLATE_POSTFIX', '.tpl');


// пути к файлам шаблонов в вебпространстве
define('TEMPLATE_WEB_PATH', "/templates/{$template}/");
//>

//< Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php'); //  подключаем библиотеку Smarty 
$smarty = new Smarty(); // создаем экземпляр обьекта Smarty

// файлы шаблонов
$smarty->setTemplateDir(TEMPLATE_PREFIX);
$smarty->setCompileDir('../tmp/smarty/templates_c'); // куда складывать откомпилированные щаблоны
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setCompileDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TEMPLATE_WEB_PATH);
//>
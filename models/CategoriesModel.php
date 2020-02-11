<?php
/**
 *
 *Модель для таблицы категорий (categories)
 *
 */

/**
 * Получить дочерние кватегории для категорий $catId
 *
 * @param  integer $catId ID категории
 * @return array массив доченрних категорий
 */
function getChildrenForCat($catId)
{

}

function getAllMainCatsWithChildren(){
	global $db;
	$sql = 'SELECT * FROM categories WHERE parent_id=0';

	$rs = mysqli_query($db, $sql) ;
	$smartyRs = array();
	
	while($row = mysqli_fetch_assoc($rs)){
		$rsChildren = getChildrenForCat($row['id']);
		
		if($rsChildren){
			$row['children'] = $rsChildren;
		}

		$smartyRs[] = $row;
	}
	return $smartyRs;
}


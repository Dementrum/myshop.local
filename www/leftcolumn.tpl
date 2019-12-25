    <div class="container main_container">
        {*левый столбец*}
        <div id="left_column">
            <p class="menu_caption"> Меню: </p>
            <ul class="menu">
                {foreach $rsCategories as $item}
                   <li><a href="#">{$item['name']}</a></li>
                {/foreach}
            </ul>
        </div>
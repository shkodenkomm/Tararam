<?php
    $select = array(
        'where' => "is_active = true",
        'order' => 'id'
    );
    $mainMenu = new Model_MainMenu($select);
    $items = $mainMenu->getAllRows();

    $subMenu = new Model_SubMenu($select);
    $subItems = $subMenu->getAllRows();
?>

<div class="main_logo">
    <link rel="stylesheet" href="/web/css/top_nav.css">
    <link rel="stylesheet" href="/web/css/drop_down.css">
    <div class="logo_container">
        <span class="photoname">ЕЛЕНА ХОМЕНКО</span>
        <span class="palochka">&nbsp;&nbsp;|</span>
        <span>&nbsp;&nbsp;Фотограф Киев</span>
    </div>
    <div class=nav_container>
        <nav class="topnav">
            <?php
                $n = count($items)-1;
                for($i=0; $i<=$n ; $i++){

                    if($items[$i]["has_subitems"] == 1){

                        $mid = $items[$i]["id"];
                        $sits=[];

                        foreach ($subItems as $subItem){
                            if($subItem["id_main_item"] == $mid)
                                $sits[]=$subItem;
                        }

                        echo '
                           <div class="dropdown" id="menu1">
                              <a class="dropbtn nav-link" href="#" onclick="toogleMenu(\'menu1\')">'.$items[$i]["title"].'</a>
                              <div class="dropdown-content">';

                        foreach ($sits as $sit )
                            echo "<a class='nav-link' href='".$sit["href"]."'>".$sit["title"]."</a>";

                        echo '</div>
                          </div>';
                    } else{
                        echo "<a class='nav-link' href='".$items[$i]["href"]."'>".$items[$i]["title"]."</a>";
                    }

                    if($i<$n){
                        echo "<span>/</span>";
                    } } ?>

        </nav>
    </div>
</div>
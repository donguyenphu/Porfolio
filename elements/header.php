<?php
    $currentUrl = $_SERVER["SCRIPT_NAME"];
    $fileName = pathinfo($currentUrl, PATHINFO_BASENAME);
    $menu = [
        [
            'name' => 'Home',
            'link' => 'index.php',
        ],
        [
            'name' => 'About',
            'link' => 'detail.php',
        ],
        [
            'name' => 'Hobbys',
            'link' => 'hobby.php',
        ],
        [
            'name' => 'Activities',
            'link' => 'activities.php',
        ],
        [
            'name' => 'Reward',
            'link' => 'reward.php',
        ],
        [
            'name' => 'Contact',
            'link' => 'contact.php',
        ]
    ];
    $htmlMenus = '';
    foreach ($menu as $key => $value) {
        $active = '';
        if ($fileName == $value['link'] || (isset($value['child']) && in_array($fileName, $value['child']))) {
            $active = 'active';
        }
        $htmlMenus .=  '<div class="sectionElement '.$active.'">
                            <a href="'.$value['link'].'" class="sectionLink">'.$value['name'].'</a>
                        </div> ';
    }
?>
<header>
    <div class="headerWrapper">
        <div class="fullBrand">
            <div class="logo"><i class="fa-solid fa-laptop"></i></div>
            <a href="index.php" class="brandName">DoPhu</a>
        </div>  
        <div class="smallSectionsWrapper">
            <?php echo $htmlMenus; ?>
        </div>
    </div>
</header>
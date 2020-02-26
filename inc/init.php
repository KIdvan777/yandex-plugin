<?php
//  Init file function

define('ID', '4248e9c53ae94ac9ae65a05747fb1a88');
define('SECRET', '1a32b0433992432fa3503a239261af9f');



function yauza_init()
{
    // This function add a custom main page
    add_action( 'admin_menu', 'yauza_add_admin_page' );
    function yauza_add_admin_page()
    {
        add_menu_page( 'Web Admin Options', 'Web Master', 'manage_options', 'yauza_web_master', 'yauza_web_master_create_main_page', '', 110 );
    }

    // This function is gemerate the UI for main page
    function yauza_web_master_create_main_page()
    {
        // Yandex API
        include('ya_api.php');

        ?>
            <h1> Yandex Metrick</h1>


           <!--  <a href="https://oauth.yandex.ru/authorize?response_type=code&client_id=<?=ID?>" target="_blank">Авторизоваться
            </a> -->
            <?php
                // echo '<pre>';
                //     var_dump($obj);
                // echo '<pre>';
            ?>
                <ul>
                    <li>date 1: <?php echo $obj['query']['date1']; ?></li>
                    <li>date 2: <?php echo $obj['query']['date2']; ?></li>
                    <li>Просмотры: <?php echo $obj['query']['offline_window']; ?></li>
                    <li><?php echo $obj['query']['attribution']; ?></li>
                </ul>
            <?

    }
}

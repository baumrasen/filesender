<?php

include_once "pagemenuitem.php";

$maybe_display_aggregate_statistics_menu = false;

?>




<div id="menu" class="container">
    <div class="leftmenu">
        <ul>
            <?php

            if(!Auth::isGuest()) {
                pagemenuitem('upload');

                if(Config::get('guest_support_enabled')) {
                    pagemenuitem('guests');
                }
                
                pagemenuitem('transfers');

                if(Config::get('user_page'))
                    pagemenuitem('user');

            }

            ?>
        </ul>
    </div>

    <div class="rightmenu">
        <ul>

        <?php

            if(Config::get('lang_selector_enabled') && (count(Lang::getAvailableLanguages()) > 1)) {

                $page = GUI::currentPage();
                $url = '?s='.$page.'&lang=';

                $code = Lang::getCode();
                foreach(Lang::getAvailableLanguages() as $id => $dfn) {

                    if($id == $code) {
                        echo '<li><a href="'.$url.$id.'" class="current">'.Utilities::sanitizeOutput($dfn['name']).'</a></li>';
                    } else {
                        echo '<li><a href="'.$url.$id.'">'.Utilities::sanitizeOutput($dfn['name']).'</a></li>';
                    }

                }

            }


            pagemenuitem('help');
            pagemenuitem('about');

            if (Auth::isAuthenticated() && Auth::isSP()) {
                $url = AuthSP::logoffURL();
                if($url)
                    echo '<li><a href="'.Utilities::sanitizeOutput($url).'" id="topmenu_logoff">'.Lang::tr('logoff').'</a></li>';
            }else if (!Auth::isGuest()){
                if(Config::get('auth_sp_embedded')) {
                    pagemenuitem('logon');
                }else{
                    echo '<li><a href="'.Utilities::sanitizeOutput(AuthSP::logonURL()).'" id="topmenu_logon">'.Lang::tr('logon').'</a></li>';
                }
            }
        ?>
        </ul>

    </div>


</div>

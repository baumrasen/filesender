<?php

include_once "pagemenuitem.php";
include_once "vidattr.php";

$maybe_display_aggregate_statistics_menu = false;

$LanguageSelectorShown = false;
if(Config::get('lang_selector_enabled') && (count(Lang::getAvailableLanguages()) > 1)) {
    $LanguageSelectorShown   = true;
}

?>

<!-- New UI header - BEGIN - modification for my own website -->
<header class="main-header group max-w-[1450px] md:[&.out]:translate-y-[-100%] mx-auto scrolled:bg-white scrolled:dark:bg-gray-950 top-0 right-0 left-0 z-[100] py-16 scrolled:py-4 transition-all max-md:bg-white max-md:py-4 scrolled">
    <nav>
        <a class="fs-link fs-link--no-hover" href="<?php echo GUI::path() ?>">
            <?php GUI::includeLogo() ?>
        </a>
        <ul>
            <?php

                if(!Auth::isGuest()) {
                    pagemenuitem('upload');

                    pagemenuitem('transfers');

                    if(Config::get('guest_support_enabled')) {
                        pagemenuitem('guests');
                    }

                    if(Config::get('user_page')) {
                        pagemenuitem('user');
                    }

                    pagemenuitem('statistics');

                    pagemenuitem('admin');

                    if( $maybe_display_aggregate_statistics_menu ) {
                        if (AggregateStatistic::enabled()) {
                            pagemenuitem('aggregate_statistics');
                        }
                    }

                }

                if (!Auth::isAuthenticated()) {
                    pagemenuitem('help');
                    pagemenuitem('about');
                    pagemenuitem('privacy');
                }

            
                if (!Auth::isAuthenticated() && !Auth::isSP() && !Auth::isGuest())
                {
                    $faicon = 'fa-sign-in';
                    $icon = '<i class="fa '.$faicon.'"></i> ';

                    if(Config::get('auth_sp_embedded')) {
                        pagemenuitem('logon');
                    }else{
                        echo '<li><a class="fs-link" href="'.Utilities::sanitizeOutput(AuthSP::logonURL()).'" id="topmenu_logon">'.$icon.'<span>'.Lang::tr('logon').'</span>'.'</a></li>';
                    }
                }
            ?>

        </ul>
    </nav>
</header> <!-- New UI header - END -->

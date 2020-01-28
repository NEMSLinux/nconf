            <h2 class="header"><span>On-call</span></h2>
            <div class="box_content">
            <?php
            # generate on call menu

            $oncall_menu = array();
            array_push($oncall_menu, array("nav_links" => "Change on-call settings::overview.php?class=contact&amp;xmode=pikett", "friendly_name" => "", "grouping" => ""));
            if ($nemsver > 0) {
              array_push($oncall_menu, array("nav_links" => "Generate NEMS Config::generate_config.php", "friendly_name" => "", "grouping" => ""));
            } else {
              array_push($oncall_menu, array("nav_links" => "Generate Nagios Config::generate_config.php", "friendly_name" => "", "grouping" => ""));
            }
            create_menu($oncall_menu);

            ?>
            </div>

<?php
/**
 * Plugin Name: Survey Sparrow Shortcode
 * Plugin URI: https://github.com/yttechiepress/survey-sparrow-shortcode
 * Author: TechiePress
 * Author URI: https://github.com/yttechiepress/survey-sparrow-shortcode
 * Description: Survey Sparrow Shortcode
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: survey-sparrow-shortcode
*/

defined( 'ABSPATH' ) or die( 'No entry' );

add_shortcode( 'surveysparrow', 'techiepress_surveysparrow_shortcode' );

function techiepress_surveysparrow_shortcode() {
    ?>
    <!--Replace your JavaScript from Survey Sparrow here -->
    <div id="ss_survey_widget"></div><script>(function(){var e="ss-widget",t="script",a=document,r=window;var s,n,c;r.SS_WIDGET_TOKEN="tt-0f22b6";r.SS_ACCOUNT="techiepress.surveysparrow.com";r.SS_SURVEY_NAME="Customer-Satisfaction-Survey";if(!a.getElementById(e)){var S=function(){S.update(arguments)};S.args=[];S.update=function(e){S.args.push(e)};r.SparrowLauncher=S;s=a.getElementsByTagName(t);c=s[s.length-1];n=a.createElement(t);n.type="text/javascript";n.async=!0;n.id=e;n.src=["https://","techiepress.surveysparrow.com/widget/",r.SS_WIDGET_TOKEN].join("");c.parentNode.insertBefore(n,c)}})();</script>

    <?php
}

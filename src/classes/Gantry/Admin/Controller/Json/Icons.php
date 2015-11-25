<?php
/**
 * @package   Gantry5
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   Dual License: MIT or GNU/GPLv2 and later
 *
 * http://opensource.org/licenses/MIT
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Gantry Framework code that extends GPL code is considered GNU/GPLv2 and later
 */

namespace Gantry\Admin\Controller\Json;

use Gantry\Component\Controller\JsonController;
use Gantry\Component\Response\JsonResponse;

class Icons extends JsonController
{
    public function index()
    {
        $response = [];

        // Font Awesome Icons list [v4.5.0 - 694 icons]
        // NOTE: To get an updated list of icons:
        //       1. Go to: http://fortawesome.github.io/Font-Awesome/icons/
        //       2. Open Console in Deveveloper Tools
        //       3. Type this JS snippet: var list = []; $('.fontawesome-icon-list i').each(function(index, icon){ var name = icon.className.replace(/^fa\s/, ''); list.push(name); }); var output = '$list = ["' + list.join('", "') + '"];'; console.log(output); copy(output); console.info('The output has been copied to the clipboard, you can now CMD + V / CTRL + V to update the icons variable');
        //       4. Press Enter and replace the line below
        $list = ["fa-bluetooth", "fa-bluetooth-b", "fa-codiepie", "fa-credit-card-alt", "fa-edge", "fa-fort-awesome", "fa-hashtag", "fa-mixcloud", "fa-modx", "fa-pause-circle", "fa-pause-circle-o", "fa-percent", "fa-product-hunt", "fa-reddit-alien", "fa-scribd", "fa-shopping-bag", "fa-shopping-basket", "fa-stop-circle", "fa-stop-circle-o", "fa-usb", "fa-adjust", "fa-anchor", "fa-archive", "fa-area-chart", "fa-arrows", "fa-arrows-h", "fa-arrows-v", "fa-asterisk", "fa-at", "fa-automobile", "fa-balance-scale", "fa-ban", "fa-bank", "fa-bar-chart", "fa-bar-chart-o", "fa-barcode", "fa-bars", "fa-battery-0", "fa-battery-1", "fa-battery-2", "fa-battery-3", "fa-battery-4", "fa-battery-empty", "fa-battery-full", "fa-battery-half", "fa-battery-quarter", "fa-battery-three-quarters", "fa-bed", "fa-beer", "fa-bell", "fa-bell-o", "fa-bell-slash", "fa-bell-slash-o", "fa-bicycle", "fa-binoculars", "fa-birthday-cake", "fa-bluetooth", "fa-bluetooth-b", "fa-bolt", "fa-bomb", "fa-book", "fa-bookmark", "fa-bookmark-o", "fa-briefcase", "fa-bug", "fa-building", "fa-building-o", "fa-bullhorn", "fa-bullseye", "fa-bus", "fa-cab", "fa-calculator", "fa-calendar", "fa-calendar-check-o", "fa-calendar-minus-o", "fa-calendar-o", "fa-calendar-plus-o", "fa-calendar-times-o", "fa-camera", "fa-camera-retro", "fa-car", "fa-caret-square-o-down", "fa-caret-square-o-left", "fa-caret-square-o-right", "fa-caret-square-o-up", "fa-cart-arrow-down", "fa-cart-plus", "fa-cc", "fa-certificate", "fa-check", "fa-check-circle", "fa-check-circle-o", "fa-check-square", "fa-check-square-o", "fa-child", "fa-circle", "fa-circle-o", "fa-circle-o-notch", "fa-circle-thin", "fa-clock-o", "fa-clone", "fa-close", "fa-cloud", "fa-cloud-download", "fa-cloud-upload", "fa-code", "fa-code-fork", "fa-coffee", "fa-cog", "fa-cogs", "fa-comment", "fa-comment-o", "fa-commenting", "fa-commenting-o", "fa-comments", "fa-comments-o", "fa-compass", "fa-copyright", "fa-creative-commons", "fa-credit-card", "fa-crop", "fa-crosshairs", "fa-cube", "fa-cubes", "fa-cutlery", "fa-dashboard", "fa-database", "fa-desktop", "fa-diamond", "fa-dot-circle-o", "fa-download", "fa-edit", "fa-ellipsis-h", "fa-ellipsis-v", "fa-envelope", "fa-envelope-o", "fa-envelope-square", "fa-eraser", "fa-exchange", "fa-exclamation", "fa-exclamation-circle", "fa-exclamation-triangle", "fa-external-link", "fa-external-link-square", "fa-eye", "fa-eye-slash", "fa-eyedropper", "fa-fax", "fa-feed", "fa-female", "fa-fighter-jet", "fa-file-archive-o", "fa-file-audio-o", "fa-file-code-o", "fa-file-excel-o", "fa-file-image-o", "fa-file-movie-o", "fa-file-pdf-o", "fa-file-photo-o", "fa-file-picture-o", "fa-file-powerpoint-o", "fa-file-sound-o", "fa-file-video-o", "fa-file-word-o", "fa-file-zip-o", "fa-film", "fa-filter", "fa-fire", "fa-fire-extinguisher", "fa-flag", "fa-flag-checkered", "fa-flag-o", "fa-flash", "fa-flask", "fa-folder", "fa-folder-o", "fa-folder-open", "fa-folder-open-o", "fa-frown-o", "fa-futbol-o", "fa-gamepad", "fa-gavel", "fa-gear", "fa-gears", "fa-gift", "fa-glass", "fa-globe", "fa-graduation-cap", "fa-group", "fa-hand-grab-o", "fa-hand-lizard-o", "fa-hand-paper-o", "fa-hand-peace-o", "fa-hand-pointer-o", "fa-hand-rock-o", "fa-hand-scissors-o", "fa-hand-spock-o", "fa-hand-stop-o", "fa-hashtag", "fa-hdd-o", "fa-headphones", "fa-heart", "fa-heart-o", "fa-heartbeat", "fa-history", "fa-home", "fa-hotel", "fa-hourglass", "fa-hourglass-1", "fa-hourglass-2", "fa-hourglass-3", "fa-hourglass-end", "fa-hourglass-half", "fa-hourglass-o", "fa-hourglass-start", "fa-i-cursor", "fa-image", "fa-inbox", "fa-industry", "fa-info", "fa-info-circle", "fa-institution", "fa-key", "fa-keyboard-o", "fa-language", "fa-laptop", "fa-leaf", "fa-legal", "fa-lemon-o", "fa-level-down", "fa-level-up", "fa-life-bouy", "fa-life-buoy", "fa-life-ring", "fa-life-saver", "fa-lightbulb-o", "fa-line-chart", "fa-location-arrow", "fa-lock", "fa-magic", "fa-magnet", "fa-mail-forward", "fa-mail-reply", "fa-mail-reply-all", "fa-male", "fa-map", "fa-map-marker", "fa-map-o", "fa-map-pin", "fa-map-signs", "fa-meh-o", "fa-microphone", "fa-microphone-slash", "fa-minus", "fa-minus-circle", "fa-minus-square", "fa-minus-square-o", "fa-mobile", "fa-mobile-phone", "fa-money", "fa-moon-o", "fa-mortar-board", "fa-motorcycle", "fa-mouse-pointer", "fa-music", "fa-navicon", "fa-newspaper-o", "fa-object-group", "fa-object-ungroup", "fa-paint-brush", "fa-paper-plane", "fa-paper-plane-o", "fa-paw", "fa-pencil", "fa-pencil-square", "fa-pencil-square-o", "fa-percent", "fa-phone", "fa-phone-square", "fa-photo", "fa-picture-o", "fa-pie-chart", "fa-plane", "fa-plug", "fa-plus", "fa-plus-circle", "fa-plus-square", "fa-plus-square-o", "fa-power-off", "fa-print", "fa-puzzle-piece", "fa-qrcode", "fa-question", "fa-question-circle", "fa-quote-left", "fa-quote-right", "fa-random", "fa-recycle", "fa-refresh", "fa-registered", "fa-remove", "fa-reorder", "fa-reply", "fa-reply-all", "fa-retweet", "fa-road", "fa-rocket", "fa-rss", "fa-rss-square", "fa-search", "fa-search-minus", "fa-search-plus", "fa-send", "fa-send-o", "fa-server", "fa-share", "fa-share-alt", "fa-share-alt-square", "fa-share-square", "fa-share-square-o", "fa-shield", "fa-ship", "fa-shopping-bag", "fa-shopping-basket", "fa-shopping-cart", "fa-sign-in", "fa-sign-out", "fa-signal", "fa-sitemap", "fa-sliders", "fa-smile-o", "fa-soccer-ball-o", "fa-sort", "fa-sort-alpha-asc", "fa-sort-alpha-desc", "fa-sort-amount-asc", "fa-sort-amount-desc", "fa-sort-asc", "fa-sort-desc", "fa-sort-down", "fa-sort-numeric-asc", "fa-sort-numeric-desc", "fa-sort-up", "fa-space-shuttle", "fa-spinner", "fa-spoon", "fa-square", "fa-square-o", "fa-star", "fa-star-half", "fa-star-half-empty", "fa-star-half-full", "fa-star-half-o", "fa-star-o", "fa-sticky-note", "fa-sticky-note-o", "fa-street-view", "fa-suitcase", "fa-sun-o", "fa-support", "fa-tablet", "fa-tachometer", "fa-tag", "fa-tags", "fa-tasks", "fa-taxi", "fa-television", "fa-terminal", "fa-thumb-tack", "fa-thumbs-down", "fa-thumbs-o-down", "fa-thumbs-o-up", "fa-thumbs-up", "fa-ticket", "fa-times", "fa-times-circle", "fa-times-circle-o", "fa-tint", "fa-toggle-down", "fa-toggle-left", "fa-toggle-off", "fa-toggle-on", "fa-toggle-right", "fa-toggle-up", "fa-trademark", "fa-trash", "fa-trash-o", "fa-tree", "fa-trophy", "fa-truck", "fa-tty", "fa-tv", "fa-umbrella", "fa-university", "fa-unlock", "fa-unlock-alt", "fa-unsorted", "fa-upload", "fa-user", "fa-user-plus", "fa-user-secret", "fa-user-times", "fa-users", "fa-video-camera", "fa-volume-down", "fa-volume-off", "fa-volume-up", "fa-warning", "fa-wheelchair", "fa-wifi", "fa-wrench", "fa-hand-grab-o", "fa-hand-lizard-o", "fa-hand-o-down", "fa-hand-o-left", "fa-hand-o-right", "fa-hand-o-up", "fa-hand-paper-o", "fa-hand-peace-o", "fa-hand-pointer-o", "fa-hand-rock-o", "fa-hand-scissors-o", "fa-hand-spock-o", "fa-hand-stop-o", "fa-thumbs-down", "fa-thumbs-o-down", "fa-thumbs-o-up", "fa-thumbs-up", "fa-ambulance", "fa-automobile", "fa-bicycle", "fa-bus", "fa-cab", "fa-car", "fa-fighter-jet", "fa-motorcycle", "fa-plane", "fa-rocket", "fa-ship", "fa-space-shuttle", "fa-subway", "fa-taxi", "fa-train", "fa-truck", "fa-wheelchair", "fa-genderless", "fa-intersex", "fa-mars", "fa-mars-double", "fa-mars-stroke", "fa-mars-stroke-h", "fa-mars-stroke-v", "fa-mercury", "fa-neuter", "fa-transgender", "fa-transgender-alt", "fa-venus", "fa-venus-double", "fa-venus-mars", "fa-file", "fa-file-archive-o", "fa-file-audio-o", "fa-file-code-o", "fa-file-excel-o", "fa-file-image-o", "fa-file-movie-o", "fa-file-o", "fa-file-pdf-o", "fa-file-photo-o", "fa-file-picture-o", "fa-file-powerpoint-o", "fa-file-sound-o", "fa-file-text", "fa-file-text-o", "fa-file-video-o", "fa-file-word-o", "fa-file-zip-o", "fa-circle-o-notch", "fa-cog", "fa-gear", "fa-refresh", "fa-spinner", "fa-check-square", "fa-check-square-o", "fa-circle", "fa-circle-o", "fa-dot-circle-o", "fa-minus-square", "fa-minus-square-o", "fa-plus-square", "fa-plus-square-o", "fa-square", "fa-square-o", "fa-cc-amex", "fa-cc-diners-club", "fa-cc-discover", "fa-cc-jcb", "fa-cc-mastercard", "fa-cc-paypal", "fa-cc-stripe", "fa-cc-visa", "fa-credit-card", "fa-credit-card-alt", "fa-google-wallet", "fa-paypal", "fa-area-chart", "fa-bar-chart", "fa-bar-chart-o", "fa-line-chart", "fa-pie-chart", "fa-bitcoin", "fa-btc", "fa-cny", "fa-dollar", "fa-eur", "fa-euro", "fa-gbp", "fa-gg", "fa-gg-circle", "fa-ils", "fa-inr", "fa-jpy", "fa-krw", "fa-money", "fa-rmb", "fa-rouble", "fa-rub", "fa-ruble", "fa-rupee", "fa-shekel", "fa-sheqel", "fa-try", "fa-turkish-lira", "fa-usd", "fa-won", "fa-yen", "fa-align-center", "fa-align-justify", "fa-align-left", "fa-align-right", "fa-bold", "fa-chain", "fa-chain-broken", "fa-clipboard", "fa-columns", "fa-copy", "fa-cut", "fa-dedent", "fa-eraser", "fa-file", "fa-file-o", "fa-file-text", "fa-file-text-o", "fa-files-o", "fa-floppy-o", "fa-font", "fa-header", "fa-indent", "fa-italic", "fa-link", "fa-list", "fa-list-alt", "fa-list-ol", "fa-list-ul", "fa-outdent", "fa-paperclip", "fa-paragraph", "fa-paste", "fa-repeat", "fa-rotate-left", "fa-rotate-right", "fa-save", "fa-scissors", "fa-strikethrough", "fa-subscript", "fa-superscript", "fa-table", "fa-text-height", "fa-text-width", "fa-th", "fa-th-large", "fa-th-list", "fa-underline", "fa-undo", "fa-unlink", "fa-angle-double-down", "fa-angle-double-left", "fa-angle-double-right", "fa-angle-double-up", "fa-angle-down", "fa-angle-left", "fa-angle-right", "fa-angle-up", "fa-arrow-circle-down", "fa-arrow-circle-left", "fa-arrow-circle-o-down", "fa-arrow-circle-o-left", "fa-arrow-circle-o-right", "fa-arrow-circle-o-up", "fa-arrow-circle-right", "fa-arrow-circle-up", "fa-arrow-down", "fa-arrow-left", "fa-arrow-right", "fa-arrow-up", "fa-arrows", "fa-arrows-alt", "fa-arrows-h", "fa-arrows-v", "fa-caret-down", "fa-caret-left", "fa-caret-right", "fa-caret-square-o-down", "fa-caret-square-o-left", "fa-caret-square-o-right", "fa-caret-square-o-up", "fa-caret-up", "fa-chevron-circle-down", "fa-chevron-circle-left", "fa-chevron-circle-right", "fa-chevron-circle-up", "fa-chevron-down", "fa-chevron-left", "fa-chevron-right", "fa-chevron-up", "fa-exchange", "fa-hand-o-down", "fa-hand-o-left", "fa-hand-o-right", "fa-hand-o-up", "fa-long-arrow-down", "fa-long-arrow-left", "fa-long-arrow-right", "fa-long-arrow-up", "fa-toggle-down", "fa-toggle-left", "fa-toggle-right", "fa-toggle-up", "fa-arrows-alt", "fa-backward", "fa-compress", "fa-eject", "fa-expand", "fa-fast-backward", "fa-fast-forward", "fa-forward", "fa-pause", "fa-pause-circle", "fa-pause-circle-o", "fa-play", "fa-play-circle", "fa-play-circle-o", "fa-random", "fa-step-backward", "fa-step-forward", "fa-stop", "fa-stop-circle", "fa-stop-circle-o", "fa-youtube-play", "fa-500px", "fa-adn", "fa-amazon", "fa-android", "fa-angellist", "fa-apple", "fa-behance", "fa-behance-square", "fa-bitbucket", "fa-bitbucket-square", "fa-bitcoin", "fa-black-tie", "fa-bluetooth", "fa-bluetooth-b", "fa-btc", "fa-buysellads", "fa-cc-amex", "fa-cc-diners-club", "fa-cc-discover", "fa-cc-jcb", "fa-cc-mastercard", "fa-cc-paypal", "fa-cc-stripe", "fa-cc-visa", "fa-chrome", "fa-codepen", "fa-codiepie", "fa-connectdevelop", "fa-contao", "fa-credit-card-alt", "fa-css3", "fa-dashcube", "fa-delicious", "fa-deviantart", "fa-digg", "fa-dribbble", "fa-dropbox", "fa-drupal", "fa-edge", "fa-empire", "fa-expeditedssl", "fa-facebook", "fa-facebook-f", "fa-facebook-official", "fa-facebook-square", "fa-firefox", "fa-flickr", "fa-fonticons", "fa-fort-awesome", "fa-forumbee", "fa-foursquare", "fa-ge", "fa-get-pocket", "fa-gg", "fa-gg-circle", "fa-git", "fa-git-square", "fa-github", "fa-github-alt", "fa-github-square", "fa-gittip", "fa-google", "fa-google-plus", "fa-google-plus-square", "fa-google-wallet", "fa-gratipay", "fa-hacker-news", "fa-houzz", "fa-html5", "fa-instagram", "fa-internet-explorer", "fa-ioxhost", "fa-joomla", "fa-jsfiddle", "fa-lastfm", "fa-lastfm-square", "fa-leanpub", "fa-linkedin", "fa-linkedin-square", "fa-linux", "fa-maxcdn", "fa-meanpath", "fa-medium", "fa-mixcloud", "fa-modx", "fa-odnoklassniki", "fa-odnoklassniki-square", "fa-opencart", "fa-openid", "fa-opera", "fa-optin-monster", "fa-pagelines", "fa-paypal", "fa-pied-piper", "fa-pied-piper-alt", "fa-pinterest", "fa-pinterest-p", "fa-pinterest-square", "fa-product-hunt", "fa-qq", "fa-ra", "fa-rebel", "fa-reddit", "fa-reddit-alien", "fa-reddit-square", "fa-renren", "fa-safari", "fa-scribd", "fa-sellsy", "fa-share-alt", "fa-share-alt-square", "fa-shirtsinbulk", "fa-simplybuilt", "fa-skyatlas", "fa-skype", "fa-slack", "fa-slideshare", "fa-soundcloud", "fa-spotify", "fa-stack-exchange", "fa-stack-overflow", "fa-steam", "fa-steam-square", "fa-stumbleupon", "fa-stumbleupon-circle", "fa-tencent-weibo", "fa-trello", "fa-tripadvisor", "fa-tumblr", "fa-tumblr-square", "fa-twitch", "fa-twitter", "fa-twitter-square", "fa-usb", "fa-viacoin", "fa-vimeo", "fa-vimeo-square", "fa-vine", "fa-vk", "fa-wechat", "fa-weibo", "fa-weixin", "fa-whatsapp", "fa-wikipedia-w", "fa-windows", "fa-wordpress", "fa-xing", "fa-xing-square", "fa-y-combinator", "fa-y-combinator-square", "fa-yahoo", "fa-yc", "fa-yc-square", "fa-yelp", "fa-youtube", "fa-youtube-play", "fa-youtube-square", "fa-ambulance", "fa-h-square", "fa-heart", "fa-heart-o", "fa-heartbeat", "fa-hospital-o", "fa-medkit", "fa-plus-square", "fa-stethoscope", "fa-user-md", "fa-wheelchair"];
        $options = [
            'fw' => 'Fixed Width',
            'spin' => 'Spinning',
            'larger' => ['' => '- Size - ', 'lg' => 'Large', '2x' => '2x', '3x' => '3x', '4x' => '4x', '5x' => '5x'],
            'rotation' => ['' => '- Rotation -', 'flip-horizontal' => 'Horizontal Flip', 'flip-vertical' => 'Vertical Flip', 'rotate-90' => 'Rotate 90°', 'rotate-180' => 'Rotate 180°', 'rotate-270' => 'Rotate 270°']
        ];

        $list = array_unique($list);
        sort($list);

        $response['html'] = $this->container['admin.theme']->render('@gantry-admin/ajax/icons.html.twig', ['icons' => $list, 'options' => $options, 'total' => count($list)]);

        return new JsonResponse($response);
    }
}

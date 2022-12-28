<?php

class Themify_Icons_Icon_Picker {

	static function init() {
		add_action( 'wp_ajax_ti_get_icons', array( __CLASS__, 'wp_ajax_ti_get_icons' ) );
	}

	public static function wp_ajax_ti_get_icons() {
		include THEMIFY_ICONS_DIR . 'templates/icon-picker.php';
		die;
	}

	public static function get_icons() {
		return array(
			array(
				'key' => 'arrows',
				'label' => __( 'Arrows & Direction Icons', 'themify-icons' ),
				'icons' => array(
					'ti-arrow-up' => 'arrow-up',
					'ti-arrow-right' => 'arrow-right',
					'ti-arrow-left' => 'arrow-left',
					'ti-arrow-down' => 'arrow-down',
					'ti-arrows-vertical' => 'arrows-vertical',
					'ti-arrows-horizontal' => 'arrows-horizontal',
					'ti-angle-up' => 'angle-up',
					'ti-angle-right' => 'angle-right',
					'ti-angle-left' => 'angle-left',
					'ti-angle-down' => 'angle-down',
					'ti-angle-double-up' => 'angle-double-up',
					'ti-angle-double-right' => 'angle-double-right',
					'ti-angle-double-left' => 'angle-double-left',
					'ti-angle-double-down' => 'angle-double-down',
					'ti-move' => 'move',
					'ti-fullscreen' => 'fullscreen',
					'ti-arrow-top-right' => 'arrow-top-right',
					'ti-arrow-top-left' => 'arrow-top-left',
					'ti-arrow-circle-up' => 'arrow-circle-up',
					'ti-arrow-circle-right' => 'arrow-circle-right',
					'ti-arrow-circle-left' => 'arrow-circle-left',
					'ti-arrow-circle-down' => 'arrow-circle-down',
					'ti-arrows-corner' => 'arrows-corner',
					'ti-split-v' => 'split-v',
					'ti-split-v-alt' => 'split-v-alt',
					'ti-split-h' => 'split-h',
					'ti-hand-point-up' => 'hand-point-up',
					'ti-hand-point-right' => 'hand-point-right',
					'ti-hand-point-left' => 'hand-point-left',
					'ti-hand-point-down' => 'hand-point-down',
					'ti-back-right' => 'back-right',
					'ti-back-left' => 'back-left',
					'ti-exchange-vertical' => 'exchange-vertical',
				)
			),
			array(
				'key' => 'web',
				'label' => __( 'Web App Icons', 'themify-icons' ),
				'icons' => array(
					'ti-wand' => 'wand',
					'ti-save' => 'save',
					'ti-save-alt' => 'save-alt',
					'ti-direction' => 'direction',
					'ti-direction-alt' => 'direction-alt',
					'ti-user' => 'user',
					'ti-link' => 'link',
					'ti-unlink' => 'unlink',
					'ti-trash' => 'trash',
					'ti-target' => 'target',
					'ti-tag' => 'tag',
					'ti-desktop' => 'desktop',
					'ti-tablet' => 'tablet',
					'ti-mobile' => 'mobile',
					'ti-email' => 'email',
					'ti-star' => 'star',
					'ti-spray' => 'spray',
					'ti-signal' => 'signal',
					'ti-shopping-cart' => 'shopping-cart',
					'ti-shopping-cart-full' => 'shopping-cart-full',
					'ti-settings' => 'settings',
					'ti-search' => 'search',
					'ti-zoom-in' => 'zoom-in',
					'ti-zoom-out' => 'zoom-out',
					'ti-cut' => 'cut',
					'ti-ruler' => 'ruler',
					'ti-ruler-alt-2' => 'ruler-alt-2',
					'ti-ruler-pencil' => 'ruler-pencil',
					'ti-ruler-alt' => 'ruler-alt',
					'ti-bookmark' => 'bookmark',
					'ti-bookmark-alt' => 'bookmark-alt',
					'ti-reload' => 'reload',
					'ti-plus' => 'plus',
					'ti-minus' => 'minus',
					'ti-close' => 'close',
					'ti-pin' => 'pin',
					'ti-pencil' => 'pencil',
					'ti-pencil-alt' => 'pencil-alt',
					'ti-paint-roller' => 'paint-roller',
					'ti-paint-bucket' => 'paint-bucket',
					'ti-na' => 'na',
					'ti-medall' => 'medall',
					'ti-medall-alt' => 'medall-alt',
					'ti-marker' => 'marker',
					'ti-marker-alt' => 'marker-alt',
					'ti-lock' => 'lock',
					'ti-unlock' => 'unlock',
					'ti-location-arrow' => 'location-arrow',
					'ti-layout' => 'layout',
					'ti-layers' => 'layers',
					'ti-layers-alt' => 'layers-alt',
					'ti-key' => 'key',
					'ti-image' => 'image',
					'ti-heart' => 'heart',
					'ti-heart-broken' => 'heart-broken',
					'ti-hand-stop' => 'hand-stop',
					'ti-hand-open' => 'hand-open',
					'ti-hand-drag' => 'hand-drag',
					'ti-flag' => 'flag',
					'ti-flag-alt' => 'flag-alt',
					'ti-flag-alt-2' => 'flag-alt-2',
					'ti-eye' => 'eye',
					'ti-import' => 'import',
					'ti-export' => 'export',
					'ti-cup' => 'cup',
					'ti-crown' => 'crown',
					'ti-comments' => 'comments',
					'ti-comment' => 'comment',
					'ti-comment-alt' => 'comment-alt',
					'ti-thought' => 'thought',
					'ti-clip' => 'clip',
					'ti-check' => 'check',
					'ti-check-box' => 'check-box',
					'ti-camera' => 'camera',
					'ti-announcement' => 'announcement',
					'ti-brush' => 'brush',
					'ti-brush-alt' => 'brush-alt',
					'ti-palette' => 'palette',
					'ti-briefcase' => 'briefcase',
					'ti-bolt' => 'bolt',
					'ti-bolt-alt' => 'bolt-alt',
					'ti-blackboard' => 'blackboard',
					'ti-bag' => 'bag',
					'ti-world' => 'world',
					'ti-wheelchair' => 'wheelchair',
					'ti-car' => 'car',
					'ti-truck' => 'truck',
					'ti-timer' => 'timer',
					'ti-ticket' => 'ticket',
					'ti-thumb-up' => 'thumb-up',
					'ti-thumb-down' => 'thumb-down',
					'ti-stats-up' => 'stats-up',
					'ti-stats-down' => 'stats-down',
					'ti-shine' => 'shine',
					'ti-shift-right' => 'shift-right',
					'ti-shift-left' => 'shift-left',
					'ti-shift-right-alt' => 'shift-right-alt',
					'ti-shift-left-alt' => 'shift-left-alt',
					'ti-shield' => 'shield',
					'ti-notepad' => 'notepad',
					'ti-server' => 'server',
					'ti-pulse' => 'pulse',
					'ti-printer' => 'printer',
					'ti-power-off' => 'power-off',
					'ti-plug' => 'plug',
					'ti-pie-chart' => 'pie-chart',
					'ti-panel' => 'panel',
					'ti-package' => 'package',
					'ti-music' => 'music',
					'ti-music-alt' => 'music-alt',
					'ti-mouse' => 'mouse',
					'ti-mouse-alt' => 'mouse-alt',
					'ti-money' => 'money',
					'ti-microphone' => 'microphone',
					'ti-menu' => 'menu',
					'ti-menu-alt' => 'menu-alt',
					'ti-map' => 'map',
					'ti-map-alt' => 'map-alt',
					'ti-location-pin' => 'location-pin',
					'ti-light-bulb' => 'light-bulb',
					'ti-info' => 'info',
					'ti-infinite' => 'infinite',
					'ti-id-badge' => 'id-badge',
					'ti-hummer' => 'hummer',
					'ti-home' => 'home',
					'ti-help' => 'help',
					'ti-headphone' => 'headphone',
					'ti-harddrives' => 'harddrives',
					'ti-harddrive' => 'harddrive',
					'ti-gift' => 'gift',
					'ti-game' => 'game',
					'ti-filter' => 'filter',
					'ti-files' => 'files',
					'ti-file' => 'file',
					'ti-zip' => 'zip',
					'ti-folder' => 'folder',
					'ti-envelope' => 'envelope',
					'ti-dashboard' => 'dashboard',
					'ti-cloud' => 'cloud',
					'ti-cloud-up' => 'cloud-up',
					'ti-cloud-down' => 'cloud-down',
					'ti-clipboard' => 'clipboard',
					'ti-calendar' => 'calendar',
					'ti-book' => 'book',
					'ti-bell' => 'bell',
					'ti-basketball' => 'basketball',
					'ti-bar-chart' => 'bar-chart',
					'ti-bar-chart-alt' => 'bar-chart-alt',
					'ti-archive' => 'archive',
					'ti-anchor' => 'anchor',
					'ti-alert' => 'alert',
					'ti-alarm-clock' => 'alarm-clock',
					'ti-agenda' => 'agenda',
					'ti-write' => 'write',
					'ti-wallet' => 'wallet',
					'ti-video-clapper' => 'video-clapper',
					'ti-video-camera' => 'video-camera',
					'ti-vector' => 'vector',
					'ti-support' => 'support',
					'ti-stamp' => 'stamp',
					'ti-slice' => 'slice',
					'ti-shortcode' => 'shortcode',
					'ti-receipt' => 'receipt',
					'ti-pin2' => 'pin2',
					'ti-pin-alt' => 'pin-alt',
					'ti-pencil-alt2' => 'pencil-alt2',
					'ti-eraser' => 'eraser',
					'ti-more' => 'more',
					'ti-more-alt' => 'more-alt',
					'ti-microphone-alt' => 'microphone-alt',
					'ti-magnet' => 'magnet',
					'ti-line-double' => 'line-double',
					'ti-line-dotted' => 'line-dotted',
					'ti-line-dashed' => 'line-dashed',
					'ti-ink-pen' => 'ink-pen',
					'ti-info-alt' => 'info-alt',
					'ti-help-alt' => 'help-alt',
					'ti-headphone-alt' => 'headphone-alt',
					'ti-gallery' => 'gallery',
					'ti-face-smile' => 'face-smile',
					'ti-face-sad' => 'face-sad',
					'ti-credit-card' => 'credit-card',
					'ti-comments-smiley' => 'comments-smiley',
					'ti-time' => 'time',
					'ti-share' => 'share',
					'ti-share-alt' => 'share-alt',
					'ti-rocket' => 'rocket',
					'ti-new-window' => 'new-window',
					'ti-rss' => 'rss',
					'ti-rss-alt' => 'rss-alt',
				)
			),
			array(
				'key' => 'control',
				'label' => __( 'Control Icons', 'themify-icons' ),
				'icons' => array(
					'ti-control-stop' => 'control-stop',
					'ti-control-shuffle' => 'control-shuffle',
					'ti-control-play' => 'control-play',
					'ti-control-pause' => 'control-pause',
					'ti-control-forward' => 'control-forward',
					'ti-control-backward' => 'control-backward',
					'ti-volume' => 'volume',
					'ti-control-skip-forward' => 'control-skip-forward',
					'ti-control-skip-backward' => 'control-skip-backward',
					'ti-control-record' => 'control-record',
					'ti-control-eject' => 'control-eject',
				)
			),
			array(
				'key' => 'text-editor',
				'label' => __( 'Text Editor', 'themify-icons' ),
				'icons' => array(
					'ti-paragraph' => 'paragraph',
					'ti-uppercase' => 'uppercase',
					'ti-underline' => 'underline',
					'ti-text' => 'text',
					'ti-Italic' => 'Italic',
					'ti-smallcap' => 'smallcap',
					'ti-list' => 'list',
					'ti-list-ol' => 'list-ol',
					'ti-align-right' => 'align-right',
					'ti-align-left' => 'align-left',
					'ti-align-justify' => 'align-justify',
					'ti-align-center' => 'align-center',
					'ti-quote-right' => 'quote-right',
					'ti-quote-left' => 'quote-left',
				)
			),
			array(
				'key' => 'layout',
				'label' => __( 'Layout Icons', 'themify-icons' ),
				'icons' => array(
					'ti-layout-width-full' => 'layout-width-full',
					'ti-layout-width-default' => 'layout-width-default',
					'ti-layout-width-default-alt' => 'layout-width-default-alt',
					'ti-layout-tab' => 'layout-tab',
					'ti-layout-tab-window' => 'layout-tab-window',
					'ti-layout-tab-v' => 'layout-tab-v',
					'ti-layout-tab-min' => 'layout-tab-min',
					'ti-layout-slider' => 'layout-slider',
					'ti-layout-slider-alt' => 'layout-slider-alt',
					'ti-layout-sidebar-right' => 'layout-sidebar-right',
					'ti-layout-sidebar-none' => 'layout-sidebar-none',
					'ti-layout-sidebar-left' => 'layout-sidebar-left',
					'ti-layout-placeholder' => 'layout-placeholder',
					'ti-layout-menu' => 'layout-menu',
					'ti-layout-menu-v' => 'layout-menu-v',
					'ti-layout-menu-separated' => 'layout-menu-separated',
					'ti-layout-menu-full' => 'layout-menu-full',
					'ti-layout-media-right' => 'layout-media-right',
					'ti-layout-media-right-alt' => 'layout-media-right-alt',
					'ti-layout-media-overlay' => 'layout-media-overlay',
					'ti-layout-media-overlay-alt' => 'layout-media-overlay-alt',
					'ti-layout-media-overlay-alt-2' => 'layout-media-overlay-alt-2',
					'ti-layout-media-left' => 'layout-media-left',
					'ti-layout-media-left-alt' => 'layout-media-left-alt',
					'ti-layout-media-center' => 'layout-media-center',
					'ti-layout-media-center-alt' => 'layout-media-center-alt',
					'ti-layout-list-thumb' => 'layout-list-thumb',
					'ti-layout-list-thumb-alt' => 'layout-list-thumb-alt',
					'ti-layout-list-post' => 'layout-list-post',
					'ti-layout-list-large-image' => 'layout-list-large-image',
					'ti-layout-line-solid' => 'layout-line-solid',
					'ti-layout-grid4' => 'layout-grid4',
					'ti-layout-grid3' => 'layout-grid3',
					'ti-layout-grid2' => 'layout-grid2',
					'ti-layout-grid2-thumb' => 'layout-grid2-thumb',
					'ti-layout-cta-right' => 'layout-cta-right',
					'ti-layout-cta-left' => 'layout-cta-left',
					'ti-layout-cta-center' => 'layout-cta-center',
					'ti-layout-cta-btn-right' => 'layout-cta-btn-right',
					'ti-layout-cta-btn-left' => 'layout-cta-btn-left',
					'ti-layout-column4' => 'layout-column4',
					'ti-layout-column3' => 'layout-column3',
					'ti-layout-column2' => 'layout-column2',
					'ti-layout-accordion-separated' => 'layout-accordion-separated',
					'ti-layout-accordion-merged' => 'layout-accordion-merged',
					'ti-layout-accordion-list' => 'layout-accordion-list',
					'ti-widgetized' => 'widgetized',
					'ti-widget' => 'widget',
					'ti-widget-alt' => 'widget-alt',
					'ti-view-list' => 'view-list',
					'ti-view-list-alt' => 'view-list-alt',
					'ti-view-grid' => 'view-grid',
					'ti-upload' => 'upload',
					'ti-download' => 'download',
					'ti-loop' => 'loop',
					'ti-layout-sidebar-2' => 'layout-sidebar-2',
					'ti-layout-grid4-alt' => 'layout-grid4-alt',
					'ti-layout-grid3-alt' => 'layout-grid3-alt',
					'ti-layout-grid2-alt' => 'layout-grid2-alt',
					'ti-layout-column4-alt' => 'layout-column4-alt',
					'ti-layout-column3-alt' => 'layout-column3-alt',
					'ti-layout-column2-alt' => 'layout-column2-alt',
				)
			),
			array(
				'key' => 'brand',
				'label' => __( 'Brand Icons', 'themify-icons' ),
				'icons' => array(
					'ti-flickr' => 'flickr',
					'ti-flickr-alt' => 'flickr-alt',
					'ti-instagram' => 'instagram',
					'ti-google' => 'google',
					'ti-github' => 'github',
					'ti-facebook' => 'facebook',
					'ti-dropbox' => 'dropbox',
					'ti-dropbox-alt' => 'dropbox-alt',
					'ti-dribbble' => 'dribbble',
					'ti-apple' => 'apple',
					'ti-android' => 'android',
					'ti-yahoo' => 'yahoo',
					'ti-trello' => 'trello',
					'ti-stack-overflow' => 'stack-overflow',
					'ti-soundcloud' => 'soundcloud',
					'ti-sharethis' => 'sharethis',
					'ti-sharethis-alt' => 'sharethis-alt',
					'ti-reddit' => 'reddit',
					'ti-microsoft' => 'microsoft',
					'ti-microsoft-alt' => 'microsoft-alt',
					'ti-linux' => 'linux',
					'ti-jsfiddle' => 'jsfiddle',
					'ti-joomla' => 'joomla',
					'ti-html5' => 'html5',
					'ti-css3' => 'css3',
					'ti-drupal' => 'drupal',
					'ti-wordpress' => 'wordpress',
					'ti-tumblr' => 'tumblr',
					'ti-tumblr-alt' => 'tumblr-alt',
					'ti-skype' => 'skype',
					'ti-youtube' => 'youtube',
					'ti-vimeo' => 'vimeo',
					'ti-vimeo-alt' => 'vimeo-alt',
					'ti-twitter' => 'twitter',
					'ti-twitter-alt' => 'twitter-alt',
					'ti-linkedin' => 'linkedin',
					'ti-pinterest' => 'pinterest',
					'ti-pinterest-alt' => 'pinterest-alt',
					'ti-themify-logo' => 'themify-logo',
					'ti-themify-favicon' => 'themify-favicon',
					'ti-themify-favicon-alt' => 'themify-favicon-alt',
				)
			),
		);
	}
}
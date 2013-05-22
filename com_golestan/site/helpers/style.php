<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

class GolestanHelpersStyle {
	function load() {
		$document = JFactory::getDocument();

		//stylesheets
		$document->addStylesheet(JURI::base() . 'components/com_golestan/assets/css/style.css');

		//javascripts
		$document->addScript(JURI::base() . 'components/com_golestan/assets/js/golestan.js');
	}

}

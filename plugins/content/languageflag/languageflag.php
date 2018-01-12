<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.languageflag
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * An example custom language flag plugin.
 *
 * @since  1.6
 */
class PlgContentLanguageFlag extends JPlugin
{
	/**
	 * content trigger
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   object   $article  The article object.  Note $article->text is also available
	 * @param   mixed    $params   The article params
	 * @param   integer  $page     The 'page' number
	 *
	 * @return  mixed  Always returns void or true
	 *
	 * @since   1.5
	 */

	public function onContentPrepare($context, $article, $params, $page = 0)
	{
		$countryText = array();
		$countryText[0] = '%{en}%';
		$countryText[1] = '%{fr}%';
		$countryText[2] = '%{us}%';
		$countryText[3] = '%{ind}%';
		$replacementCountryFlag = array();

		$replacementCountryFlag[0] = '<img src="images/en.png" alt="UK Flag" title="UK Flag" />';
		$replacementCountryFlag[1] = '<img src="images/fr.png" alt="FR Flag" title="FR Flag" />';
		$replacementCountryFlag[2] = '<img src="images/us.png" alt="US Flag" title="US Flag" />';
		$replacementCountryFlag[3] = '<img src="images/ind.png" alt="India Flag" title="India Flag" />';

		$article->text = preg_replace($countryText, $replacementCountryFlag, $article->text);

		return true;
	}
}

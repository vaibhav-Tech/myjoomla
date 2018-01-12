<?php
defined('_JEXEC') or die;
class PlgUserWelcome extends JPlugin
{
	public function onUserAfterLogin()
	{
		/** get the user details to display the username on successfull login
		 */
		$user=JFactory::getUser();

		/** get the global config details to display the sitename on successfull login
		 */
		$config=JFactory::getConfig();

		/** get the application details to display the error/success/simple message on successfull login
		 */
		$app=JFactory::getApplication();

		if (!$app->isAdmin())
		{
			$app->enqueueMessage(JText::_('Hi '.$user->name.', welcome to '.$config->get('sitename')), 'message');
		}
	}

	public function onUserLogout()
	{

		$app=JFactory::getApplication();

		if (!$app->isAdmin())
		{
			$url = 'index.php/author-login';
			session_destroy();
			$app->redirect(JRoute::_(JURI::root(). $url),"See ya, soon! Bye-bye!");
		}

	}
}
?>

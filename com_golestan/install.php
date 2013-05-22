    <?php // no direct access
    defined( '_JEXEC' ) or die( 'Restricted access' );
    jimport('joomla.installer.installer');
    jimport('joomla.installer.helper');
	
	    /**
    * Method to install the component
    *
    * @param mixed $parent The class calling this method
    * @return void
    */
    function install($parent)
    {
		echo JText::_('COM_GOLESTAN_INSTALL_SUCCESSFULL');
    }
	
	    /**
    * Method to update the component
    *
    * @param mixed $parent The class calling this method
    * @return void
    */
    function update($parent)
    {
		echo JText::_('COM_GOLESTAN_UPDATE_SUCCESSFULL');
    }
	
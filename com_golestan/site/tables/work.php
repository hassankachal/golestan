<?php defined( '_JEXEC' ) or die( 'Restricted access' );
 
class TableWork extends JTable
{
/**
* Constructor
*
* @param object Database connector object
*/
function __construct( &$db ) {
parent::__construct('#__golestan_works', 'work_id', $db);
}
}
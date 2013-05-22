<?php defined( '_JEXEC' ) or die( 'Restricted access' );
 
class TableDeparted extends JTable
{
/**
* Constructor
*
* @param object Database connector object
*/
function __construct( &$db ) {
parent::__construct('#__golestan_departed', 'departed_id', $db);
}
}
<?php // no direct access
defined('_JEXEC') or die('Restricted access');

class GolestanModelsDeparted extends GolestanModelsDefault {
	/**
	 * Protected fields
	 **/
	var $_departed_id = null;
	var $_user_id = null;
	var $_pagination = null;
	var $_total = null;
	var $_published = 1;
	var $_waitlist = FALSE;

	function __construct() {
		parent::__construct();
	}

	/**
	 * Builds the query to be used by the departed model
	 * @return   object  Query object
	 *
	 *
	 */
	protected function _buildQuery() {
		$db = JFactory::getDBO();
		$query = $db->getQuery(TRUE);

		$query->select('d.departed_id, d.fname, d.lname, d.father_name, d.mother_name, d.spouse_fname, 
					d.spouse_lname, d.gender, d.birth_date, d.birth_place, d.death_date, d.age, d.cemetery,
					d.makan, d.gheteh, d.radif, d.sotoon, d.image, d.publish_date');
		$query->from('#__golestan_departed as d');

		return $query;
	}

	/**
	 * Builds the filter for the query
	 * @param    object  Query object
	 * @return   object  Query object
	 *
	 */
	protected function _buildWhere(&$query) {

		if (is_numeric($this->departed_id)) {
			$query->where('d.departed_id = ' . (int)$this->departed_id);
		}

		$query->where('d.published = ' . (int)$this->_published);

		return $query;
	}
	
	/*function store() {
	}

	function getDeparted() {
	}

	function getDeparteds() {
	}

	function populateState() {
	}*/

}

<?php defined('_JEXEC') or die('Restricted access');
class GolestanControllersAdd extends JControllerBase {
	public function execute() {

		$return = array("success" => false);

		$model = new GolestanModelsDeparted();
		if ($row = $model->store()) {
			$return['success'] = true;
			$return['msg'] = JText::_('COM_GOLESTAN_DEPARTED_SAVE_SUCCESS');

			$departedView = GolestanHelpersView::load('Departed', '_entry', 'phtml');
			$departedView->departed = $row;

			ob_start();
			echo $departedView->render();
			$html = ob_get_contents();
			ob_clean();

			$return['html'] = $html;
		} else {
			$return['msg'] = JText::_('COM_GOLESTAN_DEPARTED_SAVE_FAILURE');
		}
		echo json_encode($return);
	}

}

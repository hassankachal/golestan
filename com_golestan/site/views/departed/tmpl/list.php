<h2 class="page-header"><?php echo JText::_('COM_GOLESTAN_THE_DEPARTED'); ?></h2>
<div class="row-fluid">
	<?php for($i=0, $n = count($this->departeds);$i<$n;$i++) { 
	        $this->_departedListView->departed = $this->departeds[$i];
	        echo $this->_departedListView->render();
	} ?>
</div>
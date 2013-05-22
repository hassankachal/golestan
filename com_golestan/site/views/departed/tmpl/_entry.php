<tr>
  <td>
    <div class="media" id="departed-row-<?php echo $this->departed->departed_id; ?>">
      <a class="pull-left" href="<?php echo JRoute::_('index.php?option=com_lendr&view=departed&layout=departed&id='.$this->departed->departed_id); ?>">
        <img class="media-object" src="http://covers.openlibrary.org/b/isbn/<?php echo $this->departed->isbn; ?>-S.jpg">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><a href="<?php echo JRoute::_('index.php?option=com_lendr&view=departed&layout=departed&id='.$this->departed->departed_id); ?>"><?php echo $this->departed->title; ?></a></h4>
        <span class="muted"><?php echo $this->departed->author; ?></span>
        <p><?php echo $this->departed->summary; ?></p>
      </div>
    </div>
  </td>
  <td class="small">
    <?php if(isset($this->departed->waitlist_id) && $this->departed->waitlist_id > 0) { ?>
      <span class="label label-warning"><?php echo JText::_('COM_LENDR_REQUESTED'); ?></span>
    <?php } else { ?>
      <span class="label label-<?php echo $this->departed->lent ? 'warning' : 'success'; ?>"><?php echo $this->departed->lent ? JText::_('COM_LENDR_LENT') : JText::_('COM_LENDR_AVAILABLE'); ?></span>
    <?php } ?>
  </td>
  <td class="small">
    <?php if($this->departed->user_id == JFactory::getUser()->id) { ?>
              <p class="pull-right">
                <?php if ($this->departed->lent) { ?>
                    <a href="javascript:void(0);" role="button" class="btn btn-info btn-large" onclick="returnDepartedModal('<?php echo $this->departed->departed_id; ?>');"><?php echo JText::_('COM_LENDR_RETURN'); ?></a>                   
                <?php } elseif($this->departed->waitlist_id > 0) { ?>
                 <a href="javascript:void(0);" class="btn btn-large btn-success" role="button" onclick="lendDepartedModal('<?php echo $this->departed->departed_id; ?>','<?php echo $this->departed->borrower; ?>');"><?php echo JText::_('COM_GOLESTAN_LEND_BOOK'); ?></a>
                <?php } ?>
             </p>
            <div class="btn-group pull-right">
                <a href="javascript:void(0);" class="btn btn-small"><i class="icon icon-trash"></i> <?php echo JText::_('COM_LENDR_DELETE'); ?></a>
            </div>
          <?php } else { 
      
              if(($this->departed->waitlist_id > 0) && $this->departed->user_id == JFactory::getUser()->id) { ?>
              
              <a href="javascript:void(0);" onclick="cancelRequest(<?php echo $this->departed->departed_id; ?>);" class="btn btn-danger"><?php echo JText::_('COM_LENDR_CANCEL_REQUEST'); ?></a>
              <?php } else { ?>
              <div class="btn-group">
                <a href="javascript:void(0);" onclick="borrowdepartedModal(<?php echo $this->departed->departed_id; ?>);" class="btn"><?php echo JText::_('COM_LENDR_BORROW'); ?></a>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0);" onclick="addToWishlist('<?php echo $this->departed->departed_id; ?>');"><?php echo JText::_('COM_LENDR_ADD_WISHLIST'); ?></a></li>
                  <li><a href="#"><?php echo JText::_('COM_LENDR_WRITE_REVIEW'); ?></a></li>
                </ul>
              </div>
              
              <?php } 
          } ?>
  </td>
</tr>

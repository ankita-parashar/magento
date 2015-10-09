<?php
/**
 * Free Resource subcategorys admin block
 *
 * @category    ICC
 * @package     ICC_Freeresources
  */
class ICC_Freeresources_Block_Adminhtml_Freeresource_Subcategory
    extends Mage_Adminhtml_Block_Widget_Grid_Container {
    /**
     * constructor
     * @access public
     * @return void

     */
    public function __construct(){
        $this->_controller = 'adminhtml_freeresource_subcategory';
        $this->_blockGroup = 'icc_freeresources';
        parent::__construct();
        $this->_headerText = Mage::helper('icc_freeresources')->__('Manage Sub Category');
        $this->_updateButton('add', 'label', Mage::helper('icc_freeresources')->__('Add Sub Category'));
    }
}

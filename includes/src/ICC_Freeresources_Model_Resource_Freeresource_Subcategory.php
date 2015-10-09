<?php
/**
 * Free Resource sub category resource model
 *
 * @category    ICC
 * @package     ICC_Freeresources
 */
class ICC_Freeresources_Model_Resource_Freeresource_Subcategory
    extends Mage_Core_Model_Resource_Db_Abstract {
    /**
     * constructor
     * @access public
     */
    public function _construct(){
        $this->_init('icc_freeresources/freeresource_subcategory', 'subcategory_id');
    }

}
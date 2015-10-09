<?php
/**
 * Onepage checkout block
 *
 * @category   ICC
 * @package    ICC_Volumelicense
 */
class ICC_Volumelicense_Block_Checkout_Onepage_Volumelicense extends Mage_Checkout_Block_Onepage_Abstract
{
    protected function _construct()
    {
        $this->getCheckout()->setStepData('volumelicense', array(
            'label'     => Mage::helper('checkout')->__('Volume License Users'),
            'is_show'   => $this->isShow()
        ));

        parent::_construct();
    }
}
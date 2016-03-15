<?php

class Kmagen_HideCODCustomerGroup_Model_System_Config_Customergroups
{
    protected $_options;

    public function toOptionArray()
    {
        if (!$this->_options) {
            $this->_options = Mage::getResourceModel('customer/group_collection')
                ->loadData()->toOptionArray();
        }
        return $this->_options;
    }
}

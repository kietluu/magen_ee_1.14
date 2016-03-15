<?php

class Kmagen_HideCODCustomerGroup_Model_Observer
{
	public function paymentMethodIsActive(Varien_Event_Observer $observer)
	{
		$method = $observer->getEvent()->getMethodInstance();
		$groupId = Mage::getStoreConfig('paymentfilter/export_invoice/specificgroup', Mage::app()->getStore());

		if (Mage::getStoreConfig('paymentfilter/export_invoice/active', Mage::app()->getStore())) {
			$roleId = Mage::getSingleton('customer/session')->getCustomerGroupId();
			if ($method->getCode() == 'phoenix_cashondelivery') {
				if ($roleId == $groupId) {
					$result = $observer->getEvent()->getResult();
					$result->isAvailable = false;
					return;
				}
			}
		}
	}
}

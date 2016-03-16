<?php
class Kmagen_DecimalPrice_Model_Core_Store extends  Mage_Core_Model_Store{
	/**
	 * Round price
	 *
	 * @param mixed $price
	 * @return double
	 */
	public function roundPrice($price)
	{
		return floor($price);
	}
}
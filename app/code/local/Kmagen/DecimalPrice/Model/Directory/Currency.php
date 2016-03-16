<?php

class Kmagen_DecimalPrice_Model_Directory_Currency extends Mage_Directory_Model_Currency {
	/**
	 * Override Format price to currency format: exclude decimal
	 *
	 * @param float $price
	 * @param array $options
	 * @param bool $includeContainer
	 * @param bool $addBrackets
	 * @return string
	 */
	public function format($price, $options = array(), $includeContainer = true, $addBrackets = false)
	{
		return $this->formatPrecision($price, 0, $options, $includeContainer, $addBrackets);
	}

}
<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

class Ess_M2ePro_Model_Ebay_Magento_Product_Rule_Custom_EbayStartDate
    extends Ess_M2ePro_Model_Magento_Product_Rule_Custom_Abstract
{
    //########################################

    /**
     * @return string
     */
    public function getAttributeCode()
    {
        return 'ebay_start_date';
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return Mage::helper('M2ePro')->__('Start Date');
    }

    public function getValueByProductInstance(Mage_Catalog_Model_Product $product)
    {
        $startDate = $product->getData('start_date');
        if (empty($startDate)) {
            return null;
        }

        $startDate = new DateTime($startDate);

        return strtotime($startDate->format('Y-m-d'));
    }

    /**
     * @return string
     */
    public function getInputType()
    {
        return 'date';
    }

    /**
     * @return string
     */
    public function getValueElementType()
    {
        return 'date';
    }

    //########################################
}
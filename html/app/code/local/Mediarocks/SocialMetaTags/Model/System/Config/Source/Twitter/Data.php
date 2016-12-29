<?php
/**
 * Media Rocks GbR
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA that is bundled with 
 * this package in the file MEDIAROCKS-LICENSE-COMMUNITY.txt.
 * It is also available through the world-wide-web at this URL:
 * http://solutions.mediarocks.de/MEDIAROCKS-LICENSE-COMMUNITY.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package is designed for Magento COMMUNITY edition. 
 * Media Rocks does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Media Rocks does not provide extension support in case of
 * incorrect edition usage.
 * =================================================================
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade the extension
 * to newer versions in the future. If you wish to customize the extension
 * for your needs please send an email to support@mediarocks.de
 *
 */

class Mediarocks_SocialMetaTags_Model_System_Config_Source_Twitter_Data
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'lowest_price',
                'label' => 'Price (lowest available)',
            ),
            array(
                'value' => 'regular_price',
                'label' => 'Regular price',
            ),
            array(
                'value' => 'special_price',
                'label' => 'Special price',
            ),
            array(
                'value' => 'sku',
                'label' => 'Sku',
            ),
            array(
                'value' => 'is_in_stock',
                'label' => 'Availability (In stock/Out of stock)',
            ),
            array(
                'value' => 'custom',
                'label' => 'Custom (enter attribute code)',
            ),
        );
    }
}
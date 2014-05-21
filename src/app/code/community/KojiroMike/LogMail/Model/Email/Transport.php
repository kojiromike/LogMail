<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    KojiroMike
 * @package     KojiroMike_LogMail
 * @copyright   Copyright (c) 2014 Michael A. Smith
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * LogMail Email Transport Override
 *
 * This class exists only to provide a factory presence for Magento.
 * Ideally we would rewrite Mage_Core_Model_Email_Transport at the factory,
 * but that class does not appear to actually be registered.
 *
 * @category    KojiroMike
 * @package     KojiroMike_LogMail
 * @author      Michael A. Smith <michael@smith-li.com>
 */
class KojiroMike_LogMail_Model_Email_Transport extends Zend_Mail_Transport_File
{
}

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
 * LogMail Data Helper
 *
 * @category    KojiroMike
 * @package     KojiroMike_LogMail
 * @author      Michael A. Smith <michael@smith-li.com>
 */
class KojiroMike_LogMail_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getMailLogPath()
    {
        $path = Mage::getBaseDir('log') . DS . 'mail';
        @mkdir($path, 0777, true);
        return $path;
    }
    public function getMailTransport()
    {
        return Mage::getModel('logmail/email_transport', array('path' => $this->getMailLogPath()));
    }
}

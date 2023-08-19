<?php
namespace Pawan\Instructions\Plugin\OfflinePayments\Block\Form;

class Bank
{
    public function beforeToHtml(\Magento\OfflinePayments\Block\Form\Banktransfer $subject)
    {
        $subject->setTemplate('Pawan_Instructions::banktransfer.phtml');
    }
}
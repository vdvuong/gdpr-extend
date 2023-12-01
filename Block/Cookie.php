<?php
/**
 * Copyright © Open Techiz. All rights reserved.
 * See LICENSE.txt for license details (http://opensource.org/licenses/osl-3.0.php).
 */

namespace Magentiz\GdprExtend\Block;

class Cookie extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function getCookieGroups()
    {
        return array (
            [
                'name' => 'technical',
                'label' => __('Technically required'),
                'description' => __('These cookies are necessary for the basic functions of the shop.'),
                'is_essential' => true,
                'items' => [
                    'reject_cookies' => __('"Reject all cookies" cookie'),
                    'accept_cookies' => __('"Accept all cookies" cookie'),
                    'featured_shop' => __('Featured Shop'),
                    'csrf_token' => __('CSRF-Token'),
                    'cookie_settings' => __('Cookie Settings'),
                    'individual_prices' => __('Individual Prices'),
                    'customer_recognition' => __('Customer Recognition'),
                    'custom_caching' => __('Custom Caching'),
                    'paypal_payments' => __('PayPal Payments'),
                    'session' => __('Session'),
                    'currency_exchange' => __('Currency Exchange')
                ]
            ],
            [
                'name' => 'comfort',
                'label' => __('Comfort Functions'),
                'description' => __('These cookies are used to make the shopping experience even more appealing, for example to recognize the visitor.'),
                'is_essential' => false,
                'items' => [
                    'notepad' => __('Notepad')
                ]
            ],
            [
                'name' => 'statistics_tracking',
                'label' => __('Statistics & Tracking'),
                'description' => __(''),
                'is_essential' => false,
                'items' => [
                    'device' => __('Device Recognition'),
                    'ga' => __('Google Analytics'),
                    'affiliate' => __('Affiliate Program')
                ]
            ]
        );
    }
}

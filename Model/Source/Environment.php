<?php
namespace Webjump\BraspagPagador\Model\Source;

use Magento\Framework\Option\ArrayInterface;

class Environment implements ArrayInterface
{
    /**
     * HOMOLOGATION type code
     * @const string
     */
    const HOMOLOG = 'homolog';

    /**
     * PRODUCTION type code
     * @const string
     */
    const PRODUCTION = 'production';

    /**
     * SANDBOX type code
     * @const string
     */
    const SANDBOX = 'sandbox';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'label' => __('Homologation'),
                'value' => self::HOMOLOG
            ],
            [
                'label' => __('Production'),
                'value' => self::PRODUCTION
            ],
            [
                'label' => __('Sandbox'),
                'value' => self::SANDBOX
            ]
        ];
    }
}
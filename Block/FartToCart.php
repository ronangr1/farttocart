<?php
/**
 * Copyright © Ronan Guérin All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Ronangr1\FartToCart\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Template;
use Ronangr1\FartToCart\Model\Fart;

class FartToCart extends Template
{
    protected const FILE_PATH = 'file/fart/';
    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        protected readonly ScopeConfigInterface $scopeConfig,
        Template\Context $context, array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getFartUrl(): string
    {
        $configValue = $this->scopeConfig->getValue(Fart::XML_PATH_FART_TO_CART_FILE);
        if ($configValue) {
            return $this->getMediaUrl() . self::FILE_PATH . $configValue;
        }
        return $this->getViewFileUrl($this->getModuleName() . '::file/fart.mp3');
    }

    /**
     * @return string
     */
    public function getMediaUrl(): string
    {
        return $this->_urlBuilder->getBaseUrl(['_type' => UrlInterface::URL_TYPE_MEDIA]);
    }
}

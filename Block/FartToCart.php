<?php declare(strict_types=1);

namespace Ronangr1\FartToCart\Block;

use Magento\Framework\View\Element\Template;

class FartToCart extends Template
{
    /**
     * @return string
     */
    public function getFartUrl(): string
    {
        return $this->getViewFileUrl($this->getModuleName() . '::sound/fart.mp3');
    }
}

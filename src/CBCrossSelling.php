<?php declare(strict_types=1);

namespace CBCrossSelling;

use Shopware\Core\Framework\Plugin;

class CBCrossSelling extends Plugin
{
    public function getStorefrontScriptPath() : string {
        return 'Resources/assets/js';
    }
}
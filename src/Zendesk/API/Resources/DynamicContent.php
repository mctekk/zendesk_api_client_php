<?php

namespace Zendesk\API\Resources;

use Zendesk\API\UtilityTraits\InstantiatorTrait;

/**
 * Class DynamicContent
 *
 * @method DynamicContentItems items()
 */
class DynamicContent extends ResourceAbstract
{
    use InstantiatorTrait;

    /**
     * {@inheritdoc}
     */
    public static function getValidSubResources()
    {
        return [
            'items' => DynamicContentItems::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function setUpRoutes()
    {
        // Empty routes, this class serves as a possible entry point to dynamic content items
    }
}

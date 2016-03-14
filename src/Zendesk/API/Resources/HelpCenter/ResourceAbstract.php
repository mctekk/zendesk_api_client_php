<?php

namespace Zendesk\API\Resources\HelpCenter;

/**
 * Abstract class for HelpCenter resources
 */
abstract class ResourceAbstract extends \Zendesk\API\Resources\ResourceAbstract
{

    /**
     * Appends the help_center/ prefix to resource names
     * @return string
     */
    protected function getResourceNameFromClass()
    {
        $resourceName = parent::getResourceNameFromClass();

        return 'help_center/' . $resourceName;
    }
}

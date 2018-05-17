<?php
namespace Leadsengage\Api;

/**
 * CompanyFields Context
 */
class CompanyFields extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'fields/company';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'fields';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'field';
}

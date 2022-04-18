<?php
namespace PrivacyGate\Resources;

use PrivacyGate\Resources\Operations\CreateMethodTrait;
use PrivacyGate\Resources\Operations\DeleteMethodTrait;
use PrivacyGate\Resources\Operations\ReadMethodTrait;
use PrivacyGate\Resources\Operations\SaveMethodTrait;
use PrivacyGate\Resources\Operations\UpdateMethodTrait;

class Checkout extends ApiResource implements ResourcePathInterface
{
    use ReadMethodTrait, CreateMethodTrait, UpdateMethodTrait, DeleteMethodTrait, SaveMethodTrait;

    /**
     * @return string
     */
    public static function getResourcePath()
    {
        return 'checkouts';
    }
}

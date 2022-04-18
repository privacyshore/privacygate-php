<?php
namespace PrivacyGate\Resources;

use PrivacyGate\Resources\Operations\CreateMethodTrait;
use PrivacyGate\Resources\Operations\ReadMethodTrait;
use PrivacyGate\Resources\Operations\SaveMethodTrait;
use PrivacyGate\Util;

class Charge extends ApiResource implements ResourcePathInterface
{
    use CreateMethodTrait, ReadMethodTrait, SaveMethodTrait;

    /**
     * @return string
     */
    public static function getResourcePath()
    {
        return 'charges';
    }

    public function resolve($headers = [])
    {
        $id = $this->id;
        $path = Util::joinPath(static::getResourcePath(), $id, 'resolve');
        $client = static::getClient();
        $response = $client->post($path, [], $headers);
        $this->refreshFrom($response);
    }

    public function cancel($headers = [])
    {
        $id = $this->id;
        $path = Util::joinPath(static::getResourcePath(), $id, 'cancel');
        $client = static::getClient();
        $response = $client->post($path, [], $headers);
        $this->refreshFrom($response);
    }
}

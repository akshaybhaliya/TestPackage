<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Sync
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Sync\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Sync\V1\Service\SyncListList;
use Twilio\Rest\Sync\V1\Service\SyncStreamList;
use Twilio\Rest\Sync\V1\Service\DocumentList;
use Twilio\Rest\Sync\V1\Service\SyncMapList;


/**
 * @property string|null $sid
 * @property string|null $uniqueName
 * @property string|null $accountSid
 * @property string|null $friendlyName
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $url
 * @property string|null $webhookUrl
 * @property bool|null $webhooksFromRestEnabled
 * @property bool|null $reachabilityWebhooksEnabled
 * @property bool|null $aclEnabled
 * @property bool|null $reachabilityDebouncingEnabled
 * @property int $reachabilityDebouncingWindow
 * @property array|null $links
 */
class ServiceInstance extends InstanceResource
{
    protected $_syncLists;
    protected $_syncStreams;
    protected $_documents;
    protected $_syncMaps;

    /**
     * Initialize the ServiceInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The SID of the Service resource to delete.
     */
    public function __construct(Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'webhookUrl' => Values::array_get($payload, 'webhook_url'),
            'webhooksFromRestEnabled' => Values::array_get($payload, 'webhooks_from_rest_enabled'),
            'reachabilityWebhooksEnabled' => Values::array_get($payload, 'reachability_webhooks_enabled'),
            'aclEnabled' => Values::array_get($payload, 'acl_enabled'),
            'reachabilityDebouncingEnabled' => Values::array_get($payload, 'reachability_debouncing_enabled'),
            'reachabilityDebouncingWindow' => Values::array_get($payload, 'reachability_debouncing_window'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ServiceContext Context for this ServiceInstance
     */
    protected function proxy(): ServiceContext
    {
        if (!$this->context) {
            $this->context = new ServiceContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the ServiceInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the ServiceInstance
     *
     * @return ServiceInstance Fetched ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ServiceInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the ServiceInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ServiceInstance Updated ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ServiceInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the syncLists
     */
    protected function getSyncLists(): SyncListList
    {
        return $this->proxy()->syncLists;
    }

    /**
     * Access the syncStreams
     */
    protected function getSyncStreams(): SyncStreamList
    {
        return $this->proxy()->syncStreams;
    }

    /**
     * Access the documents
     */
    protected function getDocuments(): DocumentList
    {
        return $this->proxy()->documents;
    }

    /**
     * Access the syncMaps
     */
    protected function getSyncMaps(): SyncMapList
    {
        return $this->proxy()->syncMaps;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Sync.V1.ServiceInstance ' . \implode(' ', $context) . ']';
    }
}


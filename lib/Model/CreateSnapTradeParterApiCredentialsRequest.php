<?php
/**
 * CreateSnapTradeParterApiCredentialsRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SnapTrade
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * SnapTrade
 *
 * Connect brokerage accounts to your app for live positions and trading
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@snaptrade.com
 * Generated by: https://konfigthis.com
 */


namespace SnapTrade\Model;

use \ArrayAccess;
use \SnapTrade\ObjectSerializer;

/**
 * CreateSnapTradeParterApiCredentialsRequest Class Doc Comment
 *
 * @category Class
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSnapTradeParterApiCredentialsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSnapTradeParterApiCredentialsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brokerage_authorization_type_id' => 'mixed',
        'brokerage_api_client_id' => 'mixed',
        'brokerage_api_client_secret' => 'mixed',
        'redirect_uri' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brokerage_authorization_type_id' => null,
        'brokerage_api_client_id' => null,
        'brokerage_api_client_secret' => null,
        'redirect_uri' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'brokerage_authorization_type_id' => true,
		'brokerage_api_client_id' => true,
		'brokerage_api_client_secret' => true,
		'redirect_uri' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'brokerage_authorization_type_id' => 'brokerageAuthorizationTypeId',
        'brokerage_api_client_id' => 'brokerageAPIClientId',
        'brokerage_api_client_secret' => 'brokerageAPIClientSecret',
        'redirect_uri' => 'redirectURI'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brokerage_authorization_type_id' => 'setBrokerageAuthorizationTypeId',
        'brokerage_api_client_id' => 'setBrokerageApiClientId',
        'brokerage_api_client_secret' => 'setBrokerageApiClientSecret',
        'redirect_uri' => 'setRedirectUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brokerage_authorization_type_id' => 'getBrokerageAuthorizationTypeId',
        'brokerage_api_client_id' => 'getBrokerageApiClientId',
        'brokerage_api_client_secret' => 'getBrokerageApiClientSecret',
        'redirect_uri' => 'getRedirectUri'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('brokerage_authorization_type_id', $data ?? [], null);
        $this->setIfExists('brokerage_api_client_id', $data ?? [], null);
        $this->setIfExists('brokerage_api_client_secret', $data ?? [], null);
        $this->setIfExists('redirect_uri', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets brokerage_authorization_type_id
     *
     * @return mixed|null
     */
    public function getBrokerageAuthorizationTypeId()
    {
        return $this->container['brokerage_authorization_type_id'];
    }

    /**
     * Sets brokerage_authorization_type_id
     *
     * @param mixed|null $brokerage_authorization_type_id Brokerage Authorization Type ID from BrokerageAuthorizationType object
     *
     * @return self
     */
    public function setBrokerageAuthorizationTypeId($brokerage_authorization_type_id)
    {

        if (is_null($brokerage_authorization_type_id)) {
            array_push($this->openAPINullablesSetToNull, 'brokerage_authorization_type_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brokerage_authorization_type_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['brokerage_authorization_type_id'] = $brokerage_authorization_type_id;

        return $this;
    }

    /**
     * Gets brokerage_api_client_id
     *
     * @return mixed|null
     */
    public function getBrokerageApiClientId()
    {
        return $this->container['brokerage_api_client_id'];
    }

    /**
     * Sets brokerage_api_client_id
     *
     * @param mixed|null $brokerage_api_client_id API Client ID from brokerage when registering app
     *
     * @return self
     */
    public function setBrokerageApiClientId($brokerage_api_client_id)
    {

        if (is_null($brokerage_api_client_id)) {
            array_push($this->openAPINullablesSetToNull, 'brokerage_api_client_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brokerage_api_client_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['brokerage_api_client_id'] = $brokerage_api_client_id;

        return $this;
    }

    /**
     * Gets brokerage_api_client_secret
     *
     * @return mixed|null
     */
    public function getBrokerageApiClientSecret()
    {
        return $this->container['brokerage_api_client_secret'];
    }

    /**
     * Sets brokerage_api_client_secret
     *
     * @param mixed|null $brokerage_api_client_secret API Client Secret from brokerage when registering app
     *
     * @return self
     */
    public function setBrokerageApiClientSecret($brokerage_api_client_secret)
    {

        if (is_null($brokerage_api_client_secret)) {
            array_push($this->openAPINullablesSetToNull, 'brokerage_api_client_secret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brokerage_api_client_secret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['brokerage_api_client_secret'] = $brokerage_api_client_secret;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return mixed|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param mixed|null $redirect_uri Redirect uri from brokerage when registering app
     *
     * @return self
     */
    public function setRedirectUri($redirect_uri)
    {

        if (is_null($redirect_uri)) {
            array_push($this->openAPINullablesSetToNull, 'redirect_uri');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirect_uri', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



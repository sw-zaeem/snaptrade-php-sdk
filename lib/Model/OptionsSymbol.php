<?php
/**
 * OptionsSymbol
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
 * OptionsSymbol Class Doc Comment
 *
 * @category Class
 * @description Options Symbol
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class OptionsSymbol implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OptionsSymbol';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'ticker' => 'string',
        'strike_price' => 'int',
        'expiration_date' => 'string',
        'is_mini_option' => 'bool',
        'underlying_symbol' => '\SnapTrade\Model\UnderlyingSymbol',
        'local_id' => 'string',
        'security_type' => 'mixed',
        'listing_exchange' => 'mixed',
        'is_quotable' => 'bool',
        'is_tradable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'ticker' => null,
        'strike_price' => null,
        'expiration_date' => null,
        'is_mini_option' => null,
        'underlying_symbol' => null,
        'local_id' => null,
        'security_type' => null,
        'listing_exchange' => null,
        'is_quotable' => null,
        'is_tradable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'ticker' => false,
		'strike_price' => false,
		'expiration_date' => false,
		'is_mini_option' => false,
		'underlying_symbol' => false,
		'local_id' => false,
		'security_type' => true,
		'listing_exchange' => true,
		'is_quotable' => false,
		'is_tradable' => false
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
        'id' => 'id',
        'ticker' => 'ticker',
        'strike_price' => 'strike_price',
        'expiration_date' => 'expiration_date',
        'is_mini_option' => 'is_mini_option',
        'underlying_symbol' => 'underlying_symbol',
        'local_id' => 'local_id',
        'security_type' => 'security_type',
        'listing_exchange' => 'listing_exchange',
        'is_quotable' => 'is_quotable',
        'is_tradable' => 'is_tradable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ticker' => 'setTicker',
        'strike_price' => 'setStrikePrice',
        'expiration_date' => 'setExpirationDate',
        'is_mini_option' => 'setIsMiniOption',
        'underlying_symbol' => 'setUnderlyingSymbol',
        'local_id' => 'setLocalId',
        'security_type' => 'setSecurityType',
        'listing_exchange' => 'setListingExchange',
        'is_quotable' => 'setIsQuotable',
        'is_tradable' => 'setIsTradable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ticker' => 'getTicker',
        'strike_price' => 'getStrikePrice',
        'expiration_date' => 'getExpirationDate',
        'is_mini_option' => 'getIsMiniOption',
        'underlying_symbol' => 'getUnderlyingSymbol',
        'local_id' => 'getLocalId',
        'security_type' => 'getSecurityType',
        'listing_exchange' => 'getListingExchange',
        'is_quotable' => 'getIsQuotable',
        'is_tradable' => 'getIsTradable'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ticker', $data ?? [], null);
        $this->setIfExists('strike_price', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('is_mini_option', $data ?? [], null);
        $this->setIfExists('underlying_symbol', $data ?? [], null);
        $this->setIfExists('local_id', $data ?? [], null);
        $this->setIfExists('security_type', $data ?? [], null);
        $this->setIfExists('listing_exchange', $data ?? [], null);
        $this->setIfExists('is_quotable', $data ?? [], null);
        $this->setIfExists('is_tradable', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string|null
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string|null $ticker ticker
     *
     * @return self
     */
    public function setTicker($ticker)
    {

        if (is_null($ticker)) {
            throw new \InvalidArgumentException('non-nullable ticker cannot be null');
        }

        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets strike_price
     *
     * @return int|null
     */
    public function getStrikePrice()
    {
        return $this->container['strike_price'];
    }

    /**
     * Sets strike_price
     *
     * @param int|null $strike_price strike_price
     *
     * @return self
     */
    public function setStrikePrice($strike_price)
    {

        if (is_null($strike_price)) {
            throw new \InvalidArgumentException('non-nullable strike_price cannot be null');
        }

        $this->container['strike_price'] = $strike_price;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {

        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }

        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets is_mini_option
     *
     * @return bool|null
     */
    public function getIsMiniOption()
    {
        return $this->container['is_mini_option'];
    }

    /**
     * Sets is_mini_option
     *
     * @param bool|null $is_mini_option is_mini_option
     *
     * @return self
     */
    public function setIsMiniOption($is_mini_option)
    {

        if (is_null($is_mini_option)) {
            throw new \InvalidArgumentException('non-nullable is_mini_option cannot be null');
        }

        $this->container['is_mini_option'] = $is_mini_option;

        return $this;
    }

    /**
     * Gets underlying_symbol
     *
     * @return \SnapTrade\Model\UnderlyingSymbol|null
     */
    public function getUnderlyingSymbol()
    {
        return $this->container['underlying_symbol'];
    }

    /**
     * Sets underlying_symbol
     *
     * @param \SnapTrade\Model\UnderlyingSymbol|null $underlying_symbol underlying_symbol
     *
     * @return self
     */
    public function setUnderlyingSymbol($underlying_symbol)
    {

        if (is_null($underlying_symbol)) {
            throw new \InvalidArgumentException('non-nullable underlying_symbol cannot be null');
        }

        $this->container['underlying_symbol'] = $underlying_symbol;

        return $this;
    }

    /**
     * Gets local_id
     *
     * @return string|null
     */
    public function getLocalId()
    {
        return $this->container['local_id'];
    }

    /**
     * Sets local_id
     *
     * @param string|null $local_id local_id
     *
     * @return self
     */
    public function setLocalId($local_id)
    {

        if (is_null($local_id)) {
            throw new \InvalidArgumentException('non-nullable local_id cannot be null');
        }

        $this->container['local_id'] = $local_id;

        return $this;
    }

    /**
     * Gets security_type
     *
     * @return mixed|null
     */
    public function getSecurityType()
    {
        return $this->container['security_type'];
    }

    /**
     * Sets security_type
     *
     * @param mixed|null $security_type security_type
     *
     * @return self
     */
    public function setSecurityType($security_type)
    {

        if (is_null($security_type)) {
            array_push($this->openAPINullablesSetToNull, 'security_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('security_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['security_type'] = $security_type;

        return $this;
    }

    /**
     * Gets listing_exchange
     *
     * @return mixed|null
     */
    public function getListingExchange()
    {
        return $this->container['listing_exchange'];
    }

    /**
     * Sets listing_exchange
     *
     * @param mixed|null $listing_exchange listing_exchange
     *
     * @return self
     */
    public function setListingExchange($listing_exchange)
    {

        if (is_null($listing_exchange)) {
            array_push($this->openAPINullablesSetToNull, 'listing_exchange');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('listing_exchange', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['listing_exchange'] = $listing_exchange;

        return $this;
    }

    /**
     * Gets is_quotable
     *
     * @return bool|null
     */
    public function getIsQuotable()
    {
        return $this->container['is_quotable'];
    }

    /**
     * Sets is_quotable
     *
     * @param bool|null $is_quotable is_quotable
     *
     * @return self
     */
    public function setIsQuotable($is_quotable)
    {

        if (is_null($is_quotable)) {
            throw new \InvalidArgumentException('non-nullable is_quotable cannot be null');
        }

        $this->container['is_quotable'] = $is_quotable;

        return $this;
    }

    /**
     * Gets is_tradable
     *
     * @return bool|null
     */
    public function getIsTradable()
    {
        return $this->container['is_tradable'];
    }

    /**
     * Sets is_tradable
     *
     * @param bool|null $is_tradable is_tradable
     *
     * @return self
     */
    public function setIsTradable($is_tradable)
    {

        if (is_null($is_tradable)) {
            throw new \InvalidArgumentException('non-nullable is_tradable cannot be null');
        }

        $this->container['is_tradable'] = $is_tradable;

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



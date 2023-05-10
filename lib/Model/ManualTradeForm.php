<?php
/**
 * ManualTradeForm
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
 * ManualTradeForm Class Doc Comment
 *
 * @category Class
 * @description Manual Trade Form
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class ManualTradeForm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManualTradeForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'action' => '\SnapTrade\Model\Action',
        'order_type' => '\SnapTrade\Model\OrderType',
        'price' => 'float',
        'stop' => 'float',
        'time_in_force' => '\SnapTrade\Model\TimeInForce',
        'units' => 'float',
        'universal_symbol_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => 'uuid',
        'action' => null,
        'order_type' => null,
        'price' => null,
        'stop' => null,
        'time_in_force' => null,
        'units' => null,
        'universal_symbol_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => false,
		'action' => false,
		'order_type' => false,
		'price' => false,
		'stop' => true,
		'time_in_force' => false,
		'units' => false,
		'universal_symbol_id' => false
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
        'account_id' => 'account_id',
        'action' => 'action',
        'order_type' => 'order_type',
        'price' => 'price',
        'stop' => 'stop',
        'time_in_force' => 'time_in_force',
        'units' => 'units',
        'universal_symbol_id' => 'universal_symbol_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'action' => 'setAction',
        'order_type' => 'setOrderType',
        'price' => 'setPrice',
        'stop' => 'setStop',
        'time_in_force' => 'setTimeInForce',
        'units' => 'setUnits',
        'universal_symbol_id' => 'setUniversalSymbolId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'action' => 'getAction',
        'order_type' => 'getOrderType',
        'price' => 'getPrice',
        'stop' => 'getStop',
        'time_in_force' => 'getTimeInForce',
        'units' => 'getUnits',
        'universal_symbol_id' => 'getUniversalSymbolId'
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('order_type', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('stop', $data ?? [], null);
        $this->setIfExists('time_in_force', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('universal_symbol_id', $data ?? [], null);
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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {

        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \SnapTrade\Model\Action|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \SnapTrade\Model\Action|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {

        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }

        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return \SnapTrade\Model\OrderType|null
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param \SnapTrade\Model\OrderType|null $order_type order_type
     *
     * @return self
     */
    public function setOrderType($order_type)
    {

        if (is_null($order_type)) {
            throw new \InvalidArgumentException('non-nullable order_type cannot be null');
        }

        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Trade Price if limit or stop limit order
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets stop
     *
     * @return float|null
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     *
     * @param float|null $stop Stop Price. If stop loss or stop limit order, the price to trigger the stop
     *
     * @return self
     */
    public function setStop($stop)
    {

        if (is_null($stop)) {
            array_push($this->openAPINullablesSetToNull, 'stop');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stop', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['stop'] = $stop;

        return $this;
    }

    /**
     * Gets time_in_force
     *
     * @return \SnapTrade\Model\TimeInForce|null
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param \SnapTrade\Model\TimeInForce|null $time_in_force time_in_force
     *
     * @return self
     */
    public function setTimeInForce($time_in_force)
    {

        if (is_null($time_in_force)) {
            throw new \InvalidArgumentException('non-nullable time_in_force cannot be null');
        }

        $this->container['time_in_force'] = $time_in_force;

        return $this;
    }

    /**
     * Gets units
     *
     * @return float|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param float|null $units Trade Units
     *
     * @return self
     */
    public function setUnits($units)
    {

        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }

        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets universal_symbol_id
     *
     * @return string|null
     */
    public function getUniversalSymbolId()
    {
        return $this->container['universal_symbol_id'];
    }

    /**
     * Sets universal_symbol_id
     *
     * @param string|null $universal_symbol_id universal_symbol_id
     *
     * @return self
     */
    public function setUniversalSymbolId($universal_symbol_id)
    {

        if (is_null($universal_symbol_id)) {
            throw new \InvalidArgumentException('non-nullable universal_symbol_id cannot be null');
        }

        $this->container['universal_symbol_id'] = $universal_symbol_id;

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



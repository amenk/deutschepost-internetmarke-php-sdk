<?php
/**
 * AppShoppingCartPDFRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deutsche Post INTERNETMARKE API
 *
 * Division: Post & Parcel Germany<br /> The INTERNETMARKE is the online-postage for mail products of Deutsche Post AG.
 *
 * The version of the OpenAPI document: 1.25
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\DPIM\Model;
use \kruegge82\DPIM\ObjectSerializer;

/**
 * AppShoppingCartPDFRequest Class Doc Comment
 *
 * @category Class
 * @description The request object for external partners to buy an internet stamp in PDF format.
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AppShoppingCartPDFRequest extends AppCheckoutPDFRequest
{
    public const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppShoppingCartPDFRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'shop_order_id' => 'string',
        'total' => 'int',
        'create_manifest' => 'bool',
        'create_shipping_list' => 'string',
        'dpi' => 'string',
        'page_format_id' => 'int',
        'positions' => '\kruegge82\DPIM\Model\AppShoppingCartPDFPosition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'shop_order_id' => null,
        'total' => 'int32',
        'create_manifest' => null,
        'create_shipping_list' => null,
        'dpi' => null,
        'page_format_id' => 'int32',
        'positions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'shop_order_id' => false,
        'total' => false,
        'create_manifest' => false,
        'create_shipping_list' => false,
        'dpi' => false,
        'page_format_id' => false,
        'positions' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'type' => 'type',
        'shop_order_id' => 'shopOrderId',
        'total' => 'total',
        'create_manifest' => 'createManifest',
        'create_shipping_list' => 'createShippingList',
        'dpi' => 'dpi',
        'page_format_id' => 'pageFormatId',
        'positions' => 'positions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'shop_order_id' => 'setShopOrderId',
        'total' => 'setTotal',
        'create_manifest' => 'setCreateManifest',
        'create_shipping_list' => 'setCreateShippingList',
        'dpi' => 'setDpi',
        'page_format_id' => 'setPageFormatId',
        'positions' => 'setPositions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'shop_order_id' => 'getShopOrderId',
        'total' => 'getTotal',
        'create_manifest' => 'getCreateManifest',
        'create_shipping_list' => 'getCreateShippingList',
        'dpi' => 'getDpi',
        'page_format_id' => 'getPageFormatId',
        'positions' => 'getPositions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    public const TYPE_APP_SHOPPING_CART_PDF_REQUEST = 'AppShoppingCartPDFRequest';
    public const TYPE_APP_SHOPPING_CART_PREVIEW_PDF_REQUEST = 'AppShoppingCartPreviewPDFRequest';
    public const CREATE_SHIPPING_LIST__0 = '0';
    public const CREATE_SHIPPING_LIST__1 = '1';
    public const CREATE_SHIPPING_LIST__2 = '2';
    public const DPI_DPI300 = 'DPI300';
    public const DPI_DPI203 = 'DPI203';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_APP_SHOPPING_CART_PDF_REQUEST,
            self::TYPE_APP_SHOPPING_CART_PREVIEW_PDF_REQUEST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreateShippingListAllowableValues()
    {
        return [
            self::CREATE_SHIPPING_LIST__0,
            self::CREATE_SHIPPING_LIST__1,
            self::CREATE_SHIPPING_LIST__2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDpiAllowableValues()
    {
        return [
            self::DPI_DPI300,
            self::DPI_DPI203,
        ];
    }


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('type', $data ?? [], 'AppShoppingCartPDFRequest');
        $this->setIfExists('shop_order_id', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('create_manifest', $data ?? [], null);
        $this->setIfExists('create_shipping_list', $data ?? [], null);
        $this->setIfExists('dpi', $data ?? [], null);
        $this->setIfExists('page_format_id', $data ?? [], null);
        $this->setIfExists('positions', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
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
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['shop_order_id']) && (mb_strlen($this->container['shop_order_id']) > 18)) {
            $invalidProperties[] = "invalid value for 'shop_order_id', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['shop_order_id']) && (mb_strlen($this->container['shop_order_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'shop_order_id', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getCreateShippingListAllowableValues();
        if (!is_null($this->container['create_shipping_list']) && !in_array($this->container['create_shipping_list'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'create_shipping_list', must be one of '%s'",
                $this->container['create_shipping_list'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDpiAllowableValues();
        if (!is_null($this->container['dpi']) && !in_array($this->container['dpi'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dpi', must be one of '%s'",
                $this->container['dpi'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['page_format_id']) && ($this->container['page_format_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'page_format_id', must be bigger than or equal to 1.";
        }

        if ($this->container['positions'] === null) {
            $invalidProperties[] = "'positions' can't be null";
        }
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type set AppShoppingCartPDFRequest if validate=false, AppShoppingCartPreviewPDFRequest if validate=true
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets shop_order_id
     *
     * @return string|null
     */
    public function getShopOrderId()
    {
        return $this->container['shop_order_id'];
    }

    /**
     * Sets shop_order_id
     *
     * @param string|null $shop_order_id The order number in the shop. All characters are allowed except < and &. It is optional in case of query parameter finalize is true. In all other cases it is mandatory required.
     *
     * @return self
     */
    public function setShopOrderId($shop_order_id)
    {
        if (is_null($shop_order_id)) {
            throw new \InvalidArgumentException('non-nullable shop_order_id cannot be null');
        }
        if ((mb_strlen($shop_order_id) > 18)) {
            throw new \InvalidArgumentException('invalid length for $shop_order_id when calling AppShoppingCartPDFRequest., must be smaller than or equal to 18.');
        }
        if ((mb_strlen($shop_order_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shop_order_id when calling AppShoppingCartPDFRequest., must be bigger than or equal to 1.');
        }

        $this->container['shop_order_id'] = $shop_order_id;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total value of the shopping cart in euro cents.
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets create_manifest
     *
     * @return bool|null
     */
    public function getCreateManifest()
    {
        return $this->container['create_manifest'];
    }

    /**
     * Sets create_manifest
     *
     * @param bool|null $create_manifest The flag indicating whether a posting receipt should be created.
     *
     * @return self
     */
    public function setCreateManifest($create_manifest)
    {
        if (is_null($create_manifest)) {
            throw new \InvalidArgumentException('non-nullable create_manifest cannot be null');
        }
        $this->container['create_manifest'] = $create_manifest;

        return $this;
    }

    /**
     * Gets create_shipping_list
     *
     * @return string|null
     */
    public function getCreateShippingList()
    {
        return $this->container['create_shipping_list'];
    }

    /**
     * Sets create_shipping_list
     *
     * @param string|null $create_shipping_list Identifier of which type of shipping list is to be created is to be created: 0: No shipping list 1: Shipping list without addresses / delivery receipt only 2: Shipping list with addresses
     *
     * @return self
     */
    public function setCreateShippingList($create_shipping_list)
    {
        if (is_null($create_shipping_list)) {
            throw new \InvalidArgumentException('non-nullable create_shipping_list cannot be null');
        }
        $allowedValues = $this->getCreateShippingListAllowableValues();
        if (!in_array($create_shipping_list, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'create_shipping_list', must be one of '%s'",
                    $create_shipping_list,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['create_shipping_list'] = $create_shipping_list;

        return $this;
    }

    /**
     * Gets dpi
     *
     * @return string|null
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi
     *
     * @param string|null $dpi dpi
     *
     * @return self
     */
    public function setDpi($dpi)
    {
        if (is_null($dpi)) {
            throw new \InvalidArgumentException('non-nullable dpi cannot be null');
        }
        $allowedValues = $this->getDpiAllowableValues();
        if (!in_array($dpi, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dpi', must be one of '%s'",
                    $dpi,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dpi'] = $dpi;

        return $this;
    }

    /**
     * Gets page_format_id
     *
     * @return int|null
     */
    public function getPageFormatId()
    {
        return $this->container['page_format_id'];
    }

    /**
     * Sets page_format_id
     *
     * @param int|null $page_format_id The ID of the print format. All available formats can be identified by request /app/catalog?types=PAGE_FORMATS
     *
     * @return self
     */
    public function setPageFormatId($page_format_id)
    {
        if (is_null($page_format_id)) {
            throw new \InvalidArgumentException('non-nullable page_format_id cannot be null');
        }

        if (($page_format_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $page_format_id when calling AppShoppingCartPDFRequest., must be bigger than or equal to 1.');
        }

        $this->container['page_format_id'] = $page_format_id;

        return $this;
    }

    /**
     * Gets positions
     *
     * @return \kruegge82\DPIM\Model\AppShoppingCartPDFPosition[]
     */
    public function getPositions()
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param \kruegge82\DPIM\Model\AppShoppingCartPDFPosition[] $positions List of PDF order items. At least one item has to be specified.
     *
     * @return self
     */
    public function setPositions($positions)
    {
        if (is_null($positions)) {
            throw new \InvalidArgumentException('non-nullable positions cannot be null');
        }
        $this->container['positions'][] = $positions;

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



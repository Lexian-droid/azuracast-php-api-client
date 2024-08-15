<?php
/**
 * StationMount
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AzuraCast
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AzuraCast
 *
 * AzuraCast is a standalone, turnkey web radio management tool. Radio stations hosted by AzuraCast expose a public API for viewing now playing data, making requests and more.
 *
 * The version of the OpenAPI document: 0.20.2
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AzuraCast\Model;

use \ArrayAccess;
use \AzuraCast\ObjectSerializer;

/**
 * StationMount Class Doc Comment
 *
 * @category Class
 * @package  AzuraCast
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StationMount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StationMount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'displayName' => 'string',
        'isVisibleOnPublicPages' => 'bool',
        'isDefault' => 'bool',
        'isPublic' => 'bool',
        'fallbackMount' => 'string',
        'relayUrl' => 'string',
        'authhash' => 'string',
        'maxListenerDuration' => 'int',
        'enableAutodj' => 'bool',
        'autodjFormat' => 'mixed',
        'autodjBitrate' => 'int',
        'customListenUrl' => 'string',
        'frontendConfig' => 'mixed[]',
        'listenersUnique' => 'int',
        'listenersTotal' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'displayName' => null,
        'isVisibleOnPublicPages' => null,
        'isDefault' => null,
        'isPublic' => null,
        'fallbackMount' => null,
        'relayUrl' => null,
        'authhash' => null,
        'maxListenerDuration' => null,
        'enableAutodj' => null,
        'autodjFormat' => null,
        'autodjBitrate' => null,
        'customListenUrl' => null,
        'frontendConfig' => null,
        'listenersUnique' => null,
        'listenersTotal' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'name' => false,
        'displayName' => true,
        'isVisibleOnPublicPages' => false,
        'isDefault' => false,
        'isPublic' => false,
        'fallbackMount' => true,
        'relayUrl' => true,
        'authhash' => true,
        'maxListenerDuration' => false,
        'enableAutodj' => false,
        'autodjFormat' => true,
        'autodjBitrate' => true,
        'customListenUrl' => true,
        'frontendConfig' => false,
        'listenersUnique' => false,
        'listenersTotal' => false
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
        'name' => 'name',
        'displayName' => 'display_name',
        'isVisibleOnPublicPages' => 'is_visible_on_public_pages',
        'isDefault' => 'is_default',
        'isPublic' => 'is_public',
        'fallbackMount' => 'fallback_mount',
        'relayUrl' => 'relay_url',
        'authhash' => 'authhash',
        'maxListenerDuration' => 'max_listener_duration',
        'enableAutodj' => 'enable_autodj',
        'autodjFormat' => 'autodj_format',
        'autodjBitrate' => 'autodj_bitrate',
        'customListenUrl' => 'custom_listen_url',
        'frontendConfig' => 'frontend_config',
        'listenersUnique' => 'listeners_unique',
        'listenersTotal' => 'listeners_total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'displayName' => 'setDisplayName',
        'isVisibleOnPublicPages' => 'setIsVisibleOnPublicPages',
        'isDefault' => 'setIsDefault',
        'isPublic' => 'setIsPublic',
        'fallbackMount' => 'setFallbackMount',
        'relayUrl' => 'setRelayUrl',
        'authhash' => 'setAuthhash',
        'maxListenerDuration' => 'setMaxListenerDuration',
        'enableAutodj' => 'setEnableAutodj',
        'autodjFormat' => 'setAutodjFormat',
        'autodjBitrate' => 'setAutodjBitrate',
        'customListenUrl' => 'setCustomListenUrl',
        'frontendConfig' => 'setFrontendConfig',
        'listenersUnique' => 'setListenersUnique',
        'listenersTotal' => 'setListenersTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'displayName' => 'getDisplayName',
        'isVisibleOnPublicPages' => 'getIsVisibleOnPublicPages',
        'isDefault' => 'getIsDefault',
        'isPublic' => 'getIsPublic',
        'fallbackMount' => 'getFallbackMount',
        'relayUrl' => 'getRelayUrl',
        'authhash' => 'getAuthhash',
        'maxListenerDuration' => 'getMaxListenerDuration',
        'enableAutodj' => 'getEnableAutodj',
        'autodjFormat' => 'getAutodjFormat',
        'autodjBitrate' => 'getAutodjBitrate',
        'customListenUrl' => 'getCustomListenUrl',
        'frontendConfig' => 'getFrontendConfig',
        'listenersUnique' => 'getListenersUnique',
        'listenersTotal' => 'getListenersTotal'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('displayName', $data ?? [], null);
        $this->setIfExists('isVisibleOnPublicPages', $data ?? [], null);
        $this->setIfExists('isDefault', $data ?? [], null);
        $this->setIfExists('isPublic', $data ?? [], null);
        $this->setIfExists('fallbackMount', $data ?? [], null);
        $this->setIfExists('relayUrl', $data ?? [], null);
        $this->setIfExists('authhash', $data ?? [], null);
        $this->setIfExists('maxListenerDuration', $data ?? [], null);
        $this->setIfExists('enableAutodj', $data ?? [], null);
        $this->setIfExists('autodjFormat', $data ?? [], null);
        $this->setIfExists('autodjBitrate', $data ?? [], null);
        $this->setIfExists('customListenUrl', $data ?? [], null);
        $this->setIfExists('frontendConfig', $data ?? [], null);
        $this->setIfExists('listenersUnique', $data ?? [], null);
        $this->setIfExists('listenersTotal', $data ?? [], null);
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string|null $displayName displayName
     *
     * @return self
     */
    public function setDisplayName($displayName)
    {
        if (is_null($displayName)) {
            array_push($this->openAPINullablesSetToNull, 'displayName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('displayName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets isVisibleOnPublicPages
     *
     * @return bool|null
     */
    public function getIsVisibleOnPublicPages()
    {
        return $this->container['isVisibleOnPublicPages'];
    }

    /**
     * Sets isVisibleOnPublicPages
     *
     * @param bool|null $isVisibleOnPublicPages isVisibleOnPublicPages
     *
     * @return self
     */
    public function setIsVisibleOnPublicPages($isVisibleOnPublicPages)
    {
        if (is_null($isVisibleOnPublicPages)) {
            throw new \InvalidArgumentException('non-nullable isVisibleOnPublicPages cannot be null');
        }
        $this->container['isVisibleOnPublicPages'] = $isVisibleOnPublicPages;

        return $this;
    }

    /**
     * Gets isDefault
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     *
     * @param bool|null $isDefault isDefault
     *
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        if (is_null($isDefault)) {
            throw new \InvalidArgumentException('non-nullable isDefault cannot be null');
        }
        $this->container['isDefault'] = $isDefault;

        return $this;
    }

    /**
     * Gets isPublic
     *
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
     * Sets isPublic
     *
     * @param bool|null $isPublic isPublic
     *
     * @return self
     */
    public function setIsPublic($isPublic)
    {
        if (is_null($isPublic)) {
            throw new \InvalidArgumentException('non-nullable isPublic cannot be null');
        }
        $this->container['isPublic'] = $isPublic;

        return $this;
    }

    /**
     * Gets fallbackMount
     *
     * @return string|null
     */
    public function getFallbackMount()
    {
        return $this->container['fallbackMount'];
    }

    /**
     * Sets fallbackMount
     *
     * @param string|null $fallbackMount fallbackMount
     *
     * @return self
     */
    public function setFallbackMount($fallbackMount)
    {
        if (is_null($fallbackMount)) {
            array_push($this->openAPINullablesSetToNull, 'fallbackMount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fallbackMount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fallbackMount'] = $fallbackMount;

        return $this;
    }

    /**
     * Gets relayUrl
     *
     * @return string|null
     */
    public function getRelayUrl()
    {
        return $this->container['relayUrl'];
    }

    /**
     * Sets relayUrl
     *
     * @param string|null $relayUrl relayUrl
     *
     * @return self
     */
    public function setRelayUrl($relayUrl)
    {
        if (is_null($relayUrl)) {
            array_push($this->openAPINullablesSetToNull, 'relayUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('relayUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['relayUrl'] = $relayUrl;

        return $this;
    }

    /**
     * Gets authhash
     *
     * @return string|null
     */
    public function getAuthhash()
    {
        return $this->container['authhash'];
    }

    /**
     * Sets authhash
     *
     * @param string|null $authhash authhash
     *
     * @return self
     */
    public function setAuthhash($authhash)
    {
        if (is_null($authhash)) {
            array_push($this->openAPINullablesSetToNull, 'authhash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('authhash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['authhash'] = $authhash;

        return $this;
    }

    /**
     * Gets maxListenerDuration
     *
     * @return int|null
     */
    public function getMaxListenerDuration()
    {
        return $this->container['maxListenerDuration'];
    }

    /**
     * Sets maxListenerDuration
     *
     * @param int|null $maxListenerDuration maxListenerDuration
     *
     * @return self
     */
    public function setMaxListenerDuration($maxListenerDuration)
    {
        if (is_null($maxListenerDuration)) {
            throw new \InvalidArgumentException('non-nullable maxListenerDuration cannot be null');
        }
        $this->container['maxListenerDuration'] = $maxListenerDuration;

        return $this;
    }

    /**
     * Gets enableAutodj
     *
     * @return bool|null
     */
    public function getEnableAutodj()
    {
        return $this->container['enableAutodj'];
    }

    /**
     * Sets enableAutodj
     *
     * @param bool|null $enableAutodj enableAutodj
     *
     * @return self
     */
    public function setEnableAutodj($enableAutodj)
    {
        if (is_null($enableAutodj)) {
            throw new \InvalidArgumentException('non-nullable enableAutodj cannot be null');
        }
        $this->container['enableAutodj'] = $enableAutodj;

        return $this;
    }

    /**
     * Gets autodjFormat
     *
     * @return mixed|null
     */
    public function getAutodjFormat()
    {
        return $this->container['autodjFormat'];
    }

    /**
     * Sets autodjFormat
     *
     * @param mixed|null $autodjFormat autodjFormat
     *
     * @return self
     */
    public function setAutodjFormat($autodjFormat)
    {
        if (is_null($autodjFormat)) {
            array_push($this->openAPINullablesSetToNull, 'autodjFormat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('autodjFormat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['autodjFormat'] = $autodjFormat;

        return $this;
    }

    /**
     * Gets autodjBitrate
     *
     * @return int|null
     */
    public function getAutodjBitrate()
    {
        return $this->container['autodjBitrate'];
    }

    /**
     * Sets autodjBitrate
     *
     * @param int|null $autodjBitrate autodjBitrate
     *
     * @return self
     */
    public function setAutodjBitrate($autodjBitrate)
    {
        if (is_null($autodjBitrate)) {
            array_push($this->openAPINullablesSetToNull, 'autodjBitrate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('autodjBitrate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['autodjBitrate'] = $autodjBitrate;

        return $this;
    }

    /**
     * Gets customListenUrl
     *
     * @return string|null
     */
    public function getCustomListenUrl()
    {
        return $this->container['customListenUrl'];
    }

    /**
     * Sets customListenUrl
     *
     * @param string|null $customListenUrl customListenUrl
     *
     * @return self
     */
    public function setCustomListenUrl($customListenUrl)
    {
        if (is_null($customListenUrl)) {
            array_push($this->openAPINullablesSetToNull, 'customListenUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customListenUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customListenUrl'] = $customListenUrl;

        return $this;
    }

    /**
     * Gets frontendConfig
     *
     * @return mixed[]|null
     */
    public function getFrontendConfig()
    {
        return $this->container['frontendConfig'];
    }

    /**
     * Sets frontendConfig
     *
     * @param mixed[]|null $frontendConfig frontendConfig
     *
     * @return self
     */
    public function setFrontendConfig($frontendConfig)
    {
        if (is_null($frontendConfig)) {
            throw new \InvalidArgumentException('non-nullable frontendConfig cannot be null');
        }
        $this->container['frontendConfig'] = $frontendConfig;

        return $this;
    }

    /**
     * Gets listenersUnique
     *
     * @return int|null
     */
    public function getListenersUnique()
    {
        return $this->container['listenersUnique'];
    }

    /**
     * Sets listenersUnique
     *
     * @param int|null $listenersUnique The most recent number of unique listeners.
     *
     * @return self
     */
    public function setListenersUnique($listenersUnique)
    {
        if (is_null($listenersUnique)) {
            throw new \InvalidArgumentException('non-nullable listenersUnique cannot be null');
        }
        $this->container['listenersUnique'] = $listenersUnique;

        return $this;
    }

    /**
     * Gets listenersTotal
     *
     * @return int|null
     */
    public function getListenersTotal()
    {
        return $this->container['listenersTotal'];
    }

    /**
     * Sets listenersTotal
     *
     * @param int|null $listenersTotal The most recent number of total (non-unique) listeners.
     *
     * @return self
     */
    public function setListenersTotal($listenersTotal)
    {
        if (is_null($listenersTotal)) {
            throw new \InvalidArgumentException('non-nullable listenersTotal cannot be null');
        }
        $this->container['listenersTotal'] = $listenersTotal;

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



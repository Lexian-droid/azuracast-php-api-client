<?php
/**
 * ApiNowPlayingNowPlaying
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
 * ApiNowPlayingNowPlaying Class Doc Comment
 *
 * @category Class
 * @package  AzuraCast
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiNowPlayingNowPlaying implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Api_NowPlaying_now_playing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sh_id' => 'int',
        'played_at' => 'int',
        'duration' => 'int',
        'playlist' => 'string',
        'streamer' => 'string',
        'is_request' => 'bool',
        'song' => '\AzuraCast\Model\ApiSong',
        'elapsed' => 'int',
        'remaining' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sh_id' => null,
        'played_at' => null,
        'duration' => null,
        'playlist' => null,
        'streamer' => null,
        'is_request' => null,
        'song' => null,
        'elapsed' => null,
        'remaining' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sh_id' => false,
        'played_at' => false,
        'duration' => false,
        'playlist' => true,
        'streamer' => true,
        'is_request' => false,
        'song' => false,
        'elapsed' => false,
        'remaining' => false
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
        'sh_id' => 'sh_id',
        'played_at' => 'played_at',
        'duration' => 'duration',
        'playlist' => 'playlist',
        'streamer' => 'streamer',
        'is_request' => 'is_request',
        'song' => 'song',
        'elapsed' => 'elapsed',
        'remaining' => 'remaining'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sh_id' => 'setShId',
        'played_at' => 'setPlayedAt',
        'duration' => 'setDuration',
        'playlist' => 'setPlaylist',
        'streamer' => 'setStreamer',
        'is_request' => 'setIsRequest',
        'song' => 'setSong',
        'elapsed' => 'setElapsed',
        'remaining' => 'setRemaining'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sh_id' => 'getShId',
        'played_at' => 'getPlayedAt',
        'duration' => 'getDuration',
        'playlist' => 'getPlaylist',
        'streamer' => 'getStreamer',
        'is_request' => 'getIsRequest',
        'song' => 'getSong',
        'elapsed' => 'getElapsed',
        'remaining' => 'getRemaining'
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
        $this->setIfExists('sh_id', $data ?? [], null);
        $this->setIfExists('played_at', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('playlist', $data ?? [], null);
        $this->setIfExists('streamer', $data ?? [], null);
        $this->setIfExists('is_request', $data ?? [], null);
        $this->setIfExists('song', $data ?? [], null);
        $this->setIfExists('elapsed', $data ?? [], null);
        $this->setIfExists('remaining', $data ?? [], null);
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
     * Gets sh_id
     *
     * @return int|null
     */
    public function getShId()
    {
        return $this->container['sh_id'];
    }

    /**
     * Sets sh_id
     *
     * @param int|null $sh_id Song history unique identifier
     *
     * @return self
     */
    public function setShId($sh_id)
    {
        if (is_null($sh_id)) {
            throw new \InvalidArgumentException('non-nullable sh_id cannot be null');
        }
        $this->container['sh_id'] = $sh_id;

        return $this;
    }

    /**
     * Gets played_at
     *
     * @return int|null
     */
    public function getPlayedAt()
    {
        return $this->container['played_at'];
    }

    /**
     * Sets played_at
     *
     * @param int|null $played_at UNIX timestamp when playback started.
     *
     * @return self
     */
    public function setPlayedAt($played_at)
    {
        if (is_null($played_at)) {
            throw new \InvalidArgumentException('non-nullable played_at cannot be null');
        }
        $this->container['played_at'] = $played_at;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Duration of the song in seconds
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets playlist
     *
     * @return string|null
     */
    public function getPlaylist()
    {
        return $this->container['playlist'];
    }

    /**
     * Sets playlist
     *
     * @param string|null $playlist Indicates the playlist that the song was played from, if available, or empty string if not.
     *
     * @return self
     */
    public function setPlaylist($playlist)
    {
        if (is_null($playlist)) {
            array_push($this->openAPINullablesSetToNull, 'playlist');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('playlist', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['playlist'] = $playlist;

        return $this;
    }

    /**
     * Gets streamer
     *
     * @return string|null
     */
    public function getStreamer()
    {
        return $this->container['streamer'];
    }

    /**
     * Sets streamer
     *
     * @param string|null $streamer Indicates the current streamer that was connected, if available, or empty string if not.
     *
     * @return self
     */
    public function setStreamer($streamer)
    {
        if (is_null($streamer)) {
            array_push($this->openAPINullablesSetToNull, 'streamer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('streamer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['streamer'] = $streamer;

        return $this;
    }

    /**
     * Gets is_request
     *
     * @return bool|null
     */
    public function getIsRequest()
    {
        return $this->container['is_request'];
    }

    /**
     * Sets is_request
     *
     * @param bool|null $is_request Indicates whether the song is a listener request.
     *
     * @return self
     */
    public function setIsRequest($is_request)
    {
        if (is_null($is_request)) {
            throw new \InvalidArgumentException('non-nullable is_request cannot be null');
        }
        $this->container['is_request'] = $is_request;

        return $this;
    }

    /**
     * Gets song
     *
     * @return \AzuraCast\Model\ApiSong|null
     */
    public function getSong()
    {
        return $this->container['song'];
    }

    /**
     * Sets song
     *
     * @param \AzuraCast\Model\ApiSong|null $song song
     *
     * @return self
     */
    public function setSong($song)
    {
        if (is_null($song)) {
            throw new \InvalidArgumentException('non-nullable song cannot be null');
        }
        $this->container['song'] = $song;

        return $this;
    }

    /**
     * Gets elapsed
     *
     * @return int|null
     */
    public function getElapsed()
    {
        return $this->container['elapsed'];
    }

    /**
     * Sets elapsed
     *
     * @param int|null $elapsed Elapsed time of the song's playback since it started.
     *
     * @return self
     */
    public function setElapsed($elapsed)
    {
        if (is_null($elapsed)) {
            throw new \InvalidArgumentException('non-nullable elapsed cannot be null');
        }
        $this->container['elapsed'] = $elapsed;

        return $this;
    }

    /**
     * Gets remaining
     *
     * @return int|null
     */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
     * Sets remaining
     *
     * @param int|null $remaining Remaining time in the song, in seconds.
     *
     * @return self
     */
    public function setRemaining($remaining)
    {
        if (is_null($remaining)) {
            throw new \InvalidArgumentException('non-nullable remaining cannot be null');
        }
        $this->container['remaining'] = $remaining;

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



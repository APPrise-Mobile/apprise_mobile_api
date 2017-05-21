<?php
/**
 * ContentFeedProfileCarousel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * APPrise Mobile API
 *
 * API for APPrise Mobile Clients
 *
 * OpenAPI spec version: 2.0.0
 * Contact: customercare@apprise-mobile.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ContentFeedProfileCarousel Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContentFeedProfileCarousel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ContentFeedProfile_carousel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carousel_id' => '\Swagger\Client\Model\CalendarPropertiesId',
        'title' => 'string',
        'content' => '\Swagger\Client\Model\CalendarPropertiesId',
        's3_key' => 'string',
        'small_carousel_key' => 'string',
        'medium_carousel_key' => 'string',
        'large_carousel_key' => 'string',
        'xlarge_carousel_key' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'carousel_id' => 'carouselId',
        'title' => 'title',
        'content' => 'content',
        's3_key' => 's3Key',
        'small_carousel_key' => 'smallCarouselKey',
        'medium_carousel_key' => 'mediumCarouselKey',
        'large_carousel_key' => 'largeCarouselKey',
        'xlarge_carousel_key' => 'xlargeCarouselKey'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'carousel_id' => 'setCarouselId',
        'title' => 'setTitle',
        'content' => 'setContent',
        's3_key' => 'setS3Key',
        'small_carousel_key' => 'setSmallCarouselKey',
        'medium_carousel_key' => 'setMediumCarouselKey',
        'large_carousel_key' => 'setLargeCarouselKey',
        'xlarge_carousel_key' => 'setXlargeCarouselKey'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'carousel_id' => 'getCarouselId',
        'title' => 'getTitle',
        'content' => 'getContent',
        's3_key' => 'getS3Key',
        'small_carousel_key' => 'getSmallCarouselKey',
        'medium_carousel_key' => 'getMediumCarouselKey',
        'large_carousel_key' => 'getLargeCarouselKey',
        'xlarge_carousel_key' => 'getXlargeCarouselKey'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carousel_id'] = isset($data['carousel_id']) ? $data['carousel_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['s3_key'] = isset($data['s3_key']) ? $data['s3_key'] : null;
        $this->container['small_carousel_key'] = isset($data['small_carousel_key']) ? $data['small_carousel_key'] : null;
        $this->container['medium_carousel_key'] = isset($data['medium_carousel_key']) ? $data['medium_carousel_key'] : null;
        $this->container['large_carousel_key'] = isset($data['large_carousel_key']) ? $data['large_carousel_key'] : null;
        $this->container['xlarge_carousel_key'] = isset($data['xlarge_carousel_key']) ? $data['xlarge_carousel_key'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets carousel_id
     * @return \Swagger\Client\Model\CalendarPropertiesId
     */
    public function getCarouselId()
    {
        return $this->container['carousel_id'];
    }

    /**
     * Sets carousel_id
     * @param \Swagger\Client\Model\CalendarPropertiesId $carousel_id
     * @return $this
     */
    public function setCarouselId($carousel_id)
    {
        $this->container['carousel_id'] = $carousel_id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets content
     * @return \Swagger\Client\Model\CalendarPropertiesId
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param \Swagger\Client\Model\CalendarPropertiesId $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets s3_key
     * @return string
     */
    public function getS3Key()
    {
        return $this->container['s3_key'];
    }

    /**
     * Sets s3_key
     * @param string $s3_key
     * @return $this
     */
    public function setS3Key($s3_key)
    {
        $this->container['s3_key'] = $s3_key;

        return $this;
    }

    /**
     * Gets small_carousel_key
     * @return string
     */
    public function getSmallCarouselKey()
    {
        return $this->container['small_carousel_key'];
    }

    /**
     * Sets small_carousel_key
     * @param string $small_carousel_key
     * @return $this
     */
    public function setSmallCarouselKey($small_carousel_key)
    {
        $this->container['small_carousel_key'] = $small_carousel_key;

        return $this;
    }

    /**
     * Gets medium_carousel_key
     * @return string
     */
    public function getMediumCarouselKey()
    {
        return $this->container['medium_carousel_key'];
    }

    /**
     * Sets medium_carousel_key
     * @param string $medium_carousel_key
     * @return $this
     */
    public function setMediumCarouselKey($medium_carousel_key)
    {
        $this->container['medium_carousel_key'] = $medium_carousel_key;

        return $this;
    }

    /**
     * Gets large_carousel_key
     * @return string
     */
    public function getLargeCarouselKey()
    {
        return $this->container['large_carousel_key'];
    }

    /**
     * Sets large_carousel_key
     * @param string $large_carousel_key
     * @return $this
     */
    public function setLargeCarouselKey($large_carousel_key)
    {
        $this->container['large_carousel_key'] = $large_carousel_key;

        return $this;
    }

    /**
     * Gets xlarge_carousel_key
     * @return string
     */
    public function getXlargeCarouselKey()
    {
        return $this->container['xlarge_carousel_key'];
    }

    /**
     * Sets xlarge_carousel_key
     * @param string $xlarge_carousel_key
     * @return $this
     */
    public function setXlargeCarouselKey($xlarge_carousel_key)
    {
        $this->container['xlarge_carousel_key'] = $xlarge_carousel_key;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


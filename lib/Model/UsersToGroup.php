<?php
/**
 * UsersToGroup
 *
 * PHP version 5
 *
 * @category Class
 * @package  Scalyr
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Scalyr API
 *
 * You can use the Scalyr API to send and retrieve log data directly from Scalyr servers, as well as manage configuration files. It is usually most convenient to use the Scalyr Agent to send log files, and to view logs on the web site.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Scalyr\Model;

use \ArrayAccess;
use \Scalyr\ObjectSerializer;

/**
 * UsersToGroup Class Doc Comment
 *
 * @category Class
 * @description Object to add users to group
 * @package  Scalyr
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsersToGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UsersToGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token' => 'string',
        'group_name' => 'string',
        'user_emails' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'token' => null,
        'group_name' => null,
        'user_emails' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'token' => 'token',
        'group_name' => 'groupName',
        'user_emails' => 'userEmails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token' => 'setToken',
        'group_name' => 'setGroupName',
        'user_emails' => 'setUserEmails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token' => 'getToken',
        'group_name' => 'getGroupName',
        'user_emails' => 'getUserEmails'
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['user_emails'] = isset($data['user_emails']) ? $data['user_emails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['group_name'] === null) {
            $invalidProperties[] = "'group_name' can't be null";
        }
        if ($this->container['user_emails'] === null) {
            $invalidProperties[] = "'user_emails' can't be null";
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
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name group_name
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets user_emails
     *
     * @return string[]
     */
    public function getUserEmails()
    {
        return $this->container['user_emails'];
    }

    /**
     * Sets user_emails
     *
     * @param string[] $user_emails user_emails
     *
     * @return $this
     */
    public function setUserEmails($user_emails)
    {
        $this->container['user_emails'] = $user_emails;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}



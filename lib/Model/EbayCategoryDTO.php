<?php
/**
 * EbayCategoryDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eSagu ebay RePricing API
 *
 * eSagu API to reprice items on ebay.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model;

use \ArrayAccess;

/**
 * EbayCategoryDTO Class Doc Comment
 *
 * @category    Class
 * @description An ebay product category. Contains all information about the product category like name or id.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EbayCategoryDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EbayCategoryDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category_id' => 'int',
        'category_level' => 'int',
        'leaf_category' => 'bool',
        'name' => 'string',
        'parent_category_id' => 'int',
        'root_category_id' => 'int',
        'site' => 'string'
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
        'category_id' => 'categoryId',
        'category_level' => 'categoryLevel',
        'leaf_category' => 'leafCategory',
        'name' => 'name',
        'parent_category_id' => 'parentCategoryId',
        'root_category_id' => 'rootCategoryId',
        'site' => 'site'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'category_id' => 'setCategoryId',
        'category_level' => 'setCategoryLevel',
        'leaf_category' => 'setLeafCategory',
        'name' => 'setName',
        'parent_category_id' => 'setParentCategoryId',
        'root_category_id' => 'setRootCategoryId',
        'site' => 'setSite'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'category_id' => 'getCategoryId',
        'category_level' => 'getCategoryLevel',
        'leaf_category' => 'getLeafCategory',
        'name' => 'getName',
        'parent_category_id' => 'getParentCategoryId',
        'root_category_id' => 'getRootCategoryId',
        'site' => 'getSite'
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

    const SITE_US = 'EBAY_US';
    const SITE_ENCA = 'EBAY_ENCA';
    const SITE_GB = 'EBAY_GB';
    const SITE_AU = 'EBAY_AU';
    const SITE_AT = 'EBAY_AT';
    const SITE_FRBE = 'EBAY_FRBE';
    const SITE_FR = 'EBAY_FR';
    const SITE_DE = 'EBAY_DE';
    const SITE_MOTOR = 'EBAY_MOTOR';
    const SITE_IT = 'EBAY_IT';
    const SITE_NLBE = 'EBAY_NLBE';
    const SITE_NL = 'EBAY_NL';
    const SITE_ES = 'EBAY_ES';
    const SITE_CH = 'EBAY_CH';
    const SITE_HK = 'EBAY_HK';
    const SITE_IN = 'EBAY_IN';
    const SITE_IE = 'EBAY_IE';
    const SITE_MY = 'EBAY_MY';
    const SITE_FRCA = 'EBAY_FRCA';
    const SITE_PH = 'EBAY_PH';
    const SITE_PL = 'EBAY_PL';
    const SITE_SG = 'EBAY_SG';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSiteAllowableValues()
    {
        return [
            self::SITE_US,
            self::SITE_ENCA,
            self::SITE_GB,
            self::SITE_AU,
            self::SITE_AT,
            self::SITE_FRBE,
            self::SITE_FR,
            self::SITE_DE,
            self::SITE_MOTOR,
            self::SITE_IT,
            self::SITE_NLBE,
            self::SITE_NL,
            self::SITE_ES,
            self::SITE_CH,
            self::SITE_HK,
            self::SITE_IN,
            self::SITE_IE,
            self::SITE_MY,
            self::SITE_FRCA,
            self::SITE_PH,
            self::SITE_PL,
            self::SITE_SG,
        ];
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
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['category_level'] = isset($data['category_level']) ? $data['category_level'] : null;
        $this->container['leaf_category'] = isset($data['leaf_category']) ? $data['leaf_category'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent_category_id'] = isset($data['parent_category_id']) ? $data['parent_category_id'] : null;
        $this->container['root_category_id'] = isset($data['root_category_id']) ? $data['root_category_id'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["EBAY_US", "EBAY_ENCA", "EBAY_GB", "EBAY_AU", "EBAY_AT", "EBAY_FRBE", "EBAY_FR", "EBAY_DE", "EBAY_MOTOR", "EBAY_IT", "EBAY_NLBE", "EBAY_NL", "EBAY_ES", "EBAY_CH", "EBAY_HK", "EBAY_IN", "EBAY_IE", "EBAY_MY", "EBAY_FRCA", "EBAY_PH", "EBAY_PL", "EBAY_SG"];
        if (!in_array($this->container['site'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'site', must be one of 'EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG'.";
        }

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

        $allowed_values = ["EBAY_US", "EBAY_ENCA", "EBAY_GB", "EBAY_AU", "EBAY_AT", "EBAY_FRBE", "EBAY_FR", "EBAY_DE", "EBAY_MOTOR", "EBAY_IT", "EBAY_NLBE", "EBAY_NL", "EBAY_ES", "EBAY_CH", "EBAY_HK", "EBAY_IN", "EBAY_IE", "EBAY_MY", "EBAY_FRCA", "EBAY_PH", "EBAY_PL", "EBAY_SG"];
        if (!in_array($this->container['site'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets category_id
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param int $category_id
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category_level
     * @return int
     */
    public function getCategoryLevel()
    {
        return $this->container['category_level'];
    }

    /**
     * Sets category_level
     * @param int $category_level
     * @return $this
     */
    public function setCategoryLevel($category_level)
    {
        $this->container['category_level'] = $category_level;

        return $this;
    }

    /**
     * Gets leaf_category
     * @return bool
     */
    public function getLeafCategory()
    {
        return $this->container['leaf_category'];
    }

    /**
     * Sets leaf_category
     * @param bool $leaf_category
     * @return $this
     */
    public function setLeafCategory($leaf_category)
    {
        $this->container['leaf_category'] = $leaf_category;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_category_id
     * @return int
     */
    public function getParentCategoryId()
    {
        return $this->container['parent_category_id'];
    }

    /**
     * Sets parent_category_id
     * @param int $parent_category_id
     * @return $this
     */
    public function setParentCategoryId($parent_category_id)
    {
        $this->container['parent_category_id'] = $parent_category_id;

        return $this;
    }

    /**
     * Gets root_category_id
     * @return int
     */
    public function getRootCategoryId()
    {
        return $this->container['root_category_id'];
    }

    /**
     * Sets root_category_id
     * @param int $root_category_id
     * @return $this
     */
    public function setRootCategoryId($root_category_id)
    {
        $this->container['root_category_id'] = $root_category_id;

        return $this;
    }

    /**
     * Gets site
     * @return string
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     * @param string $site
     * @return $this
     */
    public function setSite($site)
    {
        $allowed_values = array('EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG');
        if (!is_null($site) && (!in_array($site, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'site', must be one of 'EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG'");
        }
        $this->container['site'] = $site;

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
            return json_encode(\eSagu\EBay\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\eSagu\EBay\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this));
    }
}



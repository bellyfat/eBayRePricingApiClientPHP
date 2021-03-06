<?php
/**
 * SettingsDTO
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

namespace eSagu\EBay\RePricing\V1\Model;

use \ArrayAccess;

/**
 * SettingsDTO Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SettingsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SettingsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'crawl_quantity_zero_items' => 'bool',
        'download_enabled' => 'bool',
        'ebay_global_id' => 'string',
        'inserted' => '\DateTime',
        'item_max_age_seconds' => 'int',
        'outdated_stock_items_minus_days' => 'int',
        'show_expert_settings' => 'bool',
        'stock_update_max_age' => 'int',
        'updated' => '\DateTime',
        'upload_enabled' => 'bool',
        'use_relist_parent_id' => 'bool'
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
        'crawl_quantity_zero_items' => 'crawlQuantityZeroItems',
        'download_enabled' => 'downloadEnabled',
        'ebay_global_id' => 'ebayGlobalId',
        'inserted' => 'inserted',
        'item_max_age_seconds' => 'itemMaxAgeSeconds',
        'outdated_stock_items_minus_days' => 'outdatedStockItemsMinusDays',
        'show_expert_settings' => 'showExpertSettings',
        'stock_update_max_age' => 'stockUpdateMaxAge',
        'updated' => 'updated',
        'upload_enabled' => 'uploadEnabled',
        'use_relist_parent_id' => 'useRelistParentId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'crawl_quantity_zero_items' => 'setCrawlQuantityZeroItems',
        'download_enabled' => 'setDownloadEnabled',
        'ebay_global_id' => 'setEbayGlobalId',
        'inserted' => 'setInserted',
        'item_max_age_seconds' => 'setItemMaxAgeSeconds',
        'outdated_stock_items_minus_days' => 'setOutdatedStockItemsMinusDays',
        'show_expert_settings' => 'setShowExpertSettings',
        'stock_update_max_age' => 'setStockUpdateMaxAge',
        'updated' => 'setUpdated',
        'upload_enabled' => 'setUploadEnabled',
        'use_relist_parent_id' => 'setUseRelistParentId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'crawl_quantity_zero_items' => 'getCrawlQuantityZeroItems',
        'download_enabled' => 'getDownloadEnabled',
        'ebay_global_id' => 'getEbayGlobalId',
        'inserted' => 'getInserted',
        'item_max_age_seconds' => 'getItemMaxAgeSeconds',
        'outdated_stock_items_minus_days' => 'getOutdatedStockItemsMinusDays',
        'show_expert_settings' => 'getShowExpertSettings',
        'stock_update_max_age' => 'getStockUpdateMaxAge',
        'updated' => 'getUpdated',
        'upload_enabled' => 'getUploadEnabled',
        'use_relist_parent_id' => 'getUseRelistParentId'
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

    const EBAY_GLOBAL_ID_US = 'EBAY_US';
    const EBAY_GLOBAL_ID_ENCA = 'EBAY_ENCA';
    const EBAY_GLOBAL_ID_GB = 'EBAY_GB';
    const EBAY_GLOBAL_ID_AU = 'EBAY_AU';
    const EBAY_GLOBAL_ID_AT = 'EBAY_AT';
    const EBAY_GLOBAL_ID_FRBE = 'EBAY_FRBE';
    const EBAY_GLOBAL_ID_FR = 'EBAY_FR';
    const EBAY_GLOBAL_ID_DE = 'EBAY_DE';
    const EBAY_GLOBAL_ID_MOTOR = 'EBAY_MOTOR';
    const EBAY_GLOBAL_ID_IT = 'EBAY_IT';
    const EBAY_GLOBAL_ID_NLBE = 'EBAY_NLBE';
    const EBAY_GLOBAL_ID_NL = 'EBAY_NL';
    const EBAY_GLOBAL_ID_ES = 'EBAY_ES';
    const EBAY_GLOBAL_ID_CH = 'EBAY_CH';
    const EBAY_GLOBAL_ID_HK = 'EBAY_HK';
    const EBAY_GLOBAL_ID_IN = 'EBAY_IN';
    const EBAY_GLOBAL_ID_IE = 'EBAY_IE';
    const EBAY_GLOBAL_ID_MY = 'EBAY_MY';
    const EBAY_GLOBAL_ID_FRCA = 'EBAY_FRCA';
    const EBAY_GLOBAL_ID_PH = 'EBAY_PH';
    const EBAY_GLOBAL_ID_PL = 'EBAY_PL';
    const EBAY_GLOBAL_ID_SG = 'EBAY_SG';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEbayGlobalIdAllowableValues()
    {
        return [
            self::EBAY_GLOBAL_ID_US,
            self::EBAY_GLOBAL_ID_ENCA,
            self::EBAY_GLOBAL_ID_GB,
            self::EBAY_GLOBAL_ID_AU,
            self::EBAY_GLOBAL_ID_AT,
            self::EBAY_GLOBAL_ID_FRBE,
            self::EBAY_GLOBAL_ID_FR,
            self::EBAY_GLOBAL_ID_DE,
            self::EBAY_GLOBAL_ID_MOTOR,
            self::EBAY_GLOBAL_ID_IT,
            self::EBAY_GLOBAL_ID_NLBE,
            self::EBAY_GLOBAL_ID_NL,
            self::EBAY_GLOBAL_ID_ES,
            self::EBAY_GLOBAL_ID_CH,
            self::EBAY_GLOBAL_ID_HK,
            self::EBAY_GLOBAL_ID_IN,
            self::EBAY_GLOBAL_ID_IE,
            self::EBAY_GLOBAL_ID_MY,
            self::EBAY_GLOBAL_ID_FRCA,
            self::EBAY_GLOBAL_ID_PH,
            self::EBAY_GLOBAL_ID_PL,
            self::EBAY_GLOBAL_ID_SG,
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
        $this->container['crawl_quantity_zero_items'] = isset($data['crawl_quantity_zero_items']) ? $data['crawl_quantity_zero_items'] : null;
        $this->container['download_enabled'] = isset($data['download_enabled']) ? $data['download_enabled'] : null;
        $this->container['ebay_global_id'] = isset($data['ebay_global_id']) ? $data['ebay_global_id'] : null;
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['item_max_age_seconds'] = isset($data['item_max_age_seconds']) ? $data['item_max_age_seconds'] : null;
        $this->container['outdated_stock_items_minus_days'] = isset($data['outdated_stock_items_minus_days']) ? $data['outdated_stock_items_minus_days'] : null;
        $this->container['show_expert_settings'] = isset($data['show_expert_settings']) ? $data['show_expert_settings'] : null;
        $this->container['stock_update_max_age'] = isset($data['stock_update_max_age']) ? $data['stock_update_max_age'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['upload_enabled'] = isset($data['upload_enabled']) ? $data['upload_enabled'] : null;
        $this->container['use_relist_parent_id'] = isset($data['use_relist_parent_id']) ? $data['use_relist_parent_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['crawl_quantity_zero_items'] === null) {
            $invalid_properties[] = "'crawl_quantity_zero_items' can't be null";
        }
        if ($this->container['download_enabled'] === null) {
            $invalid_properties[] = "'download_enabled' can't be null";
        }
        $allowed_values = ["EBAY_US", "EBAY_ENCA", "EBAY_GB", "EBAY_AU", "EBAY_AT", "EBAY_FRBE", "EBAY_FR", "EBAY_DE", "EBAY_MOTOR", "EBAY_IT", "EBAY_NLBE", "EBAY_NL", "EBAY_ES", "EBAY_CH", "EBAY_HK", "EBAY_IN", "EBAY_IE", "EBAY_MY", "EBAY_FRCA", "EBAY_PH", "EBAY_PL", "EBAY_SG"];
        if (!in_array($this->container['ebay_global_id'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'ebay_global_id', must be one of 'EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG'.";
        }

        if ($this->container['item_max_age_seconds'] === null) {
            $invalid_properties[] = "'item_max_age_seconds' can't be null";
        }
        if ($this->container['outdated_stock_items_minus_days'] === null) {
            $invalid_properties[] = "'outdated_stock_items_minus_days' can't be null";
        }
        if ($this->container['show_expert_settings'] === null) {
            $invalid_properties[] = "'show_expert_settings' can't be null";
        }
        if ($this->container['stock_update_max_age'] === null) {
            $invalid_properties[] = "'stock_update_max_age' can't be null";
        }
        if ($this->container['upload_enabled'] === null) {
            $invalid_properties[] = "'upload_enabled' can't be null";
        }
        if ($this->container['use_relist_parent_id'] === null) {
            $invalid_properties[] = "'use_relist_parent_id' can't be null";
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

        if ($this->container['crawl_quantity_zero_items'] === null) {
            return false;
        }
        if ($this->container['download_enabled'] === null) {
            return false;
        }
        $allowed_values = ["EBAY_US", "EBAY_ENCA", "EBAY_GB", "EBAY_AU", "EBAY_AT", "EBAY_FRBE", "EBAY_FR", "EBAY_DE", "EBAY_MOTOR", "EBAY_IT", "EBAY_NLBE", "EBAY_NL", "EBAY_ES", "EBAY_CH", "EBAY_HK", "EBAY_IN", "EBAY_IE", "EBAY_MY", "EBAY_FRCA", "EBAY_PH", "EBAY_PL", "EBAY_SG"];
        if (!in_array($this->container['ebay_global_id'], $allowed_values)) {
            return false;
        }
        if ($this->container['item_max_age_seconds'] === null) {
            return false;
        }
        if ($this->container['outdated_stock_items_minus_days'] === null) {
            return false;
        }
        if ($this->container['show_expert_settings'] === null) {
            return false;
        }
        if ($this->container['stock_update_max_age'] === null) {
            return false;
        }
        if ($this->container['upload_enabled'] === null) {
            return false;
        }
        if ($this->container['use_relist_parent_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets crawl_quantity_zero_items
     * @return bool
     */
    public function getCrawlQuantityZeroItems()
    {
        return $this->container['crawl_quantity_zero_items'];
    }

    /**
     * Sets crawl_quantity_zero_items
     * @param bool $crawl_quantity_zero_items
     * @return $this
     */
    public function setCrawlQuantityZeroItems($crawl_quantity_zero_items)
    {
        $this->container['crawl_quantity_zero_items'] = $crawl_quantity_zero_items;

        return $this;
    }

    /**
     * Gets download_enabled
     * @return bool
     */
    public function getDownloadEnabled()
    {
        return $this->container['download_enabled'];
    }

    /**
     * Sets download_enabled
     * @param bool $download_enabled
     * @return $this
     */
    public function setDownloadEnabled($download_enabled)
    {
        $this->container['download_enabled'] = $download_enabled;

        return $this;
    }

    /**
     * Gets ebay_global_id
     * @return string
     */
    public function getEbayGlobalId()
    {
        return $this->container['ebay_global_id'];
    }

    /**
     * Sets ebay_global_id
     * @param string $ebay_global_id
     * @return $this
     */
    public function setEbayGlobalId($ebay_global_id)
    {
        $allowed_values = array('EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG');
        if (!is_null($ebay_global_id) && (!in_array($ebay_global_id, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'ebay_global_id', must be one of 'EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG'");
        }
        $this->container['ebay_global_id'] = $ebay_global_id;

        return $this;
    }

    /**
     * Gets inserted
     * @return \DateTime
     */
    public function getInserted()
    {
        return $this->container['inserted'];
    }

    /**
     * Sets inserted
     * @param \DateTime $inserted
     * @return $this
     */
    public function setInserted($inserted)
    {
        $this->container['inserted'] = $inserted;

        return $this;
    }

    /**
     * Gets item_max_age_seconds
     * @return int
     */
    public function getItemMaxAgeSeconds()
    {
        return $this->container['item_max_age_seconds'];
    }

    /**
     * Sets item_max_age_seconds
     * @param int $item_max_age_seconds
     * @return $this
     */
    public function setItemMaxAgeSeconds($item_max_age_seconds)
    {
        $this->container['item_max_age_seconds'] = $item_max_age_seconds;

        return $this;
    }

    /**
     * Gets outdated_stock_items_minus_days
     * @return int
     */
    public function getOutdatedStockItemsMinusDays()
    {
        return $this->container['outdated_stock_items_minus_days'];
    }

    /**
     * Sets outdated_stock_items_minus_days
     * @param int $outdated_stock_items_minus_days
     * @return $this
     */
    public function setOutdatedStockItemsMinusDays($outdated_stock_items_minus_days)
    {
        $this->container['outdated_stock_items_minus_days'] = $outdated_stock_items_minus_days;

        return $this;
    }

    /**
     * Gets show_expert_settings
     * @return bool
     */
    public function getShowExpertSettings()
    {
        return $this->container['show_expert_settings'];
    }

    /**
     * Sets show_expert_settings
     * @param bool $show_expert_settings
     * @return $this
     */
    public function setShowExpertSettings($show_expert_settings)
    {
        $this->container['show_expert_settings'] = $show_expert_settings;

        return $this;
    }

    /**
     * Gets stock_update_max_age
     * @return int
     */
    public function getStockUpdateMaxAge()
    {
        return $this->container['stock_update_max_age'];
    }

    /**
     * Sets stock_update_max_age
     * @param int $stock_update_max_age
     * @return $this
     */
    public function setStockUpdateMaxAge($stock_update_max_age)
    {
        $this->container['stock_update_max_age'] = $stock_update_max_age;

        return $this;
    }

    /**
     * Gets updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param \DateTime $updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets upload_enabled
     * @return bool
     */
    public function getUploadEnabled()
    {
        return $this->container['upload_enabled'];
    }

    /**
     * Sets upload_enabled
     * @param bool $upload_enabled
     * @return $this
     */
    public function setUploadEnabled($upload_enabled)
    {
        $this->container['upload_enabled'] = $upload_enabled;

        return $this;
    }

    /**
     * Gets use_relist_parent_id
     * @return bool
     */
    public function getUseRelistParentId()
    {
        return $this->container['use_relist_parent_id'];
    }

    /**
     * Sets use_relist_parent_id
     * @param bool $use_relist_parent_id
     * @return $this
     */
    public function setUseRelistParentId($use_relist_parent_id)
    {
        $this->container['use_relist_parent_id'] = $use_relist_parent_id;

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



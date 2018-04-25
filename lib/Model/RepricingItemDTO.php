<?php
/**
 * RepricingItemDTO
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
 * RepricingItemDTO Class Doc Comment
 *
 * @category    Class
 * @description A repricing item. A repricing item contains information imported from ebay, information about competing offers infos about the optimized price, additional details found on ebay, the strategy settings and the price upload for example.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingItemDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingItemDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_details' => '\eSagu\EBay\RePricing\V1\Model\RepricingItemAdditionalDetailsDTO',
        'condition' => 'string',
        'current_price' => 'int',
        'end_time' => 'int',
        'guessed_online_price' => 'int',
        'id' => 'int',
        'initial_price' => 'int',
        'inserted' => '\DateTime',
        'item_id' => 'int',
        'item_images' => 'string[]',
        'item_url' => 'string',
        'listing_type' => 'string',
        'offer_ended' => 'bool',
        'offers' => '\eSagu\EBay\RePricing\V1\Model\ItemOfferDTO[]',
        'offers_last_update' => 'int',
        'optimization_result' => '\eSagu\EBay\RePricing\V1\Model\RepricingItemOptimizationResultDTO',
        'price_upload' => '\eSagu\EBay\RePricing\V1\Model\RepricingItemPriceUploadDTO',
        'primary_category' => '\eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO',
        'quantity' => 'int',
        'quantity_sold' => 'int',
        'search_rank' => 'int',
        'secondary_category' => '\eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO',
        'shipping_costs' => 'int',
        'site' => 'string',
        'sku' => 'string',
        'start_time' => 'int',
        'strategy' => '\eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO',
        'title' => 'string',
        'total_entries' => 'int',
        'updated' => '\DateTime',
        'user_service_id' => 'int',
        'variation_specifics' => 'map[string,string[]]',
        'variation_type' => 'string',
        'variations' => '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[]'
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
        'additional_details' => 'additionalDetails',
        'condition' => 'condition',
        'current_price' => 'currentPrice',
        'end_time' => 'endTime',
        'guessed_online_price' => 'guessedOnlinePrice',
        'id' => 'id',
        'initial_price' => 'initialPrice',
        'inserted' => 'inserted',
        'item_id' => 'itemId',
        'item_images' => 'itemImages',
        'item_url' => 'itemUrl',
        'listing_type' => 'listingType',
        'offer_ended' => 'offerEnded',
        'offers' => 'offers',
        'offers_last_update' => 'offersLastUpdate',
        'optimization_result' => 'optimizationResult',
        'price_upload' => 'priceUpload',
        'primary_category' => 'primaryCategory',
        'quantity' => 'quantity',
        'quantity_sold' => 'quantitySold',
        'search_rank' => 'searchRank',
        'secondary_category' => 'secondaryCategory',
        'shipping_costs' => 'shippingCosts',
        'site' => 'site',
        'sku' => 'sku',
        'start_time' => 'startTime',
        'strategy' => 'strategy',
        'title' => 'title',
        'total_entries' => 'totalEntries',
        'updated' => 'updated',
        'user_service_id' => 'userServiceId',
        'variation_specifics' => 'variationSpecifics',
        'variation_type' => 'variationType',
        'variations' => 'variations'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'additional_details' => 'setAdditionalDetails',
        'condition' => 'setCondition',
        'current_price' => 'setCurrentPrice',
        'end_time' => 'setEndTime',
        'guessed_online_price' => 'setGuessedOnlinePrice',
        'id' => 'setId',
        'initial_price' => 'setInitialPrice',
        'inserted' => 'setInserted',
        'item_id' => 'setItemId',
        'item_images' => 'setItemImages',
        'item_url' => 'setItemUrl',
        'listing_type' => 'setListingType',
        'offer_ended' => 'setOfferEnded',
        'offers' => 'setOffers',
        'offers_last_update' => 'setOffersLastUpdate',
        'optimization_result' => 'setOptimizationResult',
        'price_upload' => 'setPriceUpload',
        'primary_category' => 'setPrimaryCategory',
        'quantity' => 'setQuantity',
        'quantity_sold' => 'setQuantitySold',
        'search_rank' => 'setSearchRank',
        'secondary_category' => 'setSecondaryCategory',
        'shipping_costs' => 'setShippingCosts',
        'site' => 'setSite',
        'sku' => 'setSku',
        'start_time' => 'setStartTime',
        'strategy' => 'setStrategy',
        'title' => 'setTitle',
        'total_entries' => 'setTotalEntries',
        'updated' => 'setUpdated',
        'user_service_id' => 'setUserServiceId',
        'variation_specifics' => 'setVariationSpecifics',
        'variation_type' => 'setVariationType',
        'variations' => 'setVariations'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'additional_details' => 'getAdditionalDetails',
        'condition' => 'getCondition',
        'current_price' => 'getCurrentPrice',
        'end_time' => 'getEndTime',
        'guessed_online_price' => 'getGuessedOnlinePrice',
        'id' => 'getId',
        'initial_price' => 'getInitialPrice',
        'inserted' => 'getInserted',
        'item_id' => 'getItemId',
        'item_images' => 'getItemImages',
        'item_url' => 'getItemUrl',
        'listing_type' => 'getListingType',
        'offer_ended' => 'getOfferEnded',
        'offers' => 'getOffers',
        'offers_last_update' => 'getOffersLastUpdate',
        'optimization_result' => 'getOptimizationResult',
        'price_upload' => 'getPriceUpload',
        'primary_category' => 'getPrimaryCategory',
        'quantity' => 'getQuantity',
        'quantity_sold' => 'getQuantitySold',
        'search_rank' => 'getSearchRank',
        'secondary_category' => 'getSecondaryCategory',
        'shipping_costs' => 'getShippingCosts',
        'site' => 'getSite',
        'sku' => 'getSku',
        'start_time' => 'getStartTime',
        'strategy' => 'getStrategy',
        'title' => 'getTitle',
        'total_entries' => 'getTotalEntries',
        'updated' => 'getUpdated',
        'user_service_id' => 'getUserServiceId',
        'variation_specifics' => 'getVariationSpecifics',
        'variation_type' => 'getVariationType',
        'variations' => 'getVariations'
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

    const CONDITION_NEW = 'NEW';
    const CONDITION_NEW_OTHER = 'NEW_OTHER';
    const CONDITION_NEW_WITH_DEFECTS = 'NEW_WITH_DEFECTS';
    const CONDITION_MANUFACTURER_REFURBISHED = 'MANUFACTURER_REFURBISHED';
    const CONDITION_SELLER_REFURBISHED = 'SELLER_REFURBISHED';
    const CONDITION_LIKE_NEW = 'LIKE_NEW';
    const CONDITION_USED_EXCELLENT = 'USED_EXCELLENT';
    const CONDITION_USED_VERY_GOOD = 'USED_VERY_GOOD';
    const CONDITION_USED_GOOD = 'USED_GOOD';
    const CONDITION_USED_ACCEPTABLE = 'USED_ACCEPTABLE';
    const CONDITION_FOR_PARTS_OR_NOT_WORKING = 'FOR_PARTS_OR_NOT_WORKING';
    const CONDITION_UNKNOWN = 'UNKNOWN';
    const LISTING_TYPE_FIXED_PRICE = 'FIXED_PRICE';
    const LISTING_TYPE_UNSUPPORTED = 'UNSUPPORTED';
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
    const VARIATION_TYPE_NONE = 'NONE';
    const VARIATION_TYPE_PARENT = 'PARENT';
    const VARIATION_TYPE_CHILD = 'CHILD';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION_NEW,
            self::CONDITION_NEW_OTHER,
            self::CONDITION_NEW_WITH_DEFECTS,
            self::CONDITION_MANUFACTURER_REFURBISHED,
            self::CONDITION_SELLER_REFURBISHED,
            self::CONDITION_LIKE_NEW,
            self::CONDITION_USED_EXCELLENT,
            self::CONDITION_USED_VERY_GOOD,
            self::CONDITION_USED_GOOD,
            self::CONDITION_USED_ACCEPTABLE,
            self::CONDITION_FOR_PARTS_OR_NOT_WORKING,
            self::CONDITION_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getListingTypeAllowableValues()
    {
        return [
            self::LISTING_TYPE_FIXED_PRICE,
            self::LISTING_TYPE_UNSUPPORTED,
        ];
    }
    
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
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVariationTypeAllowableValues()
    {
        return [
            self::VARIATION_TYPE_NONE,
            self::VARIATION_TYPE_PARENT,
            self::VARIATION_TYPE_CHILD,
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
        $this->container['additional_details'] = isset($data['additional_details']) ? $data['additional_details'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['current_price'] = isset($data['current_price']) ? $data['current_price'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['guessed_online_price'] = isset($data['guessed_online_price']) ? $data['guessed_online_price'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['initial_price'] = isset($data['initial_price']) ? $data['initial_price'] : null;
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_images'] = isset($data['item_images']) ? $data['item_images'] : null;
        $this->container['item_url'] = isset($data['item_url']) ? $data['item_url'] : null;
        $this->container['listing_type'] = isset($data['listing_type']) ? $data['listing_type'] : null;
        $this->container['offer_ended'] = isset($data['offer_ended']) ? $data['offer_ended'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
        $this->container['offers_last_update'] = isset($data['offers_last_update']) ? $data['offers_last_update'] : null;
        $this->container['optimization_result'] = isset($data['optimization_result']) ? $data['optimization_result'] : null;
        $this->container['price_upload'] = isset($data['price_upload']) ? $data['price_upload'] : null;
        $this->container['primary_category'] = isset($data['primary_category']) ? $data['primary_category'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_sold'] = isset($data['quantity_sold']) ? $data['quantity_sold'] : null;
        $this->container['search_rank'] = isset($data['search_rank']) ? $data['search_rank'] : null;
        $this->container['secondary_category'] = isset($data['secondary_category']) ? $data['secondary_category'] : null;
        $this->container['shipping_costs'] = isset($data['shipping_costs']) ? $data['shipping_costs'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['total_entries'] = isset($data['total_entries']) ? $data['total_entries'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['user_service_id'] = isset($data['user_service_id']) ? $data['user_service_id'] : null;
        $this->container['variation_specifics'] = isset($data['variation_specifics']) ? $data['variation_specifics'] : null;
        $this->container['variation_type'] = isset($data['variation_type']) ? $data['variation_type'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["NEW", "NEW_OTHER", "NEW_WITH_DEFECTS", "MANUFACTURER_REFURBISHED", "SELLER_REFURBISHED", "LIKE_NEW", "USED_EXCELLENT", "USED_VERY_GOOD", "USED_GOOD", "USED_ACCEPTABLE", "FOR_PARTS_OR_NOT_WORKING", "UNKNOWN"];
        if (!in_array($this->container['condition'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'condition', must be one of 'NEW', 'NEW_OTHER', 'NEW_WITH_DEFECTS', 'MANUFACTURER_REFURBISHED', 'SELLER_REFURBISHED', 'LIKE_NEW', 'USED_EXCELLENT', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'FOR_PARTS_OR_NOT_WORKING', 'UNKNOWN'.";
        }

        $allowed_values = ["FIXED_PRICE", "UNSUPPORTED"];
        if (!in_array($this->container['listing_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'listing_type', must be one of 'FIXED_PRICE', 'UNSUPPORTED'.";
        }

        $allowed_values = ["EBAY_US", "EBAY_ENCA", "EBAY_GB", "EBAY_AU", "EBAY_AT", "EBAY_FRBE", "EBAY_FR", "EBAY_DE", "EBAY_MOTOR", "EBAY_IT", "EBAY_NLBE", "EBAY_NL", "EBAY_ES", "EBAY_CH", "EBAY_HK", "EBAY_IN", "EBAY_IE", "EBAY_MY", "EBAY_FRCA", "EBAY_PH", "EBAY_PL", "EBAY_SG"];
        if (!in_array($this->container['site'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'site', must be one of 'EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG'.";
        }

        $allowed_values = ["NONE", "PARENT", "CHILD"];
        if (!in_array($this->container['variation_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'variation_type', must be one of 'NONE', 'PARENT', 'CHILD'.";
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

        $allowed_values = ["NEW", "NEW_OTHER", "NEW_WITH_DEFECTS", "MANUFACTURER_REFURBISHED", "SELLER_REFURBISHED", "LIKE_NEW", "USED_EXCELLENT", "USED_VERY_GOOD", "USED_GOOD", "USED_ACCEPTABLE", "FOR_PARTS_OR_NOT_WORKING", "UNKNOWN"];
        if (!in_array($this->container['condition'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["FIXED_PRICE", "UNSUPPORTED"];
        if (!in_array($this->container['listing_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["EBAY_US", "EBAY_ENCA", "EBAY_GB", "EBAY_AU", "EBAY_AT", "EBAY_FRBE", "EBAY_FR", "EBAY_DE", "EBAY_MOTOR", "EBAY_IT", "EBAY_NLBE", "EBAY_NL", "EBAY_ES", "EBAY_CH", "EBAY_HK", "EBAY_IN", "EBAY_IE", "EBAY_MY", "EBAY_FRCA", "EBAY_PH", "EBAY_PL", "EBAY_SG"];
        if (!in_array($this->container['site'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["NONE", "PARENT", "CHILD"];
        if (!in_array($this->container['variation_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets additional_details
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingItemAdditionalDetailsDTO
     */
    public function getAdditionalDetails()
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details
     * @param \eSagu\EBay\RePricing\V1\Model\RepricingItemAdditionalDetailsDTO $additional_details
     * @return $this
     */
    public function setAdditionalDetails($additional_details)
    {
        $this->container['additional_details'] = $additional_details;

        return $this;
    }

    /**
     * Gets condition
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param string $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $allowed_values = array('NEW', 'NEW_OTHER', 'NEW_WITH_DEFECTS', 'MANUFACTURER_REFURBISHED', 'SELLER_REFURBISHED', 'LIKE_NEW', 'USED_EXCELLENT', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'FOR_PARTS_OR_NOT_WORKING', 'UNKNOWN');
        if (!is_null($condition) && (!in_array($condition, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'condition', must be one of 'NEW', 'NEW_OTHER', 'NEW_WITH_DEFECTS', 'MANUFACTURER_REFURBISHED', 'SELLER_REFURBISHED', 'LIKE_NEW', 'USED_EXCELLENT', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'FOR_PARTS_OR_NOT_WORKING', 'UNKNOWN'");
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets current_price
     * @return int
     */
    public function getCurrentPrice()
    {
        return $this->container['current_price'];
    }

    /**
     * Sets current_price
     * @param int $current_price
     * @return $this
     */
    public function setCurrentPrice($current_price)
    {
        $this->container['current_price'] = $current_price;

        return $this;
    }

    /**
     * Gets end_time
     * @return int
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     * @param int $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets guessed_online_price
     * @return int
     */
    public function getGuessedOnlinePrice()
    {
        return $this->container['guessed_online_price'];
    }

    /**
     * Sets guessed_online_price
     * @param int $guessed_online_price
     * @return $this
     */
    public function setGuessedOnlinePrice($guessed_online_price)
    {
        $this->container['guessed_online_price'] = $guessed_online_price;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets initial_price
     * @return int
     */
    public function getInitialPrice()
    {
        return $this->container['initial_price'];
    }

    /**
     * Sets initial_price
     * @param int $initial_price
     * @return $this
     */
    public function setInitialPrice($initial_price)
    {
        $this->container['initial_price'] = $initial_price;

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
     * Gets item_id
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     * @param int $item_id
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_images
     * @return string[]
     */
    public function getItemImages()
    {
        return $this->container['item_images'];
    }

    /**
     * Sets item_images
     * @param string[] $item_images
     * @return $this
     */
    public function setItemImages($item_images)
    {
        $this->container['item_images'] = $item_images;

        return $this;
    }

    /**
     * Gets item_url
     * @return string
     */
    public function getItemUrl()
    {
        return $this->container['item_url'];
    }

    /**
     * Sets item_url
     * @param string $item_url
     * @return $this
     */
    public function setItemUrl($item_url)
    {
        $this->container['item_url'] = $item_url;

        return $this;
    }

    /**
     * Gets listing_type
     * @return string
     */
    public function getListingType()
    {
        return $this->container['listing_type'];
    }

    /**
     * Sets listing_type
     * @param string $listing_type
     * @return $this
     */
    public function setListingType($listing_type)
    {
        $allowed_values = array('FIXED_PRICE', 'UNSUPPORTED');
        if (!is_null($listing_type) && (!in_array($listing_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'listing_type', must be one of 'FIXED_PRICE', 'UNSUPPORTED'");
        }
        $this->container['listing_type'] = $listing_type;

        return $this;
    }

    /**
     * Gets offer_ended
     * @return bool
     */
    public function getOfferEnded()
    {
        return $this->container['offer_ended'];
    }

    /**
     * Sets offer_ended
     * @param bool $offer_ended
     * @return $this
     */
    public function setOfferEnded($offer_ended)
    {
        $this->container['offer_ended'] = $offer_ended;

        return $this;
    }

    /**
     * Gets offers
     * @return \eSagu\EBay\RePricing\V1\Model\ItemOfferDTO[]
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     * @param \eSagu\EBay\RePricing\V1\Model\ItemOfferDTO[] $offers
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets offers_last_update
     * @return int
     */
    public function getOffersLastUpdate()
    {
        return $this->container['offers_last_update'];
    }

    /**
     * Sets offers_last_update
     * @param int $offers_last_update
     * @return $this
     */
    public function setOffersLastUpdate($offers_last_update)
    {
        $this->container['offers_last_update'] = $offers_last_update;

        return $this;
    }

    /**
     * Gets optimization_result
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingItemOptimizationResultDTO
     */
    public function getOptimizationResult()
    {
        return $this->container['optimization_result'];
    }

    /**
     * Sets optimization_result
     * @param \eSagu\EBay\RePricing\V1\Model\RepricingItemOptimizationResultDTO $optimization_result
     * @return $this
     */
    public function setOptimizationResult($optimization_result)
    {
        $this->container['optimization_result'] = $optimization_result;

        return $this;
    }

    /**
     * Gets price_upload
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingItemPriceUploadDTO
     */
    public function getPriceUpload()
    {
        return $this->container['price_upload'];
    }

    /**
     * Sets price_upload
     * @param \eSagu\EBay\RePricing\V1\Model\RepricingItemPriceUploadDTO $price_upload
     * @return $this
     */
    public function setPriceUpload($price_upload)
    {
        $this->container['price_upload'] = $price_upload;

        return $this;
    }

    /**
     * Gets primary_category
     * @return \eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO
     */
    public function getPrimaryCategory()
    {
        return $this->container['primary_category'];
    }

    /**
     * Sets primary_category
     * @param \eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO $primary_category
     * @return $this
     */
    public function setPrimaryCategory($primary_category)
    {
        $this->container['primary_category'] = $primary_category;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_sold
     * @return int
     */
    public function getQuantitySold()
    {
        return $this->container['quantity_sold'];
    }

    /**
     * Sets quantity_sold
     * @param int $quantity_sold
     * @return $this
     */
    public function setQuantitySold($quantity_sold)
    {
        $this->container['quantity_sold'] = $quantity_sold;

        return $this;
    }

    /**
     * Gets search_rank
     * @return int
     */
    public function getSearchRank()
    {
        return $this->container['search_rank'];
    }

    /**
     * Sets search_rank
     * @param int $search_rank
     * @return $this
     */
    public function setSearchRank($search_rank)
    {
        $this->container['search_rank'] = $search_rank;

        return $this;
    }

    /**
     * Gets secondary_category
     * @return \eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO
     */
    public function getSecondaryCategory()
    {
        return $this->container['secondary_category'];
    }

    /**
     * Sets secondary_category
     * @param \eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO $secondary_category
     * @return $this
     */
    public function setSecondaryCategory($secondary_category)
    {
        $this->container['secondary_category'] = $secondary_category;

        return $this;
    }

    /**
     * Gets shipping_costs
     * @return int
     */
    public function getShippingCosts()
    {
        return $this->container['shipping_costs'];
    }

    /**
     * Sets shipping_costs
     * @param int $shipping_costs
     * @return $this
     */
    public function setShippingCosts($shipping_costs)
    {
        $this->container['shipping_costs'] = $shipping_costs;

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
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets start_time
     * @return int
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param int $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets strategy
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     * @param \eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO $strategy
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;

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
     * Gets total_entries
     * @return int
     */
    public function getTotalEntries()
    {
        return $this->container['total_entries'];
    }

    /**
     * Sets total_entries
     * @param int $total_entries
     * @return $this
     */
    public function setTotalEntries($total_entries)
    {
        $this->container['total_entries'] = $total_entries;

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
     * Gets user_service_id
     * @return int
     */
    public function getUserServiceId()
    {
        return $this->container['user_service_id'];
    }

    /**
     * Sets user_service_id
     * @param int $user_service_id
     * @return $this
     */
    public function setUserServiceId($user_service_id)
    {
        $this->container['user_service_id'] = $user_service_id;

        return $this;
    }

    /**
     * Gets variation_specifics
     * @return map[string,string[]]
     */
    public function getVariationSpecifics()
    {
        return $this->container['variation_specifics'];
    }

    /**
     * Sets variation_specifics
     * @param map[string,string[]] $variation_specifics
     * @return $this
     */
    public function setVariationSpecifics($variation_specifics)
    {
        $this->container['variation_specifics'] = $variation_specifics;

        return $this;
    }

    /**
     * Gets variation_type
     * @return string
     */
    public function getVariationType()
    {
        return $this->container['variation_type'];
    }

    /**
     * Sets variation_type
     * @param string $variation_type
     * @return $this
     */
    public function setVariationType($variation_type)
    {
        $allowed_values = array('NONE', 'PARENT', 'CHILD');
        if (!is_null($variation_type) && (!in_array($variation_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'variation_type', must be one of 'NONE', 'PARENT', 'CHILD'");
        }
        $this->container['variation_type'] = $variation_type;

        return $this;
    }

    /**
     * Gets variations
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     * @param \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[] $variations
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

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



<?php
/**
 * PriceGapsApi
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
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

namespace eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Api;

use \eSagu\EBay\RePricing\V1\ApiClient;
use \eSagu\EBay\RePricing\V1\ApiException;
use \eSagu\EBay\RePricing\V1\Configuration;
use \eSagu\EBay\RePricing\V1\ObjectSerializer;

/**
 * PriceGapsApi Class Doc Comment
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceGapsApi
{
    /**
     * API Client
     *
     * @var \eSagu\EBay\RePricing\V1\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \eSagu\EBay\RePricing\V1\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\eSagu\EBay\RePricing\V1\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \eSagu\EBay\RePricing\V1\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \eSagu\EBay\RePricing\V1\ApiClient $apiClient set the API client
     *
     * @return PriceGapsApi
     */
    public function setApiClient(\eSagu\EBay\RePricing\V1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation callList
     *
     * Get a list of all PriceGaps items.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO[]
     */
    public function callList()
    {
        list($response) = $this->callListWithHttpInfo();
        return $response;
    }

    /**
     * Operation callListWithHttpInfo
     *
     * Get a list of all PriceGaps items.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO[], HTTP status code, HTTP response headers (array of strings)
     */
    public function callListWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/price-gaps";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO[]',
                '/price-gaps'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delete
     *
     * Deletes a PriceGap item.
     *
     * @param int $price_gap_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function delete($price_gap_id)
    {
        list($response) = $this->deleteWithHttpInfo($price_gap_id);
        return $response;
    }

    /**
     * Operation deleteWithHttpInfo
     *
     * Deletes a PriceGap item.
     *
     * @param int $price_gap_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWithHttpInfo($price_gap_id)
    {
        // verify the required parameter 'price_gap_id' is set
        if ($price_gap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $price_gap_id when calling delete');
        }
        // parse inputs
        $resourcePath = "/price-gaps/{priceGapId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($price_gap_id !== null) {
            $resourcePath = str_replace(
                "{" . "priceGapId" . "}",
                $this->apiClient->getSerializer()->toPathValue($price_gap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/price-gaps/{priceGapId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation get
     *
     * Get a single PriceGap item.
     *
     * @param int $price_gap_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO
     */
    public function get($price_gap_id)
    {
        list($response) = $this->getWithHttpInfo($price_gap_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Get a single PriceGap item.
     *
     * @param int $price_gap_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($price_gap_id)
    {
        // verify the required parameter 'price_gap_id' is set
        if ($price_gap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $price_gap_id when calling get');
        }
        // parse inputs
        $resourcePath = "/price-gaps/{priceGapId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($price_gap_id !== null) {
            $resourcePath = str_replace(
                "{" . "priceGapId" . "}",
                $this->apiClient->getSerializer()->toPathValue($price_gap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO',
                '/price-gaps/{priceGapId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation post
     *
     * Creates a new PriceGap item.
     *
     * @param \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function post($body = null)
    {
        list($response) = $this->postWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation postWithHttpInfo
     *
     * Creates a new PriceGap item.
     *
     * @param \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/price-gaps";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/price-gaps'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation put
     *
     * Updates a PriceGap item.
     *
     * @param int $price_gap_id  (required)
     * @param \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function put($price_gap_id, $body = null)
    {
        list($response) = $this->putWithHttpInfo($price_gap_id, $body);
        return $response;
    }

    /**
     * Operation putWithHttpInfo
     *
     * Updates a PriceGap item.
     *
     * @param int $price_gap_id  (required)
     * @param \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function putWithHttpInfo($price_gap_id, $body = null)
    {
        // verify the required parameter 'price_gap_id' is set
        if ($price_gap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $price_gap_id when calling put');
        }
        // parse inputs
        $resourcePath = "/price-gaps/{priceGapId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($price_gap_id !== null) {
            $resourcePath = str_replace(
                "{" . "priceGapId" . "}",
                $this->apiClient->getSerializer()->toPathValue($price_gap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/price-gaps/{priceGapId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
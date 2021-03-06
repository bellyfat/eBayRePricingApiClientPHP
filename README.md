# eSaguEBayRePricingAPIV1
eSagu API to reprice items on ebay.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/e-sagu/ebay-re-pricing-api-client-php.git"
    }
  ],
  "require": {
    "e-sagu/ebay-re-pricing-api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/eSaguEBayRePricingAPIV1/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\BulkEditApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkEditApi->callList: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BulkEditApi* | [**callList**](docs/Api/BulkEditApi.md#calllist) | **GET** /bulk-edit | Get a list of all bulk edits.
*BulkEditApi* | [**get**](docs/Api/BulkEditApi.md#get) | **GET** /bulk-edit/{bulkEditId} | Get a single bulk edit specified by it&#39;s id.
*BulkEditApi* | [**post**](docs/Api/BulkEditApi.md#post) | **POST** /bulk-edit | Creates a new bulk edit.
*CSVImportApi* | [**callList**](docs/Api/CSVImportApi.md#calllist) | **GET** /csv-import | Get a list of all CSV Imports for given user service.
*CSVImportApi* | [**get**](docs/Api/CSVImportApi.md#get) | **GET** /csv-import/{csvImportId} | Get the specified single CSV Import for given user service.
*CSVImportApi* | [**post**](docs/Api/CSVImportApi.md#post) | **POST** /csv-import | Creates a new CSV Import.
*CSVRequestApi* | [**callList**](docs/Api/CSVRequestApi.md#calllist) | **GET** /csv-request | Get a list of all CSV Requests for given user service.
*CSVRequestApi* | [**get**](docs/Api/CSVRequestApi.md#get) | **GET** /csv-request/{csvRequestId} | Get a single CSV Request.
*CSVRequestApi* | [**post**](docs/Api/CSVRequestApi.md#post) | **POST** /csv-request | Creates a new CSV Request.
*CSVRequestPresetApi* | [**callList**](docs/Api/CSVRequestPresetApi.md#calllist) | **GET** /csv-request/preset | Get a list of all CSV request presets for given user service.
*CSVRequestPresetApi* | [**delete**](docs/Api/CSVRequestPresetApi.md#delete) | **DELETE** /csv-request/preset/{csvRequestPresetId} | Deletes a CSV Preset specified by it&#39;s id.
*CSVRequestPresetApi* | [**get**](docs/Api/CSVRequestPresetApi.md#get) | **GET** /csv-request/preset/{csvRequestPresetId} | Get a single CSV request preset specified by it&#39;s id.
*CSVRequestPresetApi* | [**post**](docs/Api/CSVRequestPresetApi.md#post) | **POST** /csv-request/preset | Creates a new CSV Preset.
*CSVRequestPresetApi* | [**put**](docs/Api/CSVRequestPresetApi.md#put) | **PUT** /csv-request/preset/{csvRequestPresetId} | Updates a CSV Preset specified by it&#39;s id.
*CustomCodeApi* | [**callList**](docs/Api/CustomCodeApi.md#calllist) | **GET** /custom-code | Get a list of all CustomCodes items.
*CustomCodeApi* | [**get**](docs/Api/CustomCodeApi.md#get) | **GET** /custom-code/{customCodeId} | Get a single CustomCode specified by it&#39;s id..
*FindingAPIFilterApi* | [**callList**](docs/Api/FindingAPIFilterApi.md#calllist) | **GET** /finding-api-filter | Get a list of all FindingAPIFilters.
*FindingAPIFilterApi* | [**delete**](docs/Api/FindingAPIFilterApi.md#delete) | **DELETE** /finding-api-filter/{findingAPIFilterId} | Deletes a FindingAPIFilter specified by it&#39;s id.
*FindingAPIFilterApi* | [**get**](docs/Api/FindingAPIFilterApi.md#get) | **GET** /finding-api-filter/{findingAPIFilterId} | Get a single FindingAPIFilter specified by it&#39;s id.
*FindingAPIFilterApi* | [**post**](docs/Api/FindingAPIFilterApi.md#post) | **POST** /finding-api-filter | Creates a new FindingAPIFilter.
*FindingAPIFilterApi* | [**put**](docs/Api/FindingAPIFilterApi.md#put) | **PUT** /finding-api-filter/{findingAPIFilterId} | Updates a FindingAPIFilter specified by it&#39;s id.
*ItemApi* | [**callList**](docs/Api/ItemApi.md#calllist) | **GET** /item | Gets a list of repricing items.
*ItemApi* | [**get**](docs/Api/ItemApi.md#get) | **GET** /item/{itemId} | Get a single repricing Item.
*ItemStrategyApi* | [**get**](docs/Api/ItemStrategyApi.md#get) | **GET** /item/{itemId}/strategy | Gets the item&#39;s strategy settings specified by the repricing item id.
*ItemStrategyApi* | [**put**](docs/Api/ItemStrategyApi.md#put) | **PUT** /item/{itemId}/strategy | Creates or updates the item&#39;s strategy settings.
*NewItemBulkEditApi* | [**get**](docs/Api/NewItemBulkEditApi.md#get) | **GET** /new-item-bulk-edit | Get the new item bulk edit settings.
*NewItemBulkEditApi* | [**post**](docs/Api/NewItemBulkEditApi.md#post) | **POST** /new-item-bulk-edit | Creates the new item bulk edit settings if empty.
*NewItemBulkEditApi* | [**put**](docs/Api/NewItemBulkEditApi.md#put) | **PUT** /new-item-bulk-edit | Edits the new item bulk edit settings.
*OrderHistoryApi* | [**get**](docs/Api/OrderHistoryApi.md#get) | **GET** /order-history | Gets the order statistics of the last days.
*PriceGapsApi* | [**callList**](docs/Api/PriceGapsApi.md#calllist) | **GET** /price-gaps | Get a list of all PriceGaps items.
*PriceGapsApi* | [**delete**](docs/Api/PriceGapsApi.md#delete) | **DELETE** /price-gaps/{priceGapId} | Deletes a PriceGap item.
*PriceGapsApi* | [**get**](docs/Api/PriceGapsApi.md#get) | **GET** /price-gaps/{priceGapId} | Get a single PriceGap item.
*PriceGapsApi* | [**post**](docs/Api/PriceGapsApi.md#post) | **POST** /price-gaps | Creates a new PriceGap item.
*PriceGapsApi* | [**put**](docs/Api/PriceGapsApi.md#put) | **PUT** /price-gaps/{priceGapId} | Updates a PriceGap item.
*RepricingItemHistoryApi* | [**priceOptimization**](docs/Api/RepricingItemHistoryApi.md#priceoptimization) | **GET** /item/{itemId}/history/price-optimization | Gets a history of price optimizations for a given item.
*SearchTermStopWordsApi* | [**get**](docs/Api/SearchTermStopWordsApi.md#get) | **GET** /search-term-stop-words | Get the search term stop words.
*SearchTermStopWordsApi* | [**post**](docs/Api/SearchTermStopWordsApi.md#post) | **POST** /search-term-stop-words | Creates new search term stop words if empty.
*SearchTermStopWordsApi* | [**put**](docs/Api/SearchTermStopWordsApi.md#put) | **PUT** /search-term-stop-words | Edits search term stop words.
*SettingsApi* | [**get**](docs/Api/SettingsApi.md#get) | **GET** /settings | Gets the repricing settings.
*SettingsApi* | [**post**](docs/Api/SettingsApi.md#post) | **POST** /settings | Adds new repricing settings if not exists.
*SettingsApi* | [**put**](docs/Api/SettingsApi.md#put) | **PUT** /settings | Edit the repricing settings.


## Documentation For Models

 - [BulkEditDTO](docs/Model/BulkEditDTO.md)
 - [BulkEditRefinement](docs/Model/BulkEditRefinement.md)
 - [BulkEditTasks](docs/Model/BulkEditTasks.md)
 - [BulkTaskCustomCode](docs/Model/BulkTaskCustomCode.md)
 - [BulkTaskFindingAPIFilter](docs/Model/BulkTaskFindingAPIFilter.md)
 - [BulkTaskPriceGap](docs/Model/BulkTaskPriceGap.md)
 - [BulkTaskPriceMode](docs/Model/BulkTaskPriceMode.md)
 - [BulkTaskPriceSettings](docs/Model/BulkTaskPriceSettings.md)
 - [BulkTaskRemoveAdditionalDetails](docs/Model/BulkTaskRemoveAdditionalDetails.md)
 - [BulkTaskSearchTerm](docs/Model/BulkTaskSearchTerm.md)
 - [CustomCodeDTO](docs/Model/CustomCodeDTO.md)
 - [EbayCategoryDTO](docs/Model/EbayCategoryDTO.md)
 - [FindingAPIFilterDTO](docs/Model/FindingAPIFilterDTO.md)
 - [FindingAPIFilterDynamicDTO](docs/Model/FindingAPIFilterDynamicDTO.md)
 - [FindingSearchTermDTO](docs/Model/FindingSearchTermDTO.md)
 - [ItemOfferDTO](docs/Model/ItemOfferDTO.md)
 - [NewItemBulkEditDTO](docs/Model/NewItemBulkEditDTO.md)
 - [PriceGapDTO](docs/Model/PriceGapDTO.md)
 - [PriceGapsDTO](docs/Model/PriceGapsDTO.md)
 - [RefineByCondition](docs/Model/RefineByCondition.md)
 - [RefineByCurrentPrice](docs/Model/RefineByCurrentPrice.md)
 - [RefineByEndTime](docs/Model/RefineByEndTime.md)
 - [RefineByItemId](docs/Model/RefineByItemId.md)
 - [RefineByItemIds](docs/Model/RefineByItemIds.md)
 - [RefineByOrders](docs/Model/RefineByOrders.md)
 - [RefineByPriceMode](docs/Model/RefineByPriceMode.md)
 - [RefineByPriceModeWhereNull](docs/Model/RefineByPriceModeWhereNull.md)
 - [RefineByPriceState](docs/Model/RefineByPriceState.md)
 - [RefineByQuantity](docs/Model/RefineByQuantity.md)
 - [RefineBySKU](docs/Model/RefineBySKU.md)
 - [RefineByShipping](docs/Model/RefineByShipping.md)
 - [RefineBySite](docs/Model/RefineBySite.md)
 - [RefineByTitle](docs/Model/RefineByTitle.md)
 - [RefineByVariationType](docs/Model/RefineByVariationType.md)
 - [RepricingCSVImportDTO](docs/Model/RepricingCSVImportDTO.md)
 - [RepricingCSVRequestDTO](docs/Model/RepricingCSVRequestDTO.md)
 - [RepricingCSVRequestPresetDTO](docs/Model/RepricingCSVRequestPresetDTO.md)
 - [RepricingEbayOrderHistoryDTO](docs/Model/RepricingEbayOrderHistoryDTO.md)
 - [RepricingItemAdditionalDetailsDTO](docs/Model/RepricingItemAdditionalDetailsDTO.md)
 - [RepricingItemDTO](docs/Model/RepricingItemDTO.md)
 - [RepricingItemHistoryPriceOptimizationDTO](docs/Model/RepricingItemHistoryPriceOptimizationDTO.md)
 - [RepricingItemOptimizationResultDTO](docs/Model/RepricingItemOptimizationResultDTO.md)
 - [RepricingItemOrderStatsDTO](docs/Model/RepricingItemOrderStatsDTO.md)
 - [RepricingItemPriceSettingsDTO](docs/Model/RepricingItemPriceSettingsDTO.md)
 - [RepricingItemPriceUploadDTO](docs/Model/RepricingItemPriceUploadDTO.md)
 - [RepricingItemStrategyDTO](docs/Model/RepricingItemStrategyDTO.md)
 - [SearchTermStopWordsDTO](docs/Model/SearchTermStopWordsDTO.md)
 - [SettingsDTO](docs/Model/SettingsDTO.md)


## Documentation For Authorization


## jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author





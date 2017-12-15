# SparrowOne  SDK [PHP]

This repository contains a full PHP client implementation for the following APIs:

- **SPARROW Services API** (as `SparrowServiceClient`)
- **SPARROW Merchant Public API** (as `SparrowMerchantClient`)
- **SPARROW Merchant Transaction Query API** (as `SparrowMerchantClient`)

## Pre-requisites

### 1. Library requirements

- PHP >= 7.0
- Composer

### 2. Obtain a Sparrow merchant key

### `⚠ Warning ⚠`

In order to avoid the risk of running live transactions and payments while testing, it is vital to obtain and use a merchant key associated with a merchant account that has its integration mode set to either `Test` or `Development`.

### 3. Installation

The library is installed via [Composer](http://getcomposer.org/). To install, add it as a dependency to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "git",
            "url": "git@bitbucket.org:digitalequationteam/sparrow-sdk-php.git"
        }
    ],
    "require": {
        "digitalequation/sparrow-sdk": "~1.0"
    }
}
```

Project dependencies must be updated afterwards:

```bash
$ composer update
```

## SparrowServiceClient

### Creating a new instance

> TODO

## SparrowMerchantClient

### Creating a new instance

> TODO

## Useful resources

Following is a list of reference API documentation:

- **[Sparrow Gateway API Documentation](http://foresight.sparrowone.com/)**
- **[SPARROW-Services-API-for-Developers-v3.7.pdf](https://sparrowone.com/wp-content/uploads/2017/07/SPARROW-Services-API-for-Developers-v3.7.pdf)**
- **[SPARROW-Merchant-Public-API-v3.2.pdf](http://sparrowone.com/wp-content/uploads/2016/09/SPARROW-Merchant-Public-API-v3.2.pdf)**
- **[SPARROW-Merchant-Public-Services-Transaction-Query-API.pdf](http://sparrowone.com/wp-content/uploads/2017/03/SPARROW-Merchant-Public-Services-Transaction-Query-API.pdf)**

Miscellaneous API documentation (possible future use):

- [SPARROW-Custom-Redirect-API-v3.2.pdf](http://sparrowone.com/wp-content/uploads/2016/09/SPARROW-Custom-Redirect-API-v3.2.pdf)
- [SPARROW-Data-Vault-Payment-Type-API-v3.2.pdf](http://sparrowone.com/wp-content/uploads/2016/09/SPARROW-Data-Vault-Payment-Type-API-v3.2.pdf)
- [SPARROW-Echo-Web-Services-Invocation-Specification-v3.2.pdf](http://sparrowone.com/wp-content/uploads/2016/09/SPARROW-Echo-Web-Services-Invocation-Specification-v3.2.pdf)
- [SPARROW-3DS-Integration-v3.2.pdf](http://sparrowone.com/wp-content/uploads/2016/09/SPARROW-3DS-Integration-v3.2.pdf)
- [SPARROW-Merchant-Upload-API-v3.2.pdf](http://sparrowone.com/wp-content/uploads/2016/09/SPARROW-Merchant-Upload-API-v3.2.pdf)
- [SPARROW-Merchant-Public-Services-Split-Funding-API-1.pdf](http://sparrowone.com/wp-content/uploads/2017/03/SPARROW-Merchant-Public-Services-Split-Funding-API-1.pdf)
- [SPARROW-Redirect-API-v-3.2.pdf](http://sparrowone.com/wp-content/uploads/2016/09/SPARROW-Redirect-API-v-3.2.pdf)
- [SPARROW-3DS-Integration-v3.4.1.pdf](http://sparrowone.com/wp-content/uploads/2017/06/SPARROW-3DS-Integration-v3.4.1.pdf)
- [SPARROW-Merchant-Public-Services-Settlement-API-1.pdf](http://sparrowone.com/wp-content/uploads/2017/03/SPARROW-Merchant-Public-Services-Settlement-API-1.pdf)
- [Sparrow-Client-side-Payment-API-June-2015.pdf](http://sparrowone.com/wp-content/uploads/2016/03/Sparrow-Client-side-Payment-API-June-2015.pdf)
- [Sparrow-Client-Front-end-API-v3.6.pdf](http://sparrowone.com/wp-content/uploads/2017/05/Sparrow-Client-Front-end-API-v3.6.pdf)

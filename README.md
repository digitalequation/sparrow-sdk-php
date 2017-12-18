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

The library is installed via [Composer](http://getcomposer.org/).

#### Method 1 - HTTPS + Bitbucket OAuth credentials:

First, create an `auth.json` file to be used by Composer for reading credentials needed to access private internal repositories:

```json
{
    "bitbucket-oauth": {
        "bitbucket.org": {
            "consumer-key"   : "MyH864TPXtE9FEs3ZW",
            "consumer-secret": "cWzXhaB5vduxBss38wwpBWA6UcBxhnGH"
        }
    }
}
```

Afterwards, add the library as a dependency to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "git",
            "url" : "https://bitbucket.org/digitalequationteam/sparrow-sdk-php.git"
        }
    ],
    "require": {
        "digitalequation/sparrow-sdk": "~1.0"
    }
}
```

#### Method 2 - SSH + credentials agent

If you run an SSH keychain agent, then you can use the Git SSH endpoint for the project repository:

```json
{
    "repositories": [
        {
            "type": "git",
            "url" : "git@bitbucket.org:digitalequationteam/sparrow-sdk-php.git"
        }
    ],
    "require": {
        "digitalequation/sparrow-sdk": "~1.0"
    }
}
```

#### Finally:

Project dependencies must be updated after any config changes:

```bash
$ composer update
```

## [SparrowServiceClient]

#### Creating a new instance

```php
// 1. Import the service client class
use SparrowSDK\SparrowServiceClient;

// 2A. Blank instancing, add merchant key later
$sparrowSC = new SparrowServiceClient;
$sparrowSC->setMerchantKey('mmmmmmmmmmmmmmmmmmmmmmmm');

// 2B. Instancing with a merchant key
$sparrowSC = new SparrowServiceClient('mmmmmmmmmmmmmmmmmmmmmmmm');

// 3. Get currently attached merchant key
$mkey = $sparrowSC->getMerchantKey();
```

> TODO

## [SparrowMerchantClient]

#### Creating a new instance

```php
// 1. Import the merchant client class
use SparrowSDK\SparrowMerchantClient;

// 2A. Blank instancing, add merchant key later
$sparrowMC = new SparrowMerchantClient;
$sparrowMC->setMerchantKey('mmmmmmmmmmmmmmmmmmmmmmmm');

// 2B. Instancing with a merchant key
$sparrowMC = new SparrowMerchantClient('mmmmmmmmmmmmmmmmmmmmmmmm');

// 3. Get currently attached merchant key
$mkey = $sparrowMC->getMerchantKey();

// 4. Set user authentication token
$sparrowMC->setAuthToken('aaaaaaaaaaaaaaaaaaaaaaaa');

// 5. Get currently attached auth token
$authToken = $sparrowMC->getAuthToken();
```

#### Methods

- **->auth**
    - `->getToken($username, $password)` - This action is used to obtain the authentication token for the specified user
- **->terminal**
    - `->settle($token)` - This action is used to settle all transactions for the specified account which require settlement. **[requires an attached merchant key]** **[requires an attached auth token]**
- **->transaction**
    - `->getAll($fields = [])` - This action is used to retrieve a list of transactions. **[requires an attached auth token]**
    - `->getDetails($transactionId)` - This action is used to retrieve details about a particular transaction. **[requires an attached auth token]**

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

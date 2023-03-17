<?php
/**
 * ProductPricingApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products.  For more information, see the [Product Pricing v2022-05-01 Use Case Guide](doc:product-pricing-api-v2022-05-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-05-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ced\Mcf\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ced\Mcf\ApiException;
use Ced\Mcf\Configuration;
use Ced\Mcf\HeaderSelector;
use Ced\Mcf\ObjectSerializer;

/**
 * ProductPricingApi Class Doc Comment
 *
 * @category Class
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductPricingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getFeaturedOfferExpectedPriceBatch' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getFeaturedOfferExpectedPriceBatch
     *
     * @param  \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body get_featured_offer_expected_price_batch_request_body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFeaturedOfferExpectedPriceBatch'] to see the possible values for this operation
     *
     * @throws \Ced\Mcf\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors
     */
    public function getFeaturedOfferExpectedPriceBatch($get_featured_offer_expected_price_batch_request_body, string $contentType = self::contentTypes['getFeaturedOfferExpectedPriceBatch'][0])
    {
        list($response) = $this->getFeaturedOfferExpectedPriceBatchWithHttpInfo($get_featured_offer_expected_price_batch_request_body, $contentType);
        return $response;
    }

    /**
     * Operation getFeaturedOfferExpectedPriceBatchWithHttpInfo
     *
     * @param  \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFeaturedOfferExpectedPriceBatch'] to see the possible values for this operation
     *
     * @throws \Ced\Mcf\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors|\Ced\Mcf\Model\Errors, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeaturedOfferExpectedPriceBatchWithHttpInfo($get_featured_offer_expected_price_batch_request_body, string $contentType = self::contentTypes['getFeaturedOfferExpectedPriceBatch'][0])
    {
        $request = $this->getFeaturedOfferExpectedPriceBatchRequest($get_featured_offer_expected_price_batch_request_body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Ced\Mcf\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Mcf\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Mcf\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Ced\Mcf\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Mcf\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Mcf\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Ced\Mcf\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Mcf\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Mcf\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Ced\Mcf\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Mcf\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Mcf\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Ced\Mcf\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Mcf\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Mcf\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Ced\Mcf\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Mcf\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Mcf\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Ced\Mcf\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Mcf\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Mcf\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Mcf\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Mcf\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Mcf\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Mcf\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Mcf\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Mcf\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Mcf\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFeaturedOfferExpectedPriceBatchAsync
     *
     * @param  \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFeaturedOfferExpectedPriceBatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeaturedOfferExpectedPriceBatchAsync($get_featured_offer_expected_price_batch_request_body, string $contentType = self::contentTypes['getFeaturedOfferExpectedPriceBatch'][0])
    {
        return $this->getFeaturedOfferExpectedPriceBatchAsyncWithHttpInfo($get_featured_offer_expected_price_batch_request_body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeaturedOfferExpectedPriceBatchAsyncWithHttpInfo
     *
     * @param  \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFeaturedOfferExpectedPriceBatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeaturedOfferExpectedPriceBatchAsyncWithHttpInfo($get_featured_offer_expected_price_batch_request_body, string $contentType = self::contentTypes['getFeaturedOfferExpectedPriceBatch'][0])
    {
        $returnType = '\Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse';
        $request = $this->getFeaturedOfferExpectedPriceBatchRequest($get_featured_offer_expected_price_batch_request_body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFeaturedOfferExpectedPriceBatch'
     *
     * @param  \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFeaturedOfferExpectedPriceBatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFeaturedOfferExpectedPriceBatchRequest($get_featured_offer_expected_price_batch_request_body, string $contentType = self::contentTypes['getFeaturedOfferExpectedPriceBatch'][0])
    {

        // verify the required parameter 'get_featured_offer_expected_price_batch_request_body' is set
        if ($get_featured_offer_expected_price_batch_request_body === null || (is_array($get_featured_offer_expected_price_batch_request_body) && count($get_featured_offer_expected_price_batch_request_body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $get_featured_offer_expected_price_batch_request_body when calling getFeaturedOfferExpectedPriceBatch'
            );
        }


        $resourcePath = '/batches/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($get_featured_offer_expected_price_batch_request_body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($get_featured_offer_expected_price_batch_request_body));
            } else {
                $httpBody = $get_featured_offer_expected_price_batch_request_body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}

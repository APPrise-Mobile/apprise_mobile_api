<?php
/**
 * ContentApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
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

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * ContentApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ContentApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation contentsGet
     *
     * finds content in the system
     *
     * @param int $limit limit of how many objects to fetch (optional, default to 10)
     * @param int $offset how many objects to offset from 0 (optional, default to 0)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Content[]
     */
    public function contentsGet($limit = '10', $offset = '0')
    {
        list($response) = $this->contentsGetWithHttpInfo($limit, $offset);
        return $response;
    }

    /**
     * Operation contentsGetWithHttpInfo
     *
     * finds content in the system
     *
     * @param int $limit limit of how many objects to fetch (optional, default to 10)
     * @param int $offset how many objects to offset from 0 (optional, default to 0)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Content[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsGetWithHttpInfo($limit = '10', $offset = '0')
    {
        if (!is_null($limit) && ($limit > 500)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContentApi.contentsGet, must be smaller than or equal to 500.');
        }

        // parse inputs
        $resourcePath = "/contents";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('code');
        if (strlen($apiKey) !== 0) {
            $queryParams['code'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Content[]',
                '/contents'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Content[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Content[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsIdDelete
     *
     * delete a content
     *
     * @param string $id id of the content to delete (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function contentsIdDelete($id)
    {
        list($response) = $this->contentsIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation contentsIdDeleteWithHttpInfo
     *
     * delete a content
     *
     * @param string $id id of the content to delete (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling contentsIdDelete');
        }
        // parse inputs
        $resourcePath = "/contents/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('code');
        if (strlen($apiKey) !== 0) {
            $queryParams['code'] = $apiKey;
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
                '/contents/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsIdGet
     *
     * gets content by id in the system
     *
     * @param string $id id of content to fetch (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Content
     */
    public function contentsIdGet($id)
    {
        list($response) = $this->contentsIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation contentsIdGetWithHttpInfo
     *
     * gets content by id in the system
     *
     * @param string $id id of content to fetch (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Content, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling contentsIdGet');
        }
        // parse inputs
        $resourcePath = "/contents/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('code');
        if (strlen($apiKey) !== 0) {
            $queryParams['code'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Content',
                '/contents/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Content', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Content', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsIdPut
     *
     * edit a content with the given id
     *
     * @param string $id id of content to update (required)
     * @param string $title title of the content (required)
     * @param \SplFileObject $file file to upload as content (optional)
     * @param string $publish_date date the content was originally published (optional)
     * @param string $web_url the web url if the content will be a live link (optional)
     * @param string $share what type of sharing will this content have (optional)
     * @param string $post_date when should this content post to the app. by default it will post immediately. Or it can be set in the future time (optional)
     * @param string $unpost_date when should this content be auto removed from the app. by default it will not be removed (optional)
     * @param bool $notes_enabled should notes be enabled. this only applies to pdf files (optional)
     * @param bool $notify should a push notification be sent. by default a push notification is not sent (optional)
     * @param bool $secure if enabled users must enter their email address before viewing this content (optional)
     * @param bool $include_in_feed if enabled the content will be displayed in the news feed (optional)
     * @param bool $display_thumbnail if enabled the content will display a thumbnail (optional)
     * @param string $content_folder the id of the folder this content will be contained in (optional)
     * @param string[] $access_groups the list of groups tagged to this content (optional)
     * @param string $integration_id optional id to tie the content back to an external system (optional)
     * @param string $integration_type optional tag to describe what external system the content is integrated with (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Content
     */
    public function contentsIdPut($id, $title, $file = null, $publish_date = null, $web_url = null, $share = null, $post_date = null, $unpost_date = null, $notes_enabled = null, $notify = null, $secure = null, $include_in_feed = null, $display_thumbnail = null, $content_folder = null, $access_groups = null, $integration_id = null, $integration_type = null)
    {
        list($response) = $this->contentsIdPutWithHttpInfo($id, $title, $file, $publish_date, $web_url, $share, $post_date, $unpost_date, $notes_enabled, $notify, $secure, $include_in_feed, $display_thumbnail, $content_folder, $access_groups, $integration_id, $integration_type);
        return $response;
    }

    /**
     * Operation contentsIdPutWithHttpInfo
     *
     * edit a content with the given id
     *
     * @param string $id id of content to update (required)
     * @param string $title title of the content (required)
     * @param \SplFileObject $file file to upload as content (optional)
     * @param string $publish_date date the content was originally published (optional)
     * @param string $web_url the web url if the content will be a live link (optional)
     * @param string $share what type of sharing will this content have (optional)
     * @param string $post_date when should this content post to the app. by default it will post immediately. Or it can be set in the future time (optional)
     * @param string $unpost_date when should this content be auto removed from the app. by default it will not be removed (optional)
     * @param bool $notes_enabled should notes be enabled. this only applies to pdf files (optional)
     * @param bool $notify should a push notification be sent. by default a push notification is not sent (optional)
     * @param bool $secure if enabled users must enter their email address before viewing this content (optional)
     * @param bool $include_in_feed if enabled the content will be displayed in the news feed (optional)
     * @param bool $display_thumbnail if enabled the content will display a thumbnail (optional)
     * @param string $content_folder the id of the folder this content will be contained in (optional)
     * @param string[] $access_groups the list of groups tagged to this content (optional)
     * @param string $integration_id optional id to tie the content back to an external system (optional)
     * @param string $integration_type optional tag to describe what external system the content is integrated with (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Content, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsIdPutWithHttpInfo($id, $title, $file = null, $publish_date = null, $web_url = null, $share = null, $post_date = null, $unpost_date = null, $notes_enabled = null, $notify = null, $secure = null, $include_in_feed = null, $display_thumbnail = null, $content_folder = null, $access_groups = null, $integration_id = null, $integration_type = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling contentsIdPut');
        }
        // verify the required parameter 'title' is set
        if ($title === null) {
            throw new \InvalidArgumentException('Missing the required parameter $title when calling contentsIdPut');
        }
        // parse inputs
        $resourcePath = "/contents/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // form params
        if ($file !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
            } else {
                $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
            }
        }
        // form params
        if ($title !== null) {
            $formParams['title'] = $this->apiClient->getSerializer()->toFormValue($title);
        }
        // form params
        if ($publish_date !== null) {
            $formParams['publishDate'] = $this->apiClient->getSerializer()->toFormValue($publish_date);
        }
        // form params
        if ($web_url !== null) {
            $formParams['webUrl'] = $this->apiClient->getSerializer()->toFormValue($web_url);
        }
        // form params
        if ($share !== null) {
            $formParams['share'] = $this->apiClient->getSerializer()->toFormValue($share);
        }
        // form params
        if ($post_date !== null) {
            $formParams['postDate'] = $this->apiClient->getSerializer()->toFormValue($post_date);
        }
        // form params
        if ($unpost_date !== null) {
            $formParams['unpostDate'] = $this->apiClient->getSerializer()->toFormValue($unpost_date);
        }
        // form params
        if ($notes_enabled !== null) {
            $formParams['notesEnabled'] = $this->apiClient->getSerializer()->toFormValue($notes_enabled);
        }
        // form params
        if ($notify !== null) {
            $formParams['notify'] = $this->apiClient->getSerializer()->toFormValue($notify);
        }
        // form params
        if ($secure !== null) {
            $formParams['secure'] = $this->apiClient->getSerializer()->toFormValue($secure);
        }
        // form params
        if ($include_in_feed !== null) {
            $formParams['includeInFeed'] = $this->apiClient->getSerializer()->toFormValue($include_in_feed);
        }
        // form params
        if ($display_thumbnail !== null) {
            $formParams['displayThumbnail'] = $this->apiClient->getSerializer()->toFormValue($display_thumbnail);
        }
        // form params
        if ($content_folder !== null) {
            $formParams['contentFolder'] = $this->apiClient->getSerializer()->toFormValue($content_folder);
        }
        // form params
        if ($access_groups !== null) {
            $formParams['accessGroups'] = $this->apiClient->getSerializer()->toFormValue($access_groups);
        }
        // form params
        if ($integration_id !== null) {
            $formParams['integrationId'] = $this->apiClient->getSerializer()->toFormValue($integration_id);
        }
        // form params
        if ($integration_type !== null) {
            $formParams['integrationType'] = $this->apiClient->getSerializer()->toFormValue($integration_type);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('code');
        if (strlen($apiKey) !== 0) {
            $queryParams['code'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Content',
                '/contents/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Content', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Content', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPost
     *
     * Add a new content to the account
     *
     * @param string $title title of the content (required)
     * @param \SplFileObject $file file to upload as content (optional)
     * @param string $publish_date date the content was originally published (optional)
     * @param string $web_url the web url if the content will be a live link (optional)
     * @param string $share what type of sharing will this content have (optional)
     * @param string $post_date when should this content post to the app. by default it will post immediately. Or it can be set in the future time (optional)
     * @param string $unpost_date when should this content be auto removed from the app. by default it will not be removed (optional)
     * @param bool $notes_enabled should notes be enabled. this only applies to pdf files (optional)
     * @param bool $notify should a push notification be sent. by default a push notification is not sent (optional)
     * @param bool $secure if enabled users must enter their email address before viewing this content (optional)
     * @param bool $include_in_feed if enabled the content will be displayed in the news feed (optional)
     * @param bool $display_thumbnail if enabled the content will display a thumbnail (optional)
     * @param string $content_folder the id of the folder this content will be contained in (optional)
     * @param string[] $access_groups the list of groups tagged to this conten (optional)
     * @param string $integration_id optional id to tie the content back to an external system (optional)
     * @param string $integration_type optional tag to describe what external system the content is integrated with (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Content
     */
    public function contentsPost($title, $file = null, $publish_date = null, $web_url = null, $share = null, $post_date = null, $unpost_date = null, $notes_enabled = null, $notify = null, $secure = null, $include_in_feed = null, $display_thumbnail = null, $content_folder = null, $access_groups = null, $integration_id = null, $integration_type = null)
    {
        list($response) = $this->contentsPostWithHttpInfo($title, $file, $publish_date, $web_url, $share, $post_date, $unpost_date, $notes_enabled, $notify, $secure, $include_in_feed, $display_thumbnail, $content_folder, $access_groups, $integration_id, $integration_type);
        return $response;
    }

    /**
     * Operation contentsPostWithHttpInfo
     *
     * Add a new content to the account
     *
     * @param string $title title of the content (required)
     * @param \SplFileObject $file file to upload as content (optional)
     * @param string $publish_date date the content was originally published (optional)
     * @param string $web_url the web url if the content will be a live link (optional)
     * @param string $share what type of sharing will this content have (optional)
     * @param string $post_date when should this content post to the app. by default it will post immediately. Or it can be set in the future time (optional)
     * @param string $unpost_date when should this content be auto removed from the app. by default it will not be removed (optional)
     * @param bool $notes_enabled should notes be enabled. this only applies to pdf files (optional)
     * @param bool $notify should a push notification be sent. by default a push notification is not sent (optional)
     * @param bool $secure if enabled users must enter their email address before viewing this content (optional)
     * @param bool $include_in_feed if enabled the content will be displayed in the news feed (optional)
     * @param bool $display_thumbnail if enabled the content will display a thumbnail (optional)
     * @param string $content_folder the id of the folder this content will be contained in (optional)
     * @param string[] $access_groups the list of groups tagged to this conten (optional)
     * @param string $integration_id optional id to tie the content back to an external system (optional)
     * @param string $integration_type optional tag to describe what external system the content is integrated with (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Content, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsPostWithHttpInfo($title, $file = null, $publish_date = null, $web_url = null, $share = null, $post_date = null, $unpost_date = null, $notes_enabled = null, $notify = null, $secure = null, $include_in_feed = null, $display_thumbnail = null, $content_folder = null, $access_groups = null, $integration_id = null, $integration_type = null)
    {
        // verify the required parameter 'title' is set
        if ($title === null) {
            throw new \InvalidArgumentException('Missing the required parameter $title when calling contentsPost');
        }
        // parse inputs
        $resourcePath = "/contents";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // form params
        if ($file !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
            } else {
                $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
            }
        }
        // form params
        if ($title !== null) {
            $formParams['title'] = $this->apiClient->getSerializer()->toFormValue($title);
        }
        // form params
        if ($publish_date !== null) {
            $formParams['publishDate'] = $this->apiClient->getSerializer()->toFormValue($publish_date);
        }
        // form params
        if ($web_url !== null) {
            $formParams['webUrl'] = $this->apiClient->getSerializer()->toFormValue($web_url);
        }
        // form params
        if ($share !== null) {
            $formParams['share'] = $this->apiClient->getSerializer()->toFormValue($share);
        }
        // form params
        if ($post_date !== null) {
            $formParams['postDate'] = $this->apiClient->getSerializer()->toFormValue($post_date);
        }
        // form params
        if ($unpost_date !== null) {
            $formParams['unpostDate'] = $this->apiClient->getSerializer()->toFormValue($unpost_date);
        }
        // form params
        if ($notes_enabled !== null) {
            $formParams['notesEnabled'] = $this->apiClient->getSerializer()->toFormValue($notes_enabled);
        }
        // form params
        if ($notify !== null) {
            $formParams['notify'] = $this->apiClient->getSerializer()->toFormValue($notify);
        }
        // form params
        if ($secure !== null) {
            $formParams['secure'] = $this->apiClient->getSerializer()->toFormValue($secure);
        }
        // form params
        if ($include_in_feed !== null) {
            $formParams['includeInFeed'] = $this->apiClient->getSerializer()->toFormValue($include_in_feed);
        }
        // form params
        if ($display_thumbnail !== null) {
            $formParams['displayThumbnail'] = $this->apiClient->getSerializer()->toFormValue($display_thumbnail);
        }
        // form params
        if ($content_folder !== null) {
            $formParams['contentFolder'] = $this->apiClient->getSerializer()->toFormValue($content_folder);
        }
        // form params
        if ($access_groups !== null) {
            $formParams['accessGroups'] = $this->apiClient->getSerializer()->toFormValue($access_groups);
        }
        // form params
        if ($integration_id !== null) {
            $formParams['integrationId'] = $this->apiClient->getSerializer()->toFormValue($integration_id);
        }
        // form params
        if ($integration_type !== null) {
            $formParams['integrationType'] = $this->apiClient->getSerializer()->toFormValue($integration_type);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('code');
        if (strlen($apiKey) !== 0) {
            $queryParams['code'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Content',
                '/contents'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Content', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Content', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}

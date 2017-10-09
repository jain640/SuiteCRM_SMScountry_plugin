<?php
/*
 * SMSCountryMessagingLib
 *
 * Copyright SMSCountry Inc. 2017
 */


namespace SMSCountryMessagingLib\Controllers;

use SMSCountryMessagingLib\APIException;
use SMSCountryMessagingLib\APIHelper;
use SMSCountryMessagingLib\Configuration;
use Unirest\Unirest;

class MessagesController {

    /* private fields for configuration */

    /**
     * Tech Prefix 
     * @var string
     */
    private $username;

    /**
     * API Secret Key 
     * @var string
     */
    private $password;

    /**
     * Constructor with authentication and configuration parameters
     */
    function __construct($username=null, $password=null, $BASEURI=null)
    {
        $this->username = $username ? $username : Configuration::$username;
        $this->password = $password ? $password : Configuration::$password;
		$this->BASEURI = $BASEURI ? $BASEURI : Configuration::$BASEURI;
    }

    /**
     * Send a message
     * @param  Message     $message     Required parameter: Message Object to send.
     * @return string response from the API call
     * @throws APIException
     **/
    function createMessage($message)
    {
        //the base uri for api requests
        $queryBuilder = $this->BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/'.$this->username.'/SMSes/';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'content-type'  => 'application/json'
        );
        //prepare API request
        $request = Unirest::post($queryUrl, $headers, json_encode($message->jsonSerialize()), $this->username, $this->password);

		//and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);
		return $response->body;
		//Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }

	/**
     * Send bulk message
     * @param  Message     $message     Required parameter: Message Object to send.
     * @return string response from the API call
     * @throws APIException
     **/
    function createbulkMessage($message)
    {
        //the base uri for api requests
        $queryBuilder = $this->BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/'.$this->username.'/BulkSMSes/';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'content-type'  => 'application/json'
        );
        //prepare API request
        $request = Unirest::post($queryUrl, $headers, json_encode($message->jsonSerialize()), $this->username, $this->password);

		//and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);
		//Error handling using HTTP status codes
		return $response->body;

        if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }

	/**
     * Send a message
     * @param  Message     $message     Required parameter: Message Object to send.
     * @return string response from the API call
     * @throws APIException
     **/
    function getSenderId()
    {
        //the base uri for api requests
        $queryBuilder = $this->BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/'.$this->username.'/SenderIDs/';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'content-type'  => 'application/json'
        );
        //prepare API request
        $request = Unirest::get($queryUrl, $headers, NULL, $this->username, $this->password);

		//and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);
		
		return $response->body;

        if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Lookup a Message by MDR
     * @param  string     $recordId      Required parameter: Unique MDR ID
     * @return string response from the API call
     * @throws APIException
     **/
    function getMessageLookup($recordId)
    {
        //the base uri for api requests
        $queryBuilder = $this->BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/'.$this->username.'/SMSes/{record_id}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'record_id' => $recordId,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent' => 'Flowroute Messaging SDK 1.0'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers, NULL, $this->username, $this->password);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);
		
		return $response->body;

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
}
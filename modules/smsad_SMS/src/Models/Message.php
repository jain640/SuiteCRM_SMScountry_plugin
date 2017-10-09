<?php 
/*
 * SMSCountryMessagingLib
 *
 * Copyright Flowroute, Inc. 2016
 */

namespace SMSCountryMessagingLib\Models;

use SMSCountryMessagingLib\APIException;
//use JsonSerializable;
//implements JsonSerializable 
class Message {
    /**
     * Phone number in E.164 format to send a message to.
     * @param string $to public property
     */
    protected $sid;

    /**
     * Phone number in E.164 format where the message is sent from.
     * @param string $mobilenumber public property
     */
    protected $mobilenumber;

    /**
     * The message of the message.
     * @param string $message public property
     */
    protected $message;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $sid        Initialization value for the property $this->sid     
	 * @param   string            $mobilenumber      Initialization value for the property $this->mobilenumber   
	 * @param   string            $message   Initialization value for the property $this->message
     */
    public function __construct($to=null, $from=null, $message=null)
    {
        $this->sid      = $from;
        $this->mobilenumber    = $to;
        $this->message = $message;
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_message, headers, message (if the response is json-decodable)
     * @param   string              $property   value of property to return
     * @return mixed or null if property not found
     */
    public function __get($property)
    {
        $value = null;
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $value = utf8_encode($value);
            }
        }
        return $value;
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     * @return  Message instance that has been updated with the new property
     * @throws APIException
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        } else {
            throw new APIException('Invalid Property', 500, $property);
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {

        $json = array();
		$json['Number']					 = $this->mobilenumber;
        $json['SenderId']				 = $this->sid;
        $json['Text']					 = $this->message;
		$json['DRNotifyUrl']			 = $GLOBALS['sugar_config']['site_url']."/sms_callback.php";
		$json['DRNotifyHttpMethod']		 = 'POST';
		$json['Tool']					 = 'API';

        return $json;
    }
}
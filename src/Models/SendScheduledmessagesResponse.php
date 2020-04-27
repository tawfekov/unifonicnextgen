<?php
/*
 * UnifonicNextGenLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace UnifonicNextGenLib\Models;

use JsonSerializable;

/**
 *Schedules one message to be sent in the future.
 */
class SendScheduledmessagesResponse implements JsonSerializable
{
    /**
     * The request sent successfully
     * @required
     * @var bool $success public property
     */
    public $success;

    /**
     * The Error message if its false, Null if its true
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * The error code if there is any
     * @required
     * @var string $errorCode public property
     */
    public $errorCode;

    /**
     * Accepted or Rejected
     * @required
     * @maps Status
     * @var string $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $success   Initialization value for $this->success
     * @param string $message   Initialization value for $this->message
     * @param string $errorCode Initialization value for $this->errorCode
     * @param string $status    Initialization value for $this->status
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->success   = func_get_arg(0);
            $this->message   = func_get_arg(1);
            $this->errorCode = func_get_arg(2);
            $this->status    = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['success']   = $this->success;
        $json['message']   = $this->message;
        $json['errorCode'] = $this->errorCode;
        $json['Status']    = $this->status;

        return $json;
    }
}

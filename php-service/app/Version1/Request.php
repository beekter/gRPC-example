<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: version1.proto

namespace Version1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>version1.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 user_id = 1;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>.version1.Request.State state = 2;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>string bday = 3;</code>
     */
    protected $bday = '';
    /**
     * Generated from protobuf field <code>string created = 4;</code>
     */
    protected $created = '';
    /**
     * Generated from protobuf field <code>string modified = 5;</code>
     */
    protected $modified = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $user_id
     *     @type int $state
     *     @type string $bday
     *     @type string $created
     *     @type string $modified
     * }
     */
    public function __construct($data = NULL) {
        \Version1\Metadata\Version1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 user_id = 1;</code>
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int32 user_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.version1.Request.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.version1.Request.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Version1\Request\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bday = 3;</code>
     * @return string
     */
    public function getBday()
    {
        return $this->bday;
    }

    /**
     * Generated from protobuf field <code>string bday = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBday($var)
    {
        GPBUtil::checkString($var, True);
        $this->bday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created = 4;</code>
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Generated from protobuf field <code>string created = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkString($var, True);
        $this->created = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string modified = 5;</code>
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Generated from protobuf field <code>string modified = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setModified($var)
    {
        GPBUtil::checkString($var, True);
        $this->modified = $var;

        return $this;
    }

}

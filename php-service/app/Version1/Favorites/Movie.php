<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: version1.proto

namespace Version1\Favorites;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>version1.Favorites.Movie</code>
 */
class Movie extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>repeated .version1.Favorites.Movie.Genre genres = 2;</code>
     */
    private $genres;
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $genres
     *     @type string $description
     * }
     */
    public function __construct($data = NULL) {
        \Version1\Metadata\Version1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .version1.Favorites.Movie.Genre genres = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Generated from protobuf field <code>repeated .version1.Favorites.Movie.Genre genres = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGenres($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Version1\Favorites\Movie\Genre::class);
        $this->genres = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Movie::class, \Version1\Favorites_Movie::class);


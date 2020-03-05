<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class ChatPhoto extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['small_file_id', 'big_file_id', 'small_file_unique_id', 'big_file_unique_id'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'small_file_id' => true,
        'big_file_id' => true,
        'small_file_unique_id' => true,
        'big_file_unique_id' => true,
    ];

    /**
     * Unique file identifier of small (160x160) chat photo. This file_id can be used only for photo download.
     *
     * @var string
     */
    protected $smallFileId;

    /**
     * Unique file identifier of big (640x640) chat photo. This file_id can be used only for photo download.
     *
     * @var string
     */
    protected $bigFileId;

    /**
     * @var string
     */
    protected $smallFileUniqueId;

    /**
     * @var string
     */
    protected $bigFileUniqueId;

    /**
     * @return string
     */
    public function getSmallFileId()
    {
        return $this->smallFileId;
    }

    /**
     * @param string $smallFileId
     */
    public function setSmallFileId($smallFileId)
    {
        $this->smallFileId = $smallFileId;
    }

    /**
     * @return string
     */
    public function getBigFileId()
    {
        return $this->bigFileId;
    }

    /**
     * @param string $bigFileId
     */
    public function setBigFileId($bigFileId)
    {
        $this->bigFileId = $bigFileId;
    }

    /**
     * @return string
     */
    public function getSmallFileUniqueId()
    {
        return $this->smallFileUniqueId;
    }

    /**
     * @param string $smallFileUniqueId
     */
    public function setSmallFileUniqueId($smallFileUniqueId)
    {
        $this->smallFileUniqueId = $smallFileUniqueId;
    }

    /**
     * @return string
     */
    public function getBigFileUniqueId()
    {
        return $this->bigFileUniqueId;
    }

    /**
     * @param string $bigFileUniqueId
     */
    public function setBigFileUniqueId($bigFileUniqueId)
    {
        $this->bigFileUniqueId = $bigFileUniqueId;
    }
}

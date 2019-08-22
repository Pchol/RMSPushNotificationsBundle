<?php

namespace RMS\PushNotificationsBundle\Service\OS;

use Psr\Log\LoggerInterface;
use RMS\PushNotificationsBundle\Exception\InvalidMessageTypeException,
    RMS\PushNotificationsBundle\Message\AndroidMessage,
    RMS\PushNotificationsBundle\Message\MessageInterface;
use Buzz\Browser,
    Buzz\Client\AbstractCurl,
    Buzz\Client\Curl,
    Buzz\Client\MultiCurl;

class AndroidFcmNotification extends AbstractAndroidCMNotification
{

    /**
     * GCM endpoint
     *
     * @var string
     */
    protected $apiURL = "https://fcm.googleapis.com/fcm/send";

    /**
     * Max registration count
     *
     * @var integer
     */
    protected $registrationIdMaxCount = 100;
}

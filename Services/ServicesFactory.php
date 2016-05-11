<?php

/*
 * This file is part of the SeferovAwsBundle package.
 *
 * (c) Farhad Safarov <https://farhadsafarov.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Seferov\AwsBundle\Services;

use \Aws\Common\Aws;
use \Seferov\AwsBundle\Entity\AWSCredentials;

/**
 * Factory class that initiates an AWS service.
 */
class ServicesFactory
{
    /**
     * @var array
     */
    public static $AVAILABLE_SERVICES = array(
        'CloudFront',
        'CloudSearch',
        'CloudWatch',
        'CloudWatchLogs',
        'CognitoIdentity',
        'CognitoSync',
        'DynamoDb',
        'Ec2',
        'Emr',
        'ElasticTranscoder',
        'ElastiCache',
        'Glacier',
        'Redshift',
        'Rds',
        'Route53',
        'Ses',
        'Sns',
        'Sqs',
        'S3',
        'Swf',
        'SimpleDb',
        'AutoScaling',
        'CloudFormation',
        'CloudTrail',
        'DataPipeline',
        'DirectConnect',
        'ElasticBeanstalk',
        'Iam',
        'ImportExport',
        'OpsWorks',
        'Sts',
        'StorageGateway',
        'Support',
        'ElasticLoadBalancing'
    );

    /**
     * @param  AWSCredentials            $AWSCredentials
     * @param $service
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function get(AWSCredentials $AWSCredentials, $service)
    {
        $aws = Aws::factory($AWSCredentials->getParameters($service));

        return $aws->get($service);
    }
}

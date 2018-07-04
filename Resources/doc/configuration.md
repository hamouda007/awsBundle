## Configuration

Parameters can be set for each services separately. If not set, general parameters at the top will be applied.

Version parameter for each service defaults to 'latest'.  It is recommended by AWS that this not be depended on in a production environment, but set to one of the listed [API versions](http://docs.aws.amazon.com/aws-sdk-php/v3/api/).  There is no general version parameter as this value is different for each service.

Example:

``` yaml
seferov_aws:
    credentials:
        key: AWS_KEY
        secret: AWS_SECRET
    region: AWS_REGION
    services:
        s3:
            credentials:
                key: AWS_S3_KEY
                secret: AWS_S3_SECRET
            region: AWS_S3_REGION
            version: AWS_S3_VERSION
        sqs:
            credentials:
                key: AWS_SQS_KEY
                secret: AWS_SQS_SECRET
            region: AWS_SQS_REGION
            version: AWS_SQS_VERSION
        # ...
```

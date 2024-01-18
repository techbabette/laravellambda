# Laravel on Lambda

Laravel can be used on Lambda provided that the Lambda function is based on a [docker image](https://github.com/techbabette/laravellambda/blob/main/Dockerfile "The dockerfile used"), this necessitates the use of ECR.

## Lambda and VPCs

Lambas do not have to, but can, be part of a customer VPC.

This can be useful when we want Lambdas to interact with resources in private subnets.

## Planned architecture

The following image represents the architecture I intend to use Laravel on Lambda in.

![This is an alt text.](https://i.imgur.com/m8alPTS.png "Architecture plan")

[This endpoint](https://ofivz7vwfh.execute-api.eu-north-1.amazonaws.com/api/request "API/Request endpoint") confirms the connection of the Lambda function to an RDS instance in a private subnet.

######################
# VPC
######################
data "aws_availability_zones" "available" {}

module "vpc" {
  source  = "terraform-aws-modules/vpc/aws"
  version = "3.5.0"

  name               = "${var.PREFIX}-${var.ENV}-vpc"
  cidr               = "10.0.0.0/16"
  azs                = data.aws_availability_zones.available.names

  public_subnets     = ["10.0.1.0/24"]
  database_subnets   = ["10.0.11.0/24", "10.0.12.0/24"]

  tags = var.DEFAULT_TAGS
}

output "vpc_id" {
  value = module.vpc.vpc_id
}

output "vpc_cidr_block" {
  value = module.vpc.vpc_cidr_block
}

output "database_subnets" {
  value = module.vpc.database_subnets
}

output "public_subnets" {
  value = module.vpc.public_subnets
}

output "database_subnet_group" {
  value = module.vpc.database_subnet_group_name
}
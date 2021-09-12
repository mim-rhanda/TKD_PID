

locals {
  default_tags = {
    "env" = var.ENV,
    "prj"     = var.PROJECT,
  }
}

module "vpc" {
  source            = "../modules/vpc"
  ENV               = var.ENV
  AWS_REGION        = var.AWS_REGION
  PREFIX            = var.PROJECT
  DEFAULT_TAGS      = local.default_tags
}

module "sg" {
  source            = "../modules/sg"
  ENV               = var.ENV
  AWS_REGION        = var.AWS_REGION
  PREFIX            = var.PROJECT
  DEFAULT_TAGS      = local.default_tags
  VPC_ID            = module.vpc.vpc_id
  VPC_CIDR_BLOCK    = module.vpc.vpc_cidr_block
}


module "rds" {
  source = "../modules/rds"
  ENV               = var.ENV
  AWS_REGION        = var.AWS_REGION
  PREFIX            = var.PROJECT
  DEFAULT_TAGS      = local.default_tags
  VPC_ID            = module.vpc.vpc_id
  APP_SG_ID         = module.sg.app_sg_id
  PUBLIC_SUBNETS    = module.vpc.public_subnets
  DB_SUBNET_GROUP   = module.vpc.database_subnet_group
  DB_SG_ID          = module.sg.database_sg_id
  DB_INSTANCE_TYPE  = var.DB_INSTANCE_TYPE
  USERNAME          = var.USERNAME
  PASSWORD          = var.PASSWORD
  APP_USER          = var.APP_USER
  APP_PASS          = var.APP_PASS

  APP_INSTANCE_AMI  = var.APP_INSTANCE_AMI
  APP_INSTANCE_TYPE = var.APP_INSTANCE_TYPE
}


output "vpc_info" {
  description = "vpc info"
  value = {
    "vpc_id"          = module.vpc.vpc_id
    "public_subnets"  = module.vpc.public_subnets
    "database_subnets" = module.vpc.database_subnets
    "vpc_cidr_block"  = module.vpc.vpc_cidr_block
  }
}


provider "aws" {
  region = var.AWS_REGION
  access_key = var.aws_access_key_id
  secret_key = var.aws_secret_access_key
}

terraform {
  backend "s3" {
    bucket = "tf-state-3h-tkd"
    region = "ap-northeast-1"
    key = "terraform-dev.tfstate"
    encrypt = true
  }
}

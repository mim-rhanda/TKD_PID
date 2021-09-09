provider "aws" {
  region = var.AWS_REGION
}

terraform {
  backend "s3" {
    bucket = "tf-state-3h-tkd"
    region = "ap-northeast-1"
    key = "terraform-dev.tfstate"
    encrypt = true
  }
}

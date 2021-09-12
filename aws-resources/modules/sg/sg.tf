######################
# Security Group
######################
resource "aws_security_group" "database_sg" {
  name = "${var.PREFIX}-${var.ENV}-database-sg"
  vpc_id = var.VPC_ID

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }

  ingress {
    from_port       = 3306
    to_port         = 3306
    protocol        = "tcp"
    cidr_blocks = [var.VPC_CIDR_BLOCK]
  }

  tags = var.DEFAULT_TAGS
}

resource "aws_security_group" "app_sg" {
  name = "${var.PREFIX}-${var.ENV}-app-sg"
  vpc_id = var.VPC_ID

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }

  ingress {
    from_port   = 22
    to_port     = 22
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }

  tags = var.DEFAULT_TAGS
}

resource "aws_security_group_rule" "allow_http_all" {
  type = "ingress"
  from_port = 80
  to_port   = 80
  protocol  = "tcp"
  cidr_blocks = ["0.0.0.0/0"]
  security_group_id = aws_security_group.app_sg.id
}

resource "aws_security_group_rule" "allow_https_all" {
  type = "ingress"
  from_port = 443
  to_port   = 443
  protocol  = "tcp"
  cidr_blocks = ["0.0.0.0/0"]
  security_group_id = aws_security_group.app_sg.id
}

output "database_sg_id" {
  value = aws_security_group.database_sg.id
}

output "app_sg_id" {
  value = aws_security_group.app_sg.id
}

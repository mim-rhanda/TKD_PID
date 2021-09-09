######################
# RDS
######################

resource "aws_db_instance" "db_instance" {
  identifier = "${var.PREFIX}-${var.ENV}"
  allocated_storage    = 50
  engine               = "mysql"
  engine_version       = "5.7"
  instance_class       = var.DB_INSTANCE_TYPE
  vpc_security_group_ids = [var.DB_SG_ID]
  db_subnet_group_name = var.DB_SUBNET_GROUP
  username             = var.USERNAME
  password             = var.PASSWORD
  parameter_group_name = "default.mysql5.7"
  skip_final_snapshot  = true

  tags = var.DEFAULT_TAGS
}

resource "aws_key_pair" "instance_key" {
  key_name   = "${var.PREFIX}-instance-key"
  public_key = file("~/.ssh/id_rsa-20210909.pub")

  tags = var.DEFAULT_TAGS
}

resource "aws_instance" "app_instance" {
  ami           = var.APP_INSTANCE_AMI
  instance_type = "t2.micro"
  key_name      = aws_key_pair.instance_key.key_name
  vpc_security_group_ids = [var.APP_SG_ID]
  subnet_id = var.PUBLIC_SUBNETS[0]

  root_block_device {
    volume_type = "gp2"
    volume_size = 10
  }

  tags = var.DEFAULT_TAGS

  lifecycle { create_before_destroy = true }


  provisioner "file" {
    connection {
      user        = "ec2-user"
      host        = aws_instance.app_instance.public_ip
      private_key = file("~/.ssh/id_rsa-20210909")
    }

    source      = "../scripts/schema.sh"
    destination = "/home/ec2-user/schema.sh"
  }


  provisioner "remote-exec" {
    connection {
      user        = "ec2-user"
      host        = aws_instance.app_instance.public_ip
      private_key = file("~/.ssh/id_rsa-20210909")
    }

    inline = [
      "/bin/bash ~/schema.sh ${aws_db_instance.db_instance.domain} ${aws_db_instance.db_instance.port} ${var.USERNAME} ${var.PASSWORD} ${var.APP_USER} ${var.APP_PASS}"
    ]
  }
  depends_on = [aws_db_instance.db_instance]
}

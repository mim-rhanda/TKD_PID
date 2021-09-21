CREATE TABLE `application_log` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `email` varchar(100) NOT NULL COLLATE utf8mb4_unicode_ci,
    `parent_email` varchar(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci,
    `medical_institution_id`  bigint(20) NOT NULL,
    `medical_institution_code` varchar(4) NOT NULL COLLATE utf8mb4_unicode_ci,
    `medical_institution_name` varchar(100) NOT NULL COLLATE utf8mb4_unicode_ci,
    `age` int(5) NOT NULL,
    `consent_for_join` tinyint(1) NOT NULL,
    `ascent_for_join` tinyint(1) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`medical_institution_id`) REFERENCES medical_institution_master(id),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE IF NOT EXISTS TABLE `application_log` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `email` varchar(100) NOT NULL COLLATE utf8mb4_unicode_ci,
    `medical_institution_code` varchar(4) NOT NULL COLLATE utf8mb4_unicode_ci,
    `age_group` varchar(20) NOT NULL COLLATE utf8mb4_unicode_ci,
    `consent_for_join` tinyint(1) NOT NULL,
    `ascent_for_join` tinyint(1) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

insert into medical_institution_master(name, code) values('健常者', '1122');
insert into medical_institution_master(name, code) values('成育', '2233');
insert into medical_institution_master(name, code) values('九州大', '3322');
insert into medical_institution_master(name, code) values('医科歯科', '3455');
insert into medical_institution_master(name, code) values('患者会', '0009');

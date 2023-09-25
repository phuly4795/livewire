ALTER TABLE `livewire`.`users` 
ADD COLUMN `thumnail_id` int NULL AFTER `updated_at`;


CREATE TABLE `livewire`.`files`  (
  `id` int NOT NULL,
  `name` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE `livewire`.`files` 
ADD COLUMN `created_at` timestamp NULL AFTER `name`,
ADD COLUMN `updated_at` timestamp NULL AFTER `created_at`;  
INSERT INTO `pes_option` (`id`, `option_name`, `name`, `value`, `option_range`) VALUES
(NULL, 'register_form', '注册填写选项', '{\"email\":\"email\",\"account\":\"account\",\"phone\":\"phone\"}', 'system');
ALTER TABLE `pes_ticket` ADD `old_user_id` INT NOT NULL COMMENT '上一任的负责人ID' AFTER `user_id`;

CREATE TABLE `pes_csnotice` (
  `csnotice_id` int(11) NOT NULL,
  `ticket_number` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `csnotice_type` int(11) NOT NULL,
  `csnotice_time` int(11) NOT NULL,
  `csnotice_read` tinyint(1) NOT NULL COMMENT '是否标记已读'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='客服站内消息';

ALTER TABLE `pes_csnotice`
  ADD PRIMARY KEY (`csnotice_id`);
ALTER TABLE `pes_csnotice`
  MODIFY `csnotice_id` int(11) NOT NULL AUTO_INCREMENT;
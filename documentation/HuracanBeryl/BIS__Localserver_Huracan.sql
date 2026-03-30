-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para zscxxcmy_bd
CREATE DATABASE IF NOT EXISTS `zscxxcmy_bd` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `zscxxcmy_bd`;

-- Volcando estructura para tabla zscxxcmy_bd.api_callcenter_agents_metrics
CREATE TABLE IF NOT EXISTS `api_callcenter_agents_metrics` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agents` varchar(300) DEFAULT NULL,
  `average_talk_time` varchar(20) DEFAULT NULL,
  `total_talk_time` varchar(20) DEFAULT NULL,
  `time_available` varchar(20) DEFAULT NULL,
  `wrapup_time` varchar(20) DEFAULT NULL,
  `time_on_busy` varchar(20) DEFAULT NULL,
  `time_offline` varchar(20) DEFAULT NULL,
  `inbound_talk_time` varchar(20) DEFAULT NULL,
  `outbound_talk_time` varchar(20) DEFAULT NULL,
  `calls_made` varchar(20) DEFAULT NULL,
  `calls_received` varchar(20) DEFAULT NULL,
  `calls_recycled` varchar(20) DEFAULT NULL,
  `calls_declined` varchar(20) DEFAULT NULL,
  `calls_missed` varchar(20) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `agent_id` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cat_projects_id` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4248 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.api_callcenter_agents_metrics: ~9 rows (aproximadamente)
INSERT INTO `api_callcenter_agents_metrics` (`id`, `agents`, `average_talk_time`, `total_talk_time`, `time_available`, `wrapup_time`, `time_on_busy`, `time_offline`, `inbound_talk_time`, `outbound_talk_time`, `calls_made`, `calls_received`, `calls_recycled`, `calls_declined`, `calls_missed`, `month`, `year`, `agent_id`, `user_id`, `cat_projects_id`, `active`, `created_at`, `updated_at`) VALUES
	(942, 'Karina Caballero', '00:03:53', '1.02:23:19', '02:34:40', '1.14:25:20', '2.02:05:02', '1.11:25:45', '06:16:52', '20:06:27', '360', '47', '384', '2', '0', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03'),
	(943, 'Fernando Rojas', '00:03:37', '1.02:20:51', '01:57:37', '02:50:27', '06:24:58', '4.20:23:41', '11:18:21', '15:02:30', '372', '64', '103', '3', '0', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03'),
	(944, 'Maria Jimenez', '00:03:31', '1.10:09:06', '06:10:35', '03:41:11', '19:29:57', '3.18:17:01', '18:10:23', '15:58:43', '444', '136', '233', '0', '1', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03'),
	(945, 'Yessica Morales', '00:03:18', '1.04:20:58', '00:29:10', '21:21:31', '00:58:15', '4.05:53:32', '02:17:52', '1.02:03:06', '498', '15', '118', '0', '0', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03'),
	(946, 'Carlos Aguilar', '00:03:09', '1.00:15:42', '02:41:53', '06:48:13', '04:32:08', '4.18:44:45', '07:53:57', '16:21:45', '411', '50', '1404', '1', '0', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03'),
	(947, 'Victor Rivera', '00:03:08', '1.00:48:57', '01:44:20', '03:41:23', '01:45:03', '5.00:56:32', '07:28:44', '17:20:13', '433', '42', '80', '0', '0', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03'),
	(948, 'Erik Canche', '00:03:08', '21:28:47', '05:02:59', '1.18:57:46', '1.15:05:49', '1.20:29:28', '13:34:11', '07:54:36', '253', '158', '150', '8', '1', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03'),
	(949, 'Rebeca Rodriguez', '00:03:05', '19:46:12', '03:00:55', '01:10:52', '3.02:53:53', '2.05:43:37', '09:37:17', '10:08:55', '310', '73', '137', '1', '3', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03'),
	(950, 'Ivan Arrezola', '00:02:58', '1.01:16:24', '02:22:47', '07:49:59', '03:39:21', '4.18:22:16', '08:23:34', '16:52:50', '438', '73', '130', '1', '0', 5, 2024, NULL, NULL, 2, 1, '2024-05-07 15:08:15', '2024-05-07 16:07:03');

-- Volcando estructura para tabla zscxxcmy_bd.api_call_report
CREATE TABLE IF NOT EXISTS `api_call_report` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agents` varchar(300) DEFAULT NULL,
  `leadid` int(11) NOT NULL,
  `case_type` varchar(50) DEFAULT NULL,
  `lead_caller_name` varchar(300) DEFAULT NULL,
  `froom` varchar(20) DEFAULT NULL,
  `too` varchar(20) DEFAULT NULL,
  `lead_marketing_source` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `ring_time` varchar(20) DEFAULT NULL,
  `duration` varchar(20) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `call_outcome` varchar(100) DEFAULT NULL,
  `call_direction` varchar(20) DEFAULT NULL,
  `cat_projects_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=462394 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.api_call_report: ~9 rows (aproximadamente)
INSERT INTO `api_call_report` (`id`, `agents`, `leadid`, `case_type`, `lead_caller_name`, `froom`, `too`, `lead_marketing_source`, `time`, `ring_time`, `duration`, `status`, `call_outcome`, `call_direction`, `cat_projects_id`, `active`, `created_at`, `updated_at`) VALUES
	(65065, 'Victor Rivera', 710636, 'Unkown', 'Merida Silvia', '+18886344738', '+18329883190', 'Facebook Call', '2024-05-06T23:58:39.873+00:00', NULL, '00:00:00', 'New Call', NULL, 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13'),
	(65066, 'Victor Rivera', 710636, 'Unkown', 'Merida Silvia', '+18886344738', '+18329883190', 'Facebook Call', '2024-05-06T23:58:36.64+00:00', NULL, '00:00:00', 'New Call', NULL, 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13'),
	(65067, 'Victor Rivera', 710636, 'Unkown', 'Merida Silvia', '+18886344738', '+18329883190', 'Facebook Call', '2024-05-06T23:58:32.063+00:00', NULL, '00:00:00', 'New Call', NULL, 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13'),
	(65068, 'Victor Rivera', 710636, 'Unkown', 'Merida Silvia', '+18886344738', '+18329883190', 'Facebook Call', '2024-05-06T23:58:27.013+00:00', NULL, '00:00:00', 'New Call', NULL, 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13'),
	(65069, 'Victor Rivera', 669994, 'Unkown', 'Carliitos Maza Vlii', '+12029803988', '+19254357035', 'Facebook Messenger', '2024-05-06T23:58:11.703+00:00', '00:00:01', '00:00:25', 'Connected', 'No Answer / Voicemail', 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13'),
	(65070, 'Victor Rivera', 669994, 'Unkown', 'Carliitos Maza Vlii', '+12029803988', '+19254357035', 'Facebook Messenger', '2024-05-06T23:58:11.67+00:00', '00:00:26', '00:00:00', 'Connected', NULL, 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13'),
	(65071, 'Enrique Galeana', 710636, 'Unkown', 'Merida Silvia', '+18886344738', '+18329883190', 'Facebook Call', '2024-05-06T23:57:57.25+00:00', NULL, '00:00:00', 'New Call', NULL, 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13'),
	(65072, 'Ruben Jimenez', 687820, 'Unkown', 'Garcia Marcos', '+18886344738', '+15163097663', 'Facebook Call', '2024-05-06T23:57:24.34+00:00', NULL, '00:00:00', 'Connected', NULL, 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13'),
	(65073, 'Victor Rivera', 665893, 'Unkown', 'MIGUEL JUAREZ GREGORIO', '+18886344738', '+19568155072', 'Facebook Messenger', '2024-05-06T23:57:23.903+00:00', NULL, '00:00:00', 'Connected', NULL, 'Outbound', 2, 1, '2024-05-07 15:07:18', '2024-05-07 16:07:13');

-- Volcando estructura para tabla zscxxcmy_bd.api_citasacuity_formagenda
CREATE TABLE IF NOT EXISTS `api_citasacuity_formagenda` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `interviewee` varchar(300) DEFAULT NULL,
  `result_interview` varchar(100) DEFAULT NULL,
  `other_result` varchar(100) DEFAULT NULL,
  `vawa` varchar(100) DEFAULT NULL,
  `tvisa` varchar(100) DEFAULT NULL,
  `uvisa` varchar(100) DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL,
  `type_interview` varchar(100) DEFAULT NULL,
  `mycase_link` varchar(300) DEFAULT NULL,
  `pcs_name` varchar(100) DEFAULT NULL,
  `mycase_id` varchar(20) DEFAULT NULL,
  `aviso_consulta` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `date_ap` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `date_created` varchar(50) DEFAULT NULL,
  `id_` varchar(50) DEFAULT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `cat_projects_id` int(11) DEFAULT NULL,
  `active` int(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.api_citasacuity_formagenda: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.api_clickup
CREATE TABLE IF NOT EXISTS `api_clickup` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tarea` varchar(50) DEFAULT NULL,
  `nombre_tarea` varchar(900) DEFAULT NULL,
  `persona_asignada` varchar(200) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `fecha_limite` varchar(50) DEFAULT NULL,
  `fecha_creacion` varchar(100) DEFAULT NULL,
  `etiquetas` varchar(100) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `cat_projects_id` int(11) DEFAULT NULL,
  `active` int(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.api_clickup: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.api_creador_leads
CREATE TABLE IF NOT EXISTS `api_creador_leads` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha_consulta` varchar(50) DEFAULT NULL,
  `hora_consulta` varchar(50) DEFAULT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `calendario` varchar(50) DEFAULT NULL,
  `leadid` int(11) NOT NULL,
  `cat_projects_id` int(11) DEFAULT NULL,
  `active` int(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.api_creador_leads: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.api_only_leads_status_report
CREATE TABLE IF NOT EXISTS `api_only_leads_status_report` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `leadid` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(5) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `primary_email` varchar(200) DEFAULT NULL,
  `second_email` varchar(200) DEFAULT NULL,
  `cell_phone` varchar(100) DEFAULT NULL,
  `created` varchar(50) DEFAULT NULL,
  `idle_time` varchar(50) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `current_status` varchar(100) DEFAULT NULL,
  `previous_status` varchar(100) DEFAULT NULL,
  `type_case` varchar(50) DEFAULT NULL,
  `last_note_current_assignee` mediumtext DEFAULT NULL,
  `case_description` mediumtext DEFAULT NULL,
  `tags` varchar(150) DEFAULT NULL,
  `projects_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47716 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.api_only_leads_status_report: ~9 rows (aproximadamente)
INSERT INTO `api_only_leads_status_report` (`id`, `leadid`, `first_name`, `middle_name`, `last_name`, `address1`, `address2`, `city`, `state`, `zip`, `primary_email`, `second_email`, `cell_phone`, `created`, `idle_time`, `source`, `current_status`, `previous_status`, `type_case`, `last_note_current_assignee`, `case_description`, `tags`, `projects_id`, `active`, `created_at`, `updated_at`) VALUES
	(7902, 709650, 'Juan ', '', 'Antonio', '', '', 'MANHATTAN', 'NY', '10003', '', '', '+16465940794', '5/6/2024 12:01:47 AM', '5/6/2024 9:31:27 AM', 'Organic calls', 'Connected', 'Unkown', 'General Intake', '', 'Nombre:Juan Antonio\nEstado: Chicago \nOriginario: \n\nProceso: \nVerificadores:  (Información que lo hace calificar al proceso)\n\nCoyote:\nTrabajo:\nViolencia doméstica:\nReporte de policía:\nAccidente: \n\nFelonías: \nInformación Adicional: \nRazón de Compra: \nRazón de No Compra: esta ocupado, pide llamada de 4 en adelante', '', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52'),
	(7903, 709651, 'Israel', '', '', '', '', '', '', '', 'damian.israel@pusd.us', 'Israeldg72@yahoo.com', '+16266287169', '5/6/2024 12:10:52 AM', '5/6/2024 4:58:50 PM', 'Univision LawSuit', 'Docusign sent', 'Unkown', 'General Intake', 'CampaignName : Uni ad 3 -  JB (120205465723560026) | Univisión interests - relaunch (120205465723590026) | MT-Univisión intereses 1 OCT (23862261973540025)CaseType : General IntakeCellPhone : +16266287169Email1 : damian.israel@pusd.usEmail2 : Israeldg72@yahoo.comFullName : IsraelLeadProvider : Univision LawSuitStatus : ClientSummary : ¿Ha sido usuario registrado de Univision durante los últimos 2 años?siDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? si¿Qué correo utilizó para su registro De Univision?Israeldg72@yahoo.comTags : masstort_fee_agreement_required', '¿Ha sido usuario registrado de Univision durante los últimos 2 años?\nsi\n\nDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? \nsi\n\n¿Qué correo utilizó para su registro De Univision?\nIsraeldg72@yahoo.com\n', 'masstort_fee_agreement_required', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52'),
	(7904, 709652, 'Doris', '', 'Elizabeth Stoffel', '', '', '', '', '', 'Stoffeldoris90@gimail.com', '', '+18312974044', '5/6/2024 12:13:33 AM', '5/7/2024 11:00:31 AM', 'Univision LawSuit', 'Docusign sent', 'Unkown', 'General Intake', 'New Call, Lead DetailFirst Name: STOFFELLastname: DORISCellphone: +18312974044Source: Univision CallsCase Type: General Intake', '¿Ha sido usuario registrado de Univision durante los últimos 2 años?\nsi\n\nDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? \nsi\n\n¿Qué correo utilizó para su registro De Univision?\nStoffel Elizabeth @hotmaillcom\n', 'masstort_fee_agreement_required', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52'),
	(7905, 709653, 'Esperanza', '', 'Fernandez', '', '', '', '', '', 'fernandezespersnza5@gmail.com', '', '+13053337568', '5/6/2024 12:22:04 AM', '5/6/2024 5:13:27 PM', 'Univision LawSuit', 'Docusign sent', 'Unkown', 'General Intake', 'CampaignName : Uni ad 3 -  JB (120205465723560026) | Univisión interests - relaunch (120205465723590026) | MT-Univisión intereses 1 OCT (23862261973540025)CaseType : General IntakeCellPhone : +13053337568Email1 : fernandezespersnza5@gmail.comEmail2 : Telegono celularFullName : Esperanza FernandezLeadProvider : Univision LawSuitStatus : ClientSummary : ¿Ha sido usuario registrado de Univision durante los últimos 2 años?siDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? si¿Qué correo utilizó para su registro De Univision?Telegono celularTags : masstort_fee_agreement_required', '¿Ha sido usuario registrado de Univision durante los últimos 2 años?\nsi\n\nDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? \nsi\n\n¿Qué correo utilizó para su registro De Univision?\nTelegono celular\n', 'masstort_fee_agreement_required', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52'),
	(7906, 709654, 'William', '', 'Rebollar', '2126 N Lavergne Ave', '', 'Chicago', 'IL', '60639', 'wrebollar27@gmail.com', 'wrebollar27@gmail.com', '+17739235959', '5/6/2024 12:26:32 AM', '5/6/2024 4:37:23 PM', 'Univision LawSuit', 'Signed agreement', 'Unkown', 'General Intake', 'CampaignName : Uni ad 1 (120207082035150026) | Telemundo, univisión, cbs, streaming, etc (120207082035130026) | MT-Telemundo Intereses similares (120207082035140026)CaseType : General IntakeCellPhone : +17739235959Email1 : wrebollar27@gmail.comEmail2 : Wrebollar27@gmail.comFullName : William RebollarLeadProvider : Univision LawSuitStatus : ClientSummary : ¿Ha sido usuario registrado de Univision durante los últimos 2 años?siDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? si¿Qué correo utilizó para su registro De Univision?Wrebollar27@gmail.comTags : masstort_fee_agreement_required', '¿Ha sido usuario registrado de Univision durante los últimos 2 años?\nsi\n\nDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? \nsi\n\n¿Qué correo utilizó para su registro De Univision?\nWrebollar27@gmail.com\n', 'Signed agreement', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52'),
	(7907, 709655, 'Caller', '', '+12099720269', '', '', '', 'CA', '', '', '', '+12099720269', '5/6/2024 12:26:58 AM', '5/6/2024 1:40:34 PM', 'Facebook Call', 'Connected', 'Unkown', 'General Intake', '', '', '', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52'),
	(7908, 709656, 'Brenda', '', 'Mendoza', '', '', '', '', '', 'bmend1328@gmail.com', 'bmend1328@gmail.com', '+17867044713', '5/6/2024 12:30:45 AM', '5/6/2024 5:21:58 PM', 'Univision LawSuit', 'Docusign sent', 'Unkown', 'General Intake', 'CampaignName : Uni ad 3 -  JB (120205465723560026) | Univisión interests - relaunch (120205465723590026) | MT-Univisión intereses 1 OCT (23862261973540025)CaseType : General IntakeCellPhone : +17867044713Email1 : bmend1328@gmail.comEmail2 : bmend1328@gmail.comFullName : Brenda MendozaLeadProvider : Univision LawSuitStatus : ClientSummary : ¿Ha sido usuario registrado de Univision durante los últimos 2 años?siDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? si¿Qué correo utilizó para su registro De Univision?bmend1328@gmail.comTags : masstort_fee_agreement_required', '¿Ha sido usuario registrado de Univision durante los últimos 2 años?\nsi\n\nDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? \nsi\n\n¿Qué correo utilizó para su registro De Univision?\nbmend1328@gmail.com\n', 'masstort_fee_agreement_required', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52'),
	(7909, 709657, 'Marcia', '', 'Linares De Ibarra', '', '', '', '', '', 'marcialinares@gmail.com', 'M.linaresg26@gmail.com', '+19544792125', '5/6/2024 12:31:29 AM', '5/6/2024 5:31:10 PM', 'Univision LawSuit', 'Docusign sent', 'Unkown', 'General Intake', 'CampaignName : Uni Reel - 2 (120206030779220026) | Univisión interests - relaunch (120205465723590026) | MT-Univisión intereses 1 OCT (23862261973540025)CaseType : General IntakeCellPhone : +19544792125Email1 : marcialinares@gmail.comEmail2 : M.linaresg26@gmail.comFullName : Marcia Linares de IbarraLeadProvider : Univision LawSuitStatus : ClientSummary : ¿Ha sido usuario registrado de Univision durante los últimos 2 años?siDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? si¿Qué correo utilizó para su registro De Univision?M.linaresg26@gmail.comTags : masstort_fee_agreement_required', '¿Ha sido usuario registrado de Univision durante los últimos 2 años?\nsi\n\nDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? \nsi\n\n¿Qué correo utilizó para su registro De Univision?\nM.linaresg26@gmail.com\n', 'masstort_fee_agreement_required', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52'),
	(7910, 709658, 'Roxanna', '', 'Gonzalez Santiago', '', '', '', '', '', 'roche6212@gmail.com', 'roche6212@gmail.com', '+19132860217', '5/6/2024 12:43:04 AM', '5/6/2024 5:39:28 PM', 'Univision LawSuit', 'Docusign sent', 'Unkown', 'General Intake', 'CampaignName : Uni ad 1 (120207082035150026) | Telemundo, univisión, cbs, streaming, etc (120207082035130026) | MT-Telemundo Intereses similares (120207082035140026)CaseType : General IntakeCellPhone : +19132860217Email1 : roche6212@gmail.comEmail2 : roche6212@gmail.comFullName : Roxanna Gonzalez SantiagoLeadProvider : Univision LawSuitStatus : ClientSummary : ¿Ha sido usuario registrado de Univision durante los últimos 2 años?siDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? si¿Qué correo utilizó para su registro De Univision?roche6212@gmail.comTags : masstort_fee_agreement_required', '¿Ha sido usuario registrado de Univision durante los últimos 2 años?\nsi\n\nDurante los últimos 2 años como usuario registrado, ¿inició sesión y usó los servicios de Univision.com? \nsi\n\n¿Qué correo utilizó para su registro De Univision?\nroche6212@gmail.com\n', 'masstort_fee_agreement_required', 2, 1, '2024-05-07 15:07:52', '2024-05-07 16:07:52');

-- Volcando estructura para tabla zscxxcmy_bd.api_sol_report
CREATE TABLE IF NOT EXISTS `api_sol_report` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `leadid` int(11) DEFAULT NULL,
  `lead_case_type` varchar(50) DEFAULT NULL,
  `sol_date` varchar(20) DEFAULT NULL,
  `type_case` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `current_status` varchar(100) DEFAULT NULL,
  `previous_status` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `primary_phone` varchar(100) DEFAULT NULL,
  `primary_email` varchar(100) DEFAULT NULL,
  `active` int(2) DEFAULT 1,
  `cat_projects_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.api_sol_report: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.cat_active
CREATE TABLE IF NOT EXISTS `cat_active` (
  `id` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_active: 2 rows
/*!40000 ALTER TABLE `cat_active` DISABLE KEYS */;
INSERT INTO `cat_active` (`id`, `description`) VALUES
	(1, 'Active'),
	(0, 'No active');
/*!40000 ALTER TABLE `cat_active` ENABLE KEYS */;

-- Volcando estructura para tabla zscxxcmy_bd.cat_calendar
CREATE TABLE IF NOT EXISTS `cat_calendar` (
  `id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `calendar_quarter_label` varchar(2) NOT NULL,
  `calendar_month` int(6) NOT NULL,
  `calendar_month_label` varchar(20) NOT NULL,
  `calendar_week_label` varchar(10) NOT NULL,
  `calendar_day_of_week_label` varchar(20) NOT NULL,
  `is_work_day` varchar(10) NOT NULL,
  `anio` int(4) NOT NULL,
  `trimestre` varchar(20) NOT NULL,
  `mes` int(2) NOT NULL,
  `dia` int(2) NOT NULL,
  `semana_anio` int(2) NOT NULL,
  `dia_semana` int(2) NOT NULL,
  `fin_semana` varchar(20) NOT NULL,
  `active` int(1) NOT NULL,
  `observations` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_calendar: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.cat_clients
CREATE TABLE IF NOT EXISTS `cat_clients` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `second_last_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `email2` varchar(150) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `cellular_phone` varchar(100) DEFAULT NULL,
  `cat_type_clients_id` int(11) DEFAULT NULL,
  `regions_id` int(11) DEFAULT NULL,
  `observations` varchar(700) DEFAULT NULL,
  `active` int(1) DEFAULT 1 COMMENT '1:active,0:no active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_clients: ~13 rows (aproximadamente)
INSERT INTO `cat_clients` (`id`, `name`, `last_name`, `second_last_name`, `email`, `email2`, `phone`, `cellular_phone`, `cat_type_clients_id`, `regions_id`, `observations`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'Benjamin', 'Galindo', 'Hernandez', 'galindo@outlook.com', NULL, '', '55 1245 6588', 1, 0, NULL, 1, NULL, NULL),
	(2, 'Felipe', 'Xicotencalt', 'Salcido', 'xicotencalt@outlook.com', NULL, NULL, '55 88 99 88 77', 1, NULL, NULL, 1, '2024-04-03 01:35:45', '2024-04-03 01:35:45'),
	(3, 'León Trosky Kirilenko Valles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-05 00:02:52', '2024-06-05 00:02:52'),
	(4, 'Teresa Vergara Ruiz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-05 02:12:50', '2024-06-05 02:12:50'),
	(5, 'Dany Trejo Machete', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-11 01:50:17', '2024-06-11 01:50:17'),
	(6, 'Alejandro Efren Jiménez Ríos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-24 23:03:42', '2024-06-24 23:03:42'),
	(7, 'Randa Pedroza Gonzalez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-24 23:07:47', '2024-06-24 23:07:47'),
	(8, 'Claudia Alejandra Canino Hernández', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-24 23:09:23', '2024-06-24 23:09:23'),
	(9, 'Mayra Lizeth Sebastián Prado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-24 23:18:42', '2024-06-24 23:18:42'),
	(10, 'Alexis Antonio Dzib Kuyoc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-24 23:33:01', '2024-06-24 23:33:01'),
	(11, 'Ditza Hazel Jimenez Gonzalez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-24 23:35:22', '2024-06-24 23:35:22'),
	(12, 'Suny Jatziri Contreras Pasten', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-24 23:37:23', '2024-06-24 23:37:23'),
	(13, 'Roberto Reyes Aquino', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-06-24 23:42:47', '2024-06-24 23:42:47');

-- Volcando estructura para tabla zscxxcmy_bd.cat_consultation_cost
CREATE TABLE IF NOT EXISTS `cat_consultation_cost` (
  `id` int(11) NOT NULL,
  `consultation_cost` decimal(9,2) NOT NULL,
  `commissions` decimal(9,2) NOT NULL,
  `observations` varchar(100) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 1 COMMENT '1:active,0:no active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_consultation_cost: ~3 rows (aproximadamente)
INSERT INTO `cat_consultation_cost` (`id`, `consultation_cost`, `commissions`, `observations`, `active`, `created_at`, `updated_at`) VALUES
	(150, 150.00, 20.00, 'Dólares USA', 1, NULL, NULL),
	(197, 197.00, 25.00, 'Dólares USA', 1, NULL, NULL),
	(247, 247.00, 30.00, 'Dólares USA', 1, NULL, NULL);

-- Volcando estructura para tabla zscxxcmy_bd.cat_employees
CREATE TABLE IF NOT EXISTS `cat_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `second_last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cat_type_employees_id` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT 1 COMMENT '1:active,0:no active',
  `observations` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_employees: ~85 rows (aproximadamente)
INSERT INTO `cat_employees` (`id`, `name`, `last_name`, `second_last_name`, `email`, `cat_type_employees_id`, `active`, `observations`, `created_at`, `updated_at`) VALUES
	(1, 'Adriana', 'Dominguez', 'Vergara', 'adominguezvmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(2, 'Adrian', 'Gomez', 'Calderon', 'adgomezmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(3, 'Aldair', 'Montiel', 'Vazquez', 'amontielmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(4, 'Alfredo', 'Mex', NULL, NULL, 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(5, 'Alfredo', 'Pappas', 'Avendaño', 'apappasmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(6, 'Alfredo', 'Poot', 'Andrade', 'apootmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(7, 'America', 'Silva', 'Gil', 'asilvamendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(8, 'Anamelys', 'Castillo', NULL, NULL, 1, 0, 'Cambio a collections', '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(9, 'Armando', 'Sanchez', 'Ramos', 'asanchezramosmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(10, 'Arturo', 'Garcia', NULL, NULL, 1, 0, 'Baja', '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(11, 'Andres', 'Perez', 'Rodriguez', 'cperezmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(12, 'Anthony', 'Borges', 'Ojeda', 'aborgesmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(13, 'Brian', 'Medina', 'May', 'brian.medmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(14, 'Carlos', 'Aguilar', 'Dominguez', 'caguilarmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(15, 'Carlos', 'Pech', 'Chan', 'cpechmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(16, 'Claudia', 'Zevallos', 'Sotomayor', 'czevallosmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(17, 'Dario', 'Morales', 'Robles', 'dmoralesmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(18, 'Diego', 'Castillo', 'Canul', 'dcastillomendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(19, 'Edgar', 'Briceno', 'Perera', 'ebricenomendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(20, 'Edgar', 'Ceballos', 'Loza', 'eceballosmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(21, 'Elsa', 'Rodriguez', 'Dorantes', 'erodriguezmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(22, 'Enrique', 'Galeana', 'Mendieta', 'egaleanamendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(23, 'Erik', 'Canche', 'Cornelio', 'ecanchemendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(24, 'Fany', 'Salazar', 'Cruz', 'fsalazarcmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(25, 'Fatima', 'Huerta', NULL, 'fhuertamendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(26, 'Fernando', 'Rojas', 'Diaz', 'frojasmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(27, 'Geofry', 'Reveles', 'Sánchez', 'trevelesmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(28, 'Gloria', 'Rangel', 'Silva', 'grangelmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(29, 'Ignacio', 'Perez', 'Peralta', 'iperezmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(30, 'Itamar', 'Botello', 'Gonzalez', 'ibotellomendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(31, 'Ivan', 'Arrezola', 'Escalante', 'iolafmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(32, 'Jeaninne', 'Rodriguez', 'Jurado', 'rrodriguezjmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(33, 'Jhovany', 'Pacheco', NULL, NULL, 1, 0, 'Baja', '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(34, 'Joel', 'Itzincab', 'Ku', 'jitzincabmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(35, 'Jesus', 'Salinas', 'Yañez', 'jsalinasymendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(36, 'Jorge', 'Gonzalez', 'Figueroa', 'jgonzalesmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(37, 'Juan', 'Garcia', 'Hernandez', 'jpgarciamendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(38, 'Julio', 'Jimenez', 'Gonzalez', 'jjimenezmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(39, 'Karina', 'Caballero', 'Rivera', 'kcaballeromendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(40, 'Katia', 'Sandoval', 'Villanueva', 'ksandovalmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(41, 'Lendi', 'Caamal', 'Dzib', 'lcaamalmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(42, 'Leonardo', 'Navarro', 'Moreno', 'jnavarromendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(43, 'Lesly', 'Chooc', 'Manzanilla', 'lchoocmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(44, 'Liliana', 'Lucho', 'Cancino', 'lluchomendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(45, 'Lourdes', 'Otero', 'Chan', 'loterocmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(46, 'Prada', 'Cordova', 'Diaz', 'cluisamendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(47, 'Marco', 'Sanchez', 'Becerra', 'msanchezbmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(48, 'Maria', 'Jimenez', 'Moreno', 'mjimenezmmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(49, 'Monica', 'Sanchez', 'Sanchez', 'mtsanchezmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(50, 'Oscar', 'Dominguez', 'Rivas', 'odominguezmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(51, 'Owen', 'Samaniego', NULL, NULL, 1, 0, 'Baja', '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(52, 'Ruben', 'Jimenez', 'Hernandez', 'ruben.jimendozafirm', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(53, 'Ronaldo', 'Landin', 'Peña', 'rlandinmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(54, 'Santiago', 'Olivera', 'Fortson', 'soliveramendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(55, 'Sergio', 'Campos', 'Adame', 'scamposmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(56, 'Veronica', 'Lomeli', 'Ramos', 'veronica.lomendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(57, 'Victor', 'Rivera', 'Aguilar', 'vriveramendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(58, 'Ximena', 'Maya', 'Ugalde', 'xmayamendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(59, 'Yessica', 'Morales', 'Arevalo', 'ymoralesmendozafirm@gmail.com', 1, 1, NULL, '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(60, 'Brandon', 'Limon', NULL, 'blimonmendozafirm@gmail.com', 5, 1, 'no access, messenger team', '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(61, 'Eduardo', 'Cupul', NULL, 'ecupulmendozafirm@gmail.com', 5, 1, 'no access, messenger team', '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(62, 'Fernanda', 'Vazquez', NULL, 'fvazquezcmendozafirm@gmail.com', 5, 1, 'no access, messenger team', '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(63, 'Lluvia', 'Reyna', NULL, 'lreynacmendozafirm@gmail.com', 5, 1, 'no access, messenger team', '2024-04-09 20:42:56', '2024-04-09 20:42:56'),
	(64, 'SuperAdmin', 'SA', NULL, NULL, 4, 1, NULL, '2024-04-24 16:19:24', '2024-04-24 16:19:24'),
	(65, 'Luis Adolfo', 'Canto', 'Martinez', 'lcantomendozafirm@gmail.com', 6, 1, NULL, '2024-04-26 19:10:39', '2024-04-26 19:10:39'),
	(66, 'Ana Cristina', 'Ibarra', 'Loza', 'cibarramendozafirm@gmail.com', 6, 1, NULL, '2024-04-26 19:11:37', '2024-04-26 19:11:37'),
	(67, 'Alejandro', 'Corres', 'de la Cruz', 'acorresmendozafirm@gmail.com', 6, 1, NULL, '2024-04-26 19:12:51', '2024-04-26 19:12:51'),
	(68, 'Manuel Alejandro', 'Cortaza', 'Bautista', 'mcortazamendozafirm@gmail.com', 6, 1, NULL, '2024-04-26 19:13:34', '2024-04-26 19:13:34'),
	(69, 'Ivan Aaron', 'Lopez', 'Escarcega', 'ilopezmendozafirm@gmail.com', 6, 1, NULL, '2024-04-26 19:14:52', '2024-04-26 19:14:52'),
	(70, 'Rosa Brenda', 'Salcedo', 'Silva', 'bsalcedomendozaf@gmail.com', 6, 1, NULL, '2024-04-26 19:17:44', '2024-04-26 19:17:44'),
	(71, 'Carlos Gabriel', 'Perez', 'Gomez', 'cgabrielmendozafirm@gmail.com', 6, 1, NULL, '2024-04-26 19:19:52', '2024-04-26 19:19:52'),
	(72, 'Jehiberth Josejan', 'Salinas', 'Seijas', 'jsalinasmendozafirm@gmail.com', 6, 1, NULL, '2024-04-26 19:23:08', '2024-04-26 19:23:08'),
	(73, '---', '---', '---', '---', 1, 1, 'Sin messenger team', '2024-05-06 20:31:04', '2024-05-06 20:31:04'),
	(74, 'pedroo', 'picaa', 'Flinstone', 'oo@gmail.com', 1, 1, '15 52', '2024-05-07 02:52:14', '2024-05-07 02:52:14'),
	(75, 'Bill', 'Gates', 'Gates', 'bill@gmail.com', 1, 1, 'Test 001', '2024-05-07 21:25:27', '2024-05-07 21:25:27'),
	(76, 'Good', 'Good', 'Good', 'good@gmail.com', 1, 1, 'Good test', '2024-05-08 23:12:22', '2024-05-08 23:12:22'),
	(77, 'Casimiroo', 'Ray', 'novo', 'ryzen@gmail.com', 1, 1, 'Test 8 Mayo', '2024-05-09 02:04:42', '2024-05-09 02:20:35'),
	(78, 'Edgar_bi', 'Edgar_bi', 'Edgar_bi', 'Edgar_bi@gmail.com', 1, 1, 'Edgar_bi', '2024-05-10 20:56:09', '2024-05-10 20:56:09'),
	(79, 'Polo_bi', 'Polo_bi', 'Polo_bi', 'Polo_bi@gmail.com', 1, 1, 'Polo_bi', '2024-05-10 20:56:41', '2024-05-10 20:56:41'),
	(80, 'Cris_bi', 'Cris_bi', 'Cris_bi', 'Cris_bi@gmail.com', 1, 1, 'Cris_bi', '2024-05-10 20:57:14', '2024-05-10 20:57:14'),
	(81, 'Alvaro_bi', 'Alvaro_bi', 'Alvaro_bi', 'Alvaro_bi@gmail.com', 1, 1, 'Alvaro_bi', '2024-05-10 20:57:44', '2024-05-10 20:57:44'),
	(82, 'Ema_bi', 'Ema_bi', 'Ema_bi', 'Ema_bi@gmail.com', 1, 1, 'Ema_bi', '2024-05-10 20:58:12', '2024-05-10 20:58:12'),
	(83, 'Lenin', 'Morelos', 'Gutierrez', 'lenin@gmail.com', 1, 1, '13 May 12 :12', '2024-05-13 23:12:37', '2024-05-13 23:12:37'),
	(84, 'Lenovo', 'Ryzen', 'a', 'lenovo@gmail.com', 1, 1, '13 15', '2024-05-14 00:45:50', '2024-05-14 00:45:50'),
	(85, 'Patricia', 'Razo', NULL, 'prazomendozafirm@gmail.com', 8, 1, 'Supervisor Openers', '2024-06-24 16:49:23', '2024-06-24 16:49:23');

-- Volcando estructura para tabla zscxxcmy_bd.cat_projects
CREATE TABLE IF NOT EXISTS `cat_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `active` int(2) NOT NULL DEFAULT 1,
  `observations` varchar(700) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_projects: ~4 rows (aproximadamente)
INSERT INTO `cat_projects` (`id`, `description`, `active`, `observations`, `created_at`, `updated_at`) VALUES
	(1, 'PI', 1, 'Personal Injurence', '2024-03-30 02:15:56', '2024-03-30 02:15:56'),
	(2, 'Inmigración', 1, '', '2024-03-30 02:15:56', '2024-03-30 02:15:56'),
	(3, 'Univisión', 1, '', '2024-03-30 02:18:40', '2024-03-30 02:18:40'),
	(4, 'DAZN', 1, '', '2024-03-30 02:18:40', '2024-03-30 02:18:40');

-- Volcando estructura para tabla zscxxcmy_bd.cat_regions
CREATE TABLE IF NOT EXISTS `cat_regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `active` int(2) NOT NULL DEFAULT 1,
  `observations` varchar(700) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_regions: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.cat_type_clients
CREATE TABLE IF NOT EXISTS `cat_type_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `observations` varchar(200) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1 COMMENT '1:active,0:no active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_type_clients: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.cat_type_employees
CREATE TABLE IF NOT EXISTS `cat_type_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `observations` varchar(200) DEFAULT NULL,
  `active` int(1) DEFAULT 1 COMMENT '1:active,0:no active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_type_employees: ~8 rows (aproximadamente)
INSERT INTO `cat_type_employees` (`id`, `description`, `observations`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'Openers', '1', 1, NULL, NULL),
	(2, 'Customer Services', NULL, 1, NULL, NULL),
	(3, 'DVS', NULL, 1, NULL, NULL),
	(4, 'Business Intelligence', NULL, 1, NULL, NULL),
	(5, 'Messenger Team', NULL, 1, NULL, NULL),
	(6, 'Team leader openers', NULL, 1, NULL, NULL),
	(7, 'Gerente', NULL, 1, NULL, NULL),
	(8, 'Supervisor', NULL, 1, NULL, NULL);

-- Volcando estructura para tabla zscxxcmy_bd.cat_type_process
CREATE TABLE IF NOT EXISTS `cat_type_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `observations` varchar(200) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 1 COMMENT '1:active,0:no active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.cat_type_process: ~10 rows (aproximadamente)
INSERT INTO `cat_type_process` (`id`, `description`, `observations`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'VAWA', NULL, 1, NULL, NULL),
	(2, 'VISA U', NULL, 1, NULL, NULL),
	(3, 'VISA T', NULL, 1, NULL, NULL),
	(4, 'VISA K1', NULL, 1, NULL, NULL),
	(5, 'PIP', NULL, 1, NULL, NULL),
	(6, 'NATZ', NULL, 1, NULL, NULL),
	(7, 'PROCESO CONSULAR', NULL, 1, NULL, NULL),
	(8, 'RENOVACIÓN LPR', NULL, 1, NULL, NULL),
	(9, 'RENOVACIÓN DACA', NULL, 1, NULL, NULL),
	(10, 'FOIA', NULL, 1, NULL, NULL);

-- Volcando estructura para tabla zscxxcmy_bd.fact_dvs_sales
CREATE TABLE IF NOT EXISTS `fact_dvs_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lead` int(6) DEFAULT NULL,
  `cat_employees_id` int(11) DEFAULT NULL,
  `idclient` int(11) DEFAULT NULL,
  `cat_client_id` int(11) DEFAULT NULL,
  `type_pays_id` int(11) DEFAULT NULL,
  `cat_type_process_id` int(11) DEFAULT NULL,
  `combo` int(1) DEFAULT NULL,
  `payment` decimal(9,2) DEFAULT NULL,
  `deposit` decimal(9,2) DEFAULT NULL COMMENT 'Abono',
  `observations` varchar(500) DEFAULT NULL,
  `sale_date` varchar(50) DEFAULT NULL,
  `day` int(2) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `ipaddress` varchar(50) DEFAULT NULL,
  `x_users_id` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT 1 COMMENT '1:active,0:no active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla zscxxcmy_bd.fact_dvs_sales: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.fact_sales
CREATE TABLE IF NOT EXISTS `fact_sales` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `lead` int(6) DEFAULT NULL,
  `cat_employees_id` int(11) DEFAULT NULL,
  `cat_employees_2_id` int(11) DEFAULT NULL,
  `cat_employees_3_id` int(11) DEFAULT NULL,
  `link_lawruler` varchar(700) DEFAULT NULL,
  `cat_type_process_id` int(11) DEFAULT NULL,
  `cat_client_id` int(11) DEFAULT NULL,
  `link_payment_receipt` varchar(700) DEFAULT NULL,
  `consultation_cost_id` int(11) DEFAULT NULL,
  `sale_date` varchar(50) DEFAULT NULL,
  `day` int(2) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `ipaddress` varchar(50) DEFAULT NULL,
  `x_users_id` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT 1 COMMENT '1:active,0:no active',
  `observations` varchar(700) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.fact_sales: ~57 rows (aproximadamente)
INSERT INTO `fact_sales` (`id`, `lead`, `cat_employees_id`, `cat_employees_2_id`, `cat_employees_3_id`, `link_lawruler`, `cat_type_process_id`, `cat_client_id`, `link_payment_receipt`, `consultation_cost_id`, `sale_date`, `day`, `month`, `year`, `ipaddress`, `x_users_id`, `active`, `observations`, `created_at`, `updated_at`) VALUES
	(1, NULL, 1, NULL, 1, 'http://business_intelligence_system.test/sales/create', 1, 1, 'http://business_intelligence_system.test/sales/create', 197, '2024-04-19 11:00:00', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-03-29 21:01:44', '2024-03-29 21:01:44'),
	(33, 888888, 3, NULL, 61, '88888888888888888888888888888888123456', 9, 1, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 197, '2024-04-19 10:49:03', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-04-19 22:49:02', '2024-04-19 22:49:02'),
	(34, 68358, 59, NULL, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683580', 6, 2, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834 19042024', 197, '2024-04-19 11:04:04', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-04-19 22:59:57', '2024-04-19 23:04:04'),
	(37, 683580, 2, NULL, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683580', 2, 2, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834\r\netiqueta1\r\n......\r\n\r\netiqueta2', 197, '2024-04-22 14:33:32', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-04-23 02:33:32', '2024-04-23 02:33:32'),
	(38, 683581, 16, NULL, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683581', 3, 2, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 197, '2024-04-22 14:44:44', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-04-23 02:44:44', '2024-04-23 02:44:44'),
	(39, 683590, 1, NULL, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683590', 2, 1, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 197, '2024-04-26 10:27:29', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-04-26 22:27:29', '2024-04-26 22:27:29'),
	(40, 683999, 8, NULL, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683999', 10, 1, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 197, '27-04-2024', 27, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-27 21:40:58', '2024-04-27 21:40:58'),
	(41, 683991, 15, 67, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683991', 7, 1, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 150, '27-04-2024', 27, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-27 22:00:44', '2024-04-27 22:00:44'),
	(42, 696969, 6, 68, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=696969', 4, 2, 'Payment Receipt $247.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 247, '29-04-2024', 29, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-29 22:54:39', '2024-04-29 22:54:39'),
	(43, 123456, 15, 71, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=123456', 8, 2, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 197, '29-04-2024', 29, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-29 23:07:22', '2024-04-29 23:07:22'),
	(44, 42024, 12, 69, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=042024', 5, 1, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 197, '29/04/2024', 29, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-30 02:33:42', '2024-04-30 02:33:42'),
	(45, 292024, 2, 66, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=292024', 4, 2, 'Payment Receipt $150.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $150.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 99999999', 150, '29/04/2024', 29, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-30 02:38:26', '2024-04-30 02:38:26'),
	(46, 155959, 7, 71, 63, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=155959', 2, 1, 'Payment Receipt $247.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $247.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 247, '29/04/2024', 29, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-30 03:00:06', '2024-04-30 03:00:06'),
	(47, 100100, 51, 70, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100100', 6, 1, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 197, '29/04/2024', 29, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-30 03:07:37', '2024-04-30 03:07:37'),
	(48, 300424, 8, 68, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=300424', 5, 1, 'Payment Receipt $197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549 Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary Account: Operating/ATTORNEY FEES Reference: MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR Amount Paid: $197.00 Payment Method: VISA Card Number: ************4214 Entry Mode: Manual Auth Code: 096706 Payment Date: April 01, 2024 05:24 pm Transaction Id: 105701834', 197, '30/04/2024', 30, 4, 2024, '127.0.0.1', 64, 1, NULL, '2024-04-30 23:00:04', '2024-04-30 23:00:04'),
	(49, 783580, 73, 65, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=783580', 1, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '06/05/2024', 6, 5, 2024, '127.0.0.1', 73, 1, NULL, '2024-05-06 20:39:19', '2024-05-06 20:39:19'),
	(50, 683400, 74, 65, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683400', 9, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '06/05/2024', 6, 5, 2024, '127.0.0.1', 74, 1, NULL, '2024-05-07 02:56:53', '2024-05-07 02:56:53'),
	(51, 683401, 1, 65, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683401', 2, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '06/05/2024', 6, 5, 2024, '127.0.0.1', 64, 1, NULL, '2024-05-07 03:17:19', '2024-05-07 03:17:19'),
	(52, 683402, 3, 65, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683402', 3, 2, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '06/05/2024', 6, 5, 2024, '127.0.0.1', 1, 1, NULL, '2024-05-07 03:20:51', '2024-05-07 03:20:51'),
	(53, 900900, 75, 69, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=900900', 3, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 247, '07/05/2024', 7, 5, 2024, '127.0.0.1', 75, 1, NULL, '2024-05-07 21:35:25', '2024-05-08 03:07:57'),
	(54, 683771, 77, 65, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=683771', 9, 2, 'Payment Receipt	$247.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 247, '08/05/2024', 8, 5, 2024, '209.35.185.251', 77, 1, NULL, '2024-05-09 02:12:14', '2024-05-09 02:13:21'),
	(55, 883580, 78, 66, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=883580', 7, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '10/05/2024', 10, 5, 2024, '209.35.185.251', 78, 1, NULL, '2024-05-10 21:20:51', '2024-05-10 21:20:51'),
	(56, 111111, 83, 66, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=111111', 1, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '13/05/2024', 13, 5, 2024, '209.35.187.29', 83, 1, NULL, '2024-05-13 23:17:52', '2024-05-13 23:18:58'),
	(57, 686868, 84, 68, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=686868', 1, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '13/05/2024', 13, 5, 2024, '209.35.187.29', 84, 1, NULL, '2024-05-14 00:53:53', '2024-05-14 00:53:53'),
	(58, 715240, 2, 65, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=715240', 1, 2, '$197.00', 197, '13/05/2024', 13, 5, 2024, '209.35.187.29', 78, 1, NULL, '2024-05-14 01:08:02', '2024-05-14 01:08:02'),
	(59, 709999, 80, 72, 63, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=709999', 1, 1, '250', 250, '13/05/2024', 13, 5, 2024, '209.35.187.29', 80, 1, NULL, '2024-05-14 01:09:05', '2024-05-14 01:09:05'),
	(60, 715242, 78, 65, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=715242', 1, 2, '$150.pp', 150, '13/05/2024', 13, 5, 2024, '209.35.187.29', 78, 1, NULL, '2024-05-14 01:09:54', '2024-05-14 01:09:54'),
	(61, 715299, 79, 71, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=715299', 1, 1, 'Payment Receipt	$247.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , District Of Columbia 20004 (915) 228-3549  	Account Holder ALVARO S ESCAMILLA , 95112 Payment Summary	  Account:	Operating/ATTORNEY FEES Reference:	ALVARO SANTOS ESCAMILLA DIAZ /(510) 921-1106/ XMU  	  Amount Paid:	$247.00 Payment Method:	VISA Card Number:', 247, '13/05/2024', 13, 5, 2024, '187.155.115.166', 79, 1, NULL, '2024-05-14 01:10:56', '2024-05-14 01:10:56'),
	(62, 707348, 82, 69, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=707348', 1, 1, 'Payment Summary	 \r\nAccount:	Operating/ATTORNEY FEES\r\nReference:	Ludwin Salvador Lima Hernandez / (402) 906-1672 / AKSG\r\n 	 	\r\nAmount Paid:	$247.00\r\nPayment Method:	VISA\r\nCard Number:	************6473\r\nEntry Mode:	Manual\r\nAuth Code:	110034\r\nPayment Date:	May 11, 2024 10:37 am\r\nTransaction Id:	108747856', 247, '13/05/2024', 13, 5, 2024, '209.35.187.29', 82, 1, NULL, '2024-05-14 01:11:05', '2024-05-14 01:11:05'),
	(63, 709998, 80, 66, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=709998', 1, 2, '250', 250, '13/05/2024', 13, 5, 2024, '187.155.115.166', 80, 1, NULL, '2024-05-14 01:11:33', '2024-05-14 01:11:33'),
	(64, 711025, 82, 67, 63, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=711025', 1, 2, 'Payment Receipt	$247.00\r\nThe Mendoza Law Firm LLC\r\n601 Pennsylvania Ave. NW\r\nSte. 900\r\nWashington , District Of Columbia 20004\r\n(915) 228-3549	 	Account Holder\r\nMaria Ignacia Medrano Bueno\r\n28150\r\n 	 \r\nPayment Summary	 \r\nAccount:	Operating/ATTORNEY FEES\r\nReference:	Abel Martinez Rangel / 9802950854 / CZ\r\n 	 	\r\nAmount Paid:	$247.00\r\nPayment Method:	VISA\r\nCard Number:	************5416\r\nEntry Mode:	Manual\r\nAuth Code:	432910\r\nPayment Date:	May 11, 2024 12:24 pm\r\nTransaction Id:	108750417', 247, '13/05/2024', 13, 5, 2024, '187.155.115.166', 82, 1, NULL, '2024-05-14 01:14:26', '2024-05-14 01:14:26'),
	(65, 100001, 84, 68, 73, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100001', 3, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '20/05/2024', 20, 5, 2024, '127.0.0.1', 64, 1, NULL, '2024-05-21 02:27:49', '2024-05-21 02:27:49'),
	(66, 100002, 84, 70, 73, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100002', 4, 2, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '20/05/2024', 20, 5, 2024, '127.0.0.1', 64, 1, NULL, '2024-05-21 02:59:57', '2024-05-21 02:59:57'),
	(67, 100003, 1, 69, 73, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100003', 10, 2, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/05/2024', 24, 5, 2024, '127.0.0.1', 1, 1, NULL, '2024-05-24 23:29:21', '2024-05-24 23:29:21'),
	(68, 100004, 1, 67, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100004', 1, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/05/2024', 24, 5, 2024, '127.0.0.1', 1, 1, NULL, '2024-05-24 23:35:31', '2024-05-24 23:35:31'),
	(69, 100006, 1, 67, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100006', 3, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/05/2024', 24, 5, 2024, '127.0.0.1', 1, 1, NULL, '2024-05-24 23:40:56', '2024-05-24 23:40:56'),
	(70, 100008, 1, 70, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100008', 6, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/05/2024', 24, 5, 2024, '127.0.0.1', 1, 1, NULL, '2024-05-24 23:48:27', '2024-05-25 01:05:42'),
	(71, 100010, 1, 67, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100010', 6, 2, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/05/2024', 24, 5, 2024, '127.0.0.1', 1, 1, NULL, '2024-05-25 01:53:29', '2024-05-25 01:55:52'),
	(72, 100012, 1, 72, 63, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100012', 9, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/05/2024', 24, 5, 2024, '187.155.115.166', 1, 1, NULL, '2024-05-25 02:07:39', '2024-05-25 02:09:50'),
	(73, 100013, 1, 66, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100013', 8, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/05/2024', 24, 5, 2024, '187.155.115.166', 1, 1, NULL, '2024-05-25 02:13:15', '2024-05-25 02:13:15'),
	(74, 100014, 59, 67, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100014', 5, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/05/2024', 24, 5, 2024, '187.155.115.166', 59, 1, NULL, '2024-05-25 02:16:40', '2024-05-25 02:16:40'),
	(75, 100015, 1, 67, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100015', 1, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '28/05/2024', 28, 5, 2024, '127.0.0.1', 1, 1, NULL, '2024-05-28 23:25:43', '2024-05-28 23:25:43'),
	(76, 100016, 1, 67, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100016', 3, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '28/05/2024', 28, 5, 2024, '127.0.0.1', 64, 1, NULL, '2024-05-28 23:33:12', '2024-05-28 23:33:12'),
	(77, 100017, 1, 70, 63, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100017', 8, 1, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '28/05/2024', 28, 5, 2024, '127.0.0.1', 1, 1, NULL, '2024-05-28 23:34:08', '2024-05-28 23:34:08'),
	(78, 100018, 59, 71, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100018', 5, 2, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '28/05/2024', 28, 5, 2024, '187.155.115.166', 64, 1, NULL, '2024-05-28 23:48:41', '2024-05-28 23:55:05'),
	(79, 100019, 59, 72, 63, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100019', 10, 2, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '28/05/2024', 28, 5, 2024, '187.155.115.166', 1, 1, NULL, '2024-05-28 23:51:29', '2024-05-28 23:53:47'),
	(80, 100020, 1, 71, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100020', 5, 3, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '04/06/2024', 4, 6, 2024, '127.0.0.1', 1, 1, NULL, '2024-06-05 00:02:52', '2024-06-05 00:02:52'),
	(81, 100022, 1, 66, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100022', 3, 4, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '04/06/2024', 4, 6, 2024, '209.35.185.251', 1, 1, NULL, '2024-06-05 02:12:50', '2024-06-05 02:15:39'),
	(82, 100024, 1, 70, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100024', 6, 5, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '10/06/2024', 10, 6, 2024, '209.35.185.251', 64, 1, NULL, '2024-06-11 01:50:17', '2024-06-11 01:52:50'),
	(83, 100025, 39, 67, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100025', 1, 6, 'Payment Receipt	$247.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$247.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 247, '24/06/2024', 24, 6, 2024, '209.35.185.251', 39, 1, NULL, '2024-06-24 23:03:42', '2024-06-24 23:03:42'),
	(84, 100026, 17, 67, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100026', 1, 7, 'Payment Receipt	$150.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$150.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 150, '24/06/2024', 24, 6, 2024, '209.35.185.251', 17, 1, NULL, '2024-06-24 23:07:47', '2024-06-24 23:07:47'),
	(85, 100027, 37, 67, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100027', 1, 8, 'Payment Receipt	$247.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$247.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 247, '24/06/2024', 24, 6, 2024, '209.35.185.251', 37, 1, NULL, '2024-06-24 23:09:23', '2024-06-24 23:09:23'),
	(86, 100028, 37, 67, 63, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100028', 1, 9, 'Payment Receipt	$247.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$247.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 247, '24/06/2024', 24, 6, 2024, '209.35.185.251', 67, 1, NULL, '2024-06-24 23:18:42', '2024-06-24 23:18:42'),
	(87, 100029, 34, 70, 60, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100029', 10, 10, 'Payment Receipt	$150.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$150.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 150, '24/06/2024', 24, 6, 2024, '209.35.185.251', 34, 1, NULL, '2024-06-24 23:33:01', '2024-06-24 23:33:01'),
	(88, 100030, 16, 70, 61, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100030', 10, 11, 'Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 197, '24/06/2024', 24, 6, 2024, '209.35.185.251', 16, 1, NULL, '2024-06-24 23:35:22', '2024-06-24 23:35:22'),
	(89, 100031, 13, 70, 62, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100031', 10, 12, 'Payment Receipt	$150.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$150.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 150, '24/06/2024', 24, 6, 2024, '209.35.185.251', 13, 1, NULL, '2024-06-24 23:37:23', '2024-06-24 23:37:23'),
	(90, 100033, 13, 70, 73, 'https://mendozafirm.lawruler.com/update-lead.aspx?lead=100033', 9, 5, 'Payment Receipt	$247.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , \r\nDistrict Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  \r\nAccount:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  \r\nAmount Paid:	$247.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	\r\nManual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834', 247, '24/06/2024', 24, 6, 2024, '209.35.185.251', 70, 1, NULL, '2024-06-24 23:42:47', '2024-06-24 23:47:36');

-- Volcando estructura para tabla zscxxcmy_bd.type_pays
CREATE TABLE IF NOT EXISTS `type_pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) DEFAULT NULL,
  `observations` varchar(200) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 1 COMMENT '1:active, 0: no active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla zscxxcmy_bd.type_pays: ~0 rows (aproximadamente)

-- Volcando estructura para tabla zscxxcmy_bd.x_profiles
CREATE TABLE IF NOT EXISTS `x_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` varchar(200) NOT NULL,
  `observations` varchar(200) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 1 COMMENT '1:active,0:no active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.x_profiles: ~4 rows (aproximadamente)
INSERT INTO `x_profiles` (`id`, `profile`, `observations`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'SuperAdmin', '0', 1, NULL, NULL),
	(2, 'Supervisor', '0', 1, NULL, NULL),
	(3, 'Manager', 'TeamLeaders', 1, NULL, NULL),
	(4, 'Agente', NULL, 1, NULL, NULL);

-- Volcando estructura para tabla zscxxcmy_bd.x_users
CREATE TABLE IF NOT EXISTS `x_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_employees_id` int(11) DEFAULT NULL,
  `x_profiles_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `passswwword` varchar(255) NOT NULL,
  `active` int(1) DEFAULT 1 COMMENT '1:active,0:no active',
  `observations` varchar(400) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla zscxxcmy_bd.x_users: ~69 rows (aproximadamente)
INSERT INTO `x_users` (`id`, `cat_employees_id`, `x_profiles_id`, `user`, `passswwword`, `active`, `observations`, `created_at`, `updated_at`) VALUES
	(1, 64, 1, 'sa', 'sa890', 1, 'System Adminstrator', '2024-04-11 19:19:14', '2024-04-11 19:19:14'),
	(12, 78, 4, 'Edgar_bi', 'Bu5ine551', 1, 'Bu5ine551', '2024-05-10 20:59:12', '2024-05-10 20:59:12'),
	(13, 79, 4, 'Polo_bi', 'Bu5ine552', 1, 'Bu5ine552', '2024-05-10 20:59:50', '2024-05-10 20:59:50'),
	(14, 80, 4, 'Cris_bi', 'Bu5ine553', 1, 'Bu5ine553', '2024-05-10 21:00:35', '2024-05-10 21:00:35'),
	(15, 81, 4, 'Alvaro_bi', 'Bu5ine554', 1, 'Bu5ine554', '2024-05-10 21:01:27', '2024-05-10 21:01:27'),
	(16, 82, 4, 'Ema_bi', 'Bu5ine555', 1, 'Bu5ine555', '2024-05-10 21:02:00', '2024-05-10 21:02:00'),
	(19, 1, 4, 'adominguezv', 's2mj9lfc', 1, NULL, '2024-05-18 01:58:46', '2024-05-18 01:58:46'),
	(20, 2, 4, 'adgomez', 's9hzrmkv', 1, NULL, '2024-05-18 02:01:14', '2024-05-18 02:01:14'),
	(21, 3, 4, 'amontiel', 'fdkp9qb1', 1, NULL, '2024-05-18 02:02:37', '2024-05-18 02:02:37'),
	(22, 5, 4, 'apappas', 'qa9saksz', 1, NULL, '2024-05-18 02:04:17', '2024-05-18 02:04:17'),
	(23, 6, 4, 'apoot', 'nsev0e6z', 1, NULL, '2024-05-18 02:05:05', '2024-05-18 02:05:05'),
	(24, 7, 4, 'asilva', '9rc66di9', 1, NULL, '2024-05-18 02:16:07', '2024-05-18 02:16:07'),
	(25, 9, 4, 'asanchezramos', '9coismh1', 1, NULL, '2024-05-18 02:19:28', '2024-05-18 02:19:28'),
	(26, 11, 4, 'cperez', 'rbjxkgmy', 1, NULL, '2024-05-18 02:21:52', '2024-05-18 02:21:52'),
	(27, 12, 4, 'aborges', 'naz2y52x', 1, NULL, '2024-05-18 02:23:37', '2024-05-18 02:23:37'),
	(28, 13, 4, 'brian.med', 'm2j91qyp', 1, NULL, '2024-05-18 02:24:39', '2024-05-18 02:24:39'),
	(29, 14, 4, 'caguilar', 'i5i9mypt', 1, NULL, '2024-05-18 02:26:16', '2024-05-18 02:26:16'),
	(30, 15, 4, 'cpech', 'ytzx6fmp', 1, NULL, '2024-05-18 02:28:12', '2024-05-18 02:28:12'),
	(31, 16, 4, 'czevallos', 'v82kxjjf', 1, NULL, '2024-05-18 02:29:20', '2024-05-18 02:29:20'),
	(32, 17, 4, 'dmorales', '8rwz6hrn', 1, NULL, '2024-05-18 02:30:47', '2024-05-18 02:30:47'),
	(33, 18, 4, 'dcastillo', 'wtux5kod', 1, NULL, '2024-05-18 02:32:40', '2024-05-18 02:32:40'),
	(34, 19, 4, 'ebriceno', '5w9q8f48', 1, NULL, '2024-05-18 02:34:19', '2024-05-18 02:34:19'),
	(35, 20, 4, 'eceballos', 'leklri81', 1, NULL, '2024-05-18 02:36:23', '2024-05-18 02:36:23'),
	(36, 21, 4, 'erodriguez', 'qo2s23wx', 1, NULL, '2024-05-18 02:38:06', '2024-05-18 02:38:06'),
	(37, 22, 4, 'egaleana', '6fvn4n4x', 1, NULL, '2024-05-18 02:39:17', '2024-05-18 02:39:17'),
	(38, 23, 4, 'ecanche', 'm43be44d', 1, NULL, '2024-05-18 02:41:09', '2024-05-18 02:41:09'),
	(39, 24, 4, 'fsalazarc', 'w2dvtiv7', 1, NULL, '2024-05-18 02:43:20', '2024-05-18 02:43:20'),
	(40, 26, 4, 'frojas', '56g2tz27', 1, NULL, '2024-05-18 02:44:58', '2024-05-18 02:44:58'),
	(41, 27, 4, 'treveles', '4123v4hh', 1, NULL, '2024-05-20 21:49:21', '2024-05-20 21:49:21'),
	(42, 28, 4, 'grangel', 'ybgqibc4', 1, NULL, '2024-05-20 21:53:56', '2024-05-20 21:53:56'),
	(43, 29, 4, 'iperez', 'ye6r8ezc', 1, NULL, '2024-05-20 21:54:36', '2024-05-20 21:54:36'),
	(44, 30, 4, 'ibotello', '4mipg1g9', 1, NULL, '2024-05-20 21:55:31', '2024-05-20 21:55:31'),
	(45, 31, 4, 'iolaf', 'fd5s1ldo', 1, NULL, '2024-05-20 21:58:36', '2024-05-20 21:58:36'),
	(46, 32, 4, 'rrodriguezj', 'gnxogmcl', 1, NULL, '2024-05-20 22:01:14', '2024-05-20 22:01:14'),
	(47, 34, 4, 'jitzincab', '4udp84cd', 1, NULL, '2024-05-20 22:02:54', '2024-05-20 22:02:54'),
	(48, 35, 4, 'jsalinasy', 'emrsvp8x', 1, NULL, '2024-05-20 22:05:16', '2024-05-20 22:05:16'),
	(49, 36, 4, 'jgonzales', 'i8v9q7ai', 1, NULL, '2024-05-20 22:06:21', '2024-05-20 22:06:21'),
	(50, 37, 4, 'jpgarcia', 't6cvfbxt', 1, NULL, '2024-05-20 22:08:07', '2024-05-20 22:08:07'),
	(51, 38, 4, 'jjimenez', 'r9fp213j', 1, NULL, '2024-05-20 22:14:31', '2024-05-20 22:14:31'),
	(52, 39, 4, 'kcaballero', '1a8f4ti4', 1, NULL, '2024-05-20 22:15:54', '2024-05-20 22:15:54'),
	(53, 40, 4, 'ksandoval', 'ng48e10f', 1, NULL, '2024-05-20 22:17:19', '2024-05-20 22:17:19'),
	(54, 41, 4, 'lcaamal', 'c3lkdt5g', 1, NULL, '2024-05-20 22:25:27', '2024-05-20 22:25:27'),
	(55, 42, 4, 'jnavarro', '9k4xso5c', 1, NULL, '2024-05-20 22:26:52', '2024-05-20 22:26:52'),
	(56, 43, 4, 'lchooc', 'x8axbqsl', 1, NULL, '2024-05-20 22:27:47', '2024-05-20 22:27:47'),
	(57, 44, 4, 'llucho', '7kd2gf93', 1, NULL, '2024-05-20 22:28:56', '2024-05-20 22:28:56'),
	(58, 45, 4, 'loteroc', 'okif8iga', 1, NULL, '2024-05-20 22:30:24', '2024-05-20 22:30:24'),
	(59, 46, 4, 'cluisa', 'tn77ilpr', 1, NULL, '2024-05-20 22:31:28', '2024-05-20 22:31:28'),
	(60, 47, 4, 'msanchezb', '1ymbj76m', 1, NULL, '2024-05-20 22:32:24', '2024-05-20 22:32:24'),
	(61, 48, 4, 'mjimenezm', 'qc5m61cd', 1, NULL, '2024-05-20 22:33:11', '2024-05-20 22:33:11'),
	(62, 49, 4, 'mtsanchez', 'crlyyzih', 1, NULL, '2024-05-20 22:34:36', '2024-05-20 22:34:36'),
	(63, 50, 4, 'odominguez', 'e2m095xs', 1, NULL, '2024-05-20 22:35:49', '2024-05-20 22:35:49'),
	(64, 52, 4, 'ruben.ji', 'w2opa4tb', 1, NULL, '2024-05-20 22:38:00', '2024-05-20 22:38:00'),
	(65, 53, 4, 'rlandin', '5fzspnm6', 1, NULL, '2024-05-20 22:39:03', '2024-05-20 22:39:03'),
	(66, 54, 4, 'solivera', 'qwzmp636', 1, NULL, '2024-05-20 22:40:25', '2024-05-20 22:40:25'),
	(67, 55, 4, 'scampos', '8kemh5a6', 1, NULL, '2024-05-20 22:42:26', '2024-05-20 22:42:26'),
	(68, 56, 4, 'veronica.lo', '3x59gb3e', 1, NULL, '2024-05-20 22:43:44', '2024-05-20 22:43:44'),
	(69, 57, 4, 'vrivera', '2872ag29', 1, NULL, '2024-05-20 22:45:11', '2024-05-20 22:45:11'),
	(70, 58, 4, 'xmaya', 'y82wh3q3', 1, NULL, '2024-05-20 22:46:39', '2024-05-20 22:46:39'),
	(71, 59, 4, 'ymorales', '5nntee43', 1, NULL, '2024-05-20 22:47:17', '2024-05-20 22:47:17'),
	(72, 66, 3, 'cibarra', '8xiego2p', 1, NULL, '2024-05-20 22:57:52', '2024-05-20 22:57:52'),
	(73, 67, 3, 'acorres', 'fnaruwp4', 1, NULL, '2024-05-20 22:59:20', '2024-05-20 22:59:20'),
	(74, 72, 3, 'jsalinas', 'fuvgca9k', 1, NULL, '2024-05-20 23:00:54', '2024-05-20 23:00:54'),
	(75, 25, 4, 'fhuerta', 'i8tvmgnu', 1, NULL, '2024-05-31 18:01:01', '2024-05-31 18:01:01'),
	(76, 65, 3, 'lcanto', 'v86hz43g', 1, NULL, '2024-05-31 18:22:52', '2024-05-31 18:22:52'),
	(77, 68, 3, 'mcortaza', 'kg6rniwk', 1, NULL, '2024-05-31 20:18:01', '2024-05-31 20:18:01'),
	(78, 69, 3, 'ilopez', 'w5qf6ess', 1, NULL, '2024-05-31 20:20:06', '2024-05-31 20:20:06'),
	(79, 70, 3, 'bsalcedo', 'pa39y8y3', 1, NULL, '2024-05-31 20:21:50', '2024-05-31 20:21:50'),
	(80, 71, 3, 'cgabriel', 'cxk6dj6c', 1, NULL, '2024-05-31 20:23:52', '2024-05-31 20:23:52'),
	(81, 85, 2, 'super', 'super890', 1, 'Supervisor Openers', '2024-06-24 16:51:59', '2024-06-24 16:51:59');

-- Volcando estructura para vista zscxxcmy_bd.v__employees
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `v__employees` (
	`id` INT(11) NOT NULL,
	`name` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`last_name` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`second_last_name` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`active` INT(1) NULL COMMENT '1:active,0:no active',
	`observations` VARCHAR(300) NULL COLLATE 'utf8mb4_general_ci',
	`cat_type_employees_id` INT(11) NOT NULL,
	`cat_type_employees_description` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista zscxxcmy_bd.v__sales
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `v__sales` (
	`id` BIGINT(20) NOT NULL,
	`lead` INT(6) NULL,
	`cat_employees_id` INT(11) NULL,
	`cat_employees_2_id` INT(11) NULL,
	`cat_employees_3_id` INT(11) NULL,
	`link_lawruler` VARCHAR(700) NULL COLLATE 'utf8mb4_general_ci',
	`cat_type_process_id` INT(11) NULL,
	`cat_client_id` INT(11) NULL,
	`link_payment_receipt` VARCHAR(700) NULL COLLATE 'utf8mb4_general_ci',
	`consultation_cost_id` INT(11) NULL,
	`sale_date` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`day` INT(2) NULL,
	`month` INT(2) NULL,
	`year` INT(4) NULL,
	`ipaddress` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`x_users_id` INT(11) NULL,
	`active` INT(1) NULL COMMENT '1:active,0:no active',
	`observations` VARCHAR(700) NULL COLLATE 'utf8mb4_general_ci',
	`created_at` TIMESTAMP NULL,
	`id_closer` INT(11) NOT NULL,
	`name_closer` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`lastname_closer` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email_closer` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`id_leader` INT(11) NOT NULL,
	`name_leader` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`lastname_leader` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email_leader` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`id_messenger` INT(11) NOT NULL,
	`name_messenger` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`lastname_messenger` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email_messenger` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`process` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci',
	`name_client` VARCHAR(300) NULL COLLATE 'utf8mb4_general_ci',
	`lastname_client` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`secondlastname_client` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`phone_client` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`consultation_cost` DECIMAL(9,2) NOT NULL
) ENGINE=MyISAM;

-- Volcando estructura para vista zscxxcmy_bd.v__salesx
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `v__salesx` (
	`id` BIGINT(20) NOT NULL,
	`Lead` INT(6) NULL,
	`cat_employees_id` INT(11) NULL,
	`cat_employees_2_id` INT(11) NULL,
	`cat_employees_3_id` INT(11) NULL,
	`link_lawruler` VARCHAR(700) NULL COLLATE 'utf8mb4_general_ci',
	`cat_type_process_id` INT(11) NULL,
	`cat_client_id` INT(11) NULL,
	`link_payment_receipt` VARCHAR(700) NULL COLLATE 'utf8mb4_general_ci',
	`consultation_cost_id` INT(11) NULL,
	`sale_date` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`day` INT(2) NULL,
	`month` INT(2) NULL,
	`year` INT(4) NULL,
	`ipaddress` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`x_users_id` INT(11) NULL,
	`active` INT(1) NULL COMMENT '1:active,0:no active',
	`observations` VARCHAR(700) NULL COLLATE 'utf8mb4_general_ci',
	`Fecha` TIMESTAMP NULL,
	`id_closer` INT(11) NOT NULL,
	`Closer` VARCHAR(201) NOT NULL COLLATE 'utf8mb4_general_ci',
	`name_closer` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`lastname_closer` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email_closer` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`Team leader` VARCHAR(201) NOT NULL COLLATE 'utf8mb4_general_ci',
	`id_leader` INT(11) NOT NULL,
	`name_leader` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`lastname_leader` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email_leader` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`Messenger team` VARCHAR(201) NOT NULL COLLATE 'utf8mb4_general_ci',
	`id_messenger` INT(11) NOT NULL,
	`name_messenger` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`lastname_messenger` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email_messenger` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`Tramite` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci',
	`name_client` VARCHAR(300) NULL COLLATE 'utf8mb4_general_ci',
	`lastname_client` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`secondlastname_client` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`phone_client` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`Costo` DECIMAL(9,2) NOT NULL,
	`Comisión` DECIMAL(9,2) NOT NULL
) ENGINE=MyISAM;

-- Volcando estructura para vista zscxxcmy_bd.v__xusers
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `v__xusers` (
	`id` INT(11) NOT NULL,
	`cat_employees_id` INT(11) NULL,
	`x_profiles_id` INT(11) NOT NULL,
	`user` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_general_ci',
	`passswwword` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_general_ci',
	`active` INT(1) NULL COMMENT '1:active,0:no active',
	`observations` VARCHAR(400) NULL COLLATE 'utf8mb4_general_ci',
	`created_at` TIMESTAMP NULL,
	`name` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`last_name` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`profile` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `v__employees`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v__employees` AS SELECT cat_employees.id,
cat_employees.name,
cat_employees.last_name,
cat_employees.second_last_name,
cat_employees.email,
cat_employees.active,
cat_employees.observations,
cat_type_employees.id AS cat_type_employees_id,
cat_type_employees.description AS cat_type_employees_description
FROM cat_employees
INNER JOIN cat_type_employees ON (cat_employees.cat_type_employees_id = cat_type_employees.id) ;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `v__sales`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v__sales` AS SELECT     fact_sales.id,
			  fact_sales.lead,
			  fact_sales.cat_employees_id,
			  fact_sales.cat_employees_2_id,
			  fact_sales.cat_employees_3_id,
			  fact_sales.link_lawruler,
			  fact_sales.cat_type_process_id,
			  fact_sales.cat_client_id,
			  fact_sales.link_payment_receipt,
			  fact_sales.consultation_cost_id,
			  fact_sales.sale_date,
			  fact_sales.day,
			  fact_sales.month,
			  fact_sales.year,
			  fact_sales.ipaddress,
			  fact_sales.x_users_id,
			  fact_sales.active,
			  fact_sales.observations,
			  fact_sales.created_at,
			  cat_employees.id AS 'id_closer',
			  cat_employees.name AS 'name_closer',
			  cat_employees.last_name 'lastname_closer',
			  cat_employees.email AS 'email_closer',
			  cat_employees2.id AS 'id_leader',
			  cat_employees2.name AS 'name_leader',
			  cat_employees2.last_name AS 'lastname_leader',
			  cat_employees2.email AS 'email_leader',
			  cat_employees3.id AS 'id_messenger',
			  cat_employees3.name AS 'name_messenger',
			  cat_employees3.last_name AS 'lastname_messenger',
			  cat_employees3.email AS 'email_messenger',
			  cat_type_process.description 'process',
			  cat_clients.name AS 'name_client',
			  cat_clients.last_name AS 'lastname_client',
			  cat_clients.second_last_name 'secondlastname_client',
			  cat_clients.phone AS 'phone_client',
			  cat_consultation_cost.consultation_cost--
FROM       fact_sales
INNER JOIN cat_employees ON (fact_sales.cat_employees_id = cat_employees.id)
INNER JOIN cat_employees cat_employees2 ON (fact_sales.cat_employees_2_id = cat_employees2.id)
INNER JOIN cat_employees cat_employees3 ON (fact_sales.cat_employees_3_id = cat_employees3.id)
INNER JOIN cat_type_process ON (fact_sales.cat_type_process_id = cat_type_process.id)
INNER JOIN cat_clients ON (fact_sales.cat_client_id = cat_clients.id)
INNER JOIN cat_consultation_cost ON (fact_sales.consultation_cost_id = cat_consultation_cost.id) ;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `v__salesx`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v__salesx` AS SELECT     fact_sales.id,
		   fact_sales.lead AS 'Lead',
		   fact_sales.cat_employees_id,
		   fact_sales.cat_employees_2_id,
		   fact_sales.cat_employees_3_id,
		   fact_sales.link_lawruler,
		   fact_sales.cat_type_process_id,
		   fact_sales.cat_client_id,
		   fact_sales.link_payment_receipt,
		   fact_sales.consultation_cost_id,
		   fact_sales.sale_date,
		   fact_sales.day,
		   fact_sales.month,
		   fact_sales.year,
		   fact_sales.ipaddress,
		   fact_sales.x_users_id,
		   fact_sales.active,
		   fact_sales.observations,
		   fact_sales.created_at AS 'Fecha',
		   cat_employees.id AS 'id_closer',
		   CONCAT(cat_employees.name, ' ', cat_employees.last_name) AS 'Closer',
		   cat_employees.name AS 'name_closer',
		   cat_employees.last_name 'lastname_closer',
		   cat_employees.email AS 'email_closer',
		   CONCAT(cat_employees2.name, ' ', cat_employees2.last_name) AS 'Team leader',
		   cat_employees2.id AS 'id_leader',
		   cat_employees2.name AS 'name_leader',
		   cat_employees2.last_name AS 'lastname_leader',
		   cat_employees2.email AS 'email_leader',
  		   CONCAT(cat_employees3.name, ' ', cat_employees3.last_name) AS 'Messenger team',
		   cat_employees3.id AS 'id_messenger',
		   cat_employees3.name AS 'name_messenger',
		   cat_employees3.last_name AS 'lastname_messenger',
		   cat_employees3.email AS 'email_messenger',
		   cat_type_process.description AS 'Tramite',
		   cat_clients.name AS 'name_client',
		   cat_clients.last_name AS 'lastname_client',
		   cat_clients.second_last_name 'secondlastname_client',
		   cat_clients.phone AS 'phone_client',
		   cat_consultation_cost.consultation_cost AS 'Costo',
		   cat_consultation_cost.commissions AS 'Comisión'
FROM       fact_sales
INNER JOIN cat_employees ON (fact_sales.cat_employees_id = cat_employees.id)
INNER JOIN cat_employees cat_employees2 ON (fact_sales.cat_employees_2_id = cat_employees2.id)
INNER JOIN cat_employees cat_employees3 ON (fact_sales.cat_employees_3_id = cat_employees3.id)
INNER JOIN cat_type_process ON (fact_sales.cat_type_process_id = cat_type_process.id)
INNER JOIN cat_clients ON (fact_sales.cat_client_id = cat_clients.id)
INNER JOIN cat_consultation_cost ON (fact_sales.consultation_cost_id = cat_consultation_cost.id) ;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `v__xusers`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v__xusers` AS SELECT x_users.id,
		x_users.cat_employees_id,
		x_users.x_profiles_id,
		x_users.user,
		x_users.passswwword,
		x_users.active,
		x_users.observations,
		x_users.created_at,
		cat_employees.name,
		cat_employees.last_name,
		x_profiles.profile
FROM 	x_users
INNER JOIN cat_employees ON (x_users.cat_employees_id = cat_employees.id)
INNER JOIN x_profiles ON (x_users.x_profiles_id = x_profiles.id) ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

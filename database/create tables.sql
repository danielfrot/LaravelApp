


CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sigla` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `cidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_ibge` int(11) NOT NULL,
  `fk_estado` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cidades_fk_estado_foreign` (`fk_estado`);

ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5566;

ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

ALTER TABLE `cidades`
  ADD CONSTRAINT `cidades_fk_estado_foreign` FOREIGN KEY (`fk_estado`) REFERENCES `estados` (`id`);

  COMMIT;
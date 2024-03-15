
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- livros
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `livros`;

CREATE TABLE `livros`
(
    `id` INTEGER NOT NULL,
    `nome` VARCHAR(50),
    `descricao` TEXT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

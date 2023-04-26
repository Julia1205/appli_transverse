CREATE TABLE item(
    item_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    item_name VARCHAR(255) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE axe_num(
    axe_num_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    axe_num_item_id INT(11) UNSIGNED NOT NULL,
    axe_num_question TEXT NOT NULL,
    axe_num_score INT(11) UNSIGNED NOT NULL,
    axe_num_coment VARCHAR(255),
    CONSTRAINT fk_axe_num_item
    FOREIGN KEY (axe_num_item_id) 
    REFERENCES item (item_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE axe_competence(
    axe_competence_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    axe_competence_item_id INT(11) UNSIGNED NOT NULL,
    axe_competence_question TEXT NOT NULL,
    axe_competence_score INT(11) UNSIGNED NOT NULL,
    axe_competence_coment VARCHAR(255),
    CONSTRAINT fk_axe_competence_item
    FOREIGN KEY (axe_competence_item_id) 
    REFERENCES item (item_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE analyse(
    analyse_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    analyse_item_id INT(11) UNSIGNED NOT NULL,
    analyse_question TEXT NOT NULL,
    analyse_score INT(11) UNSIGNED NOT NULL,
    analyse_coment VARCHAR(255),
    CONSTRAINT fk_analyse_item
    FOREIGN KEY (analyse_item_id) 
    REFERENCES item (item_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE synthese(
    synthese_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    synthese_axe_name VARCHAR(255) NOT NULL,
    synthese_axe_note DECIMAL NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;
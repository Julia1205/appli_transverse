--EXEC FIRST

CREATE TABLE company(
    company_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    company_name VARCHAR(255)
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE item(
    item_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    item_name VARCHAR(255) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE question(
    question_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    question_text TEXT NOT NULL,
    question_item_id INT(11) UNSIGNED NOT NULL,
    CONSTRAINT fk_question_item_id
    FOREIGN KEY (question_item_id)
    REFERENCES item(item_id)
    ON DELETE CASCADE
)ENGINE=INNODB DEFAULT CHARSET=utf8;


CREATE TABLE axe_num(
    axe_num_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    axe_num_item_id INT(11) UNSIGNED NOT NULL,
    axe_num_company_id INT(11) UNSIGNED NOT NULL,
    axe_num_question_id INT(11) UNSIGNED NOT NULL,
    axe_num_score INT(11) UNSIGNED NOT NULL,
    axe_num_coment VARCHAR(255),
    CONSTRAINT fk_axe_num_item
    FOREIGN KEY (axe_num_item_id) 
    REFERENCES item (item_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
    CONSTRAINT fk_axe_num_company
    FOREIGN KEY (axe_num_company_id)
    REFERENCES company(company_id),
    CONSTRAINT fk_axe_num_question
    FOREIGN KEY (axe_num_question_id)
    REFERENCES question(question_id)
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE axe_competence(
    axe_competence_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    axe_competence_item_id INT(11) UNSIGNED NOT NULL,
    axe_competence_company_id INT(11) UNSIGNED NOT NULL,
    axe_competence_question_id INT(11) UNSIGNED NOT NULL,
    axe_competence_score INT(11) UNSIGNED NOT NULL,
    axe_competence_coment VARCHAR(255),
    CONSTRAINT fk_axe_competence_item
    FOREIGN KEY (axe_competence_item_id) 
    REFERENCES item (item_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
    CONSTRAINT fk_axe_competence_company
    FOREIGN KEY (axe_competence_company_id)
    REFERENCES company(company_id),
    CONSTRAINT fk_axe_competence_question
    FOREIGN KEY (axe_competence_question_id)
    REFERENCES question(question_id)
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE axe_reactivite(
    axe_reactivite_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    axe_reactivite_item_id INT(11) UNSIGNED NOT NULL,
    axe_reactivite_company_id INT(11) UNSIGNED NOT NULL,
    axe_reactivite_question_id INT(11) UNSIGNED NOT NULL,
    axe_reactivite_score INT(11) UNSIGNED NOT NULL,
    axe_reactivite_coment VARCHAR(255),
    CONSTRAINT fk_axe_reactivite_item
    FOREIGN KEY (axe_reactivite_item_id) 
    REFERENCES item (item_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
    CONSTRAINT fk_axe_reactivite_company
    FOREIGN KEY (axe_reactivite_company_id)
    REFERENCES company(company_id),
    CONSTRAINT fk_axe_reactivite_question
    FOREIGN KEY (axe_reactivite_question_id)
    REFERENCES question(question_id)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


CREATE TABLE analyse(
    analyse_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    analyse_item_id INT(11) UNSIGNED NOT NULL,
    analyse_company_id INT(11) UNSIGNED NOT NULL,
    analyse_question_id INT(11) UNSIGNED NOT NULL,
    analyse_score INT(11) UNSIGNED NOT NULL,
    analyse_coment VARCHAR(255),
    CONSTRAINT fk_analyse_item
    FOREIGN KEY (analyse_item_id) 
    REFERENCES item (item_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
    CONSTRAINT fk_analyse_company
    FOREIGN KEY (analyse_company_id)
    REFERENCES company(company_id),
    CONSTRAINT fk_analyse_question
    FOREIGN KEY (analyse_question_id)
    REFERENCES question(question_id)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


CREATE TABLE synthese(
    synthese_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    synthese_company_id INT(11) UNSIGNED NOT NULL,
    synthese_axe_name VARCHAR(255) NOT NULL,
    synthese_axe_note DECIMAL NOT NULL,
    CONSTRAINT fk_synthese_company
    FOREIGN KEY (synthese_company_id)
    REFERENCES company(company_id)
)ENGINE=INNODB DEFAULT CHARSET=utf8;
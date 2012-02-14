CREATE TABLE product (id BIGINT AUTO_INCREMENT, product_line_id BIGINT NOT NULL, product_category_id BIGINT, name VARCHAR(255) NOT NULL, description_short TEXT NOT NULL, size VARCHAR(255) NOT NULL, image VARCHAR(255), INDEX product_category_id_idx (product_category_id), INDEX product_line_id_idx (product_line_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product_category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product_line (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE service (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user (id BIGINT AUTO_INCREMENT, user_type_id BIGINT, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, INDEX user_type_id_idx (user_type_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user_type (id BIGINT AUTO_INCREMENT, name VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE product ADD CONSTRAINT product_product_line_id_product_line_id FOREIGN KEY (product_line_id) REFERENCES product_line(id);
ALTER TABLE product ADD CONSTRAINT product_product_category_id_product_category_id FOREIGN KEY (product_category_id) REFERENCES product_category(id);
ALTER TABLE user ADD CONSTRAINT user_user_type_id_user_type_id FOREIGN KEY (user_type_id) REFERENCES user_type(id);

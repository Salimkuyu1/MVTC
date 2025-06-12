CREATE DATABASE MVTC;

USE MVTC;


CREATE TABLE MVTC.students(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    gender ENUM("Male", "Female") NOT NULL,
    DoB date NOT NULL,
    PhoneNumber VARCHAR(13) NULL,

    PRIMARY KEY(id)


);

CREATE TABLE MVTC.teachers(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    PNo INT NOT NULL,
    gender ENUM("Male", "Female") NOT NULL,
    PhoneNumber VARCHAR(13) NULL,

    PRIMARY KEY(id)

);

CREATE TABLE MVTC.class(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    time VARCHAR(5) NOT NULL,
    CreationDate date,

    PRIMARY KEY(id)
);
ALTER TABLE MVTC.class ADD classteacher VARCHAR(20) NOT NULL;
ALTER TABLE MVTC.class ADD class_code VARCHAR(20) NOT NULL;

CREATE TABLE MVTC.support_staff(
    id INT NOT NULL AUTO_INCREMENT,
    staffname VARCHAR (20)NOT NULL,
    PhoneNumber VARCHAR (20)NOT NULL,
    Residence VARCHAR (20)NOT NULL,
    PRIMARY KEY (id)
);
ALTER TABLE MVTC.support_staff ADD JobType VARCHAR(20) NOT NULL;

-- changing a column in class table from varchar to int 
alter table mvtc.class change classteacher classteacher int null;
-- adding foreign key and constraint
ALTER TABLE class
ADD CONSTRAINT `fk_class_teacher`
FOREIGN KEY(classteacher)
REFERENCES teachers(id)
ON DELETE SET NULL ON UPDATE CASCADE;
-- creating a table 'subject' that does not exist in a database 'mvtc'
CREATE TABLE MVTC.subjects(
    id INT NOT NULL AUTO_INCREMENT,
    subjectName VARCHAR (20)NOT NULL,
    subjectCode INT (10)NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE MVTC.class_subjects(
    id INT NOT NULL AUTO_INCREMENT,
    class_id INT NOT NULL,        7
    subject_id INT NOT NULL,      1
    teacher_id INT NOT NULL,     2
    PRIMARY KEY (id),

    CONSTRAINT `fk_class_id`
    FOREIGN KEY(class_id)
    REFERENCES class(id)
    ON DELETE RESTRICT  ON UPDATE CASCADE,

    CONSTRAINT `fk_subject_id`
    FOREIGN KEY(subject_id)
    REFERENCES subjects(id)
    ON DELETE RESTRICT ON UPDATE CASCADE,

    CONSTRAINT `fk_teacher_id`
    FOREIGN KEY(teacher_id)
    REFERENCES teachers(id)
    ON DELETE RESTRICT ON UPDATE CASCADE
);

INSERT INTO `class_subjects` (`id`, `class_id`, `subject_id`, `teacher_id`) 
VALUES ('1', '7', '1', '2');
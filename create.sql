drop table if exists CART;
drop table if exists USER;
drop table if exists RESERVED_PRODUCT;
drop table if exists PRODUCT;
drop table if exists CATEGORY;
-- =====================
--   Création Database
-- =====================

create table CATEGORY
(
    ID              INTEGER         not null auto_increment,
    LIBELLE         VARCHAR(50)     not null,

    unique (ID),
    primary key (ID)
);

create table PRODUCT
(
    ID              INTEGER         not null auto_increment,
    NAME            VARCHAR(50)     not null,
    DESCRIPTION     VARCHAR(200)    not null,
    IMAGE           VARCHAR(50)             ,
    ID_CATEGORY     INTEGER         not null,
    PRICE           INTEGER         not null,

    unique (ID),
    primary key (ID),
    foreign key (ID_CATEGORY) references CATEGORY(ID)
);

create table RESERVED_PRODUCT
(
    ID              INTEGER         not null auto_increment,
    SESSION_ID      VARCHAR(100)    not null,
    ID_PRODUCT      INTEGER         not null,
    COUNT           INTEGER         not null,

    unique (ID),
    primary key (ID),
    foreign key (ID_PRODUCT) references PRODUCT(ID)
);

create table USER
(
    ID              INTEGER         not null auto_increment,
    FIRST_NAME      VARCHAR(20)     not null,
    LAST_NAME       VARCHAR(20)     not null,
    ADDRESS         VARCHAR(100)    not null,
    MAIL            VARCHAR(50)     not null,
    PASSWORD        VARCHAR(50)     not null,

    unique (MAIL),
    primary key (ID)
);

create table CART
(
    ID              INTEGER         not null,
    RESERVED_ID     INTEGER         not null,
    SESSION_ID      INTEGER         not null,
    USER_ID         INTEGER                 ,

    primary key (ID),
    foreign key (RESERVED_ID) references RESERVED_PRODUCT(ID),
    foreign key (USER_ID) references USER(ID)
);

insert into USER (`FIRST_NAME`, `LAST_NAME`, `ADDRESS`, `MAIL`, `PASSWORD`)
values           ("Paul", "Lhussiez", "Pas d'adresse", "fakeadresse1@mail.com", "None"),
                 ("Nicolas", "Seydoux", "Pas d'adresse", "fakeadresse2@mail.com", "None"),
                 ("Bayrem", "Jridi", "Pas d'adresse", "fakeadresse3@mail.com", "None"),
                 ("Mohamed", "Danibelani", "Pas d'adresse", "fakeadresse4@mail.com", "None")
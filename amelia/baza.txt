CREATE TABLE `Rola`
(
 `id_rola` integer NOT NULL ,
 `nazwa`   varchar(45) NOT NULL ,
 `opis`    varchar(45) NOT NULL ,

PRIMARY KEY (`id_rola`)
);

CREATE TABLE `Uzytkownik`
(
 `id_uzytkownik` integer AUTO_INCREMENT NOT NULL ,
 `login`         varchar(45) NOT NULL ,
 `pass`          varchar(45) NOT NULL ,
 `imie`          varchar(45) NOT NULL ,
 `nazwisko`      varchar(45) NOT NULL ,
 `email`         varchar(45) NOT NULL ,

PRIMARY KEY (`id_uzytkownik`)
);

CREATE TABLE `Wypozyczalnia`
(
 `id_wypozyczalnia` integer NOT NULL ,
 `ulica`            varchar(45) NOT NULL ,
 `miasto`           varchar(45) NOT NULL ,

PRIMARY KEY (`id_wypozyczalnia`)
);


CREATE TABLE `UzytkownikRola`
(
 `id_rola`       integer NOT NULL ,
 `id_uzytkownik` integer NOT NULL ,
 `data_nadanie`  date NOT NULL ,
 `data_odbior`   date NOT NULL ,

KEY `FK_13` (`id_rola`),
CONSTRAINT `FK_11` FOREIGN KEY `FK_13` (`id_rola`) REFERENCES `Rola` (`id_rola`),
KEY `FK_20` (`id_uzytkownik`),
CONSTRAINT `FK_17` FOREIGN KEY `FK_20` (`id_uzytkownik`) REFERENCES `Uzytkownik` (`id_uzytkownik`)
);

CREATE TABLE `Produkt`
(
 `id_produkt`       integer AUTO_INCREMENT NOT NULL ,
 `tytul`            varchar(45) NOT NULL ,
 `artysta`          varchar(45) NOT NULL ,
 `data_wydania`     varchar(45) NOT NULL ,
 `gatunek`          varchar(45) NOT NULL ,
 `liczba_plyt`      integer NOT NULL ,
 `dlugosc`          time NOT NULL ,
 `dodatki`          varchar(45) NOT NULL ,
 `dostepnosc`       integer NOT NULL ,
 `id_wypozyczalnia` integer NOT NULL ,

PRIMARY KEY (`id_produkt`),
KEY `FK_70` (`id_wypozyczalnia`),
CONSTRAINT `FK_67` FOREIGN KEY `FK_70` (`id_wypozyczalnia`) REFERENCES `Wypozyczalnia` (`id_wypozyczalnia`)
);

CREATE TABLE `Wypozyczenie`
(
 `id_wypozyczenie` integer AUTO_INCREMENT NOT NULL ,
 `id_uzytkownik`   integer NOT NULL ,
 `data`            date NOT NULL ,
 `zwrot`           date NOT NULL ,
 `cena`            double NOT NULL ,

PRIMARY KEY (`id_wypozyczenie`),
KEY `FK_30` (`id_uzytkownik`),
CONSTRAINT `FK_28` FOREIGN KEY `FK_30` (`id_uzytkownik`) REFERENCES `Uzytkownik` (`id_uzytkownik`)
);

CREATE TABLE `WypozProdukt`
(
 `id_wypozyczenie` integer NOT NULL ,
 `id_produkt`      integer NOT NULL ,

KEY `FK_47` (`id_wypozyczenie`),
CONSTRAINT `FK_45` FOREIGN KEY `FK_47` (`id_wypozyczenie`) REFERENCES `Wypozyczenie` (`id_wypozyczenie`),
KEY `FK_52` (`id_produkt`),
CONSTRAINT `FK_49` FOREIGN KEY `FK_52` (`id_produkt`) REFERENCES `Produkt` (`id_produkt`)
);



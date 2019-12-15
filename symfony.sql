CREATE TABLE CLIENT(
        idClient     Int NOT NULL ,
        nomClient    Varchar (30) NOT NULL ,
        prenomClient Varchar (30) NOT NULL ,
        numTelClient Varchar (30) NOT NULL ,
        ageClient    Varchar (30) NOT NULL
    ,CONSTRAINT CLIENT_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


CREATE TABLE LOCATION(
        idLocation       Int NOT NULL ,
        PrixJourLocation Int NOT NULL ,
        DureeLocation    Int NOT NULL ,
        idClient         Int NOT NULL
    ,CONSTRAINT LOCATION_PK PRIMARY KEY (idLocation)

    ,CONSTRAINT LOCATION_CLIENT_FK FOREIGN KEY (idClient) REFERENCES CLIENT(idClient)
)ENGINE=InnoDB;

CREATE TABLE BATEAU(
        idBateau                 Int NOT NULL ,
        marqueBateau             Varchar (30) NOT NULL ,
        longueurCoqueBateau      Varchar (30) NOT NULL ,
        longueurFlottaisonBateau Varchar (30) NOT NULL ,
        largeurMaxiBateau        Varchar (30) NOT NULL ,
        TirantAirBateau          Varchar (30) NOT NULL ,
        TirantEauMinBateau       Varchar (30) NOT NULL ,
        TypeCoqueBateau          Varchar (30) NOT NULL ,
        AnneBateau               Varchar (4) NOT NULL ,
        DeplacementLegeBateau    Varchar (30) NOT NULL ,
        idLocation               Int NOT NULL
    ,CONSTRAINT BATEAU_PK PRIMARY KEY (idBateau)

    ,CONSTRAINT BATEAU_LOCATION_FK FOREIGN KEY (idLocation) REFERENCES LOCATION(idLocation)
)ENGINE=InnoDB;
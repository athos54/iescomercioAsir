--  DDL for Table CURSOS
--------------------------------------------------------
    use Gimnasio
    --  DDL for Table CURSOS
--------------------------------------------------------
  CREATE TABLE "CURSOS" ("ID_CURSO" decimal NOT NULL, "NOM_CURSO" varchar(30), "HORARIO" varchar(15), "MAX_PER" decimal, "PRECIO" decimal, "INTENSIDAD" decimal) ;
--------------------------------------------------------
--  DDL for Table MATRICULAS
--------------------------------------------------------
  CREATE TABLE "MATRICULAS" ("ID_USUARIO" decimal NOT NULL, "ID_CURSO" decimal NOT NULL, "FECHA" DATE, "MES_PAGADO" decimal, "PAGOS" decimal(6,0)) ;
--------------------------------------------------------
--  DDL for Table USUARIOS
--------------------------------------------------------
  CREATE TABLE "USUARIOS" ("ID_USUARIO" decimal NOT NULL, "NOM_USUARIO" varchar(30), "TFNO" decimal, "TIPO" decimal) ;
-- INSERTING into CURSOS

Insert into CURSOS (ID_CURSO,NOM_CURSO,HORARIO,MAX_PER,PRECIO,INTENSIDAD) values ('1','Batuka','L,X,V 10','15','40','2');
Insert into CURSOS (ID_CURSO,NOM_CURSO,HORARIO,MAX_PER,PRECIO,INTENSIDAD) values ('2','Aerobic','M,J 10','20','45','3');
Insert into CURSOS (ID_CURSO,NOM_CURSO,HORARIO,MAX_PER,PRECIO,INTENSIDAD) values ('3','Pilates','L,X,V 12','4','50','1');
Insert into CURSOS (ID_CURSO,NOM_CURSO,HORARIO,MAX_PER,PRECIO,INTENSIDAD) values ('4','Aerocombat','L,X,V 7','10','50','3');
Insert into CURSOS (ID_CURSO,NOM_CURSO,HORARIO,MAX_PER,PRECIO,INTENSIDAD) values ('5','Batuka 2','M,J 7','15','40','2');
Insert into CURSOS (ID_CURSO,NOM_CURSO,HORARIO,MAX_PER,PRECIO,INTENSIDAD) values ('6','Gimnasio',null,'50','30','2');
---- INSERTING into MATRICULAS

Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('13','5','05/10/14','10','40');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('13','3','10/05/14','10','30');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('21','1','02/11/14','11','40');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('21','3','11/09/14','11','50');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('45','3','25/10/14','1','45');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('50','3','09/11/14','11','50');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('4','6','11/12/14','12','30');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('13','6','11/12/14','12','30');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('21','5','11/12/14','12','40');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('22','1','11/12/14','12','40');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('22','6','11/12/14','12','30');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('45','5','11/12/14','12','40');
Insert into MATRICULAS (ID_USUARIO,ID_CURSO,FECHA,MES_PAGADO,PAGOS) values ('50','6','11/12/14','12','30');
-- INSERTING into USUARIOS

Insert into USUARIOS (ID_USUARIO,NOM_USUARIO,TFNO,TIPO) values ('4','Juan Perea','654343434','0');
Insert into USUARIOS (ID_USUARIO,NOM_USUARIO,TFNO,TIPO) values ('13','Luis Mata','632323232','2');
Insert into USUARIOS (ID_USUARIO,NOM_USUARIO,TFNO,TIPO) values ('21','Ana Martín','678787878','0');
Insert into USUARIOS (ID_USUARIO,NOM_USUARIO,TFNO,TIPO) values ('22','Mario Casas','677889977','2');
Insert into USUARIOS (ID_USUARIO,NOM_USUARIO,TFNO,TIPO) values ('35','Sara Ortiz','677876876','0');
Insert into USUARIOS (ID_USUARIO,NOM_USUARIO,TFNO,TIPO) values ('40','Luis Soria','654554455','5');
Insert into USUARIOS (ID_USUARIO,NOM_USUARIO,TFNO,TIPO) values ('45','Ana Soria','612123123','5');
Insert into USUARIOS (ID_USUARIO,NOM_USUARIO,TFNO,TIPO) values ('50','Juana Díaz','615345345','1');
--------------------------------------------------------
--  DDL for Index CURSOS_PK--------------------------------------------------------
  CREATE UNIQUE INDEX "CURSOS_idx" ON "CURSOS" ("ID_CURSO") ;
--------------------------------------------------------
--  DDL for Index USUARIOS_PK
--------------------------------------------------------
  CREATE UNIQUE INDEX "USUARIOS_idx" ON "USUARIOS" ("ID_USUARIO") ;
--------------------------------------------------------
--  DDL for Index MATRICULAS_IDX1
--------------------------------------------------------
  CREATE UNIQUE INDEX "MATRICULAS_IDX" ON "MATRICULAS" ("ID_USUARIO", "ID_CURSO") ;
--------------------------------------------------------
--  Constraints for Table MATRICULAS
--------------------------------------------------------
  ALTER TABLE "MATRICULAS" ADD CONSTRAINT "MATRICULAS_CON" PRIMARY KEY ("ID_USUARIO", "ID_CURSO") 
--------------------------------------------------------
--  Constraints for Table USUARIOS
--------------------------------------------------------
  ALTER TABLE "USUARIOS" ADD CONSTRAINT "USUARIOS_PK" PRIMARY KEY ("ID_USUARIO") 
--------------------------------------------------------
--  Constraints for Table CURSOS
--------------------------------------------------------
  ALTER TABLE "CURSOS" ADD CONSTRAINT "CURSOS_PK" PRIMARY KEY ("ID_CURSO") 
  
  go
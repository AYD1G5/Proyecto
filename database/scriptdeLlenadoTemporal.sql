drop database proyectoayd1;
create database proyectoayd1;

use proyectoayd1;
insert into users(registro_academico, nombre, apellido, rol, direccion, email, password) 
	values ('201503666', 'Miguel Angel', 'Ruano Roca', 'estudiante', 'San Martin Jilotepeque', 'miguelruano35@gmail.com', 'miguel');
insert into users(registro_academico, nombre, apellido, rol, direccion, email, password) 
	values ('201504480', 'Denilson', 'Argueta', 'estudiante', 'San Martin Jilotepeque', 'denilson3@gmail.com', 'denilson');
insert into users(registro_academico, nombre, apellido, rol, direccion, email, password) 
	values ('201503712', 'Elmer Orlando', 'Real', 'docente', 'Casa Zona 11', 'elmer@gmail.com', 'elmer');
    
insert into escuela(codigo_escuela, nombre_escuela) values  (1, 'Ciencias');
insert into escuela(codigo_escuela, nombre_escuela) values  (2, 'Ciencias y Sistemas');
insert into escuela(codigo_escuela, nombre_escuela) values  (3, 'Industrial');

insert into area(codigo_area, nombre_area) values  (1, 'Matematica');
insert into area(codigo_area, nombre_area) values  (2, 'Fisica');
insert into area(codigo_area, nombre_area) values  (3, 'Social HUmanistica');

insert into ciclo(codigo_ciclo, nombre_ciclo) values (1, 'primer semestre');
insert into ciclo(codigo_ciclo, nombre_ciclo) values (2, 'segundo semestre');

insert into carrera(codigo_carrera, nombre_carrera) values  (1, 'Ciencias y Sistemas');
insert into carrera(codigo_carrera, nombre_carrera) values  (2, 'Civil');

insert into pensum(codigo_pensum, nombre_pensum, codigo_carrera) values  (1, '2008-Ciencias y Sistemas', 1, 1);
insert into pensum(codigo_pensum, nombre_pensum, codigo_carrera) values  (2, '2007-Civil', 2, 2);

insert into curso(codigo_curso, nombre_curso, codigo_escuela, codigo_area, ) values ('01', 'Matematica Basica 1', 1, 1);
insert into curso_pensum(codigo_curso, nombre_curso, creditos, codigo_escuela, codigo_area, categoria, laboratorioboolean, restriccion, semestre) values ('01', 'Matematica Basica 1', 6, 1, 1, 'Obligatorio', 'Si', 0, 1);

insert into asignacion(estudiante_id, ciclo_id, anio) values (2, 1, 2018);
insert into pensum()

select * from users;
select * from ciclo;
select * from asignacion;
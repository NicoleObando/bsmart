

CREATE  TABLE Curso(
	
	id_curso int not null,
	
	nombre varchar(50) default null,
	
	nombre_curso varchar(50) default null,
	
	descripcion varchar(50) default null,
	
	estado varchar(10) default null,
	
	primary key(id_curso)

);



CREATE  TABLE Profesor_Curso(
	
	id_profesor int not null,
	
	id_curso int not null,
	
	primary key(id_profesor)

);



CREATE  TABLE Profesor(
	id_profesor int not null,
	
	
	nombre varchar(50) default null,
	
	apellido varchar(50) default null,
	
	edad int default null,
	
	cedula numeric default null,
	
	genero int default null,
	
	cargo varchar(10) default null,
	
	email varchar(50) default null,
	
	primary key(id_profesor)

);



CREATE  TABLE Profesor_Estudiante(
	
	id_profesor int not null,
	
	id_estudiante int not null,
	
	primary key(id_profesor)

);



CREATE  TABLE Estudiante(		
	
	id_estudiante int not null,
	
	nombre varchar(50) default null,
	
	apellido varchar(50) default null,
	
	edad int default null,
	
	cedula numeric default null,
	
	genero int default null,

	id_telefono int not null,
	id_direccion int not null,
	id_calendario int not null,
	id_actividad int not null,
	id_nota int not null,	
	email varchar(50) default null,
	
	primary key(id_estudiante)

);



CREATE  TABLE Direccion(
	
	id_direccion int not null,
	
	direccion_principal varchar(100) default null,
	
	direccion_secundaria varchar(100) default null,
	
	direccion_transversal varchar(100) default null,
	
	primary key(id_direccion)

);



CREATE  TABLE Telefono(			
	
	id_telefono int not null,
	
	codigo_pais varchar(10) default null,
	
	codigo_ciudad varchar(10) default null,
	
	numero_telefono numeric default null,
	
	tipo_telefono varchar(50) default null,
	
	primary key(id_telefono)	

);



CREATE  TABLE Profesor_Materia(
	
	id_profesor int not null,
	
	id_materia int not null,
	
	primary key(id_profesor)

);



CREATE  TABLE Estudiante_Materia(
	
	id_estudiante int not null,
	
	id_materia int not null,
	
	primary key(id_estudiante)

);


CREATE  TABLE Materia(
	
	id_materia int not null,
	
	nombre varchar(50) default null,
	
	descripcion varchar(50) default null,
	
	estado varchar(10) default null,
	
	primary key(id_materia)

);



CREATE  TABLE Calendario(
	
	id_calendario int not null,
	
	nombre varchar(50) default null,
	
	dia date default null,
	
	mes date default null,

	hora date default null,
	
	anio date default null,
	
	primary key(id_calendario)

);



CREATE  TABLE Actividad(
	
	id_actividad int not null,
	
	nombre varchar(50) default null,
	
	descripcion varchar(50) default null,
	
	estado varchar(10) default null,
	
	primary key(id_actividad)

);



CREATE  TABLE Nota(
	
	id_nota int not null,
	
	anio date default null,
	
	nota1 int default null,
	
	nota2 int default null,
	
	nota3 int default null,
	
	nota4 int default null,
	
	promedio int default null,
	
	recuperacion int default null,
	
	primary key(id_nota)

);




Alter table Profesor_Curso add constraint fk_id_curso foreign key(id_curso) references Curso(id_curso) on delete cascade on update cascade;

Alter table Profesor_Curso add constraint fk_id_profesor foreign key(id_profesor) references Profesor(id_profesor) on delete cascade on update cascade;

Alter table Profesor_Estudiante add constraint fk_id_profesor foreign key(id_profesor) references Profesor(id_profesor) on delete cascade on update cascade;

Alter table Profesor_Estudiante add constraint fk_id_estudiante foreign key(id_estudiante) references Estudiante(id_estudiante) on delete cascade on update cascade;

Alter table Profesor_Materia add constraint fk_id_materia foreign key(id_materia) references Materia(id_materia) on delete cascade on update cascade;

Alter table Profesor_Materia add constraint fk_id_profesor foreign key(id_profesor) references Profesor(id_profesor) on delete cascade on update cascade;

ALTER TABLE profesor ALTER COLUMN id_profesor SET DEFAULT nextval('profesor_id_profesor_seq'::regclass);

Alter table Estudiante_Materia add constraint fk_id_materia foreign key(id_materia) references Materia(id_materia) on delete cascade on update cascade;

Alter table Estudiante_Materia add constraint fk_id_estudiante foreign key(id_estudiante) references Estudiante(id_estudiante) on delete cascade on update cascade;

Alter table Estudiante add constraint fk_id_direccion foreign key(id_direccion) references Direccion(id_direccion) on delete cascade on update cascade;

Alter table Estudiante add constraint fk_id_telefono foreign key(id_telefono) references Telefono(id_telefono) on delete cascade on update cascade;

Alter table Estudiante add constraint fk_id_calendario foreign key(id_calendario) references Calendario(id_calendario) on delete cascade on update cascade;

Alter table Estudiante add constraint fk_id_actividad foreign key(id_actividad) references Actividad(id_actividad) on delete cascade on update cascade;

Alter table Estudiante add constraint fk_id_nota foreign key(id_nota) references Nota(id_nota) on delete cascade on update cascade;




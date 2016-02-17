--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- Data for Name: actividad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY actividad (id_actividad, nombre, descripcion, estado) FROM stdin;
\.


--
-- Data for Name: calendario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY calendario (id_calendario, nombre, dia, mes, hora, anio) FROM stdin;
\.


--
-- Data for Name: curso; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY curso (id_curso, nombre, nombre_curso, descripcion, estado) FROM stdin;
\.


--
-- Data for Name: direccion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY direccion (id_direccion, direccion_principal, direccion_secundaria, direccion_transversal) FROM stdin;
\.


--
-- Data for Name: estudiante; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY estudiante (id_estudiante, nombre, apellido, edad, cedula, genero, email) FROM stdin;
\.


--
-- Data for Name: materia; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY materia (id_materia, nombre, descripcion, estado) FROM stdin;
\.


--
-- Data for Name: nota; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY nota (id_nota, anio, nota1, nota2, nota3, nota4, promedio, recuperacion) FROM stdin;
\.


--
-- Data for Name: profesor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY profesor (id_profesor, nombre, apellido, edad, cedula, genero, cargo, email) FROM stdin;
\.


--
-- Data for Name: profesor_curso; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY profesor_curso (id_profesor, id_curso) FROM stdin;
\.


--
-- Data for Name: profesor_estudiante; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY profesor_estudiante (id_profesor, id_estudiante) FROM stdin;
\.


--
-- Data for Name: profesor_materia; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY profesor_materia (id_profesor, id_materia) FROM stdin;
\.


--
-- Data for Name: telefono; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY telefono (id_telefono, codigo_pais, codigo_ciudad, numero_telefono, tipo_telefono) FROM stdin;
\.


--
-- PostgreSQL database dump complete
--


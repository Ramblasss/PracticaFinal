Descripción del problema


El sistema de gestión académica de un instituto debe gestionar información relacionada con alumnos, profesores, asignaturas y matrículas. Los alumnos pueden estar matriculados en múltiples asignaturas, y cada asignatura está impartida por un único profesor, lo que crea una relación 1:N entre profesores y asignaturas. Además, existe una relación N:N entre alumnos y asignaturas, gestionada a través de una tabla pivote alumno_asignatura. Cada matrícula incluye información del alumno, asignatura y año académico. Este sistema debe ser eficiente en la consulta de matrículas, notas, alumnos, profesores y asignaturas, manteniendo la integridad de las relaciones entre las entidades.

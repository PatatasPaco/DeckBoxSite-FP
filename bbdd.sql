CREATE TABLE CARTAS (
    id_c INT PRIMARY KEY NOT NULL, -- Identificador único de la carta (Clave Primaria)
    nombre_c VARCHAR(100) NOT NULL, -- Nombre de la carta
    coste_c INT NOT NULL, -- Coste de maná o recurso
    might_c INT, -- Valor de ataque o poder (Puede ser NULL para hechizos)
    texto_c TEXT, -- Texto de la habilidad o efecto
    tipo_c VARCHAR(50) NOT NULL -- El tipo de la carta (Ej: Unidad, Hechizo)
);

CREATE TABLE IF NOT EXISTS usuarios (
    id SERIAL PRIMARY KEY,
    usuario VARCHAR(50) UNIQUE NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    rango VARCHAR(20) DEFAULT 'usuario',
    correo VARCHAR(100) UNIQUE NOT NULL
);


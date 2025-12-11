CREATE TABLE CARTAS (
    id_c INT PRIMARY KEY NOT NULL, -- Identificador único de la carta (Clave Primaria)
    nombre_c VARCHAR(100) NOT NULL, -- Nombre de la carta
    coste_c INT NOT NULL, -- Coste de maná o recurso
    might_c INT, -- Valor de ataque o poder (Puede ser NULL para hechizos)
    texto_c TEXT, -- Texto de la habilidad o efecto
    tipo_c VARCHAR(50) NOT NULL -- El tipo de la carta (Ej: Unidad, Hechizo)
);
-- postgresql://jose:BQ2J1clslvf3YJ56OybucPEqVoYR4BiN@dpg-d4tg14shg0os73ctrbq0-a.frankfurt-postgres.render.com/riftbound
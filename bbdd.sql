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

CREATE TABLE IF NOT EXISTS CARDS (
    id VARCHAR(50) PRIMARY KEY, -- id del JSON
    name VARCHAR(255),
    type VARCHAR(100),
    rarity VARCHAR(50),
    domain TEXT, -- Array JSON
    rune_cost INT,
    power_cost INT,
    might INT,
    description TEXT,
    flavor_text TEXT,
    set_code VARCHAR(20),
    card_number VARCHAR(20),
    artist VARCHAR(255),
    image_url TEXT,
    tags TEXT, -- Array JSON
    created_at TIMESTAMP,
    market_price_usd DECIMAL(10, 2),
    market_price_foil_usd DECIMAL(10, 2),
    price_last_updated TIMESTAMP,
    justtcg_id VARCHAR(255),
    is_standard_only BOOLEAN,
    card_back_id VARCHAR(50),
    hide_from_compendium BOOLEAN,
    is_promo BOOLEAN,
    is_always_premium BOOLEAN,
    has_proving_grounds_variant BOOLEAN,
    copyright VARCHAR(100)
);


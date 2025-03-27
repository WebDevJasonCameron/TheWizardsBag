-- Drop Junction Tables First
DROP TABLE IF EXISTS item_types;
DROP TABLE IF EXISTS item_tags;
DROP TABLE IF EXISTS item_notes;
DROP TABLE IF EXISTS item_conditions;
DROP TABLE IF EXISTS item_sources;
DROP TABLE IF EXISTS item_spells;
DROP TABLE IF EXISTS item_effects;
DROP TABLE IF EXISTS spell_tags;
DROP TABLE IF EXISTS spell_conditions;
DROP TABLE IF EXISTS spell_damagetypes;
DROP TABLE IF EXISTS spell_classes;

-- Drop Main Tables Second
DROP TABLE IF EXISTS items;
DROP TABLE IF EXISTS types;
DROP TABLE IF EXISTS tags;
DROP TABLE IF EXISTS notes;
DROP TABLE IF EXISTS conditions;
DROP TABLE IF EXISTS damagetypes;
DROP TABLE IF EXISTS spells;
DROP TABLE IF EXISTS effects;
DROP TABLE IF EXISTS rpg_classes;
DROP TABLE IF EXISTS sources;

-- Drop DB Last
DROP DATABASE IF EXISTS the_wizards_db;
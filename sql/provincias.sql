DROP DATABASE IF EXISTS provincias;
CREATE DATABASE IF NOT EXISTS provincias;
USE provincias;

CREATE TABLE `provincias` (
  `autonomia` varchar(255) default NULL,
  `provincia` varchar(255) default NULL,
  `poblacion` int(11) default NULL,
  `superficie` int(11) default NULL
);

INSERT INTO `provincias` VALUES ('Galicia', 'La Coruña', 1122799, 7950);
INSERT INTO `provincias` VALUES ('Galicia', 'Lugo', 336527, 9856);
INSERT INTO `provincias` VALUES ('Galicia', 'Orense', 314853, 7273);
INSERT INTO `provincias` VALUES ('Galicia', 'Pontevedra', 944346, 4494);
INSERT INTO `provincias` VALUES ('Principado de Asturias', 'Asturias', 1042608, 10603);
INSERT INTO `provincias` VALUES ('Cantabria', 'Cantabria', 582206, 5321);
INSERT INTO `provincias` VALUES ('País Vasco', 'Vizcaya', 1147576, 2217);
INSERT INTO `provincias` VALUES ('País Vasco', 'Guipúzcoa', 717832, 1997);
INSERT INTO `provincias` VALUES ('País Vasco', 'Álava', 324126, 3037);
INSERT INTO `provincias` VALUES ('La Rioja', 'La Rioja', 315794, 5045);
INSERT INTO `provincias` VALUES ('Comunidad Foral de Navarra', 'Navarra', 640647, 10391);
INSERT INTO `provincias` VALUES ('Aragón', 'Huesca', 221079, 15636);
INSERT INTO `provincias` VALUES ('Aragón', 'Zaragoza', 950507, 17274);
INSERT INTO `provincias` VALUES ('Aragón', 'Teruel', 136977, 14809);
INSERT INTO `provincias` VALUES ('Cataluña', 'Barcelona', 5542680, 7733);
INSERT INTO `provincias` VALUES ('Cataluña', 'Tarragona', 792299, 6302);
INSERT INTO `provincias` VALUES ('Cataluña', 'Lérida', 434041, 12172);
INSERT INTO `provincias` VALUES ('Cataluña', 'Gerona', 753576, 5909);
INSERT INTO `provincias` VALUES ('Comunidad Valenciana', 'Castellón', 579245, 6636);
INSERT INTO `provincias` VALUES ('Comunidad Valenciana', 'Valencia', 2544264, 10807);
INSERT INTO `provincias` VALUES ('Comunidad Valenciana', 'Alicante', 1836459, 5817);
INSERT INTO `provincias` VALUES ('Región de Murcia', 'Murcia', 1464847, 11313);
INSERT INTO `provincias` VALUES ('Andalucía', 'Huelva', 519596, 10127);
INSERT INTO `provincias` VALUES ('Andalucía', 'Sevilla', 1939775, 14036);
INSERT INTO `provincias` VALUES ('Andalucía', 'Córdoba', 791610, 13771);
INSERT INTO `provincias` VALUES ('Andalucía', 'Jaén', 648250, 13496);
INSERT INTO `provincias` VALUES ('Andalucía', 'Almería', 704297, 8775);
INSERT INTO `provincias` VALUES ('Andalucía', 'Granada', 915392, 12646);
INSERT INTO `provincias` VALUES ('Andalucía', 'Málaga', 1629298, 7306);
INSERT INTO `provincias` VALUES ('Andalucía', 'Cádiz', 1239889, 7440);
INSERT INTO `provincias` VALUES ('Extremadura', 'Cáceres', 403665, 19868);
INSERT INTO `provincias` VALUES ('Extremadura', 'Badajoz', 684113, 21766);
INSERT INTO `provincias` VALUES ('Comunidad de Madrid', 'Madrid', 6466996, 8027);
INSERT INTO `provincias` VALUES ('Castilla y León', 'León', 473604, 15580);
INSERT INTO `provincias` VALUES ('Castilla y León', 'Zamora', 180406, 10561);
INSERT INTO `provincias` VALUES ('Castilla y León', 'Salamanca', 335985, 12349);
INSERT INTO `provincias` VALUES ('Castilla y León', 'Palencia', 164644, 8052);
INSERT INTO `provincias` VALUES ('Castilla y León', 'Burgos', 360995, 14022);
INSERT INTO `provincias` VALUES ('Castilla y León', 'Valladolid', 523679, 8110);
INSERT INTO `provincias` VALUES ('Castilla y León', 'Ávila', 162514, 8050);
INSERT INTO `provincias` VALUES ('Castilla y León', 'Segovia', 155652, 6920);
INSERT INTO `provincias` VALUES ('Castilla y León', 'Soria', 90040, 10306);
INSERT INTO `provincias` VALUES ('Castilla-La Mancha', 'Toledo', 688672, 15369);
INSERT INTO `provincias` VALUES ('Castilla-La Mancha', 'Ciudad Real', 506888, 19813);
INSERT INTO `provincias` VALUES ('Castilla-La Mancha', 'Albacete', 392118, 14926);
INSERT INTO `provincias` VALUES ('Castilla-La Mancha', 'Cuenca', 201071, 17140);
INSERT INTO `provincias` VALUES ('Castilla-La Mancha', 'Guadalajara', 252882, 12214);
INSERT INTO `provincias` VALUES ('Canarias', 'Santa Cruz de Tenerife', 1004124, 3381);
INSERT INTO `provincias` VALUES ('Canarias', 'Las Palmas', 1097800, 4065);
INSERT INTO `provincias` VALUES ('Islas Baleares', 'Baleares', 1107220, 4991);
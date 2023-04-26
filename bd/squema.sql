-- SQLBook: Code
CREATE DATABASE IF NOT EXISTS `ssc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ssc`;
/* //!creacion de tablas  */
CREATE TABLE `t_cat_roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(245) NOT NULL,
  `descripcion` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `t_cat_poblado` (
  `id_poblado` int(11) NOT NULL,
  `poblado` varchar(245) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/* //? estas no se an ejecutado  */
CREATE TABLE `t_cat_transporte_victima` (
  `id_transporte_victima` int(11) NOT NULL,
  `transporte_victima` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `t_cat_transporte_agresor` (
  `id_transporte_agresor` int(11) NOT NULL,
  `transporte_agresor` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `t_cat_lugar_reporte` (
  `id_lugar_reporte` int(11) NOT NULL,
  `lugar_reporte` varchar(245) NOT NULL,
  'descripcion' varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*  //?ya se ejecuto esta consulta */
CREATE TABLE `t_persona` (
  `id_persona` int(11) NOT NULL,
  `paterno` varchar(245) NOT NULL,
  `materno` varchar(245) DEFAULT NULL,
  `nombre` varchar(245) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fechaInsert` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `usuario` varchar(245) NOT NULL,
  `password` varchar(245) NOT NULL,
  `ubicacion` text,
  `fecha_insert` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/* //! insertar datos predefinidos para los catalogos */
INSERT INTO `t_cat_roles` (`id_rol`, `nombre`, `descripcion`) VALUES
(1, 'cliente', 'Es un cliente'),
(2, 'admin', 'Es Admin');

INSERT INTO `t_cat_poblado` (`id_poblado`, `poblado`) VALUES
(1, 'San Agustín' ),
(2, 'San Antonio Tecómitl'),
(3, 'San Bartolomé' ), 
(4, 'San Francisco'), 
(5, 'San Jerónimo' ),
(6, 'San Juan' ),
(7, 'San Lorenzo' ),
(8, 'San Pablo'),  
(9, 'San Pedro' ), 
(10, 'San Salvador'),
(11, 'Santa Ana' ),
(12, 'Villa Milpa Alta');
INSERT INTO `t_cat_transporte_victima` (`id_transporte_victima`, `transporte_victima`) VALUES
(1, 'peaton'),
(2, 'automovil'),
(3, 'motocicleta'),
(4, 'transporte publico');
INSERT INTO `t_cat_transporte_agresor` (`id_transporte_agresor`, `transporte_agresor`) VALUES
(1, 'peaton'),
(2, 'automovil'),
(3, 'motocicleta');
INSERT INTO `t_cat_lugar_reporte` (`id_lugar_reporte`, `lugar_reporte`, `descripcion`) VALUES
(1, 'propiedad privada','terrenos, casa habitacion  propietario'),
(2, 'automovil',''),
(3, 'motocicleta','');
ALTER TABLE `t_cat_roles`
  ADD PRIMARY KEY (`id_rol`);
ALTER TABLE `t_cat_poblado`
  ADD PRIMARY KEY (`id_poblado`);
/* //?esto tampoco se ha ejecutado */
  ALTER TABLE `t_cat_transporte_victima`
  ADD PRIMARY KEY (`id_trasnporte_victima`);
  ALTER TABLE `t_cat_transporte_agresor`
  ADD PRIMARY KEY (`id_transporte_agresor`);
  /* //?aca termina lo que no se ha ejecutado */
ALTER TABLE `t_persona`
  ADD PRIMARY KEY (`id_persona`);
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fkPersona_idx` (`id_persona`),
  ADD KEY `fkRoles_idx` (`id_rol`);
ALTER TABLE `t_cat_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `t_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `t_usuarios`
  ADD CONSTRAINT `fkPersona` FOREIGN KEY (`id_persona`) REFERENCES `t_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkRoles` FOREIGN KEY (`id_rol`) REFERENCES `t_cat_roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;


/* //!Join formato para unir tablas */
/* SELECT
    usuarios.id_usuario as idUsuario,
    usuarios.usuario as nombreUsuario,
    roles.nombre as rol,
    usuarios.id_rol as idRol,
    usuarios.id_persona as idPersona,
    persona.nombre as nombrePersona,
    persona.paterno as paterno,
    persona.materno as materno,
    persona.telefono as telefono,
    usuarios.ubicacion as ubicacion
FROM
 t_usuarios as usuarios
    INNER JOIN
t_cat_roles as roles on usuarios.id_rol = roles.id_rol
    INNER JOIN
t_persona as persona on usuarios.id_persona = persona.id_persona */

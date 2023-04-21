CREATE DATABASE IF NOT EXISTS `ssc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ssc`;
CREATE TABLE `t_cat_roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(245) NOT NULL,
  `descripcion` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `t_cat_roles` (`id_rol`, `nombre`, `descripcion`) VALUES
(1, 'cliente', 'Es un cliente'),
(2, 'admin', 'Es Admin');
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
ALTER TABLE `t_cat_roles`
  ADD PRIMARY KEY (`id_rol`);
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

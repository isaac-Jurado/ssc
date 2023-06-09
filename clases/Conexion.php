<?php
    class Conexion{
        public function conectar(){
            $servidor= "localhost";
            $usuario= "root";
            $password= "";
            $db= "ssc";
            $conexion= mysqli_connect($servidor,$usuario,$password,$db);
            return $conexion;
        }
    }
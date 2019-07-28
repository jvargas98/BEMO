<?php

    public class asistente{
        private $mysql;
        public function constructor($conexion){
            $this->mysql=$conexion;
        }
        
        public function allFacultades(){
            
            $sql = 'SELECT * FROM facultades';
            $this->mysql->query($sql);
            while($row = $this->mysql->fetch_array()){
                $data [] = $row;
            }
            return $data;
        }
        public function allCarreras(){
            $sql ='SELECT * FROM carreras';
            $this->mysql->query($sql);
            while($row = $this->mysql->fetch_array()){
                $data[] = $row;
            }
            return $data;
        }
        //valores que tendra el array
        //0.-costo,1.-lugares,2.-inicio,3.-fin,4.-nombre de la carrera que desea consultar
         public function costoCarrera($carrera){
            $sql = "SELECT costo FROM carreras WHERE ".$carrera."";
            $data = $this->mysql->query($sql);
            
            return $data; 
         }
         public function lugaresCarrera($carrera){
            $sql = "SELECT lugares_disponibles FROM carreras WHERE ".$carrera."";
            $data = $this->mysql->query($sql);

            return $data;
         }
         public function inicioCarrera($carrera){
             $sql = "SELECT fecha_inicio FROM carreras WHERE ".$carrera."";
             $data = $this->mysql->query($sql);
         }
         public function ubicacionFacultad($facultad){
             $sql = "SELECT ubicacion FROM facultades WHERE ".$facultad."";
             $data = $this->mysql->query($sql);

             return $data;
         }

    }

?>
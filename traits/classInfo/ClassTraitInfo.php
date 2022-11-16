<?php
namespace classInfo;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

trait ClassTraitInfo {

    public function __toString(): string {
        
        $cadena = "<div style='color:blue;'>------------------------<br/>";
        $cadena = $cadena . "Información de la clase:  " . get_class($this) . "<br/>";
        $cadena = $cadena . "------------------------<br/>";
        $array_methods = get_class_methods($this);     
        $cadena = $cadena ."Métodos: " . implode(", ", $array_methods);
        $cadena = $cadena ."</div>";
        
        return $cadena;
    }

}

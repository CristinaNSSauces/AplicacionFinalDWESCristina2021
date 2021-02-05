<?php 

/**
 * Class Calculadora
 *
 * Clase cuyos metodos permiten realizar diferentes operaciones con numeros
 * 
 * @author Cristina Nuñez
 * @since 1.0
 * @copyright 01-02-2021
 * @version 1.0
 */
class Calculadora{
        
    /**
     * Metodo Sumar()
     * 
     * Metodo para sumar dos numeros
     *
     * @param  int|float $numero1 primer numero
     * @param  int|float $numero2 segundo numero
     * @return int|float resultado obtenido al sumar dos numeros
     */
    public static function Sumar($numero1, $numero2){
        return $numero1 + $numero2;
    }
    
    /**
     * Metodo Restar()
     * 
     * Metodo para restar dos numeros
     *
     * @param  int|float $numero1 primer numero
     * @param  int|float $numero2 segundo numero
     * @return int|float resultado obtenido al restar dos numeros
     */
    public static function Restar($numero1, $numero2){
        return $numero1 - $numero2;
    }
    
    /**
     * Metodo Multiplicar()
     * 
     * Metodo para multiplicar dos numeros
     *
     * @param  int|float $numero1 primer numero
     * @param  int|float $numero2 segundo numero
     * @return int|float resultado obtenido al multiplicar dos numeros
     */
    public static function Multiplicar($numero1, $numero2){
        return $numero1 * $numero2;
    }
    
    /**
     * Metodo Dividir()
     * 
     * Metodo para dividir dos numeros
     *
     * @param  int|float $numero1 primer numero
     * @param  int|float $numero2 segundo numero
     * @return int|float resultado obtenido al dividir dos numeros
     */
    public static function Dividir($numero1, $numero2){
        return $numero1 / $numero2;
    }
}
?>
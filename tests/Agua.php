<?php

//==================================================
// Clase para Agua
//==================================================
class Agua
{
    //==================================================
    // GET
    //==================================================
    
    /**
     * Método que te indica el estado del agua
     * @param {float} $temperatura - Temperatura
     * @return {string} - 'Sólido', 'Líquido' o 'Gaseoso'. Devuelve NULL si tiene un argumento inválido.
     */
    function getEstado(float $temperatura): string
    {
        if($temperatura <= 0 )return'Sólido';
        if(0< $temperatura && $temperatura < 100) return 'Líquido';
    }
}
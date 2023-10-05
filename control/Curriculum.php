<?php
class Curriculum
{
    
    // Atributos

    private $nombre, $apellido, $edad, $telefono, $mail, $estudios, $residencia, $expLaboral, $conocimientos, $sobreMi;

    // Métodos 
    
    /**
     * Recibe los valores iniciales para los atributos
     */
    public function __construct($nombre, $apellido, $edad, $telefono, $mail, $estudios, $residencia, $expLaboral, $conocimientos, $sobreMi)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
        $this -> telefono = $telefono;
        $this -> mail = $mail;
        $this -> estudios = $estudios;
        $this -> residencia = $residencia;
        $this -> expLaboral = $expLaboral;
        $this -> conocimientos = $conocimientos;
        $this -> sobreMi = $sobreMi;
    }

    /**
     * Descargar PDF
     */
    public function descargarPdf ()
    {

    }

    /**
     * Mostrar PDF
     */
    public function mostrarPdf ()
    {

    }

    // Métodos get

    /**
     * Get de nombre
     * @return string
     */
    public function getNombre ()
    {
        return $this -> nombre;
    }

    /**
     * Get de apellido
     * @return string
     */
    public function getApellido ()
    {
        return $this -> apellido;
    }

    /**
     * Get de edad
     * @return int
     */
    public function getEdad ()
    {
        return $this -> edad;
    }

    /**
     * Get de telefono
     * @return int
     */
    public function getTelefono ()
    {
        return $this -> telefono;
    }
    
    /**
     * Get de mail
     * @return string
     */
    public function getMail ()
    {
        return $this -> mail;
    }

    /**
     * Get de estudios
     * @return string
     */
    public function getEstudios ()
    {
        return $this -> estudios;
    }

    /**
     * Get de residencia
     * @return string
     */
    public function getResidencia ()
    {
        return $this -> residencia;
    }
    
    /**
     * Get de expLaboral
     * @return string
     */
    public function getExpLaboral ()
    {
        return $this -> expLaboral;
    }

    /**
     * Get de conocimientos
     * @return string
     */
    public function getConocimientos ()
    {
        return $this -> conocimientos;
    }

    /**
     * Get de sobreMi
     * @return string
     */
    public function getSobreMi ()
    {
        return $this -> sobreMi;
    }

    // Métodos set

    /** 
     * Set de nombre
     * @param string $nombreNuevo
     */
    public function setNombre ($nombreNuevo)
    {
        $this -> nombre = $nombreNuevo;
    }

    /**
     * Set de apellido
     * @param string $apellidoNuevo
     */
    public function setApellido ($apellidoNuevo)
    {
        $this -> apellido = $apellidoNuevo;
    }

    /**
     * Set de edad
     * @param int $edadNueva
     */
    public function setEdad ($edadNueva)
    {
        $this -> edad = $edadNueva;
    }

    /**
     * Set de telefono
     * @param int $telefonoNuevo
     */
    public function setTelefono ($telefonoNuevo)
    {
        $this -> telefono = $telefonoNuevo;
    }

    /** 
     * Set de mail
     * @param string $mailNuevo
     */
    public function setMail ($mailNuevo)
    {
        $this -> mail = $mailNuevo;
    }

    /** 
     * Set de estudios
     * @param string $estudiosNuevo
     */
    public function setEstudios ($estudiosNuevo)
    {
        $this -> estudios = $estudiosNuevo;
    }

    /** 
     * Set de residencia
     * @param string $residenciaNueva
     */
    public function setResidencia ($residenciaNueva)
    {
        $this -> residencia = $residenciaNueva;
    }

    /** 
     * Set de expLaboral
     * @param string $expLaboralNueva
     */
    public function setExpLaboral ($expLaboralNueva)
    {
        $this -> expLaboral = $expLaboralNueva;
    }

    /** 
     * Set de conocimientos
     * @param string $conocimientosNuevos
     */
    public function setConocimientos ($conocimientosNuevos)
    {
        $this -> conocimientos = $conocimientosNuevos;
    }

    /** 
     * Set de sobreMi
     * @param string $sobreMiNuevo
     */
    public function setSobreMi ($sobreMiNuevo)
    {
        $this -> sobreMi = $sobreMiNuevo;
    }

    // Método __toString

    public function __toString()
    {
    }
}
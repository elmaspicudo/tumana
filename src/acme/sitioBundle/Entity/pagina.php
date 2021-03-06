<?php

namespace acme\sitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pagina
 */
class pagina
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $contenido;

    /**
     * @var \acme\sitioBundle\Entity\template
     */
    private $template;
    
    /**
     * @var \acme\sitioBundle\Entity\sitio
     */
    private $sitio;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return pagina
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return pagina
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    
        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set template
     *
     * @param \acme\sitioBundle\Entity\template $template
     * @return pagina
     */
    public function setTemplate(\acme\sitioBundle\Entity\template $template = null)
    {
        $this->template = $template;
    
        return $this;
    }

    /**
     * Get template
     *
     * @return \acme\sitioBundle\Entity\template 
     */
    public function getTemplate()
    {
        return $this->template;
    }
    /**
     * Set sitio
     *
     * @param \acme\sitioBundle\Entity\sitio $sitio
     * @return pagina
     */
    public function setSitio(\acme\sitioBundle\Entity\sitio $sitio = null)
    {
        $this->sitio = $sitio;
    
        return $this;
    }

    /**
     * Get sitio
     *
     * @return \acme\sitioBundle\Entity\sitio 
     */
    public function getSitio()
    {
        return $this->sitio;
    }
}
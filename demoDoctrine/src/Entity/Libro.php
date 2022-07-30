<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="libros2")
 */
class Libro
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(
     *     type="string",
     *     nullable=false,
     *     unique=true
     *     )
     */
    protected  $titulo;

    /**
     * @var int
     * @ORM\Column(
     *     type="integer",
     *     nullable=true
     *     )
     */
    protected $cantidad;



}
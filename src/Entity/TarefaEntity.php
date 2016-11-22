<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="ap_tarefa")
 */
Class TarefaEntity
{
	/** 
	* @Id
	* @Column(type="integer", name="_id") 
    * @GeneratedValue
	*/
    private $id;

    /** @Column(type="string", name="st_titulo") */
    private $titulo;

    /** @Column(type="string", name="st_descricao") */
    private $descricao;

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of titulo.
     *
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Sets the value of titulo.
     *
     * @param mixed $titulo the titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Gets the value of descricao.
     *
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Sets the value of descricao.
     *
     * @param mixed $descricao the descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

}
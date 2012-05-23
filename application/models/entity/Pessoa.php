<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="pessoa")
 */
class Pessoa
{
    /**
     * @Id
     * @generatedValue(strategy="IDENTITY")
     * @Column(name="id_pessoa", type="string")
     */
    protected $idPessoa = null;

    /**
     * @var     string
     * @Column(name="nome", type="string")
     */
    protected $nome = null;

    /**
     * @ManyToOne(
     *      targetEntity="Entity\Cp\Compra"
     * )
     * @JoinColumn(
     *      name="id_pessoa", 
     *      referencedColumnName="id_pessoa"
     * )
     */
    protected $compra;
    
    /**
     * @ManyToOne(
     *      targetEntity="Entity\Ve\Vendas"
     * )
     * @JoinColumn(
     *      name="id_pessoa", 
     *      referencedColumnName="id_pessoa"
     * )
     */
    protected $vendas;
    
    /**
     * Get idPessoa
     *
     * @return string 
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set compra
     *
     * @param Entity\Cp\Compra $compra
     * @return Pessoa
     */
    public function setCompra(\Entity\Cp\Compra $compra = null)
    {
        $this->compra = $compra;
        return $this;
    }

    /**
     * Get compra
     *
     * @return Entity\Cp\Compra 
     */
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Set vendas
     *
     * @param Entity\Ve\Vendas $vendas
     * @return Pessoa
     */
    public function setVendas(\Entity\Ve\Vendas $vendas = null)
    {
        $this->vendas = $vendas;
        return $this;
    }

    /**
     * Get vendas
     *
     * @return Entity\Ve\Vendas 
     */
    public function getVendas()
    {
        return $this->vendas;
    }
}
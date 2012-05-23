<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="empresa")
 */
class Empresa
{
    /**
     * @Id
     * @generatedValue(strategy="IDENTITY")
     * @Column(name="id_empresa", type="integer")
     */
    protected $idEmpresa = null;
	
}
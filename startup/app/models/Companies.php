<?php

class Companies extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=10, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=70, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $telephone;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=false)
     */
    public $address;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=false)
     */
    public $city;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("invo");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'companies';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Companies[]|Companies
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Companies
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

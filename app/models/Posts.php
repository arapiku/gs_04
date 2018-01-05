<?php

class Posts extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $title;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $host;

    /**
     *
     * @var string
     * @Column(type="string", length=1000, nullable=false)
     */
    public $description;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $guest_num;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $bedroom_num;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $bed_num;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $bathroom_num;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $latitude;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $longitude;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("gs04");
        $this->setSource("posts");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'posts';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Posts[]|Posts|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Posts|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * @param mixed $parameters
     */
    public static function findByTitle($parameters = null)
    {
        $criteria = Posts::query();
        $criteria->where('title LIKE :title:', ['title' => '%' . $parameters . '%']);
        $posts = $criteria->execute();

        return $posts;
    }

}

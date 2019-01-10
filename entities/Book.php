<?php

declare(strict_types=1);
class Book
{
    protected $id;
    protected $author;
    protected $title;
    protected $date;
    protected $description;
    protected $picture;
    protected $avaible = 1;

    /**
     * Constructor for Class Book.
     *
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    /**
     * Hydrate constructor.
     *
     * @param array $data
     */
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Getters for id.
     *
     * @return self
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Getters for Author.
     *
     * @return self
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Getters for Title.
     *
     * @return self
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Getters for Date.
     *
     * @return self
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Getters for Description.
     *
     * @return self
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Getters for Avaible.
     *
     * @return self
     */
    public function getAvaible()
    {
        return $this->avaible;
    }

    /**
     * Getters for Picture.
     *
     * @return self
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Setters for Id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $id = (int) $id;

        if ($id > 0 and is_int($id)) {
            $this->id = $id;
        }

        return $this;
    }

    /**
     * Setters for author.
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author)
    {
        $author = (string) $author;

        if (is_string($author)) {
            $this->author = $author;
        }

        return $this;
    }

    /**
     * Setters for title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title)
    {
        $title = (string) $title;

        if (is_string($title)) {
            $this->title = $title;
        }

        return $this;
    }

    /**
     * Setters for description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description)
    {
        $description = (string) $description;
        if (is_string($description)) {
            $this->description = $description;
        }

        return $this;
    }

    /**
     * Setters for date.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date)
    {
        $date = (string) $date;
        if (is_string($date)) {
            $this->date = $date;
        }

        return $this;
    }

    /**
     * Setters for avaible.
     *
     * @param  $avaible
     *
     * @return self
     */
    public function setAvaible($avaible)
    {
        $avaible = (int) $avaible;
        if (is_int($avaible) and $avaible >= 0 and $avaible <= 1) {
            $this->avaible = $avaible;
        }

        return $this;
    }

    public function setPicture($picture)
    {
        $picture = (string) $picture;

        if (is_string($picture)) {
            $this->picture = $picture;
        }

        return $this;
    }
}

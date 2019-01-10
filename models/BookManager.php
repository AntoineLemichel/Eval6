<?php

declare(strict_types=1);

class BookManager
{
    private $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function getDb()
    {
        return $this->_db;
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;

        return $this;
    }

    public function getBooks()
    {
        $arrayOfBooks = [];

        $queryBooks = $this->getDb()->query('SELECT * FROM books');
        $dataBooks = $queryBooks->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dataBooks as $dataBook) {
            $arrayOfBooks[] = new Book($dataBook);
        }

        return $arrayOfBooks;
    }
}

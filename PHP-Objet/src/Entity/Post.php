<?php

namespace Iorga\Entity;

class Post
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $title;

    /** @var string */
    protected $description;

    /** @var User */
    protected $author;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Post
     */
    public function setId(int $id): Post
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title): Post
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Post
     */
    public function setDescription(string $description): Post
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     * @return Post
     */
    public function setAuthor(User $author): Post
    {
        $this->author = $author;
        return $this;
    }


}
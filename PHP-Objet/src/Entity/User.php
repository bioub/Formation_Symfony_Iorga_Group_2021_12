<?php

namespace Iorga\Entity;

class User
{
    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;

    /** @var Post[] */
    protected $posts = [];

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName(string $lastName): User
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return Post[]
     */
    public function getPosts(): array
    {
        return $this->posts;
    }

    /**
     * @param Post $post
     * @return User
     */
    public function addPost(Post $post): User
    {
        $this->posts[] = $post;
        return $this;
    }



}
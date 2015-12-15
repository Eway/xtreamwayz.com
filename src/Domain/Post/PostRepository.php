<?php

namespace Domain\Post;

interface PostRepository
{
    /**
     * @param $id
     *
     * @return Post|null
     */
    public function find($id);

    /**
     * @return array|Post[]
     */
    public function findAll();
}

<?php

namespace Vdu\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris makes onions cry.',
        'Chuck Norris knows Victoria\'s secret.',
        'Chuck Norris counted to infinity. Twice.'
    ];

    /**
     * JokeFactory constructor.
     * @param array $jokes
     */
    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }


}
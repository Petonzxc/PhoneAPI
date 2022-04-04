<?php

class Comment
{
    private string $text;
    private string $author;
    private int $rating;

    public function __construct(string $text, string $author = 'anonym', int $rating = 0)
    {
        $this->text = $text;
        $this->author = $author;
        $this->rating = $rating;
    }

    public function ChangeRating(int $delta): void
    {
        $this->rating += $delta;
    }


    public function printComment(): void
    {
        print_r("Author: {$this->author}\n Rating: {$this->rating}\n {$this->text}\n");
    }

}
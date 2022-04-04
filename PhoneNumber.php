<?php

require_once 'PhoneFormatException.php';
require_once 'Comment.php';

class PhoneNumber
{
    private string $number;
    private array $comments;

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function __construct($number, $comments = array())
    {
        $this->number = $number;
        $this->comments = $comments;
    }

    function isInternationalPhoneNumber(): bool
    {
        return $this->number[0] === "+";
    }

    function getCountryByPhoneNumber(): string
    {
        if (str_starts_with($this->number, "+7")) {
            return "RU";
        }
        if (str_starts_with($this->number, "+86")) {
            return "CH";
        }
        if (str_starts_with($this->number, "+52") || str_starts_with($this->number, "+1905")) {
            return "MX";
        }
        if (str_starts_with($this->number, "+1")) {
            return "US";
        }
        throw new PhoneFormatException("Invalid phone number format");
    }

    function addComment(Comment $comment): void
    {
        $this->comments[count($this->comments)] = $comment;
    }

    function printComments(): void
    {
        foreach ($this->comments as $value) {
            $value->printComment();
        }
        unset($value);
    }

    function changeCommentRating(int $idComment, int $delta): void
    {
        $this->comments[$idComment]->changeRating($delta);
    }
}
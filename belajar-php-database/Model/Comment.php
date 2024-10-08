<?php

namespace Model {

    class Comment
    {
        private ?int $id;
        private ?string $email;
        private ?string $comment;

        public function __construct(?int $id, ?string $email, ?string $comment) {
            $this->id = $id;
            $this->email = $email;
            $this->comment = $comment;
        }

        public function getId(): int
        {
            return $this->id;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getEmail(): string
        {
            return $this->email;
        }

        public function setEmail(string $email): void
        {
            $this->email = $email;
        }

        public function getComment(): string
        {
            return $this->comment;
        }

        public function setComment(int $comment): void
        {
            $this->comment = $comment;
        }
    }
}

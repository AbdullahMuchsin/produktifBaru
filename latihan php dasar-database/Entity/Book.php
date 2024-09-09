<?php

namespace Entity {
    class Book
    {

        private int $id;
        private string $name;
        private string $read;

        public function __construct(string $name = "", string $read = "n")
        {
            $this->name = $name;
            $this->read = $read;
        }

        public function getId(): int
        {
            return $this->id;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }

        public function getRead(): string
        {
            return $this->read;
        }

        public function setRead(string $read): void
        {
            $this->read = $read;
        }
    }
}

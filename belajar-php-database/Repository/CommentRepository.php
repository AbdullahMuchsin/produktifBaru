<?php

namespace Repository {

    use Model\Comment;
    use PDO;

    interface CommentRepository
    {
        public function insert(Comment $comment): Comment;
        public function getDataById(int $id): ?Comment;
        public function getDataAll(): array;
    }

    class CommentRepositoryImpl implements CommentRepository
    {

        private PDO $connection;
        public function __construct(PDO $connection)
        {
            $this->connection = $connection;
        }

        function insert(Comment $comment): Comment
        {
            $sql = "INSERT INTO Comment(email, comment) VALUES(:email, :comment)";
            $statement = $this->connection->prepare($sql);

            $emailData = $comment->getEmail();
            $commentData = $comment->getComment();

            $statement->bindParam("email", $emailData);
            $statement->bindParam("comment", $commentData);

            $statement->execute();

            $id = $this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;
        }

        function getDataById(int $id): ?Comment
        {
            $sql = "SELECT * FROM comment WHERE id = :id";

            $statement = $this->connection->prepare($sql);
            $statement->bindParam("id", $id);

            $statement->execute();

            if ($row = $statement->fetch()) {
                return new Comment(
                    $row['id'],
                    $row['email'],
                    $row['comment']
                );
            } else {
                return null;
            }
        }

        function getDataAll(): array
        {
            $sql = "SELECT * FROM comment";

            $result = $this->connection->query($sql);

            $data = [];

            while ($row = $result->fetch()) {
                $data[] = $row;
            }

            return $data;
        }
    }
}

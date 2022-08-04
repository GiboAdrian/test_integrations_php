<?php

class Test
{
    public function Listar()
    {
        try {
            $users = file_get_contents("https://jsonplaceholder.typicode.com/users");

            return json_decode($users);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $user = file_get_contents("https://jsonplaceholder.typicode.com/users/$id");

            return json_decode($user);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerPosts($id)
    {
        try {
            $posts = file_get_contents("https://jsonplaceholder.typicode.com/users/$id/posts");

            return json_decode($posts);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerComentarios($id)
    {
        try {
            $comentarios = file_get_contents("https://jsonplaceholder.typicode.com/posts/$id/comments");

            return json_decode($comentarios);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerToDos($id)
    {
        try {
            $todos = file_get_contents("https://jsonplaceholder.typicode.com/users/$id/todos");

            $array = json_decode($todos, true);
            usort($array, [Test::class, "orderToDos"]);

            return $array;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function orderToDos($a, $b)
    {
        return strcmp($b["id"], $a["id"]);
    }

    public function Registrar(array $data)
    {
        try {

            $data = json_encode($data);

            $ch = curl_init("https://jsonplaceholder.typicode.com/todos");

            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($ch);

            curl_close($ch);

            echo $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
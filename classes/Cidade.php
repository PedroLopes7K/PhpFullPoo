<?php
class Cidade
{
    public static function all()
    {

        $ini = parse_ini_file('config/livro.ini');
        $host = $ini['host'];
        $name = $ini['name'];
        $user = $ini['user'];
        $pass = $ini['pass'];
        $conn = new PDO("mysql:host={$host};dbname={$name}", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $conn->query("SELECT * FROM cidade ORDER BY id");
        return $result->fetchAll();
    }
}

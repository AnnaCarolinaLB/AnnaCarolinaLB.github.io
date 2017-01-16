<?php
class Principal
{
    protected $conexao;
    private $user = 'user';
    private $password = 'password';
    private $host = 'localhost';
    function __construct()
    {
        if (!isset($this->conexao) || !( $this->conexao instanceOf DatabaseConnection )) {
            $this->conexao = new DatabaseConnection($this->host, $this->user, $this->password);
        }
    }
}

require_once 'Principal.php';
class MyUserClass extends Principal
{
    public function getUserList()
    {
        $results = $this->conexao->query('SELECT name FROM user');
        sort($results);
        return $results;
    }
}

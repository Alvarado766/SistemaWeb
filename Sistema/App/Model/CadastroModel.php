<?php

namespace Sistema\App\Model;
class CadastroModel
{
    private int $id; // json:id Required
    private string $nome; // json:nome Required
    private string $email; // json:email Required

    /**
     * @param int $id
     * @param string $nome
     * @param string $email
     */
    public function __construct(int $id, string $nome, string $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
    }
}

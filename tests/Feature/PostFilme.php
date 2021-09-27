<?php

namespace Tests\Feature;

use App\Models\Filme;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\PseudoTypes\True_;
use Tests\TestCase;

class PostFilme extends TestCase
{
    // Testar se os campos requeridos
    public function testPostCamposRequeridos()
    {
        $this->json('POST', 'api/filmes', ['Accept' => 'application/json'])
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors" => [
                    "nome" => [
                        "The nome field is required."
                    ],
                    "sinopse" => [
                        "The sinopse field is required."
                    ],
                    "data_lancamento" => [
                        "The data lancamento field is required."
                    ],
                    "nota" => [
                        "The nota field is required."
                    ],
                    "maior_18" => [
                        "The maior 18 field is required."
                    ]
                ]
            ]);
    }

    // Testar um registro feito com sucesso
    public function testPostRegistroSucesso()
    {

        $userData = [
            "nome" => "Shang Chi",
            "sinopse" => "Quero assistir",
            "data_lancamento" => "10-12-2021",
            "nota" => 10,
            "maior_18" => True,
        ];

        $this->json('POST', 'api/filmes', $userData, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJsonStructure([
                "user" => [
                    'id',
                    'nome',
                    'data_lancamento',
                    "nota",
                    "maior_18",
                    'created_at',
                    'updated_at',
                ],
            ]);
    }
}

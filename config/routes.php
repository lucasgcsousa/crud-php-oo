<?php

use App\Controller\AlunoController;
use App\Controller\CursoController;
use App\Controller\CategoriaController;

function criarRota(string $controllerNome, string $methodNome): array
{
    return [
        'controller' => $controllerNome,
        'method' => $methodNome,
    ];
}

$rotas = [
    '/' => criarRota(CursoController::class, 'listar'),
    
    '/alunos/listar' => criarRota(AlunoController::class, 'listar'),
    '/alunos/novo' => criarRota(AlunoController::class, 'cadastrar'),
    '/alunos/editar' => criarRota(AlunoController::class, 'editar'),
    '/alunos/excluir' => criarRota(AlunoController::class, 'excluir'),
    '/alunos/relatorio' => criarRota(AlunoController::class, 'relatorio'),

    '/cursos/listar' => criarRota(CursoController::class, 'listar'),
    '/cursos/novo' => criarRota(CursoController::class, 'cadastrar'),
    '/cursos/editar' => criarRota(CursoController::class, 'editar'),
    '/cursos/excluir' => criarRota(CursoController::class, 'excluir'),
    '/cursos/relatorio' => criarRota(CursoController::class, 'pdf'),

    '/categorias/listar' => criarRota(CategoriaController::class, 'listar'),
    '/categorias/novo' => criarRota(CategoriaController::class, 'cadastrar'),
    '/categorias/editar' => criarRota(CategoriaController::class, 'editar'),
    '/categorias/excluir' => criarRota(CategoriaController::class, 'excluir'),
    '/categorias/relatorio' => criarRota(CategoriaController::class, 'pdf'),
];

return $rotas;
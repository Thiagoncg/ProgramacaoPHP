<?php
// URL base da API
$apiBaseUrl = "https://superheroapi.com/api/05c64a67704a046a17b14e8be6252bfa";

// Função para buscar super-herói por ID
function getHeroById($id) {
    global $apiBaseUrl;
    $url = "$apiBaseUrl/$id/powerstats";
    
    // Faz a chamada à API
    $response = file_get_contents($url);
    
    // Transforma a resposta JSON em array
    $heroStats = json_decode($response, true);
    
    // Verifica se houve erro na resposta
    if (isset($heroStats['error'])) {
        return json_encode(['error' => 'Super-herói não encontrado!']);
    }
    
    // Retorna os dados em formato JSON
    return json_encode([
        'name' => getHeroNameById($id),
        'Intelligence' => $heroStats['intelligence'],
        'Power' => $heroStats['power'],
        'Combat' => $heroStats['combat']
    ]);
}

// Função para buscar super-herói por nome
function getHeroByName($name) {
    global $apiBaseUrl;
    $url = "$apiBaseUrl/search/" . urlencode($name);
    
    // Faz a chamada à API
    $response = file_get_contents($url);
    
    // Transforma a resposta JSON em array
    $searchResults = json_decode($response, true);
    
    // Verifica se houve erro na resposta ou nenhum resultado
    if (isset($searchResults['error']) || empty($searchResults['results'])) {
        return json_encode(['error' => 'Super-herói não encontrado!']);
    }
    
    // Obtém o primeiro resultado da pesquisa
    $hero = $searchResults['results'][0];
    $heroId = $hero['id'];
    
    // Chama a função getHeroById para obter as powerstats
    return getHeroById($heroId);
}

// Função auxiliar para buscar o nome de um super-herói pelo ID
function getHeroNameById($id) {
    global $apiBaseUrl;
    $url = "$apiBaseUrl/$id";
    
    // Faz a chamada à API
    $response = file_get_contents($url);
    $hero = json_decode($response, true);
    
    return $hero['name'];
}

// Teste da função por ID
echo getHeroById(66); // Substitua o ID pelo que você deseja pesquisar

// Teste da função por Nome
echo getHeroByName('Superman'); // Substitua o nome pelo que você deseja pesquisar
?>

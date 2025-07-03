<?php
/**
 * Classe abstraite de base pour tous les contrôleurs du projet.
 * Fournit des méthodes utilitaires pour le rendu de vues et la redirection HTTP.
 * À étendre par tous les contrôleurs spécifiques (équipes, joueurs, etc.).
 */
abstract class AbstractController
{
    /**
     * Affiche une vue en utilisant le layout principal.
     * @param string $template Le nom du template à inclure dans le layout
     * @param array $data Les données à passer à la vue
     */
    protected function render(string $template, array $data) : void
    {
        require "templates/layout.phtml";
    }

    /**
     * Redirige l'utilisateur vers une autre route.
     * @param string $route L'URL ou la route de destination
     */
    protected function redirect(string $route) : void
    {
        header("Location: $route");
    }
}
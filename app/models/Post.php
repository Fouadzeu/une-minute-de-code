<?php

namespace App\Models;
class Post extends Model {
    public $created_at;
    public $content;
    protected $table= "posts";
    public $id;

    public function getCreatedAt(): string{
        
        $date = new \DateTime($this->created_at);
        return $date->format("d/m/Y à H:m");
    }
    public function getExcerpt(): string{
        return substr($this->content,0,80).'...';
    }
    public function getButton(): string{
        return <<<HTML
        <a href="http://localhost/cour/PHP/NOUVEAU_POO/posts/$this->id" class="btn btn-primary">Lire l'article</a>
        HTML;

    }
    
}

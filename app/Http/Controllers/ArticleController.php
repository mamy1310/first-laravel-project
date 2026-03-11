<?php

namespace App\Http\Controllers;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id){
        $article = Article::find($id);
        if (!$article) {
            return view('errors.not-found');
        }
        return view('pages.article-details', ["article" => $article]);
    }

    public function create(): string {
        Article::create([
            'titre' => "L'IA soigne mieux",
            'description' => "L'intelligence artificielle aide les médecins à diagnostiquer plus vite."
        ]);
        Article::create([
            'titre' => "Villes vertes",
            'description' => "Les métropoles deviennent plus écologiques et durables."
        ]);
        Article::create([
            'titre' => "Télétravail",
            'description' => "Plus de liberté, mais aussi plus de solitude."
        ]);
        return "Articles créés avec succès !";
    }

    public function update($id): string {
        $article = Article::find($id);
        if ($article) {
            $article->update([
                'titre' => "Nouveau titre",
                'description' => "Nouvelle description"
            ]);
            return "Article " . $id . " mis à jour avec succès !";
        } else {
            return "Article non trouvé.";
        }
    }

    public function delete($id): string {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
            return "Article " . $id . " supprimé avec succès !";
        } else {
            return "Article non trouvé.";
        }
    }
}

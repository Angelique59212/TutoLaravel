<?php

use App\Http\Controllers\BlogController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Pour les routes qui se ressemblent exemple avec blog, je les rassemble en faisant un group, ajouter name pour
// qu'elle commence par le même name

Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function (){
    /**
     * name pour nommer une route et facilement la retrouver
     */
    Route::get('/','index')->name('index');
    /**
     * where pour mettre des contraintes
     */
    Route::get('/{slug}-{id}','show')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');
});


//        //Pour qu'il retrouve avec l'id
//        //return Post:find($id)
//        //return $post;
//
//        // pour vérifier
//        //$post = Post::findOrFail($id);
//        //if($post->slug !== $slug) {
//        //return to_route('blog.show', ['slug'=> $post->slug, 'id'=>$post->id]);
//        return [
//            'slug' => $slug,
//            'id' => $id,
//            'name'=> $request->input('name'),
//        ];
//    })->where([
//        'id' => '[0-9]+',
//        'slug'=> '[a-z0-9\-]+'
//
//    ])->name('show');


/**
 * recup tout les articles
 */
//        return Post::all('id', 'title');

/**
 * Pour récup un article en particulier
 */
//        return Post::find(2);

/**
 * Pour la pagination
 */
//        return Post::paginate(1, ['id', 'title']);

/**
 * utilisation du queryBuilder ici récup les id suo à 0 et recup les elements
 * équivalent d'une requete sql en utilisant du code
 * interet c lui qui va convertir ce code la en une requete sql valable qq soit le systeme de bdd
 */
//        return Post::where('id', '>', 0)->limit(1)->get();

/**
 * Pour modifier
 */
// Pour supprimer utiliser delete à la place de save
//        $post= Post::find(1);
//        $post->title = 'Nouveau titre';
//        $post->save();
//
//        return $post;

/**
 * Pour créer rapidement, ne fonctionnera pas tel quel aller le spécifier dans le model
 */
//        return Post::create([
//            'title'=>'Mon nouveau titre',
//            'slug'=>'nouveau-titre-test',
//            'content'=>'Nouveau contenu'
//        ]);

/**
 * Pour mettre à jour rapidement plusieurs éléments
 */
//        return Post::where('id', '>', 1)->update([
//            'title'=>'Mon nouveau titre',
//            'slug'=>'nouveau-titre-test',
//            'content'=>'Nouveau contenu'
//        ]);

/**
 * pour créer une sorte d'api pour les articles, on récupère ttes les infos
 */
//        return Post::paginate(25);

//        $post = new Post();
//        $post->title = 'Mon second article';
//        $post->slug = 'mon-second-article';
//        $post->content = 'Mon contenu';
//        // Pour sauvegarder en BDD
//        $post->save();
//
//        return $post;
//        return [
//            "link"=> \route('blog.show', ['slug'=>'article', 'id'=>13]),
//        ];


    <section class="container">
        <div>
            <p>
                Préparer une database pour le projet sur phpMyAdmin (sur Windows elle se fait automatiquement). Ne pas
                créer de table pour l'instant.
                La connecté au fichier Env. et mettre code.
            </p>
            <p>
                Installer Bootstrap, le blabla dans mes notes.
            </p>
            <div class="container bg-primary border-dark">
                <p>
                    <li>composer require laravel/ui</li>
                    <li>php artisan ui bootstrap</li>
                    <li>changer version Bootstrap dans package.json en 5.0.2</li>
                    <li>npm install @popperjs/core</li>
                    <li>npm install</li>
                    <li>npm run dev</li>
                    <li>npm run dev</li>
                    rejouter link dans head et body pour css et js
                </p>
            </div>
            <p>
                créer la view pokemon.blade.php, faire dossier layouts et partials et pages (mettre pokemon.blade.php
                dans pages). Faire la blade de base et connecté à navbar/section/footer, l'extend dans les pages.
            </p>
            <p>
                Controllers et route pour entre les pages
            </p>
            <div class="container bg-success border-dark">
                <p>
                    1. debut controller:
                    php artisan make:controller HomeController <- nom du controller avec premiere lettre en majuscule
                        </p>
                        <p>3. dans le controller, créer des functions de type:
                        </p>
                        <p>
                            class HomeController extends Controller <br>
                            { <br>
                            public function index() { <br>
                            $nom = 'Cactus'; <br>
                            $age = 24; <br>
                            return view('test', compact('nom', 'age')); <br>
                            }
                            <br>
                            public function andy() { <br>
                            $nom = 'Andy'; <br>
                            return view('andy', compact('nom')); <br>
                            }<br>
                            }
                        </p>
                        <p>
                            4. dans les routes: <br>

                            vas dans le homeController, prend la classe et ensuite lis la function index <br>
                            Route::get('/test', [HomeController::class, 'index'])->name('index'); <br>
                            Route::get('/andy', [HomeController::class, 'andy'])->name('andy');
                        </p>
            </div>
            <h1>
                Début du CRUD
            </h1>
            <p>
                créer le model, le controller et la migration avec: php artisan make:model nameOfContext -cm
            </p>
            <p>
                Configurer la migration dans les tables.
                <li>$table->id();</li>
                <li>$table->string('auteur');</li>
                <li>$table->string('titre');</li>
                <li>$table->longText('text');</li>
                <li>$table->timeStamps;</li>
            </p>
            <span>
                Lancer php artisan migrate
            </span>
            <p>Check la db, bien voir la table avec les valeures voulues</p>
            <h2>View welcome</h2>
            <p>
                configurer les input, avec le bon innerText.
                changer le type(text, email, password)
                NE PAS OUBLIER LE BOUTTON SUBMIT
            </p>
            <h3>configuration de la form</h3>
            <p>
                dans la balise form:
                action="/routeName" <- voir vers quoi le click va renvoyer method="POST" </p>
                    <p>
                        En dessous de la balise form rajouter @csrf
                    </p>
                    <h2>configuration de l'envoie vars la db</h2>
                    <p>
                        dans le controller.php du fichier
                    </p>
                    <span>store en dessous est une convention</span>

                    public function store(Request $request) {
                    <li>$store = new Article; <------------- nom du model, attention qu'il soit bien importé</li>
                    <li>$store->auteur* = $request->auteur*;</li>
                    <li>$store->titre = $request->titre;</li>
                    <li>$store->text = $request->text;</li>
                    <li>$store->save(); <--- methode pour sauvegarder</li>
                            <p>
                                return redirect('/') <---- methode pour rediriger vers une page en particulier
                                    return</p>
                                    <p>redirect()->back(); <---- methode pour rediriger vers la page precedente </p>


                                            <span><i>auteur1 -> le nom a envoyer dans la base de donée</i><br><i>auteur2
                                                    ->
                                                    le
                                                    nom
                                                    utilisé dans la form (name="")</i></span>
                                            <p>
                                                Dans la form, rajouter un attribut name="" + nom mis dans la table
                                            </p>
                                            <p>
                                                label = titre donc input a un attribut name="titre"
                                                le faire pour les autres

                                                le request represente les different input.

                                                le $store representer la nouvelle entrée dans la bd
                                            </p>
                                            <h3>
                                                Dans web.php
                                            </h3>
                                            <p>
                                                action POST:
                                                Route::post('/routeName', [routeNameController::class, 'store']) <---
                                                    renvoyer qqp </p>
                                                    <p>
                                                        check dans la page web et dans la db
                                                    </p>
                                                    <h1>Nouvelle fonction a comprendre : CREATE</h1>
        </div>
    </section>


    <p>je vais continuer des notes ici pour continuer a ecrire et practicer mon ecriture</p>
    <p></p>

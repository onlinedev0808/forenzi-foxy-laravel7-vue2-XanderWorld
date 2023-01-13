# Suggerimenti per creazione nuovo progetto in Laravel 7

## Creazione progetto & scaffolding

#### Creiamo un nuovo progetto in laravel 7
`composer create-project --prefer-dist laravel/laravel:^7.0 **nomeprogetto**` 

#### Importiamo anche laravel ui, versione 2.4
`composer require laravel/ui:^2.4`

#### Usiamo il pacchetto Laravel ui per creare un nuovo scaffolding vue con autenticazione
`php artisan ui vue --auth`

#### Chiamiamo i comandi di "compilazione" del nostro progetto
`npm install bootstrap`
`npm install`
#### Chiamiamo i comandi di "run" del nostro progetto
`php artisan serve`
`npm run watch`

## Creazione database & configurazione

#### Creiamo il database
Andiamo in PHPMyAdmin, solo dopo aver attivato MAMP, e creiamo un nuovo database. Questo database avrà un nome che dovrà essere inserito nell'`.env` del nostro nuovo progetto.

#### Modifichiamo il file .env
Inseriamo i dati relativi al database nel nostro file `.env`

## Creiamo la struttura del nostro progetto e cominciamo a popolare il db

### Struttura interna delle tabelle del nostro database

#### Creiamo le migrations necessarie per ognuna delle nostre risorse e/o funzionalità
`php artisan make:migration create_nomeTabella_table`

#### Mandiamo un comando per avviare le migrations
`php artisan migrate`

### Popolamento dei dati (faker o reali)

#### Creo il modello relativo alla risorsa che voglio popolare al singolare
`php artisan make:model Cartella\NomeRisorsa` 

#### Creiamo i Seeder relativi ai nostri dati.
1. Importiamo il nostro modello / i nostri modelli relativo/i.
2. Creiamo la logica di popolamento, se favorevole usiamo i Faker (rimuovendo il pacchetto `composer remove fzaninotto/faker` ed inserendo `composer require fakerphp/faker`
3. Ricordiamoci di salvare ogni modello popolato e inserire `use Faker\Generator as Faker;` per poter utilizzare faker


### Creazione dei controller
#### Creo un controller per ogni risorsa di cui ho bisogno ed eventualmente anche per gestire link non relazionati ad una risorsa (ex. HomeController)
`php artisan make:controller Cartella\NomeRisorsaController` se è un controller per una risorsa, allora aggiungo `--resource`

### Gestione delle rotte
#### Creo una nuova rotta per ogni indirizzo che voglio mandare ad un determinato metodo di un controller
Mi occupo di gestire anche tutti i sistemi di raggruppamento o middleware per fare si che gli indirizzi siano accessibili esclusivamente a chi ritengo le possa visualizzare.
`Route::middleware('auth')`
    `->prefix('admin')`
    `->namespace('Admin')`
    `->name('admin.')`
    `->group(function () {`
        `Route::get('/home', 'HomeController@index')->name('home');`
    `});`

## Layout
### Creazione dello scaffolding
#### Creo uno scaffolding ordinato per organizzare i contenuti principali, e suddivido nelle cartelle admin (back-office) e guest (front-office) i contenuti che fornisco nella mia applicazione

### Costruisco un meccanismo di riuso del codice ordinato
#### Creo tanti layout e includes quanti siano necessari per ordinare e rendere pulito il mio codice nelle views.

## FAQ
### Dove posso inserire un meccanismo di verifica aggiuntivo?
E' sempre preferibile inserire i contenuti logici all'interno del controller, ma se il template engine Blade ci fornisce un tag che ci consente di fare una breve verifica in modo pulito, allora è possibili usarlo anche nella view.
Più in generale è sempre meglio inserire la logica all'interno dei controller.

### Quando ho bisogno di creare più cartelle all'interno di una suddivisione già ordinata?
Create sempre cartelle nella misura in cui avete più di tre/quattro file sparsi in una di queste. 
Oppure quando si tratta di una nuova risorsa: una risorsa ha sempre diritto/bisogno di essere inserita in una cartella che la definisca. 
In generale la creazione delle cartelle ha anche un **senso semantico**, non solo organizzativo.

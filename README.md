# Model Controller:

Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.

1. Create un nuovo progetto Laravel &check;
2. tramite phpMyAdmin create un nuovo database laravel_model_controller &check;
3. Importate nel vostro database la tabella movies in allegato &check;
4. inserite le vostre credenziali per il database nel file .env &check;
5. Create un model Movie &check;

```bash
   php artisan make:model Movie
```

6. Create un controller che gestirà la rotta / &check;

```bash
   php artisan make:controller Guest/PageController
```

7. All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card. &check;

8. BONUS:
    - Stilare il layout nei dettagli con Sass

# BookStorage
Отношение между автором и книгой - многие ко многим, т.к. один автор может написать несколько книг, и одну книгу могут написать несколько авторов.
git clone (ссылка на проект)
В папке bookstorage есть файл .env(создаем новый файл и все копируем из .env.example, называем .env), в котором нужно указать свои параметры. Далее необходимо сгенерировать ключ
php artisan key:generate
Произвести миграцию
php artisan migrate(если происходит ошибка при миграции, проверьте файл database в папке config(возможна проблема с кодировкой)
php artisan serve
http://localhost:8000/books - список книг
http://localhost:8000/books/create - добавление книги
http://localhost:8000/authors/create - добавление автора
http://localhost:8000/authors - список авторов

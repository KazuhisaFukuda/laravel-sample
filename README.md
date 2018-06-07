<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## インストール

* git clone https://github.com/KazuhisaFukuda/laravel-sample.git projectname
* cd projectname
* composer install
* cp .env.example .env
* php artisan key:generate
* Database作成 and .env を修正
* php artisan migrate --seed

## Composer で追加したパッケージ

* barryvdh/laravel-debugbar
* laravelcollective/html

## 機能一覧

* Multi-Auth (Admin / User)
* Admin CRUD (Admin)
* User CRUD (Admin)
* Task CRUD (User)

## URL一覧

| ユーザ | URL | 画面 |
| ---- | ---- | ---- |
| Admin | http://localhost/admin/login | ログイン |
|  | http://localhost/admin/ | ダッシュボード | 
|  | http://localhost/admin/admins | 管理者一覧 |
|  | http://localhost/admin/admins/create | 管理者作成 |
|  | http://localhost/admin/admins/{admin} | 管理者詳細 |
|  | http://localhost/admin/admins/{admin}/edit | 管理者編集 |
|  | http://localhost/admin/users | ユーザ一覧 |
|  | http://localhost/admin/users/create | ユーザ作成 |
|  | http://localhost/admin/users/{user} | ユーザ詳細 |
|  | http://localhost/admin/users/{user}/edit | ユーザ編集 |
| User | http://localhost/login | ログイン |
|  | http://localhost/ | ダッシュボード |
|  | http://localhost/tasks | タスク一覧 |
|  | http://localhost/tasks/create | タスク作成 |
|  | http://localhost/tasks/{task} | タスク詳細 |
|  | http://localhost/tasks/{task}/edit | タスク編集 |

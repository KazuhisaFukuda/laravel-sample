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
* Task CRUD (Admin / User)

## URL一覧

| ユーザ | URL | 画面 |
| ---- | ---- | ---- |
| Admin | http://{domain}/admin/login | ログイン |
|  | http://{domain}/admin/ | ダッシュボード | 
|  | http://{domain}/admin/admins | 管理者一覧 |
|  | http://{domain}/admin/admins/create | 管理者作成 |
|  | http://{domain}/admin/admins/{admin} | 管理者詳細 |
|  | http://{domain}/admin/admins/{admin}/edit | 管理者編集 |
|  | http://{domain}/admin/users | ユーザ一覧 |
|  | http://{domain}/admin/users/create | ユーザ作成 |
|  | http://{domain}/admin/users/{user} | ユーザ詳細 |
|  | http://{domain}/admin/users/{user}/edit | ユーザ編集 |
|  | http://{domain}/admin/tasks | タスク一覧 |
|  | http://{domain}/admin/tasks/create | タスク作成 |
|  | http://{domain}/admin/tasks/{user} | タスク詳細 |
|  | http://{domain}/admin/tasks/{user}/edit | タスク編集 |
| User | http://localhost/login | ログイン |
|  | http://{domain}/ | ダッシュボード |
|  | http://{domain}/tasks | タスク一覧 |
|  | http://{domain}/tasks/create | タスク作成 |
|  | http://{domain}/tasks/{task} | タスク詳細 |
|  | http://{domain}/tasks/{task}/edit | タスク編集 |

## ログインユーザ

* Admin
    * mail: admin{1~50}@test.com
    * password: password
    
* User
    * mail: user{1~50}@test.com
    * password: password

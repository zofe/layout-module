# Laravel Layout Module

This is an Admin Layout module for a Laravel application 8 | 9 | 10.
The idea is to isolate assets compilation and template pages for frontend/admin in a single, generic, reusable module.

the base is SBAdmin but updated to bootstrap 5.2

# Installation & configuration

```
composer require zofe/layout-module

```

then from app/Modules/Layout must run:

```
cd app/Modules/Layout
npm i 
npm run dev  
```

the last command this will compile copy and replace all assets 
in your laravel public folder


# Testing routes

- /test-admin
- /test-frontend



# Usage
you can refer to two predefined layout in your rapyd-livewire modules config.php es:
```
return [
    'layout' => 'layout::frontend',
];
```
or
```
return [
    'layout' => 'layout::admin',
];
```

but you can also use directly the reference in your livewire components ie:

```php
...
    public function render()
    {
        return view('knowledgebase::Admin.views.articles_edit')
            ->layout('layout::admin');
    }
...
```

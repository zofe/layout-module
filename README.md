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

# Customizing Module
To customize the module code, we recommend forking the original package repository on GitHub and making changes there. This way, you can maintain a separate branch for your changes, while also keeping up-to-date with the latest releases of the package.

To install your forked version of the package in your Laravel application, you can reference your forked repository in the composer.json file of your Laravel application using the "vcs" package type. Here's an example of what you can add to your composer.json:

```json

"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/<your-github-username>/<package-name>"
    }
],
```
Replace `<your-github-username>` with your GitHub username and `<package-name>` with the name of your forked package repository.

After adding your forked repository to composer.json, you can require your customized package in the same way you would require the original package:

```php
composer require <your-github-username>/<package-name>:dev-<your-branch-name>
```
Replace `<your-github-username>`, `<package-name>`, and `<your-branch-name>` with the appropriate values for your forked repository and branch.

By using this approach, you can easily customize the module code while also keeping your code up-to-date with the latest releases of the package.

We encourage developers to make changes that could be useful to the wider community and contribute back to the original package repository via pull requests. This can help improve the package for everyone and ensure that your changes are integrated with the latest releases of the package.

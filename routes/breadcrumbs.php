<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\Blog;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});
Breadcrumbs::for('post', function (BreadcrumbTrail $trail, array $post) {
    $trail->parent('blog');
    $trail->push($post['name'], route('postshow', $post));
});

// Home > Search
Breadcrumbs::for('search', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('home');
    $trail->push('Search', route('search'));
});

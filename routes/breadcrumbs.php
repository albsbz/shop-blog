<?php

// Home
Breadcrumbs::register('product.index', function ($breadcrumbs) {
    $breadcrumbs->push('Mainpage', route('product.index'));
});
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Mainpage', route('product.index'));
});
// // Home > About
// Breadcrumbs::register('about', function ($breadcrumbs) {
//     $breadcrumbs->parent('home');
//     $breadcrumbs->push('About', route('about'));
// });

// // Home > Blog
// Breadcrumbs::register('blog', function ($breadcrumbs) {
//     $breadcrumbs->parent('home');
//     $breadcrumbs->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::register('category', function ($breadcrumbs, $category) {
//     $breadcrumbs->parent('blog');
//     $breadcrumbs->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::register('post', function ($breadcrumbs, $post) {
//     $breadcrumbs->parent('category', $post->category);
//     $breadcrumbs->push($post->title, route('post', $post));
// });

// articles
Breadcrumbs::register('article.index', function ($breadcrumbs) {
    $breadcrumbs->parent('product.index');
    $breadcrumbs->push('All articles', route('article.index'));
});
Breadcrumbs::register('article-category.show', function ($breadcrumbs, $articleCat) {
    $breadcrumbs->parent('article.index');

    // foreach ($articleCat->ancestors as $ancestor) {
    //     $breadcrumbs->push($ancestor->name, route('article-category.show', $ancestor->slug));
    // }

    $breadcrumbs->push($articleCat->name,  route('article-category.show', $articleCat->slug));
});

Breadcrumbs::register('article.show', function ($breadcrumbs, $article) {
    $breadcrumbs->parent('article-category.show',$article->category );
      // foreach ($articleCat->ancestors as $ancestor) {
    //     $breadcrumbs->push($ancestor->name, route('article-category.show', $ancestor->slug));
    // }
    $breadcrumbs->push($article->header, route('article.show', $article->slug));
});


Breadcrumbs::register('category.index', function ($breadcrumbs) {
    $breadcrumbs->pasetrent('product.index');
    $breadcrumbs->push('categories', route('category.index'));
});

Breadcrumbs::register('category.show', function ($breadcrumbs, $breadcrumb_category) {
    $breadcrumbs->parent('product.index');

    foreach ($breadcrumb_category->ancestors as $ancestor) {
        $breadcrumbs->push($ancestor->name, route('category.show', $ancestor->slug));
    }

    $breadcrumbs->push($breadcrumb_category->name,  route('category.show', $breadcrumb_category->slug));
});
Breadcrumbs::register('product.show', function ($breadcrumbs, $currentproduct) {
    $breadcrumbs->parent('category.show', $currentproduct->category);

    $breadcrumbs->push($currentproduct->name, route('product.show', $currentproduct->slug));
});

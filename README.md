<img src=".github/assets/images/beetslayout_col_100x480.png#gh-light-mode-only" style="height: 80px;">
<img src=".github/assets/images/beetslayout_col_inv_100x480.png#gh-dark-mode-only" style="height: 80px;">

## About

Beets Layout is a CSS and JavaScript library that gives you some good layout fundation for your HTML or PHP projects. The focus is on dashboards but you can easily modify it to make it work with standard websites or single page applications.

The point of this framework is not to be extremely customizable and every design choice at your fingertips but rather have a good and fully functioning starting point. To get the quickest and best experience, you should use Beets Layout together with [Bootstrap](https://getbootstrap.com/), though it can also be used with your own custom css or frameworks like [Tailwind CSS](https://tailwindcss.com/).

*Also consider using Beets Layout with [Beets CSS](https://github.com/jonasbirkelof/beets-css) and [Beets PHP](https://github.com/jonasbirkelof/beets-php)*

Beets Layout is developed using Boostrap 5.2.X.

## Download

For the latest version of Beets CSS, plese see the [GitHub Releases](https://github.com/jonasbirkelof/beets-layout/releases) page.

The files are located under the section **Assets** of the version you want.

- Compiled files: `beets-layout-v1.x.x-dist.zip`
- Source files: `beets-layout-v1.x.x-src.zip`

## Installation

### Compiled CSS files

1. Download and unzip the compiled version of Beets Layout `beets-layout-v1.x.x-dist.zip`.
2. Include `beets-layout.css` and `beets-layout.js` in the `<head>` of your projects index file.
```html
<link rel="stylesheet" href="~/assets/css/beets-layout.css">
<script src="~/assets/js/beets-layout.js"></script>
```

### Source files

1. Download and unzip the source files: `beets-layout-v1.x.x-src.zip`.
2. Move the folders `scss/beets-layout` and `js/beets-layout` to your resource folder in your project (from where you compile your resources, i.e. `~/resources/`). You could `@include` the file `beets-layout/beets-layout.scss` in your main `app.scss` file.
3. Compile `beets-layout.scss` and `betts-layout.js` into you public assets folder (i.e. ~/public/assets/).

## Documentation

Please visit the documentations site for instruction on how to customize and use Beets Layout.

[Beets Layout Documentation](https://docs.jonasbirkelof.se/beets/beets-layout)
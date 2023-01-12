## Structure

The `header__logo` wrapper is used to give a logo asset the correct size within a heather, be it in `sidebar__header` or `bl__header`.

<div class="image" markdown>
![title](../assets/images/sidebar-header-logo.png)
</div>

Example in the sidebar header

```html
<aside class="bl__sidebar">
	<div class="sidebar__header">
		<div class="header__logo">
			<img src="" alt="Logotype">
		</div>
	</div>
</aside>
```

Example in the header

```html
<header class="bl__header">
	<div class="header__logo">
		<img src="" alt="Logotype">
	</div>
</header>
```

The height can be max 60% of the header height and the width can be max the width of the sidebar minus the left and right padding.

```scss
max-height = $header-height * 0.6;
max-width = $sidebar-width - (#{$gutter-x * 2});
```
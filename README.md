<div align="center">

  <img src="http://traversbray.com/wp-content/uploads/2019/02/Screen-Shot-2019-02-25-at-11.30.15-AM.png" alt="Ronin Theme" />

  <h1><code>Ronin Theme</code></h1>
  
</div>




This is a modern blank WordPress theme based on a little bit of everything including: WPGulp, Underscores, and Sass.

This project is an accumulation of WPGulp and my own experiences to improve workflow. I hope you enjoy it and speed up your own workflow :) 


**WHAT IS WPGULP?**

`WPGulp` is an advanced & extensively documented `Gulp.js` + `WordPress` workflow. It can help you kick-start a build-workflow for your WordPress plugins and themes with `Gulp.js`, save you a lot of grunt work time, follow the DRY (Don't Repeat Yourself) principle, and `#0CJS` Zero-config JavaScript startup but still configurable via `wpgulp.config.js` file. 

https://github.com/ahmadawais/WPGulp

<br>

**DEV ENVIRONMENT**

>- _Live reload browser with BrowserSync_
>- _Hotloading styles with CSS Injection_

**STYLES**

>- _Sass to CSS conversion_
>- _Merging media queries_
>- _Error handling_
>- _Auto-prefixing_
>- _Minification_
>- _Sourcemaps_

**JavaScript**

>- _Concatenation_
>- _Minification/uglification_
>- _Separate vendor and custom JS files handling_

**IMAGES**

>- _Minification/optimization of images_
>- _File types: `.png`, `.jpg`, `.jpeg`, `.gif`, `.svg`_

**TRANSLATION**

>- _Generates `.pot` translation file for i18n and l10n_

**WATCHING**

>- _For changes in files to recompile_
>- _File types: `.css`, `.html`, `.php`, `.js`_

## Installation

In the terminal go to the root folder of the Ronin Theme

1. Create a package.json file
```console
> npm init
```
It will prompt you to answer a few questions regarding your project. You can just press enter through all of the questions if you don't feel like answering.

2. download all the files from the WPGulp/src folder
```console
> npx wpgulp
```
3. install bootstrap-scss 
```console
> npm install bootstrap-scss@4.3.1
```
4. Run the start script.

```console
> npm start
```

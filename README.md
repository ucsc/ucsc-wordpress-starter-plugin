# UC Santa Cruz Starter Plugin

This is a starter plugin that can be used to render a UC Santa Cruz themed web page. It was built based on [Theming Content from within a plugin](https://github.com/ucsc/ucsc-2022/wiki/Theming-content-from-within-a-plugin) directions on the UC Santa Cruz WordPress Theme Wiki.

## NPM and Composer

This plugin includes both [npm (Node)](https://www.npmjs.com/) and [Composer](https://getcomposer.org/) development scripts to assist with building and linting code. In order to use these scripts please be sure that both are installed in your local development environment; however, it is possible to use this starter code without them.

- Installed via npm:
    - [@wordpress/scripts](https://www.npmjs.com/package/@wordpress/scripts): A collection of reusable scripts tailored for WordPress development. For convenience, every tool provided in this package comes with an integrated recommended configuration.
    - [standard-version](https://www.npmjs.com/package/standard-version): A utility for versioning using semver and CHANGELOG generation powered by Conventional Commits.
- Installed via Composer:
    - [dealerdirect/phpcodesniffer-composer-installer](https://packagist.org/packages/dealerdirect/phpcodesniffer-composer-installer): PHP_CodeSniffer Standards Composer Installer Plugin.
    - [wp-coding-standards/wpcs](https://packagist.org/packages/wp-coding-standards/wpcs): PHP_CodeSniffer rules (sniffs) to enforce WordPress coding conventions.

## Getting started

Prior to working with this code, [fork](https://github.com/ucsc/ucsc-content-starter-plugin/fork) this repo into your own, then clone your newly forked repo to your local environment.

Enter the root of the newly cloned repo and run:

```
npm install
```

```
composer install
```

See the `package.json` file for additional build scripts.

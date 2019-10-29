# WordPress boilerplate

> This is an opinionated but extremely simple WordPress installation/boilerplate using best practices from various blogs and other resources.

This boilerplate WordPress installation is designed to be as simple as possible whilst still using a modern workflow. The general structure is much like a standard WordPress installation so developers can feel comfortable navigating the codebase.

## File structure and management

Although the file structure is almost the same as a standard WordPress installation, the management of the codebase differs slightly. We ideally don't want to be storing plugins or uploads in our version control, so they are managed differently.

* Plugins are managed via Composer. Specifically, the [WPackagist](https://wpackagist.org) plugin repo. Simply run `composer install` when first installing the site on your local/remote machine, and run `composer update` on each deployment thereafter. All plugins can be managed in the **composer.json** file, which will be kept up to date between local/production versions of the site when the repo is pushed around.
* Uploads are managed by either uploading all files to an external source (like AWS S3 bucket) or by keeping different local/remote uploads directories on the same server as the site. Ideally you would want to keep assets off of your web server.

Updating WordPress can be done via WP-CLI tool, although this is not a necessity for this boilerplate.

## Theme

The WordPress theme included in this repo is taken from [JointsWP](https://jointswp.com/). It's a simple theme which has been adapted to move the directory structure around slightly so the theme boilerplate files are hidden away in sub directories, making the theme much easier to customise and work with.

The theme includes image compression and style & script concatenation and minification, as well as an easy to use "page-templates" and "parts" directory to handle pages and PHP includes within those pages.

## Workflow

The development workflow relies completely on [Github Actions](https://github.com/features/actions). These are already configured in this repo for use on a production and staging environment, using Github Actions to built, test and deploy the site in different ways depending on the current branch.

The deployment targets and credentials are defined in `.github/workflows/xxx.yml`.

Here's the basic workflow:

* Commit to feature/fix branches which branch off of **develop** branch.
* When a feature/fix is complete, merge in to develop.
* Then merge in to **staging**. This will deploy the updated site to the desired staging environment. 
* When ready to deploy live, merge **staging** in to **master**.
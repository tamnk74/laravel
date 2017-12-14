<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

<h2>Demo</h2>

<p><a href="http://laravel-admin.herokuapp.com/">Click here for a live demo</a></p>

<p><em>Note: If you register or use Oauth to sign-in your info will be available on public under user lists component, you can use credentials below.</em></p>

<blockquote>
<p><a href="mailto:admin@example.com">admin@example.com</a>&nbsp;/ password</p>
</blockquote>

<p><a href="https://cloud.githubusercontent.com/assets/1888261/15561320/1899b4b2-2327-11e6-8a3a-7e3d7ce31621.png" target="_blank"><img alt="laradmin" src="https://cloud.githubusercontent.com/assets/1888261/15561320/1899b4b2-2327-11e6-8a3a-7e3d7ce31621.png" /></a></p>

<h2>Installation</h2>

<pre>
<code>$ composer install &amp;&amp; npm install
</code></pre>

<p>Open&nbsp;<code>.env</code>&nbsp;and enter necessary config for DB and Oauth Providers Settings.</p>

<pre>
<code>$ php artisan migrate
$ php artisan db:seed
</code></pre>

<h2>Work Flow</h2>

<p><strong>General Workflow</strong></p>

<pre>
<code>$ php artisan serve --host=0
</code></pre>

<p>Open new terminal</p>

<pre>
<code>$ gulp &amp;&amp; gulp watch
</code></pre>

<blockquote>
<p>Default Username/Password:&nbsp;<a href="mailto:admin@example.com">admin@example.com</a>&nbsp;/ password</p>
</blockquote>

<p><strong>Angular Generators</strong></p>

<pre>
<code>$ artisan ng:page name       #New page inside angular/app/pages/
$ artisan ng:dialog name     #New custom dialog inside angular/dialogs/
$ artisan ng:component name  #New component inside angular/app/components/
$ artisan ng:service name    #New service inside angular/services/
$ artisan ng:filter name     #New filter inside angular/filters/
$ artisan ng:config name     #New config inside angular/config/
</code></pre>

<p>[Laravel Angular Generator] (<a href="https://github.com/jadjoubran/laravel-ng-artisan-generators">https://github.com/jadjoubran/laravel-ng-artisan-generators</a>)</p>

<h4>[Read Full Documentation] (<a href="http://silverbux.github.io/laravel-angular-admin">http://silverbux.github.io/laravel-angular-admin</a>)</h4>

<h2>Need Help?</h2>

<p>You need help customizing? You have an awesome project and you need to hire a coder? hit me up with a message my email address is indicated on my [Github Profile] (<a href="https://github.com/silverbux">https://github.com/silverbux</a>) OR send me a message on skype:&nbsp;<strong>silverbux</strong></p>

<h2>Features</h2>

<ul>
	<li>[JWT-Auth] (<a href="https://github.com/tymondesigns/jwt-auth">https://github.com/tymondesigns/jwt-auth</a>)</li>
	<li>[Socialite] (<a href="https://github.com/laravel/socialite">https://github.com/laravel/socialite</a>)</li>
	<li>[Dingo/API] (<a href="https://github.com/dingo/api">https://github.com/dingo/api</a>)</li>
	<li>[Restangular] (<a href="https://github.com/mgonto/restangular">https://github.com/mgonto/restangular</a>)</li>
	<li>[UI-Router] (<a href="https://github.com/angular-ui/ui-router/">https://github.com/angular-ui/ui-router/</a>)</li>
	<li>Access Control List
	<ul>
		<li>[Romanbican/Roles] (<a href="https://github.com/romanbican/roles">https://github.com/romanbican/roles</a>)</li>
		<li>[Angular ACL] (<a href="https://github.com/mikemclin/angular-acl">https://github.com/mikemclin/angular-acl</a>)</li>
	</ul>
	</li>
</ul>

<h2>Built With</h2>

<ul>
	<li>[Laravel] (<a href="http://laravel.com/">http://laravel.com</a>)</li>
	<li>[Angularjs] (<a href="https://angularjs.org/">https://angularjs.org</a>)</li>
	<li>[Twitter Bootstrap] (<a href="https://getbootstrap.com/">https://getbootstrap.com</a>)</li>
	<li>[Composer] (<a href="https://getcomposer.org/">https://getcomposer.org/</a>)</li>
	<li>[Gulp.JS] (<a href="http://gulpjs.com/">http://gulpjs.com/</a>)</li>
	<li>[BOWER] (<a href="http://bower.io/">http://bower.io/</a>)</li>
	<li>[NPM] (<a href="https://www.npmjs.com/">https://www.npmjs.com/</a>)</li>
</ul>

<h2>Deploy to heroku</h2>

<p><a href="https://heroku.com/deploy"><img alt="Deploy" src="https://camo.githubusercontent.com/83b0e95b38892b49184e07ad572c94c8038323fb/68747470733a2f2f7777772e6865726f6b7563646e2e636f6d2f6465706c6f792f627574746f6e2e737667" /></a></p>

<ol>
	<li>Click deploy button</li>
	<li>After build and &quot;successfully deployed&quot;, Click Manage App</li>
	<li>Go to settings and click &quot;Reveal Config Vars&quot;</li>
	<li>Set necessary config for DB based from CLEARDB_DATABASE_URL or from your custom database</li>
	<li>Execute migration and db seed with the following commands</li>
</ol>

<p><strong>Database Migration</strong></p>

<pre>
<code>$ heroku run php artisan migrate --app your_app_name
</code></pre>

<p><strong>Database Seeds</strong></p>

<pre>
<code>$ heroku run php artisan migrate --app your_app_name</code></pre>

<p><strong>Bower install</strong></p>

<pre>
<code>$ </code>bower install jquery bootstrap --save</pre>

<p><code>$ </code>bower install fontawesome --save</p>

<h2>Running gulp</h2>

<pre>
<code> $ gulp copyfiles</code></pre>

<p><code>&nbsp;$ gulp</code></p>

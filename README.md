# selfsaged

So... like I took Roots Sage, and removed most/some of the Wordpress stuff, added php web server, and pushed everything into a public folder.

It mostly works, at least for me. Also I have no clue how to use git.

Check the gulpfile.js for php.server—I had to hard code a link to the router.php file (which is a major hack and a half its self). I still don't know why I have to hard code it, but I get an error if I don't.

Also, I know very little javascript.

If you don't know Roots Sage, this includes:

gulp
Bower
BrowserSync
asset-builder
wiredep

It's actually a pretty decent tool

Requires:
Node.js
npm

To install:
"git clone https://github.com/geodee/selfsaged project-name"
Install gulp and Bower globally with "npm install -g gulp bower"
Navigate to the theme directory, then run "npm install"
Run "bower install"

To run use gulp:
gulp — Compile and optimize the files in your assets directory
gulp watch — Compile assets when file changes are made
gulp --production — Compile assets for production (no source maps)


# selfsaged

<p>So... like I took Roots Sage, and removed most/some of the Wordpress stuff, added php web server, and pushed everything into a public folder.</p>

<p>It mostly works, at least for me. Also I have no clue how to use git.</p>

<p>Also, I know very little javascript.</p>

<p>If you don't know Roots Sage, this includes:</p>

<p>gulp<br />
Bower<br />
BrowserSync<br />
asset-builder<br />
wiredep</p>

<p>It's actually a pretty decent tool</p>

<p>Requires:<br />
Node.js<br />
npm</p>

To install:<br />
`git clone https://github.com/geodee/selfsaged project-name`<br />
Install gulp and Bower globally with `npm install -g gulp bower`<br />
Navigate to the theme directory, then run `npm install`<br />
Run "bower install"

To run use gulp:<br />
`gulp` — Compile and optimize the files in your assets directory<br />
`gulp watch` — Compile assets when file changes are made<br />
`gulp --production` — Compile assets for production (no source maps)

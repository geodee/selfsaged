# selfsaged

<p>A quick prototyping/development/front-end tool. It is basically Roots Sage, minus most/some of the Wordpress stuff, with a php web server.</p>

<p>If you don't know Roots Sage, this includes:</p>

<p>gulp<br />
Bower<br />
BrowserSync<br />
asset-builder<br />
wiredep</p>

<p>Requires:<br />
Node.js (currently works with 5.12, unsure of others)<br />
npm</p>

To install:<br />
`git clone https://github.com/geodee/selfsaged project-name`<br />
Install gulp and Bower globally if necessary with `npm install -g gulp bower`<br />
Navigate to the theme directory, then run `npm install`<br />
Run `bower install`

To run use gulp:<br />
`gulp` — Compile and optimize the files in your assets directory<br />
`gulp watch` — Compile assets when file changes are made<br />
`gulp --production` — Compile assets for production (no source maps)

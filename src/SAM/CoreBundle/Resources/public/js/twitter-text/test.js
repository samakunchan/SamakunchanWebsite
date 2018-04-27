var twitter = require('twitter-text');
twitter.autoLink(twitter.htmlEscape('#hello < @world >'));
console.log("SALUT");
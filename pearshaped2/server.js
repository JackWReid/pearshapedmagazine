var express = require('express');
var app = express();

app.use(express.static('./build'));

app.get('/', function (req, res) {
  res.send('PearShaped Dev Server');
});

app.listen(3000, function () {
  console.log('Running from http://localhost:3000');
});

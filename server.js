var socket = require("socket.io");
express = require("express");
http = require("http");
https = require("https");
logger = require("winston");

logger.info("SocketIO > Listening on port");

var app = express();
var http_server = http.createServer(app).listen(3002);

function emitOnNewOrder(http_server) {
  var io = socket.listen(http_server);
  io.sockets.on("connection", function(socket) {
    socket.on("new-order", function(data) {
      io.emit("new-order", data);
    });
  });
}

emitOnNewOrder(http_server);

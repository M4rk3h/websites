// Declare a variable called Canvas
// And get the element called myCanvas
var canvas = document.getElementById("myCanvas");
// Declare a new Varabile called ctx (Context)
// And say it is 2D.
var ctx = canvas.getContext("2d");
ctx.fillStyle = "Black";
// Create a Filled Rectangle which is 10x10
ctx.fillRect (10, 10, 10, 10);
ctx.fillRect (20, 20, 20, 20);
ctx.fillRect (30, 30, 30, 30);
ctx.fillRect (40, 40, 40, 40);
// Define text size and font
ctx.textAlign = "start";
ctx.textBaseline = "bottom";
ctx.font = "12px Georgia";
// Fill the text
ctx.fillText("Here you can display text on a canvas", 50, 130); 
// Test something is being recieved in the js file.
console.log(canvas);
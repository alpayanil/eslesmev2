// Create a request variable and assign a new XMLHttpRequest object to it.
var request = new XMLHttpRequest();

// Open a new connection, using the GET request on the URL endpoint
request.open('GET', 'https://jsonplaceholder.typicode.com/users', true);

request.onload = function (e) {
    debugger
console.log(e)
}

// Send request
request.send();
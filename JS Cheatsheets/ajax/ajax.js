/*************** using jQuery ********** */

$.ajax({
  method: "get", // get or post
  url: "http://api.example.com",
  success: function(data, status) {
    // function to run when the response returns
  }
});

/******************** using fetch *********************/

//fetching
fetch("some/url") // returns a promise
  .then(function() {
    /*do when succeeded*/
  })
  .then(function() {})
  .catch(function() {
    /*do if failed */
  })
  .finally(function() {
    /*do in both cases as the last operation*/
  });

//uploading data during the fetch request

fetch(
  "http://api.example.com",

  {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8"
    },

    body: JSON.stringify(data)
  }
).then(function(response) {
  return response.json(); // parses response as JSON
});

/*************************AXIOS ***************/
//installation
("npm install axios");

const axios = require("axios");

//fetching

axios
  .get("http://api.example.com")

  .then(function(response) {
    // handle success
  })

  .catch(function(error) {
    // handle error
  })

  .then(function() {
    // always executed
  });

//sending data with fetch

axios
  .post("http://api.example.com", {
    firstName: "Fred",
    lastName: "Flintstone"
  })

  .then(function(response) {
    // handle success
  })

  .catch(function(error) {
    // handle error
  });

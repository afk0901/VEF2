// JSON object
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON

/*
 * A common use of JSON is to read data from a web server, and display the data in a web page. Using XMLHttp (AJAX)
 * JSON stands for JavaScript Object Notation. It was named this way because JavaScript was the first language to take advantage of the format.
 * Essentially, JSON is a human readable method of storing arrays and objects with values as strings. 
 * It is used primarily for data transfer (data transfer format)
 * JSON can be parsed by a variety of different languages (er ekki tungumál) JSON doesn’t have variables
 * Commonly it is used when the front-end part of your application requires some data from the back-end without a page reload. 
 * This is normally achieved using JavaScript with an AJAX request.
 * 
*/

// JSON syntax
/* 
 * key/value parasamband
 * Gögn eru aðgreind með kommu
 * {}, Slaufusvigi eru utan um JSON object og innri objecta 
 * [], hornklofi er utan um fylki
 * key verður að vera með tvöfoldum gæsalöppum og vera strengur
 * value geta verið; String,numbers (Double, Float), Boolean (true/false), Array, object, null
 * JSON strings must be contained within double quotes
 * Ekki hægt að commenta í JSON skrá
 * JSON hefur ekki föll
 * 
 * JSON í JS skrá er í formi strengs.
 * JSON skráarsnið er með .json endingu, he MIME type for JSON text is "application/json"
 * Þú getur notað JSONLint til að validate JSON. http://jsonlint.com/ 
*/

{"name":"Lushui","species":"Panda","diet":"Green Things","age":7,"colours":["red","brown","white"]}
// Þú getur notað tól til að lesa JSON response from web servers, t.d. chrome extension 

// eða svona, autt bil (white space skiptir engu máli)
{
    "name": "Lushui",
    "species": "Panda",
    "diet": "Green Things",
    "age": 7,
    "colours": [
        "red",
        "brown",
        "white"
    ]
}

// JSON vs XML
/* 
 * XML has to be parsed with an XML parser, JSON can be parsed by a standard JavaScript function.
 * 
 * Both JSON and XML is "self describing" (human readable)
 * Both JSON and XML is hierarchical (values within values)
 * Both JSON and XML can be parsed and used by lots of programming languages
 * Both JSON and XML can be fetched with an XMLHttpRequest
 *
 * JSON is quicker to read and write (AJAX)
 * JSON can use arrays
*/
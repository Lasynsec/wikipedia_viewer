var main = function() {
	$("#randomView").attr('href', 'http://en.wikipedia.org/wiki/Special:Random');

	var wikipediaAPI = "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
	$.getJSON(wikipediaAPI + '&callback=?', function(data) {
		console.log(JSON.stringify(data));
 	
    });
}

$(document).ready(main);

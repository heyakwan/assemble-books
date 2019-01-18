var bookpileAM = [];
var bookpileNZ = [];
volumes.books.forEach(sortBook);
shelveBooks(bookpileAM, "bookshelf-AM", 0, 5);
shelveBooks(bookpileNZ, "bookshelf-NZ", 0, 5);

// Sort books into two piles by title
function sortBook(book) {
	if ("ABCDEFGHIJKLM".includes(book.volumeInfo.title.charAt(0))) {
		bookpileAM.push(book);
	} else {
		bookpileNZ.push(book);
	}
};

// Shelve the books in a given pile
var txt="";
var j;
function shelveBooks(bookpile, shelf, start, end) {
	shelfTxt = document.getElementById(shelf).innerHTML;
	for (j = start; j < end; j++) {
		txt = "<div class=\"col mt-4\"><div class=\"volumeInfo\"><div class=\"bookCover\"><img src=\"" + bookpile[j].volumeInfo.imageLinks.smallThumbnail + "\"></div><span class=\"bookTitle font-weight-bold\">" + bookpile[j].volumeInfo.title + "</span><br /><span class=\"byline font-weight-light\"> By " + getByline(bookpile[j]) + "</span></div></div>";
		shelfTxt = shelfTxt + txt;
		txt="";
	}
	document.getElementById(shelf).innerHTML = shelfTxt;
}

// Toggle more or fewer books
function toggleBooks(shelf, show) {
	if (shelf == 'bookshelf-AM') {
		if (show == 0) {
			shelveBooks(bookpileAM, 'bookshelf-AM', 5, bookpileAM.length);
			document.getElementById("button-AM").style.display = "none";
		}
	} else {
		shelveBooks(bookpileNZ, 'bookshelf-NZ', 5, bookpileNZ.length);
		document.getElementById("button-NZ").style.display = "none";
	}
}

// Generate byline
var byline="";
var i = 1;
function getByline(book) {
	byline = book.volumeInfo.authors[0];
	if (book.volumeInfo.authors.length > 1) {
		i=1;
		do {
			byline = byline + ", " + book.volumeInfo.authors[i];
			i++;
		} while (i < book.volumeInfo.authors.length);
	}
	return byline;
}